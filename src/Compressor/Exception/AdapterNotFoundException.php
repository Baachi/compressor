<?php

namespace Compressor\Exception;

/**
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class AdapterNotFoundException extends \Exception
{
    public function __construct($name, $code = 0, Exception $previous = null)
    {
        parent::__construct(sprintf('The adapter %s does not exist', $name), $code, $previous);
    }
}
