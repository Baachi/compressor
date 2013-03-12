<?php

namespace Compressor\Adapter;

/**
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class LzfAdapter implements AdapterInterface
{
    /**
     * {@inheritDoc}
     */
    public function compress($string, $level = 9)
    {
        return lzf_compress($string);
    }

    /**
     * {@inheritDoc}
     */
    public function decompress($string)
    {
        return lzf_decompress($string);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'lzf';
    }

}
