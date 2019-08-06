<?php

namespace Tests\Collection;

use PHPUnit\Framework\TestCase;

/**
 * ObjectAlreadyExistsExceptionTest Test Case
 *
 * Testing \Exceptions\Collection\ObjectAlreadyExistsException
 *
 * @package Tests\Collection
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class ObjectAlreadyExistsExceptionTest extends TestCase
{
    /**
     * @return \StdClass|null
     */
    public function testCollectionObjectAlreadyExists(): ?\StdClass
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\Collection\ObjectAlreadyExistsException::class);

        // Let's get the exception to throw
        $obj = new \StdClass();

        if (isset($obj)) {
            throw new \Exceptions\Collection\ObjectAlreadyExistsException();
        }
        $obj = new \StdClass();

        return $obj;
    }

    //-------------------------------------------------------------------------
}
