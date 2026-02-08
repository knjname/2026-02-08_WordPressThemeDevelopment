<?php get_header(); ?>

<main class="bg-white">
    <!-- パンくずナビ -->
    <div class="border-b border-gray-100 bg-gray-50/50">
        <div class="mx-auto max-w-3xl px-4 py-3 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-sm text-gray-500">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="transition-colors hover:text-gray-900">ホーム</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                <span class="truncate text-gray-900"><?php the_title(); ?></span>
            </nav>
        </div>
    </div>

    <!-- 記事 -->
    <article class="mx-auto max-w-3xl px-4 py-10 sm:px-6 sm:py-16 lg:px-8">
        <?php while (have_posts()) : the_post(); ?>
            <header class="mb-10">
                <?php
                $categories = get_the_category();
                if (!empty($categories)) : ?>
                    <div class="mb-4 flex flex-wrap gap-2">
                        <?php foreach ($categories as $cat) : ?>
                            <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-600 transition-colors hover:bg-indigo-100">
                                <?php echo esc_html($cat->name); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl"><?php the_title(); ?></h1>

                <div class="mt-4 flex items-center gap-3 text-sm text-gray-500">
                    <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                    <span class="text-gray-300">|</span>
                    <span><?php the_author(); ?></span>
                </div>
            </header>

            <div class="prose prose-gray max-w-none prose-headings:font-bold prose-headings:tracking-tight prose-a:text-indigo-600 prose-a:no-underline hover:prose-a:underline prose-img:rounded-xl">
                <?php the_content(); ?>
            </div>

            <?php
            $tags = get_the_tags();
            if (!empty($tags)) : ?>
                <div class="mt-10 flex flex-wrap gap-2 border-t border-gray-100 pt-6">
                    <?php foreach ($tags as $tag) : ?>
                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="rounded-lg border border-gray-200 px-3 py-1 text-xs font-medium text-gray-600 transition-colors hover:border-indigo-200 hover:bg-indigo-50 hover:text-indigo-600">
                            #<?php echo esc_html($tag->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- 前後記事ナビゲーション -->
            <?php
            $prev = get_previous_post();
            $next = get_next_post();
            if ($prev || $next) : ?>
                <nav class="mt-10 grid gap-4 border-t border-gray-100 pt-8 sm:grid-cols-2">
                    <?php if ($prev) : ?>
                        <a href="<?php echo get_permalink($prev); ?>" class="group flex flex-col rounded-xl border border-gray-200 p-4 transition-all hover:border-indigo-200 hover:shadow-md">
                            <span class="text-xs font-medium text-gray-400">前の記事</span>
                            <span class="mt-1 text-sm font-semibold text-gray-900 transition-colors group-hover:text-indigo-600"><?php echo get_the_title($prev); ?></span>
                        </a>
                    <?php else : ?>
                        <div></div>
                    <?php endif; ?>
                    <?php if ($next) : ?>
                        <a href="<?php echo get_permalink($next); ?>" class="group flex flex-col rounded-xl border border-gray-200 p-4 text-right transition-all hover:border-indigo-200 hover:shadow-md">
                            <span class="text-xs font-medium text-gray-400">次の記事</span>
                            <span class="mt-1 text-sm font-semibold text-gray-900 transition-colors group-hover:text-indigo-600"><?php echo get_the_title($next); ?></span>
                        </a>
                    <?php endif; ?>
                </nav>
            <?php endif; ?>
        <?php endwhile; ?>
    </article>
</main>

<?php get_footer(); ?>
