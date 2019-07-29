<?php namespace Exceptions\FileSystem {

    /**
     * NotADirectoryException class
     *
     * The NotADirectoryException indicates that a path
     * is not directory
     *
     * @package Exceptions\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class NotADirectoryException extends FileSystemException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'Specified path is not a directory';
    }
}
