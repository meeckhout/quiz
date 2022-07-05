<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class Data
{
    // This will provide the data you need
    // No need to change any logic here - only data (to add or update words)
    public static function words(): array
    {
        return [
            'pain' => 'bread',
            'nain de jardin' => 'garden gnome',
            'ouef' => 'egg',
            'bouisson' => 'bush',
            'chapeau' => 'hat',
            'porte' => 'door',
            'musique' => 'music',
            'biscuit' => 'cookie',
        ];
    }
}