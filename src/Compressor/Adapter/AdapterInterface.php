<?php

namespace Compressor\Adapter;

/**
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
interface AdapterInterface
{
    /**
     * Compress the given string
     *
     * @param string  $string
     * @param integer $level
     *
     * @return string
     */
    public function compress($string, $level = 9);

    /**
     * Decompress the given string
     *
     * @param string $string
     *
     * @return string
     */
    public function decompress($string);

    /**
     * Return a unique name
     *
     * @return string
     */
    public function getName();
}
