<?php

namespace Exceptions\FileSystem;

/**
 * FileNotReadableException class
 *
 * The FileNotReadableException indicates that a file
 * is not readable
 *
 * @package Exceptions\FileSystem
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class FileNotReadableException extends FileSystemException
{
    /**
     * The exception message
     *
     * @var string $message The exception message
     */
    protected $message = 'Specified file is not readable';
}
