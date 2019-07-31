<?php namespace Tests\Collection {

    use PHPUnit\Framework\TestCase;

    /**
     * InvalidJSONExceptionTest Test Case
     *
     * Testing \Exceptions\Collection\InvalidJSONException
     *
     * @package Tests\Collection
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.3
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class InvalidJSONExceptionTest extends TestCase
    {
        /**
         * @var string $invalid_json An invalid JSON string
         */
        private $invalid_json = 'obviously_not_a_json_string';

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

            if (! is_json($this->invalid_json)) {
                // Throw the exception
                throw new \Exceptions\Collection\InvalidJSONException();
            }
        }

        //-------------------------------------------------------------------------
    }

}
