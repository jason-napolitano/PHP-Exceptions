<?php namespace Tests {

    use PHPUnit\Framework\TestCase;

    /**
     * ExceptionsTest Test Case
     *
     * This test case is used to ensure that the exceptions within the
     * Exceptions\ namespace are properly thrown under the correct set
     * of conditions
     *
     * @package Tests
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class ExceptionsTest extends TestCase
    {

        /**
         * Here, we are expecting the \Exceptions\BadFunctionCallException to
         * be thrown
         *
         * @return void|mixed
         */
        public function testExpectBadFunctionCallException()
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\BadFunctionCallException::class);

            // Let's get the exception to throw
            function load_callable(callable $func = null)
            {
                if ( ! is_callable($func) ) {
                    throw new \Exceptions\BadFunctionCallException();
                }
            }

            load_callable();
        }

        //-------------------------------------------------------------------------

        /**
         * Here, we are expecting the \Exceptions\DivisionByZeroError to
         * be thrown
         *
         * @return void|mixed
         */
        public function testExpectDivisionByZeroError()
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\DivisionByZeroError::class);

            function divide($dividend, $divisor)
            {
                if ( $divisor === 0 ) {
                    throw new \Exceptions\DivisionByZeroError();
                }
                return $dividend / $divisor;
            }

            divide(0, 0);
        }

        //-------------------------------------------------------------------------

        /**
         * Here, we are expecting the \Exceptions\InvalidArgumentException to
         * be thrown
         *
         * @return void|mixed
         */
        public function testExpectInvalidArgumentException()
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\InvalidArgumentException::class);

            // Let's get the exception to throw
            function requires_int($x)
            {
                if ( ! is_int($x) ) {
                    throw new \Exceptions\InvalidArgumentException();
                }
            }

            requires_int('string');
        }

        //-------------------------------------------------------------------------

        /**
         * Here, we are expecting the \Exceptions\OutOfBoundsException to
         * be thrown
         *
         * @return void|mixed
         */
        public function testExpectOutOfBoundsException()
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\OutOfBoundsException::class);

            // Let's get the exception to throw
            $_POST['unset_value'] = null;
            $post = $_POST['unset_value'];

            if ( ! isset($post) ) {
                throw new \Exceptions\OutOfBoundsException();
            }
        }

        //-------------------------------------------------------------------------

        /**
         * Here, we are expecting the \Exceptions\OutOfRangeException to
         * be thrown
         *
         * @return void|mixed
         */
        public function testExpectOutOfRangeException()
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\OutOfRangeException::class);

            // Let's get the exception to throw
            $var = 11;

            if ( $var > 10 ) {
                throw new \Exceptions\OutOfRangeException();
            }
        }

        //-------------------------------------------------------------------------
    }

}