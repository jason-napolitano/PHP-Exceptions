<?php

namespace Tests\FileSystem;

use PHPUnit\Framework\TestCase;

/**
 * NotADirectoryExceptionTest Test Case
 *
 * Testing \Exceptions\FileSystem\NotADirectoryException
 *
 * @package Tests\FileSystem
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class NotADirectoryExceptionTest extends TestCase
{
    /**
     * Here, we are expecting the \Exceptions\FileSystem\NotADirectoryException
     * to be thrown
     *
     * @return void|mixed
     */
    public function testExpectNotADirectoryException()
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\FileSystem\NotADirectoryException::class);

        // Let's get the exception to throw
        $file = __DIR__ . 'directory/file.txt';

        if (! is_dir($file)) {
            throw new \Exceptions\FileSystem\NotADirectoryException();
        }
    }

    //-------------------------------------------------------------------------
}
