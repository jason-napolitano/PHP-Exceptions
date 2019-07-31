<?php namespace Tests\Collection {

    use PHPUnit\Framework\TestCase;

    /**
     * JSONCollectionTest Test Case
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
    class JSONCollectionTest extends TestCase
    {
        /**
         *  An invalid JSON string
         *
         * @var string $invalid_json An invalid JSON string
         */
        private $invalid_json = 'obviously_not_a_json_string';

        //-------------------------------------------------------------------------

        /**
         * @return void
         */
        public function testExpectInvalidJSONException(): void
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\Collection\InvalidJSONException::class);

            function is_json($string): bool
            {
                json_decode($string);
                return (json_last_error() === JSON_ERROR_NONE);
            }

            if ( ! is_json($this->invalid_json) ) {
                // Throw the exception
                throw new \Exceptions\Collection\InvalidJSONException();
            }
        }

        //-------------------------------------------------------------------------
        /**
         * @return void
         */
        public function testExpectJSONDecodeException(): void
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\Collection\JSONDecodeException::class);

            // Let's get the exception to throw
            if ( ! json_decode($this->invalid_json) ) {
                // Throw the exception
                throw new \Exceptions\Collection\JSONDecodeException();
            }
        }

        //-------------------------------------------------------------------------
    }

}
