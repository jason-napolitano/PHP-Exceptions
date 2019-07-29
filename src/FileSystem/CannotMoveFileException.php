<?php namespace Exceptions\FileSystem {

    /**
     * CannotMoveFileException class
     *
     * The DirectoryAlreadyExistsException indicates that a file cannot
     * be moved
     *
     * @package Exceptions\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class CannotMoveFileException extends FileSystemException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'Specified file cannot be moved';
    }
}
