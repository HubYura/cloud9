<?php

/**
 * Contact Block Template.
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
$title = get_field('title') ?: __('Contact Us', 'cloud9diamonds');
$descriptions = get_field('descriptions') ?: __('It is our pleasure having you as a valued customer and we want to hear from you if you have any concerns, complaints, or questions. We also like getting positive feedback. Please contact us by the below methods.', 'cloud9diamonds');
$title_chat = get_field('title_chat') ?: __('Chat with Us', 'cloud9diamonds');
$button_text_chat = get_field('button_text_chat') ?: __('Chat with Us', 'cloud9diamonds');
$descriptions_chat = get_field('descriptions_chat') ?: __('We\'re here to help with any questions you may have', 'cloud9diamonds');
$contacts_title = get_field('contacts_title') ?: __('Contacts', 'cloud9diamonds');
$contacts = get_field('contacts') ?: __('E-mail:marketing@cloud.com<br>WhatsApp:+49 162 9701936', 'cloud9diamonds');
$contact_form = get_field('contact_form') ?: __('105', 'cloud9diamonds');

$folder = get_template_directory_uri() . '/assets/images/page-contact/';
$topImage = get_field('image_main') ?: $folder.'top.png';
$topImageMobile = get_field('image_mobile') ?: $folder.'top-mobile.png';

?>
<!-- Top -->
<div class="contact__top top">
    <img class="top__image" src="<?php echo $topImage ?>" alt="Image-top">
    <img class="top__image-mobile" src="<?php echo $topImageMobile ?>" alt="Image-top">

    <h1 class="top__title"><?php echo $title; ?></h1>
</div>

<!-- Main -->
<div class="contact__main main">
    <div class="main__left left">
        <p class="left__text">
            <?php echo $descriptions; ?>
        </p>

        <div class="left__chat chat">
            <p class="chat__title"><?php echo $title_chat; ?></p>
            <div class="chat__live-chat-button">
                <?php LiveChatButton($button_text_chat); ?>
            </div>
            <p class="chat__text"><?php echo $descriptions_chat; ?></p>
        </div>

        <div class="left__contacts contacts">
            <p class="contacts__title"><?php echo $contacts_title; ?></p>
            <p class="contacts__title"><?php echo $contacts; ?></p>
        </div>
    </div>

    <div class="main__right">
        <?php echo do_shortcode('[contact-form-7 id="'.$contact_form.'"]'); ?>
    </div>
</div>