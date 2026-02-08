<?php get_header(); ?>

<main class="bg-white">
    <!-- パンくずナビ -->
    <div class="border-b border-gray-100 bg-gray-50/50">
        <div class="mx-auto max-w-3xl px-4 py-3 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-sm text-gray-500">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="transition-colors hover:text-gray-900">ホーム</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                <?php
                $ancestors = get_post_ancestors(get_the_ID());
                if (!empty($ancestors)) :
                    $ancestors = array_reverse($ancestors);
                    foreach ($ancestors as $ancestor_id) :
                ?>
                    <a href="<?php echo get_permalink($ancestor_id); ?>" class="transition-colors hover:text-gray-900"><?php echo get_the_title($ancestor_id); ?></a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                <?php
                    endforeach;
                endif;
                ?>
                <span class="truncate text-gray-900"><?php the_title(); ?></span>
            </nav>
        </div>
    </div>

    <!-- ページ本文 -->
    <article class="mx-auto max-w-3xl px-4 py-10 sm:px-6 sm:py-16 lg:px-8">
        <?php while (have_posts()) : the_post(); ?>
            <header class="mb-10">
                <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl"><?php the_title(); ?></h1>
            </header>

            <div class="prose prose-gray max-w-none prose-headings:font-bold prose-headings:tracking-tight prose-a:text-indigo-600 prose-a:no-underline hover:prose-a:underline prose-img:rounded-xl">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </article>
</main>

<?php get_footer(); ?>
