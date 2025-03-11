# Paiza練習問題回答用リポジトリ

このリポジトリは、Paizaの練習問題の回答を管理するためのものです。

## 📁 ディレクトリ構造

```txt
.
├── .vscode/              # VSCode設定ファイル
├── challenges/           # 各問題の回答ディレクトリ
│   └── {CHALLENGE_ID}/   # 例: A001, B002など
│       └── {USER_NAME}/  # 個人の回答ディレクトリ
├── stub/                 # 新規回答用のテンプレート
│   ├── Makefile          # ビルド・実行用Makefile
│   ├── index.php         # メインプログラム
│   ├── input1.txt        # テストケース1
│   ├── input2.txt        # テストケース2
│   └── input3.txt        # テストケース3
└── .gitignore            # Git除外設定
```

## 🚀 使い方

1. 新しい問題に取り組む際は、以下のコマンドを実行します：

```bash
$ make
🚀 Paiza回答用のディレクトリを作成します！

🔢 問題番号を入力してください: A001

📂 作成先: challenges/A001/ing-chiba

✅ 完了しました！
```

2. 作成されたディレクトリに移動し、`index.php` に回答を実装します：

```bash
$ cd challenges/A001/ing-chiba

$ cat index.php
<?php
// ここに回答を実装してください
```

3. テストを実行する場合は、以下のコマンドを実行します：

```bash
$ make
🔍 index.php を実行します

📁 入力ファイルを選択してください：
1) input1.txt  2) input2.txt  3) input3.txt
選択してください: 1

📥 入力ファイル: input1.txt
📝 実行結果:
--------------------------------

（ここに実行結果が表示されます）

--------------------------------
```

4. 実装が完了したら、実行時間を記録してコミットします：

```bash
$ make commit
⏱️  実行時間を入力してください（例: 10分30秒）：
10分30秒

📝 コミットメッセージ: A001: 10分30秒

🚀 変更をプッシュします...

✅ 完了しました！
```
