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
$sticker = get_field('sticker') ?: __('Title', 'cloud9diamonds');
$left_title = get_field('left_title') ?: __('Subtitle', 'cloud9diamonds');
$left_button_text = get_field('left_button_text') ?: __('Subtitle', 'cloud9diamonds');
$right_subtitle = get_field('right_subtitle') ?: __('Subtitle', 'cloud9diamonds');
$right_text = get_field('right_text') ?: __('Subtitle', 'cloud9diamonds');
$right_text_two = get_field('right_text_two') ?: __('Subtitle', 'cloud9diamonds');
$right_button_text = get_field('right_button_text') ?: __('Subtitle', 'cloud9diamonds');

$PATH = get_template_directory_uri();
$folder = $PATH.'/assets/images/';

$madeImageOnePath = get_field('left_image')['url'] ?: $folder.'home-made1.png';
$madeImageTwoPath = get_field('outer_image')['url'] ?: $folder.'home-made2.png';

?>
<!-- How we made diamonds -->
<div class="home__made made">
    <div class="made__sticker"><?php echo Sticker($sticker); ?></div>

    <div class="made__left left">
        <h2 class="left__title"><?php echo $left_title ?></h2>
        <div class="left__button">
            <?php echo PrimaryButton($left_button_text); ?>
        </div>
        <img class="left__image" src="<?php echo $madeImageOnePath ?>" alt="home-made1">
    </div>

    <div class="made__right right">
        <h2 class="right__subtitle"><?php echo $right_subtitle ?></h2>
        <p class="right__text-row-1">
            <?php echo $right_text ?>
        </p>
        <p class="right__text-row-2">
            <?php echo $right_text_two ?>
        </p>

        <div class="right__button">
            <?php echo PrimaryButton($right_button_text); ?>
        </div>
    </div>

    <img class="made__outer-image" src="<?php echo $madeImageTwoPath; ?>" alt="home-made2">
</div>