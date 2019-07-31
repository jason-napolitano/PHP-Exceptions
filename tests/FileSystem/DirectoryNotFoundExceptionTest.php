<?php namespace Tests\FileSystem {

    use PHPUnit\Framework\TestCase;

    /**
     * DirectoryNotFoundExceptionTest Test Case
     *
     * Testing \Exceptions\FileSystem\DirectoryNotFoundException
     *
     * @package Tests\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.3
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class DirectoryNotFoundExceptionTest extends TestCase
    {
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

            if ( ! file_exists($dir) ) {
                throw new \Exceptions\FileSystem\DirectoryNotFoundException();
            }
        }

        //-------------------------------------------------------------------------
    }

}
