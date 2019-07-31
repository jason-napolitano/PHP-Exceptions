<?php namespace Tests\Collection {

    use PHPUnit\Framework\TestCase;

    /**
     * ArrayKeyAlreadyExistsExceptionTest Test Case
     *
     * Testing \Exceptions\Collection\ArrayKeyAlreadyExistsException
     *
     * @package Tests\Collection
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.3
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class ArrayKeyAlreadyExistsExceptionTest extends TestCase
    {
        /**
         * @return void
         */
        public function testCollectionArrayKeyAlreadyExists(): void
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\Collection\ArrayKeyAlreadyExistsException::class);

            // Let's get the exception to throw
            $var = ['name' => 'Name'];

            if ( array_key_exists('name', $var) ) {
                // Throw the exception
                throw new \Exceptions\Collection\ArrayKeyAlreadyExistsException();
            }
        }

        //-------------------------------------------------------------------------
    }

}
