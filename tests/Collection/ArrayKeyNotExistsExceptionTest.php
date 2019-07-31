<?php namespace Tests\Collection {

    use PHPUnit\Framework\TestCase;

    /**
     * ArrayKeyNotExistsExceptionTest Test Case
     *
     * Testing \Exceptions\Collection\ArrayKeyNotExistsException
     *
     * @package Tests\Collection
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.3
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class ArrayKeyNotExistsExceptionTest extends TestCase
    {
        /**
         * @return void
         */
        public function testCollectionArrayKeyNotExists(): void
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\Collection\ArrayKeyNotExistsException::class);

            // Let's get the exception to throw
            $var = ['name' => 'Name'];

            if (! array_key_exists('dob', $var)) {
                // Throw the exception
                throw new \Exceptions\Collection\ArrayKeyNotExistsException();
            }
        }

        //-------------------------------------------------------------------------
    }

}
