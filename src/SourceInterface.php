<?php
namespace tomkyle\ResponsivePicture;

interface SourceInterface extends \JsonSerializable {
    public function getSrcset();
    public function getMedia();
    public function getType();
}
