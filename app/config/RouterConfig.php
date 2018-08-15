<?php

namespace PFW\Config;

class RouterConfig
{
    /**
     * @return array
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

        ];
    }
}
