<?php namespace Exceptions\Intl {

    use Exceptions\DomainException;

    /**
     * IntlException class
     *
     * A base class for more generic internationalization related exceptions
     * to extend
     *
     * @package Exceptions\Intl
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.3
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class IntlException extends DomainException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'An internationalization error was encountered';
    }
}
