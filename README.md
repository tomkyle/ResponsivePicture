#tomkyle/responsivepicture


A PHP wrapper for HTML5 picture element. See:

- Scott Jehl's [Picturefill – A responsive image polyfill](http://scottjehl.github.io/picturefill/)
- [Picturefill on Github](https://github.com/scottjehl/picturefill)



##Getting started

    <?php
    use \tomkyle\ResponsivePicture\MinWidthSource;
    use \tomkyle\ResponsivePicture\ResponsivePicture;
    use \tomkyle\ResponsivePicture\ResponsivePictureView;

    $pic = new ResponsivePicture( '//placehold.it/300x300', "Ein Testbild");
    
    $pic->add( new MinWidthSource(1200, '//placehold.it/1200x1200, //placehold.it/2400x2400 2x'));
    $pic->add( new MinWidthSource(800,  '//placehold.it/800x800,   //placehold.it/1600x1600 2x'));
    $pic->add( new MinWidthSource(480,  '//placehold.it/480x480,   //placehold.it/960x960   2x'));

    echo new ResponsivePictureView( $pic );
    ?>


##Coming up soon

- Possibility to re-using the `ResponsivePictureView` instance
- Test environment
