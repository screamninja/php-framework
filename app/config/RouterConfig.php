<?php

namespace PFW\Config;

/**
 * Class RouterConfig
 * @package PFW\Config
 */
class RouterConfig
{
    /**
     * @return array with routes
     */
    public static function get(): array
    {
        return [
            '' => [
                'controller' => 'main',
                'action' => 'index',
            ],

            'account/login' => [
                'controller' => 'account',
                'action' => 'login',
            ],

            'account/logout' => [
                'controller' => 'account',
                'action' => 'logout',
            ],

            'account/register' => [
                'controller' => 'account',
                'action' => 'register',
            ],

            'api' => [
                'controller' => 'api',
                'action' => 'get',
            ],

            'api/about' => [
                'controller' => 'api',
                'action' => 'about',
            ],

            'api/token' => [
                'controller' => 'api',
                'action' => 'token',
            ],

            'ajax/login' => [
                'controller' => 'ajax',
                'action' => 'login',
            ],

            'ajax/register' => [
                'controller' => 'ajax',
                'action' => 'register',
            ],

            'ajax/token' => [
                'controller' => 'ajax',
                'action' => 'token',
            ],

            'ajax/switch' => [
                'controller' => 'ajax',
                'action' => 'switch',
            ],
        ];
    }
}
