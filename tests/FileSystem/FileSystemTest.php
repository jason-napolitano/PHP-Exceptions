<?php use PHPUnit\Framework\TestCase;

/**
 * FileSystemTest Test Case
 *
 * This test case is used to ensure that the exceptions within the
 * Exceptions\FileSystem\* namespace are properly thrown under the
 * correct set of conditions
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.1
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class FileSystemTest extends TestCase
{
    /**
     * Here, we are expecting the \Exceptions\FileSystem\FileNotFoundException
     * to be thrown
     *
     * @return void|mixed
     */
    public function testExpectFileNotFoundException()
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\FileSystem\FileNotFoundException::class);

        // Let's get the exception to throw
        $file = __DIR__ . 'assets/image_0.png';

        if ( ! file_exists($file)) {
            throw new \Exceptions\FileSystem\FileNotFoundException();
        }
    }

    //-------------------------------------------------------------------------

    /**
     * Here, we are expecting the \Exceptions\FileSystem\DirectoryAlreadyExistsException
     * to be thrown
     *
     * @return void|mixed
     */
    public function testExpectDirectoryAlreadyExistsException()
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\FileSystem\DirectoryAlreadyExistsException::class);

        // Let's get the exception to throw
        $dir = __DIR__ . '/assets';

        if (  file_exists($dir)) {
            throw new \Exceptions\FileSystem\DirectoryAlreadyExistsException();
        }

    }

    //-------------------------------------------------------------------------

    //-------------------------------------------------------------------------

    /**
     * Here, we are expecting the \Exceptions\FileSystem\DirectoryNotFoundException
     * to be thrown
     *
     * @return void|mixed
     */
    public function testExpectDirectoryNotFoundException()
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\FileSystem\DirectoryNotFoundException::class);

        // Let's get the exception to throw
        $dir = __DIR__ . '/non-existent/directory';

        if ( ! file_exists($dir)) {
            throw new \Exceptions\FileSystem\DirectoryNotFoundException();
        }
    }

    //-------------------------------------------------------------------------
}
