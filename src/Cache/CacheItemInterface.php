<?php

namespace Sogener\Phpdocker\Cache;

class CacheItemInterface implements \Psr\Cache\CacheItemInterface
{
    private $item;

    public function __construct($item)
    {
        $this->item = $item;
    }

    /**
     * @inheritDoc
     */
    public function getKey()
    {
        return key($this->item);
    }

    /**
     * @inheritDoc
     */
    public function get()
    {
        return current($this->item);
    }

    /**
     * @inheritDoc
     */
    public function isHit()
    {
        // TODO: Implement isHit() method.
    }

    /**
     * @inheritDoc
     */
    public function set($value)
    {
        // TODO: Implement set() method.
    }

    /**
     * @inheritDoc
     */
    public function expiresAt($expiration)
    {
        // TODO: Implement expiresAt() method.
    }

    /**
     * @inheritDoc
     */
    public function expiresAfter($time)
    {
        // TODO: Implement expiresAfter() method.
    }

}
