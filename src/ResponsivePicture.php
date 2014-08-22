<?php
namespace tomkyle\ResponsivePicture;

class ResponsivePicture implements ResponsivePictureInterface
{
    public $url;
    public $srcset;
    public $alt;
    public $sources = [];

    public function __construct( $url, $alt)
    {
        $this->url    = $url;
        $this->srcset = $url;
        $this->alt    = $alt;
    }

    public function add( SourceInterface $source )
    {
        $this->sources[] = $source;
    }

    public function getIterator()
    {
        return new \ArrayIterator( $this->sources );
    }


}
