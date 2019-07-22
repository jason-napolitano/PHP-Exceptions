<?php use PHPUnit\Framework\TestCase;

/**
 * ObjectCollectionTest Test Case
 */
class ObjectCollectionTest extends TestCase
{
    /**
     * @return \StdClass|null
     */
    public function testCollectionObjectAlreadyExists(): ?\StdClass
    {
        // We are expecting the ObjectAlreadyExistsException to be thrown...
        $this->expectException(\Exceptions\Collection\ObjectAlreadyExistsException::class);

        $obj = new StdClass();

        if (isset($obj)) {
            throw new \Exceptions\Collection\ObjectAlreadyExistsException();
        } else {
            $obj = new StdClass();
            return $obj;
        }
    }

    //-------------------------------------------------------------------------

    /**
     * @return \StdClass|null
     */
    public function testCollectionObjectNotExists(): ?\StdClass
    {
        // We are expecting the ObjectNotExistsException to be thrown...
        $this->expectException(\Exceptions\Collection\ObjectNotExistsException::class);

        $obj = null;

        if ( ! is_object($obj)) {
            throw new \Exceptions\Collection\ObjectNotExistsException();
        } else {
            $obj = new StdClass();
            return $obj;
        }
    }

    //-------------------------------------------------------------------------
}
