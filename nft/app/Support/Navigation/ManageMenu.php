<?php

namespace App\Support\Navigation;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use stdClass;

/**
 * Class ManageMenu
 * @package App\Support\Navigation
 */
class ManageMenu
{
    public const TYPE_ITEM = 'item';
    public const TYPE_HEADER = 'header';
    public const TYPE_DROPDOWN = 'dropdown';

    /**
     * ManageMenu constructor.
     * @param Navigation $navigation
     * @param Request $request
     */
    public function __construct(protected Navigation $navigation, protected Request $request)
    {
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return Collection::make(require app_path('manage_navigation.php'))
            ->map(fn(array $i) => $this->formatMenuItem($i))
            ->filter(fn(stdClass $i): bool => $this->menuItemAvailable($i));
    }

    /**
     * @param array $item
     * @return stdClass
     * @throws Exception
     */
    protected function formatMenuItem(array $item): stdClass
    {
        $i = new stdClass;
        $i->name = $item['name'];
        $i->type = $item['type'];
        $i->gate = $item['gate'] ?? null;

        switch($item['type']) {
            case self::TYPE_HEADER:
                break;
            case self::TYPE_ITEM:
                $i = $this->itemFormat($item, $i);
                break;
            case self::TYPE_DROPDOWN:
                $i = $this->dropdownFormat($item, $i);
                break;
            default:
                throw new Exception('Undefined menu item type.');
        }

        return $i;
    }

    /**
     * @param array $original
     * @param stdClass $item
     * @return stdClass
     */
    protected function itemFormat(array $original, stdClass $item): stdClass
    {
        $original['aliases'] = array_map(fn(string $i): string => $this->navigation->getFullRouteName($i), $original['aliases'] ?? []);

        $route = (array) $original['route'];
        $route[0] = $this->navigation->getFullRouteName($route[0]);

        $item->icon = $original['icon'] ?? null;
        $item->active = $this->request->routeIs($route[0], ...$original['aliases']);
        $item->route = route(...$route);

        return $item;
    }

    /**
     * @param array $original
     * @param stdClass $item
     * @return stdClass
     */
    protected function dropdownFormat(array $original, stdClass $item): stdClass
    {
        $item->items = Collection::make($original['items'])->map(function(array $i) {
            $i['type'] = self::TYPE_ITEM;

            return $this->formatMenuItem($i);
        });
        $item->active = $item->items->contains('active', true);
        $item->icon = $original['icon'];

        return $item;
    }

    /**
     * @param stdClass $item
     * @return bool
     */
    protected function menuItemAvailable(stdClass $item): bool
    {
        return !$item->gate || $this->request->user()->can($item->gate);
    }
}
