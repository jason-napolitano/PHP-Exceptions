<?php namespace Tests\HTTP {

    use PHPUnit\Framework\TestCase;

    /**
     * HTTPTest Test Case
     *
     * This test case is used to ensure that the exceptions within the
     * Exceptions\HTTP\* namespace are properly thrown under the correct
     * set of conditions
     *
     * @package Tests\HTTP
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class HTTPTest extends TestCase
    {
        /**
         * Here, we are expecting the \Exceptions\HTTP\HTTPException
         * to be thrown
         *
         * @return void|mixed
         */
        public function testExpectHTTPException()
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\HTTP\HTTPException::class);

            // Simple test
            if ( 2 > 1 ) {
                throw new \Exceptions\HTTP\HTTPException();
            }

        }

        //-------------------------------------------------------------------------
    }

}
