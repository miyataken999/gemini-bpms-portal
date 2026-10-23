# 🚀 gemini-bpms-portal

> **Google AI Studio (Gemini) ✕ Supabase Realtime ✕ GAS ✕ AppSheet**  
> 自社の公式Webサイトをグラウンディング（根拠）とし、0円インフラで稼働する自律型BPMSポータル基盤

---

## 💡 概要 (Overview)

`gemini-bpms-portal` は、企業が最もコストと信頼をかけて構築した **「公式Webサイト」をAIのナレッジ基盤（Grounding Source）** として活用し、社内業務タスクの自動化（BPMS）とリアルタイム回答を実現する次世代ポータルアーキテクチャです。

重いサーバーやベクターDBを契約することなく、Google Apps Script (GAS) と Supabase Realtime、Google AI Studio のエコシステムを繋ぐことで、**「開発・維持コスト実質0円」および「コンプライアンス適合率100%」** を両立します。

---

## ✨ 主な特長 (Key Features)

1. **公式Webサイト参照によるコンプライアンス100%保証**
   * Google AI Studio のグラウンディング機能を活用し、広報・法務チェック済みの自社公式Webサイトから正解を抽出。ハルシネーション（嘘の回答）やコンプラ事故を未然に防ぎます。
2. **Webサイトの更新漏れ・定休日自動監査**
   * 実務データ（カレンダーやGSS）とWebサイトの表記内容を照合し、臨時休業や古い規約が放置されている場合に「サイトの更新漏れ」をリアルタイムで検知・アラート通知します。
3. **中央集中型スクリプトプロパティ（環境変数ガバナンス）**
   * 全100項目以上のAPIキー・トークンをGASスクリプトプロパティに集約。`syncPropertiesToHuggingFaceSecret` 経由で Hugging Face Spaces や外部バックエンドへ一発同期します。
4. **「そこだけView」＆ Mermaid フロー自動描画**
   * 複雑なエラーや承認待ちタスクをカード化してワンタップで補正・通知。Supabase Realtime バスを通じて、画面側に動的な Mermaid 業務フロー図を瞬時に描画します。

---

## 🔄 アーキテクチャ概略 (Architecture)

```mermaid
graph TD
    classDef user fill:#1e293b,stroke:#3b82f6,stroke-width:2px,color:#fff;
    classDef central fill:#312e81,stroke:#818cf8,stroke-width:2px,color:#fff;
    classDef sync fill:#064e3b,stroke:#34d399,stroke-width:2px,color:#fff;
    classDef backend fill:#701a75,stroke:#f472b6,stroke-width:2px,color:#fff;

    U["👤 司令塔 / ユーザー<br>（指示・質問入力）"]
    class U user

    subgraph CentralGovernance ["🔐 ガバナンス中央金庫"]
        GAS_PROP["⚙️ GAS スクリプトプロパティ<br>中央環境変数管理"]
        class GAS_PROP central
    end

    subgraph SyncEngine ["⚡ 自動同期パイプライン"]
        SYNC_SCRIPT["📜 syncPropertiesToHuggingFaceSecret"]
        class SYNC_SCRIPT sync
    end

    subgraph AI_Core ["🤖 AI チーム & バックエンド"]
        HF["🤗 Hugging Face Space<br>Secrets 一括同期済"]
        AISTUDIO["🧠 Google AI Studio / Gemio Engine<br>公式Webサイト参照 (Grounding)"]
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
    SB -->|応答 & Mermaid描画| FRONT
