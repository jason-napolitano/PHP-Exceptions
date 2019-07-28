<?php use PHPUnit\Framework\TestCase;

/**
 * JSONCollectionTest Test Case
 *
 * This test case is used to ensure that the exceptions within the
 * Exceptions\Collection\* namespace are properly thrown under the
 * correct set of conditions
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.1
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class JSONCollectionTest extends TestCase
{
    /**
     * @return void
     */
    public function testExceptInvalidJSONException(): void
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\Collection\InvalidJSONException::class);

        // Let's get the exception to throw
        $var = '{ "name": "My Name", "age": "25, }';

        if ( ! json_decode($var)) {
            // Throw the exception
            throw new \Exceptions\Collection\InvalidJSONException();
        }
    }

    //-------------------------------------------------------------------------

    /**
     * @return void
     */
    public function testCollectionArrayKeyAlreadyExists(): void
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\Collection\ArrayKeyAlreadyExistsException::class);

        // Let's get the exception to throw
        $var = ['name' => 'Name'];

        if (array_key_exists('name', $var)) {
            // Throw the exception
            throw new \Exceptions\Collection\ArrayKeyAlreadyExistsException();
        }
    }

    //-------------------------------------------------------------------------

    /**
     * @return void
     */
    public function testCollectionArrayNotExists(): void
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\Collection\ArrayNotExistsException::class);

        // Let's get the exception to throw
        $var = null;

        if ( ! is_array($var)) {
            // Throw the exception
            throw new \Exceptions\Collection\ArrayNotExistsException();
        }
    }

    //-------------------------------------------------------------------------
}
