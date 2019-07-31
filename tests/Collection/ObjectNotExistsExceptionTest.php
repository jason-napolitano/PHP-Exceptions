<?php namespace Tests\Collection {

    use PHPUnit\Framework\TestCase;

    /**
     * ObjectNotExistsExceptionTest Test Case
     *
     * Testing \Exceptions\Collection\ObjectNotExistsException
     *
     * @package Tests\Collection
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.3
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class ObjectNotExistsExceptionTest extends TestCase
    {
        /**
         * @return \StdClass|null
         */
        public function testCollectionObjectNotExists(): ?\StdClass
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\Collection\ObjectNotExistsException::class);

            // Let's get the exception to throw
            $obj = null;

            if ( ! is_object($obj) ) {
                throw new \Exceptions\Collection\ObjectNotExistsException();
            } else {
                $obj = new \StdClass();
                return $obj;
            }
        }

        //-------------------------------------------------------------------------
    }

}
