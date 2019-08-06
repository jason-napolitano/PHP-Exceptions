<?php

namespace Tests\Collection;

use PHPUnit\Framework\TestCase;

/**
 * JSONDecodeExceptionTest Test Case
 *
 * Testing \Exceptions\Collection\JSONDecodeException
 *
 * @package Tests\Collection
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class JSONDecodeExceptionTest extends TestCase
{
    /**
     * @var string $invalid_json An invalid JSON string
     */
    private $invalid_json = 'obviously_not_a_json_string';

    /**
     * @return void
     */
    public function testExpectJSONDecodeException(): void
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\Collection\JSONDecodeException::class);

        // Let's get the exception to throw
        if (! json_decode($this->invalid_json)) {
            // Throw the exception
            throw new \Exceptions\Collection\JSONDecodeException();
        }
    }

    //-------------------------------------------------------------------------
}
