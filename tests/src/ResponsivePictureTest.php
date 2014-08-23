<?php
namespace tests;

use \tomkyle\ResponsivePicture\MinWidthSource;
use \tomkyle\ResponsivePicture\ResponsivePicture;

class ResponsivePictureTest extends \PHPUnit_Framework_TestCase {


    public function testSimpleInstantiation( )
    {
        $pic = new ResponsivePicture( '//placehold.it/300x300', "Sample image");

        $this->assertInstanceOf('\tomkyle\ResponsivePicture\ResponsivePicture', $pic);
    }


}
