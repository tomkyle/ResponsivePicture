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
        $this->picture  = $picture;
        $this->template = $template ?: realpath(__DIR__ . '/../templates/responsivepicture.tpl.php' );
    }


    public function __toString()
    {
        ob_start();
        include ( $this->template );
        return ob_get_clean();
    }
}
