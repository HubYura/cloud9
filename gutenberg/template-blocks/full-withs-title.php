<?php

/**
 * Full withs title Block Template.
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
$subtitle = get_field('subtitle') ?: __('Subtitle', 'cloud9diamonds');
$topImagePath = get_field('image') ?: $folder.'header-top.png';

$PATH = get_template_directory_uri();
$folder = $PATH.'/assets/images/';
$topImagePath = $folder.'header-top.png';

?>
<!-- Top -->
<div class="home__top top">
    <img src="<?php echo $topImagePath ?>" alt="Header top image" >
    <div class="top__title">
        <h1 class="big-text"><?php echo $title ?></h1>
        <h2 class="small-text"><?php echo $subtitle ?></h2>
    </div>
</div>