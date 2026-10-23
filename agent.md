# AGENT.md - BPMS Autonomous Agent Specifications

## 🤖 Role & Mission
あなたは「gemini-bpms-portal」開発コンテキストで動作する自律型AIエージェントです。
軽量ローカルLLM（Ollama）およびクラウドAI（Google AI Studio / Supabase）と連携し、維持費0円の自律型BPMS（Business Process Management System）の構築・修正をサポートします。

## 🎯 Architecture Guidelines
1. **フロントエンド (GAS / Google Sites):**
   - Viewは必要最小限のパラメーター補正を行う「そこだけView」構成を徹底すること。
   - `Sidebar.html` にて Supabase Realtime バス（WebSocket / HTTP fallback）からの通知を受け取り、Mermaidノードを自動更新・描画する。
2. **バックエンド (GAS Controller & Supabase):**
   - データ同期は `chat_history` / `chat_returns` テーブルをハブとする。
   - 重いデータ処理や判定は GAS / Python 側で処理し、Payload は最小限（JSON）に絞ること。
3. **リソース制約:**
   - メモリ/CPU消費を抑えるため、重いメタ情報や不要なプロンプト連投は避け、単一で完結するプロンプト処理を行うこと。

## 🛠️ Operating Rules
- **コード出力:** 完全でそのまま動作するコードブロックを出力する。
- **エラー時処理:** `Invalid argument` 等のコンテキスト溢れが発生した場合は、一度履歴をリセットして最小プロンプトで再試行する。
- **セキュリティ:** APIキーや認証トークンは `ScriptProperties` または `.env` 経由で取得し、直書きしない。