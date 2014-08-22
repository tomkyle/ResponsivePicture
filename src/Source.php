<?php
namespace tomkyle\ResponsivePicture;

class Source extends SourceAbstract implements SourceInterface
{
    public function __construct($media, $srcset, $type = null)
    {
        $this->media  = $media;
        $this->srcset = $srcset;
        $this->type   = $type;
    }

}
