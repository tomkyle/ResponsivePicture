<?php
namespace tomkyle\ResponsivePicture;


/**
 * Interface for intercepting ResponsivePicture instances.
 */
interface ResponsivePictureAwareInterface {

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
