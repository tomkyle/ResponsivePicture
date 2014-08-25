<?php
namespace tests;

use \tomkyle\ResponsivePicture\Source;

class SourceTest extends \PHPUnit_Framework_TestCase {

    /**
     * @dataProvider provideVariousCtorParams
     */
    public function testDefaultInstantiation( $media, $srcset)
    {
        $source = new Source( $media, $srcset);
        $this->assertInstanceOf('\tomkyle\ResponsivePicture\Source', $source);
        $this->assertEquals( $source->media,  $media );
        $this->assertEquals( $source->srcset, $srcset );
    }


    /**
     * @dataProvider provideVariousCtorParamsWithGivenType
     */
    public function testInstantiationWithGivenType( $media, $srcset, $type )
    {
        $source = new Source( $media, $srcset, $type);
        $this->assertInstanceOf('\tomkyle\ResponsivePicture\Source', $source);
        $this->assertEquals( $source->media,  $media );
        $this->assertEquals( $source->srcset, $srcset );
        $this->assertEquals( $source->type,   $type );
    }



    public function provideVariousCtorParams()
    {
        return array(
            array('(min-width: 1200px)', '//placehold.it/1200x1200'),
            array('(min-width: 800px)',  '//placehold.it/800x600'),
            array('(min-width: 480px)',  '//placehold.it/480x200')
        );
    }

    public function provideVariousCtorParamsWithGivenType()
    {
        return array(
            array('(min-width: 1200px)', '//placehold.it/1200x1200', 'image/webp'),
            array('(min-width: 800px)',  '//placehold.it/800x600', 'image/webp'),
            array('(min-width: 480px)',  '//placehold.it/480x200', 'image/webp')
        );
    }
}
