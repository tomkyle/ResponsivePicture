<?php
namespace tomkyle\ResponsivePicture;

class ResponsivePictureView implements ResponsivePictureViewInterface
{
    public $template;
    public $picture;


    /**
     * @param ResponsivePictureInterface $picture  ResponsivePicture instance, default: null
     * @param [type]                     $template  Template file to use, default: null
     */
    public function __construct( ResponsivePictureInterface $picture = null, $template = null )
    {
        if (!is_null($picture)) {
            $this->setPicture( $picture );
        }
        $this->template = $template ?: realpath(__DIR__ . '/../templates/responsivepicture.tpl.php' );
    }


    public function __toString()
    {
        if (!$this->valid()) {
            return '';
        }
        ob_start();
        include ( $this->template );
        return ob_get_clean();
    }

    public function valid()
    {
        return ($this->getPicture() instanceOf ResponsivePictureInterface);
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
