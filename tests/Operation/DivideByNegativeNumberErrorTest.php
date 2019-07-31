<?php use PHPUnit\Framework\TestCase;

/**
 * DivideByNegativeNumberErrorTest Test Case
 *
 * Testing \Exceptions\Operation\DivideByNegativeNumberError
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class DivideByNegativeNumberErrorTest extends TestCase
{
    /**
     * @return void
     */
    public function testExpectDivideByNegativeNumberError(): void
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\Operation\DivideByNegativeNumberError::class);

        // Let's get the exception to throw
        function divide_ten_by($dividend)
        {
            if ( $dividend < 0 ) {
                throw new \Exceptions\Operation\DivideByNegativeNumberError();
            }
            return $dividend / 10;
        }

        divide_ten_by(-1);
    }

    //-------------------------------------------------------------------------
}
