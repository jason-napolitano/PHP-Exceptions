<?php namespace Tests\Intl {

    use PHPUnit\Framework\TestCase;

    /**
     * IntlTest Test Case
     *
     * This test case is used to ensure that the exceptions within the
     * Exceptions\Intl\* namespace are properly thrown under the correct
     * set of conditions
     *
     * @package Tests\Intl
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class IntlTest extends TestCase
    {
        /**
         * Here, we are expecting the \Exceptions\Intl\IntlException
         * to be thrown
         *
         * @return void|mixed
         */
        public function testExpectIntlException()
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\Intl\IntlException::class);

            // Simple test
            if ( 2 > 1 ) {
                throw new \Exceptions\Intl\IntlException();
            }

        }

        //-------------------------------------------------------------------------
    }

}
