<?php
namespace tomkyle\ResponsivePicture;

interface ResponsivePictureViewInterface {

    public function __toString();

    /**
     * @param  ResponsivePictureInterface $picture
     * @return string
     */
    public function __invoke( ResponsivePictureInterface $picture );


    /**
     * @param  ResponsivePictureInterface $picture
     * @return ResponsivePictureViewInterface Fluid Interface
     */
    public function setPicture( ResponsivePictureInterface $picture );


    /**
     * @return ResponsivePictureInterface
     */
    public function getPicture( );


}
