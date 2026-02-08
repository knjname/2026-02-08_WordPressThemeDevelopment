<?php get_header(); ?>

<main id="main-content" class="bg-white">
    <div class="mx-auto max-w-3xl px-4 py-20 text-center sm:px-6 sm:py-32 lg:px-8">
        <p class="text-6xl font-extrabold text-indigo-600">404</p>
        <h1 class="mt-4 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">ページが見つかりません</h1>
        <p class="mt-4 text-lg text-gray-600">お探しのページは移動または削除された可能性があります。</p>

        <div class="mx-auto mt-8 max-w-md">
            <?php get_search_form(); ?>
        </div>

        <a href="<?php echo esc_url(home_url('/')); ?>" class="mt-8 inline-flex items-center rounded-lg bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-indigo-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/></svg>
            ホームに戻る
        </a>
    </div>
</main>

<?php get_footer(); ?>
