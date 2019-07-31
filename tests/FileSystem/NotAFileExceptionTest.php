<?php namespace Tests\FileSystem {

    use PHPUnit\Framework\TestCase;

    /**
     * NotAFileExceptionTest Test Case
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
    class NotAFileExceptionTest extends TestCase
    {
        /**
         * Here, we are expecting the \Exceptions\FileSystem\NotAFileException
         * to be thrown
         *
         * @return void|mixed
         */
        public function testExpectNotAFileException()
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\FileSystem\NotAFileException::class);

            // Let's get the exception to throw
            $file = __DIR__ . 'directory';

            if (! is_file($file)) {
                throw new \Exceptions\FileSystem\NotAFileException();
            }
        }

        //-------------------------------------------------------------------------
    }

}
