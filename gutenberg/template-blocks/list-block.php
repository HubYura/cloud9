<?php

/**
 * Full withs List block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'contact-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'contact';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('title') ?: __('Title', 'cloud9diamonds');
$subtitle = get_field('sub_title') ?: __('Subtitle', 'cloud9diamonds');
$block_text = get_field('block_text') ?: __('Subtitle', 'cloud9diamonds');
$block_italic = get_field('block_italic') ?: __('Text', 'cloud9diamonds');
$button_text = get_field('button_text') ?: __('Text', 'cloud9diamonds');
$bottom_title = get_field('bottom_title') ?: __('Text', 'cloud9diamonds');
$bottom_sub_title = get_field('bottom_sub_title') ?: __('Text', 'cloud9diamonds');
$bottom_text = get_field('bottom_text') ?: __('Text', 'cloud9diamonds');
$bottom_text_italic = get_field('bottom_text_italic') ?: __('Text', 'cloud9diamonds');
$bottom_button_text = get_field('bottom_button_text') ?: __('Text', 'cloud9diamonds');

$PATH = get_template_directory_uri();
$folder = $PATH.'/assets/images/';

$blockRightImagePath = get_field('right_image')['url'] ?: $folder.'home-block_image1.png';
$blockLeftImagePath = get_field('left_image')['url'] ?: $folder.'home-block_image2.png';
$blockBottomImagePath = get_field('bottom_image')['url'] ?: $folder.'home-block_image3.png';

?>
<!-- Blocks -->
<div class="home__block-list block">
    <div class="block">
        <div class="block__caption">
            <div class="block__title"><?php echo BorderBottomGradient($title); ?></div>
            <p class="block__sub-title"><?php echo $subtitle ?></p>
            <p class="block__text"><?php echo $block_text ?></p>
            <p class="block__italic"><?php echo $block_italic ?></p>
            <div class="block__button">
                <?php echo PrimaryButton($button_text); ?>
            </div>
        </div>
        <div class="block__images">
            <img class="block__right-image" src="<?php echo $blockRightImagePath ?>" alt="block_image1" >
            <img class="block__left-image" src="<?php echo $blockLeftImagePath ?>" alt="block_image2" >
        </div>
    </div>

    <div id="block-bottom">
        <div class="block-bottom__image-wrapper">
            <img class="block-bottom__image" src="<?php echo $blockBottomImagePath ?>" alt="block_image3">
        </div>
        <div class="block__caption">
            <div class="block__title"><?php echo BorderBottomGradient($bottom_title); ?></div>
            <p class="block__sub-title"><?php echo $bottom_sub_title ?></p>
            <p class="block__text"><?php echo $bottom_text ?></p>
            <p class="block__italic"><?php echo $bottom_text_italic ?></p>
            <div class="block__button">
                <?php echo PrimaryButton($bottom_button_text); ?>
            </div>
        </div>
    </div>
</div>