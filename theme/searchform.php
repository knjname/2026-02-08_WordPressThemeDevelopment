<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="flex">
    <label class="sr-only" for="search-field"><?php echo esc_html_x('検索:', 'label', 'mywptheme'); ?></label>
    <input
        type="search"
        id="search-field"
        name="s"
        placeholder="記事を検索..."
        value="<?php echo get_search_query(); ?>"
        class="w-full rounded-l-lg border border-r-0 border-gray-300 px-4 py-2.5 text-sm text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500"
    >
    <button type="submit" class="inline-flex items-center rounded-r-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-indigo-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/></svg>
        <span class="ml-2">検索</span>
    </button>
</form>
