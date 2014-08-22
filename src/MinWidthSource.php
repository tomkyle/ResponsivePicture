<?php
namespace tomkyle\ResponsivePicture;

class MinWidthSource extends Source implements SourceInterface
{
    public function __construct($media, $srcset, $type = null)
    {
        if (is_int( $media )) {
            $media = "(min-width: {$media}px)";
        }
        parent::__construct( $media, $srcset, $type);
    }
}
