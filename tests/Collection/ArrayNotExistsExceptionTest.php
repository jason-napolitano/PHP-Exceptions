<?php namespace Tests\Collection {

    use PHPUnit\Framework\TestCase;

    /**
     * ArrayNotExistsExceptionTest Test Case
     *
     * Testing \Exceptions\Collection\ArrayNotExistsException
     *
     * @package Tests\Collection
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.3
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class ArrayNotExistsExceptionTest extends TestCase
    {
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
