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
	echo "📝 コミットメッセージ: $$CHALLENGE_ID: $$TIME"; 
	echo ""; \
	git add .; \
	git commit -m "$$CHALLENGE_ID: $$TIME"; \
	echo ""; \
	echo "🚀 変更をプッシュします..."; \
	git push; \
	echo ""; \
	echo "✅ 完了しました！"
