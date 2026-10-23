PYTHON := python3
PIP := pip3
MODEL_NAME := qwen3.5:4b

.PHONY: all help setup install pull-model run-cli run-agent clean

help:
	@echo "=================================================="
	@echo "🚀 Gemi & BPMS Local Operations Command List"
	@echo "=================================================="
	@echo " make setup       : 依存パッケージ一括インストール"
	@echo " make pull-model  : 推奨モデル (qwen3.5:4b) を取得"
	@echo " make run-cli     : 超軽量対話ターミナル (ollama.py) 起動"
	@echo " make run-agent   : Supabase ポーリング自動応答 (supabase_agent.py) 起動"
	@echo " make clean       : キャッシュ削除"
	@echo "=================================================="

setup: install pull-model

install:
	$(PIP) install --upgrade pip
	$(PIP) install supabase requests python-dotenv

pull-model:
	ollama pull $(MODEL_NAME)

run-cli:
	$(PYTHON) ollama.py

run-agent:
	$(PYTHON) supabase_agent.py

clean:
	find . -type d -name "__pycache__" -exec rm -rf {} +
