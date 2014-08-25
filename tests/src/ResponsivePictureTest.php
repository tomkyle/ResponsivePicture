<?php
namespace tests;

use \tomkyle\ResponsivePicture\MinWidthSource;
use \tomkyle\ResponsivePicture\ResponsivePicture;
use \tomkyle\ResponsivePicture\SourceInterface;

class ResponsivePictureTest extends \PHPUnit_Framework_TestCase {

    public $object;

    public function setUp()
    {
        $this->object = new ResponsivePicture( '//placehold.it/300x300', "Sample image");
    }

    public function testSimpleInstantiation( )
    {
        $this->assertInstanceOf('\tomkyle\ResponsivePicture\ResponsivePicture', $this->object);
    }

    /**
     * @dataProvider provideSomeSourceInterfaceMocks
     */
    public function testAddingSource( $source_mock)
    {
        $this->object->add( $source_mock );
        $this->assertSame( $source_mock, array_pop($this->object->sources) );
    }

    public function testGetIterator( )
    {
        $this->object->sources = [];
        $this->object->add( $this->newSourceInterfaceMock() );
        $this->object->add( $this->newSourceInterfaceMock() );
        $this->object->add( $this->newSourceInterfaceMock() );

        $iterator = $this->object->getIterator();

        $this->assertInstanceOf('\ArrayIterator', $iterator);
        $this->assertEquals(3, $iterator->count());
    }

    public function newSourceInterfaceMock()
    {
        return $this->getMock( '\tomkyle\ResponsivePicture\SourceInterface' );
    }

    public function provideSomeSourceInterfaceMocks()
    {
        return array(
            array( $this->newSourceInterfaceMock() ),
            array( $this->newSourceInterfaceMock() ),
            array( $this->newSourceInterfaceMock() )
        );
    }

}
