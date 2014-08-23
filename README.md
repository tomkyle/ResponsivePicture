#Responsive Picture Elements

[![Build Status](https://travis-ci.org/tomkyle/ResponsivePicture.svg?branch=master)](https://travis-ci.org/tomkyle/ResponsivePicture)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tomkyle/ResponsivePicture/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/tomkyle/ResponsivePicture/?branch=master)


A PHP wrapper for HTML5 picture element. See:

- Scott Jehl's [Picturefill – A responsive image polyfill](http://scottjehl.github.io/picturefill/)
- [Picturefill on Github](https://github.com/scottjehl/picturefill)



##Installation

This library has no dependencies except from `satooshi/php-coveralls` for testing. Install from command line or `composer.json` file:

#####Command line
    
    composer require tomkyle/responsivepicture

#####composer.json
    "require": {
        "tomkyle/responsivepicture": "~1.2"
    }



##Getting started

    <?php
    use \tomkyle\ResponsivePicture\MinWidthSource;
    use \tomkyle\ResponsivePicture\ResponsivePicture;
    use \tomkyle\ResponsivePicture\ResponsivePictureView;

    $pic = new ResponsivePicture( '//placehold.it/300x300', "Sample image");
    
    $pic->add( new MinWidthSource(1200, '//placehold.it/1200x1200, //placehold.it/2400x2400 2x'));
    $pic->add( new MinWidthSource(800,  '//placehold.it/800x800,   //placehold.it/1600x1600 2x'));
    $pic->add( new MinWidthSource(480,  '//placehold.it/480x480,   //placehold.it/960x960   2x'));
    ?>
    
    
##Create output
Just create a `ResponsivePictureView` instance and echo it, optionally passing your `ResponsivePicture` object.
You may start with no parameters and later set the ResponsivePicture, either by setter method or invoking:

    <?php
    // One-line call
    echo new ResponsivePictureView( $pic );
	
	// Use setter method
	$foo = new ResponsivePictureView;
	$foo->setPicture( $pic_view );
	echo $foo;
	
	// Or use with __invoke:
    $bar = new ResponsivePictureView;
    echo $bar( $pic1 );
    echo $bar( $pic2 );    
    echo $bar( $pic3 );    
	?>
	
	
##Testing
Go to package root, install dependencies with `composer update` or `install`, run `phpunit`.

