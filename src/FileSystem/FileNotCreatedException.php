<?php namespace Exceptions\FileSystem {

    /**
     * FileNotCreatedException class
     *
     * The FileNotCreatedException indicates that a file
     * was not created
     *
     * @package Exceptions\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class FileNotCreatedException extends FileSystemException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'Specified file was not created';
    }
}
