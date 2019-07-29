<?php namespace Tests\Collection {

    use PHPUnit\Framework\TestCase;

    /**
     * ArrayCollectionTest Test Case
     *
     * This test case is used to ensure that the exceptions within the
     * Exceptions\Collection\* namespace are properly thrown under the
     * correct set of conditions
     *
     * @package Tests\Collection
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class ArrayCollectionTest extends TestCase
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

            if ( ! array_key_exists('dob', $var) ) {
                // Throw the exception
                throw new \Exceptions\Collection\ArrayKeyNotExistsException();
            }
        }

        //-------------------------------------------------------------------------

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

        /**
         * @return void
         */
        public function testCollectionArrayNotExists(): void
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\Collection\ArrayNotExistsException::class);

            // Let's get the exception to throw
            $var = null;

            if ( ! is_array($var) ) {
                // Throw the exception
                throw new \Exceptions\Collection\ArrayNotExistsException();
            }
        }

        //-------------------------------------------------------------------------
    }

}
