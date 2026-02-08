# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

WordPress カスタムテーマ。Vite + Tailwind CSS v4 + SCSS + TypeScript でフロントエンドをビルドし、Docker Compose で WordPress + MySQL のローカル環境を構築する。

## Build Commands

```bash
pnpm install          # 依存関係インストール
pnpm build            # 本番ビルド (theme/dist/ に出力)
pnpm dev              # ウォッチモード (vite build --watch)
docker compose up -d  # WordPress (localhost:8080) + MySQL (localhost:3306) 起動
docker compose down   # コンテナ停止
```

ツールバージョン管理は `mise.toml` (node@24, pnpm@10)。

## Architecture

### ビルドパイプライン

```
src/main.ts  →  Vite  →  theme/dist/assets/main-{hash}.js
  ├─ import tailwind.css        theme/dist/assets/main-{hash}.css
  └─ import custom.scss         theme/dist/.vite/manifest.json
```

- `src/tailwind.css`: `@source "../theme/**/*.php"` で PHP テンプレート内の Tailwind クラスをスキャン
- `theme/functions.php`: `manifest.json` を読み、`wp_enqueue_script/style` でアセットを登録

### WordPress テーマ構成

- `theme/functions.php` — テーマセットアップ (ナビメニュー, ウィジェット) + Vite manifest ベースのアセット読み込み
- `theme/header.php` — スティッキーナビ (backdrop-blur, モバイルメニュー)
- `theme/index.php` — SaaS ランディングページ (ヒーロー, 機能グリッド, FAQ, CTA, ブログ一覧)
- `theme/single.php` — 個別投稿 (パンくず, カテゴリ, タグ, 前後記事ナビ)
- `theme/page.php` — 固定ページ (パンくず, 階層対応)
- `theme/footer.php` — 4カラムフッター

### Docker 構成

- `compose.yaml`: WordPress (port 8080) + MySQL 8.0 (port 3306)
- `./theme` → コンテナ内 `/var/www/html/wp-content/themes/mywptheme` にマウント
- 環境変数は `.env` から読み込み

## Key Conventions

- 配色は Indigo (primary) + Gray (neutral)
- PHP テンプレートでは Tailwind ユーティリティクラスを直接使用
- `@tailwindcss/typography` の `prose` クラスで `the_content()` 出力を整形
- `custom.scss` は Tailwind では対応できない WordPress 固有スタイル (admin-bar 対応, alignment クラス等) に使用
- コンテンツは日本語
