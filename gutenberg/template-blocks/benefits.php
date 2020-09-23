<?php

/**
 * Full withs Benefits block Template.
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
$sticker = get_field('sticker') ?: __('Sticker', 'cloud9diamonds');

$PATH = get_template_directory_uri();
$folder = $PATH.'/assets/images/';

$madeBenefitsImageOnePath = get_field('left_image_1')['url'] ?: $folder.'home-benefits_image1.png';
$madeBenefitsImageTwoPath = get_field('left_image_2')['url'] ?: $folder.'home-benefits_image2.png';

?>
<!-- Benefits of lab growing -->
<div class="home__benefits benefits">
    <div class="benefits__left left">
        <div class="left__circle"></div>
        <img class="left__image-1" src="<?php echo $madeBenefitsImageOnePath ?>" alt="benefits_image1">
        <img class="left__image-2" src="<?php echo $madeBenefitsImageTwoPath ?>" alt="benefits_image2">
    </div>

    <div class="benefits__right right">
        <div class="right__top-line">
            <div class="right__sticker"><?php echo Sticker($sticker); ?></div>
        </div>

        <?php if(get_field('article_blocks')) foreach (get_field('article_blocks') as $block): ?>
            <div class="right__article-block">
                <?php echo ArticleBlock($block['image'], $block['title'], $block['article-block']); ?>
            </div>
        <? endforeach; ?>
    </div>
</div>