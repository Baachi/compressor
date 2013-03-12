<?php

namespace Compressor\Test\Adapter;

use Compressor\Adapter\BzipAdapter;

/**
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class BzipAdapterTest extends \PHPUnit_Framework_TestCase
{
    private $adapter;

    protected function setUp()
    {
        if (!function_exists('bzcompress')) {
            $this->markTestAsSkipped('Bzip extension is required for this test');
        }

        $this->adapter = new BzipAdapter();
    }

    public function testCompress()
    {
        $this->assertNotNull($this->adapter->compress('foobar'));
    }
}
