<?php

namespace Compressor\Adapter;

/**
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class ZlibAdapter implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public function compress($string, $level = 9)
    {
        return zlib_encode($string, $level);
    }

    /**
     * {@inheritDoc}
     */
    public function decompress($string)
    {
        return zlib_decode($string);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'zlib';
    }
}
