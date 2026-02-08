<footer class="border-t border-gray-200 bg-gray-50">
    <div class="mx-auto max-w-6xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <!-- ブランド -->
            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2 text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-7 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/>
                    </svg>
                    <span class="text-lg font-bold"><?php bloginfo('name'); ?></span>
                </a>
                <p class="mt-3 text-sm leading-relaxed text-gray-500">ビジネスを加速するオールインワンプラットフォーム。チームの生産性を最大化します。</p>
            </div>

            <!-- プロダクト -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-900">プロダクト</h4>
                <ul class="mt-4 space-y-3">
                    <li><a href="#features" class="text-sm text-gray-500 transition-colors hover:text-gray-900">機能一覧</a></li>
                    <li><a href="#pricing" class="text-sm text-gray-500 transition-colors hover:text-gray-900">料金プラン</a></li>
                    <li><a href="#" class="text-sm text-gray-500 transition-colors hover:text-gray-900">API ドキュメント</a></li>
                    <li><a href="#" class="text-sm text-gray-500 transition-colors hover:text-gray-900">リリースノート</a></li>
                </ul>
            </div>

            <!-- 会社情報 -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-900">会社情報</h4>
                <ul class="mt-4 space-y-3">
                    <li><a href="#" class="text-sm text-gray-500 transition-colors hover:text-gray-900">会社概要</a></li>
                    <li><a href="#" class="text-sm text-gray-500 transition-colors hover:text-gray-900">採用情報</a></li>
                    <li><a href="#" class="text-sm text-gray-500 transition-colors hover:text-gray-900">プライバシーポリシー</a></li>
                    <li><a href="#" class="text-sm text-gray-500 transition-colors hover:text-gray-900">利用規約</a></li>
                </ul>
            </div>

            <!-- サポート -->
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-900">サポート</h4>
                <ul class="mt-4 space-y-3">
                    <li><a href="#support" class="text-sm text-gray-500 transition-colors hover:text-gray-900">ヘルプセンター</a></li>
                    <li><a href="#contact" class="text-sm text-gray-500 transition-colors hover:text-gray-900">お問い合わせ</a></li>
                    <li><a href="#" class="text-sm text-gray-500 transition-colors hover:text-gray-900">ステータスページ</a></li>
                    <li><a href="#" class="text-sm text-gray-500 transition-colors hover:text-gray-900">コミュニティ</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- コピーライト -->
    <div class="border-t border-gray-200">
        <div class="mx-auto max-w-6xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="text-center text-xs text-gray-400">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
