<?php use PHPUnit\Framework\TestCase;

/**
 * ExceptionsTest Test Case
 */
class ExceptionsTest extends TestCase
{
    /**
     * @return void
     */
    public function testInvalidArgumentException(): void
    {
        // We are expecting the ArrayKeyNotExistsException to be thrown...
        $this->expectException(\Exceptions\InvalidArgumentException::class);

        // Let's get the exception to throw
        function test_me($x) {
            if ( ! is_int($x)) {
                throw new \Exceptions\InvalidArgumentException();
            }
        }
        test_me('string');
    }

    //-------------------------------------------------------------------------
}
