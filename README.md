## 🚀 [BPMS-001] 全フルセットパラメータによる「最小成功モデル」疎通パイプライン開通

### 概要
各AI/バックエンド基盤（GAS / Hugging Face / n8n / AppSheet / Supabase）を中央集中型スクリプトプロパティ（環境変数）で集約し、1本目の完全自動化パイプライン（YouTube BPMS）を接続・疎通確認する。

### 🔄 アーキテクチャ概略図

```mermaid
graph TD
    classDef user fill:#1e293b,stroke:#3b82f6,stroke-width:2px,color:#fff;
    classDef central fill:#312e81,stroke:#818cf8,stroke-width:2px,color:#fff;
    classDef sync fill:#064e3b,stroke:#34d399,stroke-width:2px,color:#fff;
    classDef backend fill:#701a75,stroke:#f472b6,stroke-width:2px,color:#fff;

    U["👤 ダーリン / 司令塔<br>（1の指示）"]
    class U user

    subgraph CentralGovernance ["🔐 ガバナンス中央金庫"]
        GAS_PROP["⚙️ GAS スクリプトプロパティ<br>001_001_gemiko"]
        class GAS_PROP central
    end

    subgraph SyncEngine ["⚡ 自動同期パイプライン"]
        SYNC_SCRIPT["📜 syncPropertiesToHuggingFaceSecret"]
        class SYNC_SCRIPT sync
    end

    subgraph AI_Core ["🤖 AI チーム & バックエンド"]
        HF["🤗 Hugging Face Space<br>Secrets 一括同期済"]
        AISTUDIO["🧠 Google AI Studio / Gemio<br>公式Webサイト参照 Grounding"]
        N8N["⚡ n8n / AppSheet / BPMS"]
        class HF,AISTUDIO,N8N backend
    end

    subgraph RealtimeBus ["💬 リアルタイム描画バス"]
        SB[("⚡ Supabase Realtime<br>chat_history / chat_returns")]
        FRONT["📊 スプレッドシート / Google サイト<br>Mermaid & そこだけView"]
        class SB sync
        class FRONT user
    end

    U -->|環境変数・鍵設定| GAS_PROP
    GAS_PROP -->|一括転送 API| SYNC_SCRIPT
    SYNC_SCRIPT -->|Secret 注入| HF

    U -->|指示送信| FRONT
    FRONT -->|INSERT| SB
    SB -->|Event| AISTUDIO
    AISTUDIO -->|処理・Web監査| N8N
    N8N -->|INSERT| SB
    SB -->|100の応答 & Mermaid描画| FRONT
```

---

### 🔑 1本目開通用 パラメータ構成チェックリスト
- [ ] `SUPABASE_URL` / `SUPABASE_KEY` （Realtimeバス導通）
- [ ] `HF_TOKEN` / `HF_USER` （Hugging Face 密連携）
- [ ] `APPSHEET_APP_ID` / `APPSHEET_ACCESS_KEY` （タスクDB制御）
- [ ] `N8N_API_KEY` / `GOOGLE_CHAT_WEBHOOK` （前段エラー時アラート）
- [ ] `GEMINI_API_KEY` （bpmchat.com 公式Webサイト参照・コンプラ監査）

### 🎯 次の展開 (横展開)
1. 最小構成での **`chat_history` ➔ `chat_returns`** のRealtime往復テスト。
2. Mermaidノード点灯および「サイト更新漏れ検知アラート」の確認。
3. 同一パラメータ構造での他BPMS（商品管理・問合せ等）へのテンプレート横展開。
