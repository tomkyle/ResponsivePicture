<?php
namespace tests;

use \tomkyle\ResponsivePicture\Source;

class SourceTest extends \PHPUnit_Framework_TestCase {

    /**
     * @dataProvider provideVariousCtorParams
     *
     * @covers \tomkyle\ResponsivePicture\Source::__construct
     */
    public function testDefaultInstantiation( $media, $srcset)
    {
        $source = new Source( $media, $srcset);
        $this->assertInstanceOf('\tomkyle\ResponsivePicture\Source', $source);
        $this->assertEquals( $source->media,   $media );
        $this->assertEquals( $source->srcset,  $srcset );
    }


    /**
     * @dataProvider provideVariousCtorParamsWithGivenType
     *
     * @covers \tomkyle\ResponsivePicture\Source::__construct
     */
    public function testInstantiationWithGivenType( $media, $srcset, $type )
    {
        $source = new Source( $media, $srcset, $type);
        $this->assertInstanceOf('\tomkyle\ResponsivePicture\Source', $source);
        $this->assertEquals( $source->media,  $media );
        $this->assertEquals( $source->srcset, $srcset );
        $this->assertEquals( $source->type,   $type );
    }

    /**
     * @dataProvider provideVariousCtorParamsWithGivenType
     *
     * @covers \tomkyle\ResponsivePicture\Source::getMedia
     * @covers \tomkyle\ResponsivePicture\Source::getSrcset
     * @covers \tomkyle\ResponsivePicture\Source::getType
     */
    public function testGetterInterceptors( $media, $srcset, $type )
    {
        $source = new Source( $media, $srcset, $type);
        $this->assertInstanceOf('\tomkyle\ResponsivePicture\Source', $source);
        $this->assertEquals( $source->getMedia(),  $media );
        $this->assertEquals( $source->getSrcset(), $srcset );
        $this->assertEquals( $source->getType(),   $type );
    }




    /**
     * @dataProvider provideVariousCtorParamsWithGivenType
     *
     * @covers \tomkyle\ResponsivePicture\Source::jsonSerialize
     */
    public function testJsonExport( $media, $srcset, $type )
    {
        $source = new Source( $media, $srcset, $type);

        $json_source         = json_encode( $source );
        $decoded_json_source = json_decode( $json_source );

        $this->assertInstanceOf('\StdClass', $decoded_json_source);
        $this->assertEquals( $decoded_json_source->media,  $media );
        $this->assertEquals( $decoded_json_source->srcset, $srcset );
        $this->assertEquals( $decoded_json_source->type,   $type );
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
