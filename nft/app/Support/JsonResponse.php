<?php

namespace App\Support;

use App\Support\Navigation\Navigation;
use Illuminate\Http\JsonResponse as BaseResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\MessageBag;
use Throwable;

/**
 * Class JsonResponse
 * @package App\Support
 */
class JsonResponse extends BaseResponse
{
    const REDIRECT_DELAY = 1500;

    protected Navigation $navigation;

    /**
     * JsonResponse constructor.
     * @param null $data
     * @param int $status
     * @param array $headers
     * @param int $options
     * @param false $json
     */
    public function __construct($data = null, $status = 200, $headers = [], $options = 0, $json = false)
    {
        $this->navigation = App::make(Navigation::class);
        parent::__construct($data, $status, $headers, $options, $json);
    }

    /**
     * @param string|null $message
     * @param int $status
     * @return static
     */
    public static function success(string $message = null, int $status = self::HTTP_OK): static
    {
        $response = new static();
        $response->setStatusCode($status);
        $response->addData('message', $message);

        return $response;
    }

    /**
     * @param string|null $message
     * @param MessageBag|null $bag
     * @param int $status
     * @return static
     */
    public static function error(string $message = null, ?MessageBag $bag = null, int $status = self::HTTP_BAD_REQUEST): static
    {
        $response = self::success($message, $status);
        $bag && $response->addData('errors', $bag->toArray());

        return $response;
    }

    /**
     * @param string $name
     * @param array $data
     * @return static
     * @throws Throwable
     */
    public static function view(string $name, array $data = []): static
    {
        return static::success()->addData('view', view($name, $data)->render());
    }

    /**
     * @param Collection $collection
     * @param int $total
     * @return static
     */
    public static function dataTable(Collection $collection, int $total): static
    {
        $response = new self;

        $data = [
            'recordsTotal' => $total,
            'recordsFiltered' => $total,
            'aaData' => $collection->toArray()
        ];

        $response->setData($data);

        return $response;

    }

    /**
     * @param string $key
     * @param $value
     * @return $this
     */
    public function addData(string $key, $value): self
    {
        $data = $this->getData(true);
        $data[$key] = $value;
        $this->setData($data);

        return $this;
    }

    /**
     * @param string $route
     * @param int $delay
     * @return $this
     */
    public function redirectTo(string $route, int $delay = self::REDIRECT_DELAY): self
    {
        return $this->addData('redirect', compact('route', 'delay'));
    }

    /**
     * @param string $route
     * @param mixed $parameters
     * @param int $delay
     * @return $this
     */
    public function redirectToRoute(string $route, mixed $parameters = [], int $delay = self::REDIRECT_DELAY): self
    {
        return $this->redirectTo(route($this->navigation->getFullRouteName($route), $parameters), $delay);
    }
}
