<?php
namespace tomkyle\ResponsivePicture;

class SourceAbstract implements SourceInterface
{
    public $media;
    public $srcset;
    public $type;

    public function getSrcset()
    {
        return $this->srcset;
    }

    public function getMedia()
    {
        return $this->media;
    }

    public function getType()
    {
        return $this->type;
    }

    public function jsonSerialize()
    {
        $result = new \StdClass;
        $result->media  = $this->getMedia();
        $result->srcset = $this->getSrcset();
        $result->type   = $this->getType();
        return $result;
    }
}
