<?php

namespace Tests\FileSystem;

use PHPUnit\Framework\TestCase;

/**
 * FileNotFoundExceptionTest Test Case
 *
 * Testing \Exceptions\FileSystem\FileNotFoundException
 *
 * @package Tests\FileSystem
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class FileNotFoundExceptionTest extends TestCase
{
    /**
     * @return void
     */
    public function testExpectFileNotFoundException(): void
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\FileSystem\FileNotFoundException::class);

        // Let's get the exception to throw
        $file = __DIR__ . 'directory/image_0.png';

        if (! file_exists($file)) {
            throw new \Exceptions\FileSystem\FileNotFoundException();
        }
    }

    //-------------------------------------------------------------------------
}
