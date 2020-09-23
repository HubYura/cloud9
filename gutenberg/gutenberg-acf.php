<?php
/*
 * Contact block
 */

add_action('acf/init', 'theme_acf_init_block_types');
function theme_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        $blocks = array(
            'contact' => array(
                'name'              => 'contact',
                'title'             => __('Contact', 'cloud9diamonds'),
                'description'       => __('A custom contact block.', 'cloud9diamonds'),
                'render_template'   => get_template_directory() . '/gutenberg/template-blocks/contact.php',
                'icon'              => 'heading',
                'keywords'          => array( 'full withs title' ),
                'data-title'        => __('Full withs title', 'cloud9diamonds'),
            ),
            'full-withs-title' => array(
                'name'              => 'full-withs-title',
                'title'             => __('Full withs title', 'cloud9diamonds'),
                'description'       => __('A custom full withs block.', 'cloud9diamonds'),
                'render_template'   => get_template_directory() . '/gutenberg/template-blocks/full-withs-title.php',
                'icon'              => 'email-alt',
                'keywords'          => array( 'contact' ),
                'data-title'        => __('Full withs title', 'cloud9diamonds'),
            ),
            'list-block' => array(
                'name'              => 'list-block',
                'title'             => __('List block', 'cloud9diamonds'),
                'description'       => __('A custom list block.', 'cloud9diamonds'),
                'render_template'   =>  get_template_directory() . '/gutenberg/template-blocks/list-block.php',
                'icon'              => 'menu-alt',
                'keywords'          => array( 'list block' ),
                'data-title'        => __('List block', 'cloud9diamonds'),
            ),
            'presentation' => array(
                'name'              => 'presentation',
                'title'             => __('Presentation', 'cloud9diamonds'),
                'description'       => __('A custom presentation block.', 'cloud9diamonds'),
                'render_template'   =>  get_template_directory() . '/gutenberg/template-blocks/presentation.php',
                'icon'              => 'images-alt2',
                'keywords'          => array( 'presentation' ),
                'data-title'        => __('Presentation', 'cloud9diamonds'),
            ),
            'shape' => array(
                'name'              => 'shape',
                'title'             => __('Shape', 'cloud9diamonds'),
                'description'       => __('A custom shape block.', 'cloud9diamonds'),
                'render_template'   =>  get_template_directory() . '/gutenberg/template-blocks/shape.php',
                'icon'              => 'archive',
                'keywords'          => array( 'shape' ),
                'data-title'        => __('Shape', 'cloud9diamonds'),
            ),
            'made' => array(
                'name'              => 'made',
                'title'             => __('Made', 'cloud9diamonds'),
                'description'       => __('A custom made block.', 'cloud9diamonds'),
                'render_template'   =>  get_template_directory() . '/gutenberg/template-blocks/made.php',
                'icon'              => 'tagcloud',
                'keywords'          => array( 'made' ),
                'data-title'        => __('Made', 'cloud9diamonds'),
            ),
            'benefits' => array(
                'name'              => 'benefits',
                'title'             => __('Benefits', 'cloud9diamonds'),
                'description'       => __('A custom benefits block.', 'cloud9diamonds'),
                'render_template'   =>  get_template_directory() . '/gutenberg/template-blocks/benefits.php',
                'icon'              => 'tagcloud',
                'keywords'          => array( 'benefits' ),
                'data-title'        => __('Benefits', 'cloud9diamonds'),
            ),
//            'contact' => array(
//                'name'              => 'contact',
//                'title'             => __('Contact', 'cloud9diamonds'),
//                'description'       => __('A custom contact block.', 'cloud9diamonds'),
//                'render_template'   =>  get_template_directory() . '/gutenberg/template-blocks/contact.php',
//                'icon'              => 'tagcloud',
//                'keywords'          => array( 'contact' ),
//                'data-title'        => __('contact', 'cloud9diamonds'),
//            ),
        );

        // register block.
        foreach ($blocks as $block) {
            acf_register_block_type(array(
                'name' => $block['name'],
                'title' => $block['title'],
                'description' => $block['description'],
                'render_template' => $block['render_template'],
                'category' => 'formatting',
                'icon' => $block['icon'],
                'keywords' => $block['keywords'],
                'example' => array(
                    'attributes' => array(
                        'mode' => 'preview',
                        'data' => array(
                            'title' => $block['data-title'],
                            'is_preview' => true,
                        )
                    )
                )
            ));
        }
    }
}