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
$text = get_field('text') ?: __('Еext', 'cloud9diamonds');
$button_text = get_field('button_text') ?: __('button text', 'cloud9diamonds');

$PATH = get_template_directory_uri();
$folder = $PATH.'/assets/images/';

$presentationImagePath = get_field('image')['url'] ?: $folder.'home-presentation.png';

?>
<!-- Presentation -->
<div class="home__presentation presentation">
    <img class="presentation__image" src="<?php echo $presentationImagePath ?>" alt="home-presentation" >
    <div class="presentation__caption">
        <div class="presentation__inner">
            <h2 class="presentation__title"><?php echo $title ?></h2>
            <p class="presentation__sub-title">
                <?php echo $subtitle ?>
            </p>
            <p class="presentation__text">
                <?php echo $title ?>
            </p>
            <div class="block__button">
                <?php echo PrimaryButton($button_text); ?>
            </div>
        </div>
    </div>
</div>