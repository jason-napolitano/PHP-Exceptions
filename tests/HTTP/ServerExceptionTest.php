<?php

namespace Tests\HTTP;

use PHPUnit\Framework\TestCase;

/**
 * ServerExceptionTest Test Case
 *
 * Testing \Exceptions\HTTP\ServerException
 *
 * @package Tests\HTTP
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class ServerExceptionTest extends TestCase
{
    /**
     * Here, we are expecting the \Exceptions\HTTP\ServerException
     * to be thrown
     *
     * @return void|mixed
     */
    public function testExpectServerException()
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\HTTP\ServerException::class);

        // Simple test
        if (2 > 1) {
            throw new \Exceptions\HTTP\ServerException(500, 'Internal Server Error');
        }
    }

    //-------------------------------------------------------------------------
}
