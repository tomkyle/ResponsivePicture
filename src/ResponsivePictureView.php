<?php
namespace tomkyle\ResponsivePicture;

class ResponsivePictureView implements ResponsivePictureViewInterface
{
    public $template;
    public $picture;


    /**
     * @param ResponsivePictureInterface $picture   ResponsivePicture instance
     * @param [type]                     $template  Template file to use
     */
    public function __construct( ResponsivePictureInterface $picture, $template = null )
    {
        $this->setPicture( $picture );
        $this->template = $template ?: realpath(__DIR__ . '/../templates/responsivepicture.tpl.php' );
    }


    public function __toString()
    {
        ob_start();
        include ( $this->template );
        return ob_get_clean();
    }


    /**
     * @param  ResponsivePictureInterface $picture
     * @return string
     */
    public function __invoke( ResponsivePictureInterface $picture )
    {
        $this->setPicture( $picture );
        return $this->__toString();
    }



    /**
     * @param  ResponsivePictureInterface $picture
     * @return ResponsivePictureViewInterface Fluid Interface
     */
    public function setPicture( ResponsivePictureInterface $picture )
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * @return ResponsivePictureInterface
     */
    public function getPicture( )
    {
        return $this->picture;
    }


}
