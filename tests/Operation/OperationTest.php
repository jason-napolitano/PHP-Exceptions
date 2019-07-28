<?php use PHPUnit\Framework\TestCase;

/**
 * OperationTest Test Case
 *
 * This test case is used to ensure that the exceptions within the
 * Exceptions\Operation\* namespace are properly thrown under the
 * correct set of conditions
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.1
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class OperationTest extends TestCase
{

    /**
     * Here, we are expecting the \Exceptions\Operation\DivideByNegativeNumberError
     * to be thrown
     *
     * @return void|mixed
     */
    public function testExpectDivideByNegativeNumberError()
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
