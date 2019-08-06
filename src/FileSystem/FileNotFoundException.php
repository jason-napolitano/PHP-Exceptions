<?php

namespace Exceptions\FileSystem;

/**
 * FileNotFoundException class
 *
 * The FileNotFoundException indicates that a file
 * cannot be found
 *
 * @package Exceptions\FileSystem
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class FileNotFoundException extends FileSystemException
{
    /**
     * The exception message
     *
     * @var string $message The exception message
     */
    protected $message = 'Specified file cannot be found';
}
