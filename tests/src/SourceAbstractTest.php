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


    /**
     * @dataProvider provideVariousKindOfArguments
     */
    public function testGetSrcset( $any )
    {
        $this->stub->srcset = $any;
        $this->assertEquals( $any, $this->stub->getSrcset() );
    }

    /**
     * @dataProvider provideVariousKindOfArguments
     */
    public function testGetMedia( $any )
    {
        $this->stub->media = $any;
        $this->assertEquals( $any, $this->stub->getMedia() );
    }

    /**
     * @dataProvider provideVariousKindOfArguments
     */
    public function testGetType( $any )
    {
        $this->stub->type = $any;
        $this->assertEquals( $any, $this->stub->getType() );
    }

    public function provideVariousKindOfArguments()
    {
        return array(
            array( '(min-width: 1200px)' ),
            array( null ),
            array( 123 )
        );
    }

}
