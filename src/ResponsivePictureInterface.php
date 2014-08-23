<?php
namespace tomkyle\ResponsivePicture;

interface ResponsivePictureInterface extends \IteratorAggregate
{
    /**
     * @return void
     */
    public function add( SourceInterface $source );
}
