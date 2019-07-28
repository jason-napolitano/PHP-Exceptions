<?php namespace Exceptions\FileSystem {

    /**
     * CannotMoveDirectoryException class
     *
     * The DirectoryAlreadyExistsException indicates that a directory
     * cannot be moved
     *
     * @package Exceptions\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class CannotMoveDirectoryException extends FileSystemException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'Specified directory cannot be moved';
    }
}
