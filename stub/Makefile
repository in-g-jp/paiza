.DEFAULT_GOAL := test

test:
	@echo ""
	@echo "🔍 index.php を実行します"
	@echo ""
	@echo "📁 入力ファイルを選択してください："
	@select f in *.txt; do \
		echo ""; \
		echo "📥 入力ファイル: $$f"; \
		echo "📝 実行結果:"; \
		echo "--------------------------------"; \
		docker run -i -v $(shell pwd):/data -w /data php:8.1 php index.php < $$f; \
		echo ""; \
		echo "--------------------------------"; \
		break; \
	done

commit:
	@echo ""
	@CHALLENGE_ID=$$(basename $$(dirname $$(pwd))); \
	echo "⏱️  実行時間を入力してください（例: 10分30秒）："; \
	read TIME; \
	echo ""; \
	echo "📝 コミットメッセージ: $$CHALLENGE_ID: $$TIME"; \
	echo ""; \
	echo "🔄 mainブランチに切り替えます..."; \
	git checkout main > /dev/null 2>&1; \
	echo ""; \
	echo "⬇️  最新の変更を取得します..."; \
	git pull > /dev/null 2>&1; \
	echo ""; \
	echo "🌱 作業ブランチを作成します: feature/$$CHALLENGE_ID"; \
	git checkout -b feature/$$CHALLENGE_ID > /dev/null 2>&1; \
	echo ""; \
	git add . > /dev/null 2>&1; \
	git commit -m "$$CHALLENGE_ID: $$TIME" > /dev/null 2>&1; \
	echo "🚀 変更をプッシュします..."; \
	git push --set-upstream origin feature/$$CHALLENGE_ID > /dev/null 2>&1; \
	echo ""; \
	echo "🔗 PRページを開きます..."; \
	PR_URL="https://github.com/in-g-jp/paiza/compare/main...feature/$$CHALLENGE_ID?expand=1"; \
	open "$$PR_URL" 2>/dev/null || xdg-open "$$PR_URL" 2>/dev/null || echo "ブラウザでこのURLを開いてください: $$PR_URL"; \
	echo ""; \
	echo "🔄 mainブランチに戻ります..."; \
	git checkout main > /dev/null 2>&1; \
	echo ""; \
	echo "✅ 完了しました！"
