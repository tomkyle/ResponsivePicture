<?php
namespace tests;

use \tomkyle\ResponsivePicture\SourceAbstract;

class SourceAbstractTest extends \PHPUnit_Framework_TestCase {

    public $class = '\tomkyle\ResponsivePicture\SourceAbstract';
    public $stub;

    public function setUp()
    {
        $this->stub = $this->getMockForAbstractClass( $this->class );
    }

    public function testGetSrcset()
    {
        $this->stub->expects( $this->any())
                   ->method(  'getSrcset');
        $this->assertNull( $this->stub->getSrcset() );
    }

    public function testGetMedia()
    {
        $this->stub->expects( $this->any())
                   ->method(  'getMedia');
        $this->assertNull( $this->stub->getMedia() );
    }

    public function testGetType()
    {
        $this->stub->expects( $this->any())
                   ->method(  'getType');
        $this->assertNull( $this->stub->getMedia() );
    }

}
