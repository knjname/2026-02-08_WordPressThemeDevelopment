<?php
if (post_password_required()) {
    return;
}
?>

<section id="comments" class="mt-12 border-t border-gray-100 pt-10">
    <?php if (have_comments()) : ?>
        <h2 class="text-xl font-bold text-gray-900">
            <?php printf('コメント (%s)', get_comments_number()); ?>
        </h2>

        <ol class="mt-8 space-y-8">
            <?php
            wp_list_comments([
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 48,
                'callback'    => 'mywptheme_comment',
            ]);
            ?>
        </ol>

        <?php the_comments_navigation(); ?>
    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="mt-6 text-sm text-gray-500">コメントは受け付けていません。</p>
    <?php endif; ?>

    <?php
    comment_form([
        'class_form'    => 'mt-8 space-y-6',
        'title_reply'   => '<span class="text-xl font-bold text-gray-900">コメントを残す</span>',
        'label_submit'  => '送信する',
        'class_submit'  => 'inline-flex items-center rounded-lg bg-indigo-600 px-6 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-indigo-500 cursor-pointer',
        'comment_field' => '<p><label for="comment" class="block text-sm font-medium text-gray-700 mb-1">コメント</label><textarea id="comment" name="comment" rows="5" required class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"></textarea></p>',
    ]);
    ?>
</section>
