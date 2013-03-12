<?php

namespace Compressor;

use Compressor\Adapter\AdapterInterface;
use Compressor\Adapter;
use Compressor\Exception;

/**
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class Compressor
{
    /**
     * @var array
     */
    private $adapters = array();

    /**
     * @var AdapterInterface
     */
    private $usedAdapter;

    public function __construct()
    {
        $this->initialize();
    }

    public function initialize()
    {
        $this->setAdapters(array(
            new Adapter\GzipAdapter(),
            new Adapter\LzfAdapter(),
            new Adapter\BzipAdapter(),
            new Adapter\ZlibAdapter(),
        ));
    }

    public function using($name)
    {
        if (!isset($this->adapters[$name])) {
            throw new Exception\AdapterNotFoundException($name);
        }

        $this->usedAdapter = $this->adapters[$name];

        return $this;
    }

    public function setAdapters(array $adapters)
    {
        foreach ($adapters as $adapter) {
            $this->addAdapter($adapter);
        }
    }

    public function addAdapter(AdapterInterface $adapter)
    {
        $this->adapters[$adapter->getName()] = $adapter;
    }

    public function compress($string, $level)
    {
        return $this->usedAdapter->compress($string, $level);
    }

    public function decompress($string)
    {
        return $this->usedAdapter->decompress($string);
    }
}
