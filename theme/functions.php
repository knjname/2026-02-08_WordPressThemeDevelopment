<?php

function mywptheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);
    add_theme_support('custom-logo');
    add_image_size('card-thumbnail', 640, 360, true);

    register_nav_menus([
        'primary' => 'メインメニュー',
        'footer'  => 'フッターメニュー',
    ]);
}
add_action('after_setup_theme', 'mywptheme_setup');

function mywptheme_widgets_init() {
    register_sidebar([
        'name'          => 'サイドバー',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="rounded-xl border border-gray-200 bg-white p-5">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="mb-3 text-sm font-semibold uppercase tracking-wider text-gray-500">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'mywptheme_widgets_init');

function mywptheme_enqueue_assets() {
    $manifest_path = get_template_directory() . '/dist/.vite/manifest.json';

    if (!file_exists($manifest_path)) {
        return;
    }

    $manifest = json_decode(file_get_contents($manifest_path), true);
    $dist_uri = get_template_directory_uri() . '/dist';
    $entry = $manifest['src/main.ts'] ?? null;

    if (!$entry) {
        return;
    }

    // JS
    wp_enqueue_script(
        'mywptheme-script',
        $dist_uri . '/' . $entry['file'],
        [],
        null,
        true
    );

    // CSS（Viteがmain.tsから抽出したCSS）
    if (!empty($entry['css'])) {
        foreach ($entry['css'] as $i => $css_file) {
            wp_enqueue_style(
                'mywptheme-style-' . $i,
                $dist_uri . '/' . $css_file
            );
        }
    }
}
add_action('wp_enqueue_scripts', 'mywptheme_enqueue_assets');

add_filter('excerpt_length', function () {
    return 80;
});

add_filter('excerpt_more', function () {
    return '…';
});

function mywptheme_comment($comment, $args, $depth) {
    ?>
    <li <?php comment_class(''); ?> id="comment-<?php comment_ID(); ?>">
        <div class="flex gap-4">
            <div class="shrink-0">
                <?php echo get_avatar($comment, $args['avatar_size'], '', '', ['class' => 'rounded-full']); ?>
            </div>
            <div class="flex-1">
                <div class="flex items-center gap-2">
                    <span class="text-sm font-semibold text-gray-900"><?php comment_author(); ?></span>
                    <time class="text-xs text-gray-400" datetime="<?php comment_date('c'); ?>"><?php comment_date(); ?></time>
                </div>
                <div class="mt-2 text-sm leading-relaxed text-gray-600">
                    <?php comment_text(); ?>
                </div>
                <div class="mt-2">
                    <?php
                    comment_reply_link(array_merge($args, [
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth'],
                        'before'    => '<span class="text-xs font-medium text-indigo-600 hover:text-indigo-500">',
                        'after'     => '</span>',
                    ]));
                    ?>
                </div>
            </div>
        </div>
    <?php
}
