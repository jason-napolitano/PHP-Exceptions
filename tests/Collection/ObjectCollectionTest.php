<?php namespace Tests\Collection {

    use PHPUnit\Framework\TestCase;

    /**
     * ObjectCollectionTest Test Case
     *
     * This test case is used to ensure that the exceptions within the
     * Exceptions\Collection\* namespace are properly thrown under the
     * correct set of conditions
     *
     * @package Tests\Collection
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.3
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class ObjectCollectionTest extends TestCase
    {
        /**
         * @return \StdClass|null
         */
        public function testCollectionObjectAlreadyExists(): ?\StdClass
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\Collection\ObjectAlreadyExistsException::class);

            // Let's get the exception to throw
            $obj = new \StdClass();

            if ( isset($obj) ) {
                throw new \Exceptions\Collection\ObjectAlreadyExistsException();
            } else {
                $obj = new \StdClass();
                return $obj;
            }
        }

        //-------------------------------------------------------------------------

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
