.DEFAULT_GOAL := copy

GIT_USER := $(shell git config --get user.name)

copy:
	@echo ""
	@echo "🚀 Paiza回答用のディレクトリを作成します！"

	@if [ -z "$(GIT_USER)" ]; then \
		echo "⚠️ Gitのユーザー名が取得できませんでした！"; \
		exit 1; \
	fi

	@echo ""
	@printf "🔢 問題番号を入力してください（例：A001）: "; \
	read CHALLENGE_ID; \
	if [ -z "$$CHALLENGE_ID" ]; then \
		echo "⚠️ 問題番号を入力してください！"; \
		exit 1; \
	fi; \
	echo ""; \
	echo "📂 作成先: challenges/$$CHALLENGE_ID/$(GIT_USER)"; \
	mkdir -p challenges/$$CHALLENGE_ID/$(GIT_USER); \
	cp -R stub/ challenges/$$CHALLENGE_ID/$(GIT_USER)/; \
	echo ""; \
	echo "✅ 完了しました！"
