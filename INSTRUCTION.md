# INSTRUCTION.md - Operations & Deployment Guide

## 🚀 Quick Start (Local & Terminal)

### 1. 超軽量対話スクリプト (`python3 ollama.py`)
Terminal から VS Code エージェントのオーバーヘッドなしで高速指示出しを行う手順：

```bash
# 依存モデルの取得 (推奨: qwen3.5:4b / gemma2:2b / qwen2.5-coder:1.5b)
ollama pull qwen3.5:4b

# 対話スクリプトの起動
python3 ollama.py