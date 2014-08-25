<?php
namespace tests;

use \tomkyle\ResponsivePicture\MinWidthSource;
use \tomkyle\ResponsivePicture\ResponsivePicture;

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


}
