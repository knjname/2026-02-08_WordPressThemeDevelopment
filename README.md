# mywptheme

WordPress カスタムテーマ。SaaS サービス・サポートサイト風のデザイン。

## 技術スタック

- **WordPress** — テーマエンジン
- **Vite 6** — フロントエンドビルド
- **Tailwind CSS v4** — ユーティリティファーストCSS
- **SCSS** (sass-embedded) — カスタムスタイル
- **TypeScript 5** — フロントエンド JS
- **Docker Compose** — ローカル開発環境 (WordPress + MySQL)

## セットアップ

```bash
# ツールバージョン (mise)
mise install

# 依存関係インストール
pnpm install

# フロントエンドビルド
pnpm build

# WordPress + MySQL 起動
docker compose up -d
```

http://localhost:8080 にアクセスし、WordPress 初期設定後「外観 → テーマ」で `mywptheme` を有効化。

## 開発

```bash
# ウォッチモード（CSS/TS/SCSS 変更時に自動ビルド）
pnpm dev

# 本番ビルド
pnpm build
```

ビルド成果物は `theme/dist/` に出力され、`functions.php` が Vite の `manifest.json` を読んで WordPress にアセットを登録します。

## ディレクトリ構成

```
src/                  フロントエンドソース (TS, CSS, SCSS)
theme/                WordPress テーマファイル
  ├── dist/           Vite ビルド出力 (gitignore)
  ├── functions.php   テーマ設定 + アセット読み込み
  ├── header.php      ヘッダー (スティッキーナビ)
  ├── index.php       フロントページ (ランディング)
  ├── single.php      個別投稿テンプレート
  ├── page.php        固定ページテンプレート
  ├── footer.php      フッター
  └── style.css       テーマメタ情報
compose.yaml          Docker Compose 設定
```

## DB 接続情報

| 項目 | 値 |
|------|-----|
| Host | localhost:3306 |
| User | wordpress |
| Password | wordpress |
| Database | wordpress |
