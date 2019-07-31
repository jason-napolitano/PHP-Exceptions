<?php namespace Tests\FileSystem {

    use PHPUnit\Framework\TestCase;

    /**
     * DirectoryAlreadyExistsExceptionTest Test Case
     *
     * Testing \Exceptions\FileSystem\DirectoryAlreadyExistsException
     *
     * @package Tests\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.3
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class DirectoryAlreadyExistsExceptionTest extends TestCase
    {
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
            $dir = __DIR__ . '/directory';

            if ( file_exists($dir) ) {
                throw new \Exceptions\FileSystem\DirectoryAlreadyExistsException();
            }

        }

        //-------------------------------------------------------------------------
    }

}
