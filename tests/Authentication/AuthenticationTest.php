<?php namespace Tests\Authentication {

    use PHPUnit\Framework\TestCase;

    /**
     * AuthenticationTest Test Case
     *
     * Testing \Exceptions\Authentication\AuthenticationException
     *
     * @package Tests\Authentication
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.3
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class AuthenticationTest extends TestCase
    {
        /**
         * Here, we are expecting the \Exceptions\Authentication\AuthenticationException
         * to be thrown
         *
         * @return void|mixed
         */
        public function testExpectAuthenticationException()
        {
            // We are expecting the Exception to be thrown ...
            $this->expectException(\Exceptions\Authentication\AuthenticationException::class);

            $username = null;
            $password = null;

            if (! (string)$username || ! (string)$password) {
                throw new \Exceptions\Authentication\AuthenticationException();
            } else {
                $user_data = [
                    'username' => $username,
                    'password' => $password,
                ];

                return $user_data;
            }
        }

        //-------------------------------------------------------------------------
    }

}
