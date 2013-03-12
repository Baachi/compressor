# Compressor

You want to compress your files or strings? Then use this library!

__Which methods are supported?__

 * gzip
 * bzip
 * lzf
 * zlib

 ## Usage ##

 ```php
 <?php

 $compressor = new Compressor\Compressor();
 $string = $compressor->compress('foorbar', 9);
 ```