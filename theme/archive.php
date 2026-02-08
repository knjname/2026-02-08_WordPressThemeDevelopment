<?php get_header(); ?>

<main id="main-content" class="bg-white">
    <div class="border-b border-gray-100 bg-gray-50/50">
        <div class="mx-auto max-w-6xl px-4 py-10 sm:px-6 sm:py-16 lg:px-8">
            <?php the_archive_title('<h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">', '</h1>'); ?>
            <?php the_archive_description('<p class="mt-3 text-lg text-gray-600">', '</p>'); ?>
        </div>
    </div>

    <div class="mx-auto max-w-6xl px-4 py-12 sm:px-6 sm:py-16 lg:px-8">
        <?php if (have_posts()) : ?>
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <?php while (have_posts()) : the_post(); ?>
                <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white transition-all hover:border-indigo-200 hover:shadow-lg hover:shadow-indigo-500/5">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="block aspect-video overflow-hidden">
                            <?php the_post_thumbnail('card-thumbnail', ['class' => 'size-full object-cover transition-transform duration-300 group-hover:scale-105']); ?>
                        </a>
                    <?php endif; ?>
                    <div class="p-6">
                        <div class="text-xs font-medium text-gray-400"><?php echo get_the_date(); ?></div>
                        <h2 class="mt-2 text-lg font-bold text-gray-900 transition-colors group-hover:text-indigo-600">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <p class="mt-2 line-clamp-3 text-sm leading-relaxed text-gray-600"><?php echo get_the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="mt-4 inline-flex items-center text-sm font-semibold text-indigo-600 transition-colors hover:text-indigo-500">
                            続きを読む
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/></svg>
                        </a>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>

            <?php the_posts_navigation(['prev_text' => '古い記事', 'next_text' => '新しい記事']); ?>
        <?php else : ?>
            <p class="text-center text-gray-500">記事が見つかりませんでした。</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
