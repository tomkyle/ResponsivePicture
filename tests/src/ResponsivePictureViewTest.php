<?php
namespace tests;

use \tomkyle\ResponsivePicture\ResponsivePicture;
use \tomkyle\ResponsivePicture\ResponsivePictureInterface;
use \tomkyle\ResponsivePicture\ResponsivePictureView;

class ResponsivePictureViewTest extends \PHPUnit_Framework_TestCase {


    /**
     * @dataProvider provideResponsivePictureViewCtorParams
     *
     * @covers \tomkyle\ResponsivePicture\ResponsivePictureView::__construct
     */
    public function testDefaultInstantiation( ResponsivePictureInterface $rp )
    {
        $view = new ResponsivePictureView(  $rp );
        $this->assertInstanceOf('\tomkyle\ResponsivePicture\ResponsivePictureView', $view);
    }


    /**
     * @dataProvider provideResponsivePictureViewCtorParams
     *
     * @covers \tomkyle\ResponsivePicture\ResponsivePictureView::__construct
     */
    public function testNoParamsInstantiation( ResponsivePictureInterface $rp )
    {
        $view = new ResponsivePictureView;
        $this->assertInstanceOf('\tomkyle\ResponsivePicture\ResponsivePictureView', $view);
    }


    /**
     * @dataProvider provideResponsivePictureViewCtorParams
     *
     * @covers \tomkyle\ResponsivePicture\ResponsivePictureView::setPicture
     */
    public function testSetPicture( $rp )
    {
        $view = new ResponsivePictureView(  $rp );

        $result = $view->setPicture( $rp );
        $this->assertTrue( $rp === $view->picture);
        $this->assertInstanceOf('\tomkyle\ResponsivePicture\ResponsivePictureView', $result);
    }


    /**
     * @dataProvider provideResponsivePictureViewCtorParams
     */
    public function testIfValid( $rp )
    {
        $view = new ResponsivePictureView(  $rp );
        $this->assertTrue( $view->valid() );
    }


    public function testIfNotValid( )
    {
        $view = new ResponsivePictureView;
        $this->assertFalse( $view->valid() );
    }

    /**
     * @dataProvider provideVariousCtorParamsForStringOutputTesting
     *
     * @covers \tomkyle\ResponsivePicture\ResponsivePictureView::__toString
     */
    public function testToString( $picture = null, $template = null)
    {
        $view = new ResponsivePictureView($picture, $template);
        $str = $view->__toString();
        $this->assertTrue( is_string( $str ));
    }


    /**
     * @covers \tomkyle\ResponsivePicture\ResponsivePictureView::__invoke
     */
    public function testInvoke( $picture = null, $template = null)
    {
        $view = new ResponsivePictureView;

        $str = $view( new ResponsivePicture( '//placehold.it/300x300', "Sample image") );
        $this->assertTrue( is_string( $str ));
    }



    public function provideResponsivePictureViewCtorParams()
    {
        return array(
            array( new ResponsivePicture( '//placehold.it/300x300', "Sample image") )
        );
    }




    public function provideVariousCtorParamsForStringOutputTesting()
    {
        return array(
            array( new ResponsivePicture( '//placehold.it/300x300', "Sample image"), __DIR__ . '/../../templates/responsivepicture.tpl.php' ),
            array( new ResponsivePicture( '//placehold.it/300x300', "Sample image"), null),
            array()
        );
    }




}
