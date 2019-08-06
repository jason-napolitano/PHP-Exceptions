<?php namespace Tests\HTTP {

use PHPUnit\Framework\TestCase;

/**
 * ClientExceptionTest Test Case
 *
 * Testing \Exceptions\HTTP\ClientException
 *
 * @package Tests\HTTP
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class ClientExceptionTest extends TestCase
{
    /**
     * Here, we are expecting the \Exceptions\HTTP\ClientException
     * to be thrown
     *
     * @return void|mixed
     */
    public function testExpectClientException()
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\HTTP\ClientException::class);

        // Simple test
        if (2 > 1) {
            throw new \Exceptions\HTTP\ClientException(400, 'Bad Request');
        }
    }

    //-------------------------------------------------------------------------
}

}
