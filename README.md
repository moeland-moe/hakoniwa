# ミューランド諸島

## 概要

「[Re:箱庭諸島](https://github.com/Sotalbireo/hakoniwa)」をベースに「[バーチャル国家ミューランド](https://moeland.moe/)」での設置用に専用カスタマイズ

## 目的・やりたいこと

### 初回リリースまでに対応
* バーチャル国家ミューランド専用カスタマイズ
	* ミューランドの素材適用
	* 独自ルール・イベント等の実装
	* 公式アカウントでのログイン対応
	* アイコン設定機能
* スマートフォン対応
	* レスポンシブ対応します
	
### 今後
* mysql対応
* live配信通知
	* メンバーの配信が始まると画面上で通知

## テスト環境

* docker image: php:7.1-apache
	
## ライセンス

* フォーク元の「GNU Affero General Public License v3.0 (GNU AGPL v3, Affero GPL v3.0)」を継承。

## 利用条件

基本的に他での利用を想定しない専用カスタマイズですが、本家ミューランドと区別が出来るような表記があれば公開してもOKとします。
公開する場合は以下の利用条件に準拠してください。

* ゲームタイトルは必ず変更してください。「ミューランド諸島」や「ミューランド諸島 本家」等の本家と混同するタイトルの使用は禁止します。
* ユーザーが簡単にアクセスできる位置（e.g. 各ページの最下部）に、本家（ https://moeland.moe ）へのリンクを明記すること。 
* ユーザーが簡単にアクセスできる位置（e.g. 各ページの最下部）に、このページ（ https://github.com/moeland-moe/hakoniwa ）へのリンクを明記すること。
* ユーザーが簡単にアクセスできる位置（e.g. 各ページの最下部）に、「Re:箱庭諸島」（ https://github.com/sotalbireo/hakoniwa ）へのリンクを明記すること。
* ライセンス「GNU Affero General Public License v3.0 (GNU AGPL v3, Affero GPL v3.0)」に準拠すること（参考：[「たくさんあるオープンソースライセンスのそれぞれの特徴のまとめ | コリス」](https://coliss.com/articles/build-websites/operation/work/choose-a-license-by-github.html#h210)）
* ゲームのトップディレクトリに本リポジトリ付属の「LICENSE」ファイルを必ず置くこと

## はうつーぷれい

1. **前提環境**：
	* HTMLサーバが動いていること
	* PHPが動作すること（仕様上バージョン7.1以降が必須）
	* "Composer"がインストール済み・実行可能であること（PHPのパッケージマネージャ）
	* "Nodejs"、"npm"がインストール済み・実行可能であること（主に開発中タスクランナーとして利用しています）
1. 任意のディレクトリ（`/var/www/html`とか）にclone
1. コンソールから`npm install`
1. `/hako-init-default.php`を参考にして、`/hako-init.php`をお好みに設定
1. ブラウザでトップディレクトリを開く
1. 指示に従い管理パスワード、ゲームデータを設定
1. (ﾟдﾟ)ｳﾏｰ


