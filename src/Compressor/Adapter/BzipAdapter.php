<?php

namespace Compressor\Adapter;

/**
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class BzipAdapter implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public function compress($string, $level = 9)
    {
        return bzcompress($string, $level);
    }

    /**
     * {@inheritDoc}
     */
    public function decompress($string)
    {
        return bzdecompress($string);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'bzip';
    }
}
