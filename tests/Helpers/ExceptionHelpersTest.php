<?php

namespace Tests\Helpers;

use PHPUnit\Framework\TestCase;

/**
 * ExceptionHelpersTest Test Case
 *
 * This test case is used to ensure that the trait within the
 * Exceptions\Helpers namespace are properly thrown under the
 * correct set of conditions
 *
 * @package Tests\Helpers
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class ExceptionHelpersTest extends TestCase
{
    // Import the \Exceptions\Helpers\ExceptionHelpers trait
    use \Exceptions\Helpers\ExceptionHelpers;

    /**
     * Here, we are going to try to load and use the \Exceptions\Helpers\ExceptionHelpers
     * trait
     *
     * @return void|mixed
     */
    public function testTryLoadingExceptionHelpersTraitMethodWithNoArguments()
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\RuntimeException::class);
        self::throwNew();
    }

    //-------------------------------------------------------------------------

    /**
     * Here, we are going to try to load and use the \Exceptions\Helpers\ExceptionHelpers
     * trait
     *
     * @return void|mixed
     */
    public function testTryLoadingExceptionHelpersTraitMethodWithoutNamespaceArgument()
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\RangeException::class);
        self::throwNew('RangeException');
    }

    //-------------------------------------------------------------------------

    /**
     * Here, we are going to try to load and use the \Exceptions\Helpers\ExceptionHelpers
     * trait
     *
     * @return void|mixed
     */
    public function testTryLoadingExceptionHelpersTraitMethodWithArguments()
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\FileSystem\FileNotFoundException::class);
        self::throwNew('FileNotFoundException', 'FileSystem');
    }

    //-------------------------------------------------------------------------
}
