<?php
namespace tomkyle\ResponsivePicture;

interface ResponsivePictureViewInterface extends ResponsivePictureAwareInterface {

    /**
     * @return string
     */
    public function __toString();

    /**
     * @param  ResponsivePictureInterface $picture
     * @return string
     */
    public function __invoke( ResponsivePictureInterface $picture );

    /**
     * @return bool
     */
    public function valid();

}
