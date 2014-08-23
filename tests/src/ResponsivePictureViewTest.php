<?php
namespace tests;

use \tomkyle\ResponsivePicture\ResponsivePicture;
use \tomkyle\ResponsivePicture\ResponsivePictureInterface;
use \tomkyle\ResponsivePicture\ResponsivePictureView;

class ResponsivePictureViewTest extends \PHPUnit_Framework_TestCase {


    /**
     * @dataProvider provideResponsivePictureViewCtorParams
     */
    public function testDefaultInstantiation( ResponsivePictureInterface $rp )
    {
        $view = new ResponsivePictureView(  $rp );
        $this->assertInstanceOf('\tomkyle\ResponsivePicture\ResponsivePictureView', $view);
    }


    /**
     * @dataProvider provideResponsivePictureViewCtorParams
     */
    public function testNoParamsInstantiation( ResponsivePictureInterface $rp )
    {
        $view = new ResponsivePictureView;
        $this->assertInstanceOf('\tomkyle\ResponsivePicture\ResponsivePictureView', $view);
    }


    /**
     * @dataProvider provideResponsivePictureViewCtorParams
     */
    public function testFluentInterface( $rp )
    {
        $view = new ResponsivePictureView(  $rp );
        $this->assertInstanceOf('\tomkyle\ResponsivePicture\ResponsivePictureView', $view->setPicture( $rp ));
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



    public function provideResponsivePictureViewCtorParams()
    {
        return array(
            array( new ResponsivePicture( '//placehold.it/300x300', "Sample image") )
        );
    }



}
