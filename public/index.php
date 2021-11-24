<?php

use Cache\Adapter\Memcached\MemcachedCachePool;
use Sogener\Phpdocker\Psr\Three;
use Sogener\Phpdocker\Cache\CacheItemPool;
use Sogener\Phpdocker\Cache\CacheItemInterface;

include '../vendor/autoload.php';
include '../lib/config/config.php';

/* psr-3 */
// Todo: Проблема с .env, разобраться позже

// $ob = new Three();
// $ob->debug('тест123');

/* psr-6 */

// Item to save in cache
$item = ['key11' => 'value11'];

$oCacheItem = new CacheItemInterface($item);
$oCacheItem->get();


$oPool = new CacheItemPool();

// default save
//$oPool->save($oCacheItem);

// deferred saving
$oPool->saveDeferred($oCacheItem);
$oPool->commit();
$oPool->getItem(key($item));
