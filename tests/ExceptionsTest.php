<?php use PHPUnit\Framework\TestCase;

/**
 * ExceptionsTest Test Case
 */
class ExceptionsTest extends TestCase
{

    /**
     * Here, we are expecting the \Exceptions\BadFunctionCallException to
     * be thrown
     *
     * @return void
     */
    public function testExpectBadFunctionCallException(): void
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\BadFunctionCallException::class);

        // Let's get the exception to throw
        function load_callable(callable $func = null)
        {
            if ( ! is_callable($func)) {
                throw new \Exceptions\BadFunctionCallException();
            }
        }

        load_callable();
    }

    //-------------------------------------------------------------------------

    /**
     * Here, we are expecting the \Exceptions\RuntimeException to
     * be thrown
     *
     * @return void
     */
    public function testExpectRuntimeExceptionException(): void
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\RuntimeException::class);

        function divide($dividend = 0, $divisor = 0)
        {
            if ($divisor === 0) {
                throw new \Exceptions\RuntimeException();
            }
            return $dividend / $divisor;
        }

        divide();
    }

    //-------------------------------------------------------------------------

    /**
     * Here, we are expecting the \Exceptions\InvalidArgumentException to
     * be thrown
     *
     * @return void
     */
    public function testExpectInvalidArgumentException(): void
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\InvalidArgumentException::class);

        // Let's get the exception to throw
        function requires_int($x)
        {
            if ( ! is_int($x)) {
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
     * @return void
     */
    public function testExpectOutOfBoundsException(): void
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\OutOfBoundsException::class);

        // Let's get the exception to throw
        unset($_POST);

        if ( ! isset($_POST['unset_value'])) {
            throw new \Exceptions\OutOfBoundsException();
        } else {
            $_POST['unset_value'] = 'new_value';
        }
    }

    //-------------------------------------------------------------------------

    /**
     * Here, we are expecting the \Exceptions\OutOfRangeException to
     * be thrown
     *
     * @return void
     */
    public function testExpectOutOfRangeException(): void
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\OutOfRangeException::class);

        // Let's get the exception to throw
        $var = 11;

        if ($var > 10) {
            throw new \Exceptions\OutOfRangeException();
        } else {
            echo "Hooray! {$var} is less than 10!";
        }
    }

    //-------------------------------------------------------------------------
}
