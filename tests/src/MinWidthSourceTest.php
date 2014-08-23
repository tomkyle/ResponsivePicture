<?php
namespace tests;

use \tomkyle\ResponsivePicture\MinWidthSource;
use \tomkyle\ResponsivePicture\ResponsivePicture;



class MinWidthSourceTest extends \PHPUnit_Framework_TestCase {


    /**
     * @dataProvider provideMinWidthCtorParams
     */
    public function testSimpleInstantiation( $width, $srcset )
    {
        $min = new MinWidthSource(  $width, $srcset );
        $this->assertInstanceOf('\tomkyle\ResponsivePicture\MinWidthSource', $min);
    }




    public function provideMinWidthCtorParams()
    {
        return array(
            array(1200, '//placehold.it/1200x1200, //placehold.it/2400x2400 2x'),
            array(800,  '//placehold.it/800x800, //placehold.it/1600x1600 2x'),
            array(480,  '//placehold.it/480x480, //placehold.it/960x960 2x')
        );
    }

}
