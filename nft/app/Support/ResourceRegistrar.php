<?php

namespace App\Support;

use Illuminate\Routing\ResourceRegistrar as BaseRegistrar;
use Illuminate\Routing\Route;

/**
 * Class Router
 * @package App\Support
 */
class ResourceRegistrar extends BaseRegistrar
{
    /** @var array */
    protected $resourceDefaults = [
        'index', 'data', 'create', 'store', 'show', 'edit', 'update', 'destroy'
    ];

    /** @var array */
    protected static $verbs = [
        'create' => 'create',
        'edit' => 'edit',
        'data' => 'data'
    ];

    /**
     * @param string $name
     * @param string $base
     * @param string $controller
     * @param array $options
     * @return Route
     */
    protected function addResourceData(string $name, string $base, string $controller, array $options): Route
    {
        $uri = $this->getResourceUri($name).'/'.static::$verbs['data'];

        $action = $this->getResourceAction($name, $controller, 'data', $options);

        return $this->router->post($uri, $action);
    }
}
