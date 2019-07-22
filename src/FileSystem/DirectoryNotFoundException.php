<?php namespace Exceptions\FileSystem {

    /**
     * DirectoryNotFoundException
     *
     * The DirectoryNotFoundException indicates that a directory
     * cannot be found
     *
     * @package Exceptions\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class DirectoryNotFoundException extends FileSystemException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'Specified directory cannot be found';
    }
}
