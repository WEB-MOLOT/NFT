<?php

namespace App\Support\DataTable;

use App\Support\Navigation\Navigation;
use Illuminate\Support\Facades\App;

/**
 * Class Render
 * @package App\Support\DataTable
 */
class Render
{
    protected Navigation $navigation;

    /**
     * Render constructor.
     */
    public function __construct()
    {
        $this->navigation = App::make(Navigation::class);
    }

    /**
     * @param $route
     * @param array $columns
     * @param bool $withActions
     * @param string|null $orderBy
     * @return string
     */
    public function render($route, array $columns, bool $withActions = true, ?string $orderBy = null): string
    {
        $route = (array) $route;
        $route[0] = $this->navigation->getFullRouteName($route[0]);

        return sprintf(
            'data-datatable="%s" data-columns="%s" data-order-by="%s"',
            route(...$route), e($this->columns($columns, $withActions)), e($this->orderBy($columns, $orderBy))
        );
    }

    /**
     * @param array $columns
     * @param bool $withActions
     * @return string
     */
    public function columns(array $columns, bool $withActions = true): string
    {
        $columns = array_map(fn(string $column) => [
            'data' => $column
        ], $columns);

        if($withActions) {
            $columns[] = [
                'data' => 'actions'
            ];
        }

        return json_encode($columns);
    }

    /**
     * @param array $columns
     * @param string|null $orderBy
     * @return string
     */
    public function orderBy(array $columns, ?string $orderBy = null): string
    {
        $orderBy ??= 'created_at';
        $columnKey = $orderBy !== null && ($search = array_search($orderBy, $columns)) !== false ? $search : 0;

        return json_encode([[$columnKey !== false ? $columnKey : 0, 'desc']]);
    }
}
