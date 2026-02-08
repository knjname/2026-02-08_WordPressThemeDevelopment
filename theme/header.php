<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('antialiased text-gray-800 bg-white'); ?>>
<?php wp_body_open(); ?>

<header class="sticky top-0 z-50 border-b border-gray-200/60 bg-white/80 backdrop-blur-lg">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
        <!-- ロゴ -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2 text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/>
            </svg>
            <span class="text-lg font-bold"><?php bloginfo('name'); ?></span>
        </a>

        <!-- デスクトップナビ -->
        <nav class="hidden items-center gap-1 md:flex">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900">ホーム</a>
            <a href="#features" class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900">機能</a>
            <a href="#pricing" class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900">料金</a>
            <a href="#support" class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900">サポート</a>
        </nav>

        <!-- CTA + モバイルメニュー -->
        <div class="flex items-center gap-3">
            <a href="#contact" class="hidden rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-indigo-500 sm:inline-flex">お問い合わせ</a>

            <!-- モバイルメニュートグル -->
            <details class="relative md:hidden">
                <summary class="flex size-10 cursor-pointer items-center justify-center rounded-lg text-gray-600 transition-colors hover:bg-gray-100 list-none [&::-webkit-details-marker]:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                </summary>
                <div class="absolute right-0 top-full mt-2 w-56 rounded-xl border border-gray-200 bg-white p-2 shadow-lg">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">ホーム</a>
                    <a href="#features" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">機能</a>
                    <a href="#pricing" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">料金</a>
                    <a href="#support" class="block rounded-lg px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">サポート</a>
                    <hr class="my-2 border-gray-100">
                    <a href="#contact" class="block rounded-lg bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white hover:bg-indigo-500">お問い合わせ</a>
                </div>
            </details>
        </div>
    </div>
</header>
