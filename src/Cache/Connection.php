<?php

namespace Sogener\Phpdocker\Cache;

use Memcached;

class Connection
{
    public static function make()
    {
        $client = new Memcached();
        $client->addServer('memcached', 11211);
        return $client;
    }
}
