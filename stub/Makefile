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
