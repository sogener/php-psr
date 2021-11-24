<?php

namespace Sogener\Phpdocker\Cache;

use Cache\Adapter\Common\AbstractCachePool;
use Cache\Adapter\Common\PhpCacheItem;
use Cache\Adapter\Memcached\MemcachedCachePool;
use Psr\Cache\CacheException;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException;

class CacheItemPool extends AbstractCachePool
{
    private $client;
    private $pool;

    public function __construct()
    {
        $this->client = Connection::make();
        $this->pool = new MemcachedCachePool($this->client);
    }

    /**
     * @inheritDoc
     */
    public function getItem($key)
    {
        return $this->hasItem($key);
    }

    /**
     * @inheritDoc
     */
    public function getItems(array $keys = array())
    {
        // TODO: Implement getItems() method.
    }

    /**
     * @inheritDoc
     */
    public function hasItem($key)
    {
        if ($cachedValue = $this->pool->getDirectValue($key)) {
            var_dump($cachedValue);
        } else {
//            todo: Throw exception
            echo 'Cache was not found';
        }


    }

    /**
     * @inheritDoc
     */
    public function clear()
    {
        // TODO: Implement clear() method.
    }

    /**
     * @inheritDoc
     */
    public function deleteItem($key)
    {
        // TODO: Implement deleteItem() method.
    }

    /**
     * @inheritDoc
     */
    public function deleteItems(array $keys)
    {
        // TODO: Implement deleteItems() method.
    }

    /**
     * @inheritDoc
     */
    public function save(CacheItemInterface $item)
    {
        if (!$item->getKey() || !$item->get()) {
//            todo: CacheException
        }

        $itemId = $item->getKey();
        $itemValue = $item->get();

        $this->pool->setDirectValue($itemId, $itemValue);
    }

    /**
     * @inheritDoc
     */
//    public function saveDeferred(CacheItemInterface $item)
//    {
//        // TODO: Implement saveDeferred() method.
//    }

    /**
     * @inheritDoc
     */
    public function commit()
    {
        // TODO: Implement commit() method.
    }

    /**
     * @inheritDoc
     */
    protected function storeItemInCache(PhpCacheItem $item, $ttl)
    {
        // TODO: Implement storeItemInCache() method.
    }

    /**
     * @inheritDoc
     */
    protected function fetchObjectFromCache($key)
    {
        // TODO: Implement fetchObjectFromCache() method.
    }

    /**
     * @inheritDoc
     */
    protected function clearAllObjectsFromCache()
    {
        // TODO: Implement clearAllObjectsFromCache() method.
    }

    /**
     * @inheritDoc
     */
    protected function clearOneObjectFromCache($key)
    {
        // TODO: Implement clearOneObjectFromCache() method.
    }

    /**
     * @inheritDoc
     */
    protected function getList($name)
    {
        // TODO: Implement getList() method.
    }

    /**
     * @inheritDoc
     */
    protected function removeList($name)
    {
        // TODO: Implement removeList() method.
    }

    /**
     * @inheritDoc
     */
    protected function appendListItem($name, $key)
    {
        // TODO: Implement appendListItem() method.
    }

    /**
     * @inheritDoc
     */
    protected function removeListItem($name, $key)
    {
        // TODO: Implement removeListItem() method.
    }
}
