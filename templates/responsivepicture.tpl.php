<?php
/**
 * A PHP template for (responsive) picture elements,
 * producing output like Scott Jehl's Picturefill uses,
 * providing IE9 support.
 *
 * @see http://scottjehl.github.io/picturefill/#using-picture
 * @see http://scottjehl.github.io/picturefill/#ie9
 */
?>
<picture>
    <!--[if IE 9]><video style="display: none;"><![endif]-->
    <?php foreach ($this->picture as $src): ?>
    <source srcset="<?php echo $src->getSrcset();?>"
            media="<?php echo $src->getMedia();?>"

            <?php
            echo ($type = $src->getType()) ? 'type="' . $type .'"' : ''
            # close img tag
            ?>>
    <?php endforeach; ?>
    <!--[if IE 9]></video><![endif]-->
    <img srcset="<?php echo $this->picture->url;?>"
         alt="<?php echo $this->picture->alt;?>">
</picture>
