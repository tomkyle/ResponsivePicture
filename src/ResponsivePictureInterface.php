<?php
namespace tomkyle\ResponsivePicture;

interface ResponsivePictureInterface extends \IteratorAggregate
{
    public function add( SourceInterface $source );
}
