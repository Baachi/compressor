<?php

namespace Compressor\Adapter;

/**
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class GzipAdapter implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public function compress($string, $level = 9)
    {
        return gzcompress($string, $level);
    }

    /**
     * {@inheritDoc}
     */
    public function decompress($string)
    {
        return gzuncompress($string);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'gzip';
    }
}
