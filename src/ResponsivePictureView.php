<?php
/**
 * This file is part of tomkyle/ResponsivePicture.
 *
 * Copyright (c) 2014 Carsten Witt
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is furnished
 * to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace tomkyle\ResponsivePicture;

class ResponsivePictureView implements ResponsivePictureViewInterface
{
    public $template;
    public $picture;


    /**
     * @param ResponsivePictureInterface $picture  ResponsivePicture instance, default: null
     * @param [type]                     $template  Template file to use, default: null
     */
    public function __construct( ResponsivePictureInterface $picture = null, $template = null )
    {
        if (!is_null($picture)) {
            $this->setPicture( $picture );
        }
        $this->template = $template ?: realpath(__DIR__ . '/../templates/responsivepicture.tpl.php' );
    }


    public function __toString()
    {
        if (!$this->valid()) {
            return '';
        }
        ob_start();
        include ( $this->template );
        return ob_get_clean();
    }

    public function valid()
    {
        return ($this->getPicture() instanceOf ResponsivePictureInterface);
    }

    /**
     * @param  ResponsivePictureInterface $picture
     * @return string
     */
    public function __invoke( ResponsivePictureInterface $picture )
    {
        $this->setPicture( $picture );
        return $this->__toString();
    }



    /**
     * @param  ResponsivePictureInterface $picture
     * @return ResponsivePictureViewInterface Fluid Interface
     */
    public function setPicture( ResponsivePictureInterface $picture )
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * @return ResponsivePictureInterface
     */
    public function getPicture( )
    {
        return $this->picture;
    }


}
