import time
import subprocess
from supabase import create_client, Client

SUPABASE_URL = "https://your-supabase-project.supabase.co"
SUPABASE_KEY = "your-supabase-anon-key"
MODEL_NAME = "qwen3.5:4b"  # または gemma2:2b / qwen2.5-coder:1.5b

supabase: Client = create_client(SUPABASE_URL, SUPABASE_KEY)

def generate_ollama_response(prompt: str) -> str:
    """Ollama CLI を呼び出して回答を取得"""
    try:
        cmd = ["ollama", "run", MODEL_NAME, prompt]
        result = subprocess.run(cmd, capture_output=True, text=True, check=True)
        return result.stdout.strip()
    except Exception as e:
        return f"エラーが発生しました: {e}"

def poll_and_process():
    """未処理(status='pending')のメッセージを取得して処理"""
    try:
        # 1. 未処理メッセージを1件取得
        response = supabase.table("chat_history") \
            .select("*") \
            .eq("status", "pending") \
            .limit(1) \
            .execute()

        records = response.data
        if not records:
            return  # 未処理がなければスキップ

        record = records[0]
        rec_id = record.get("id")
        user_message = record.get("message")
        session_id = record.get("session_id")

        print(f"📥 処理開始 [ID: {rec_id}]: {user_message}")

        # 2. ステータスを processing に更新（二重実行防止）
        supabase.table("chat_history").update({"status": "processing"}).eq("id", rec_id).execute()

        # 3. Ollama で回答生成
        ai_response = generate_ollama_response(user_message)

        # 4. chat_returns へ回答を INSERT
        supabase.table("chat_returns").insert({
            "session_id": session_id,
            "response": ai_response,
            "model": MODEL_NAME
        }).execute()

        # 5. ステータスを completed に更新
        supabase.table("chat_history").update({"status": "completed"}).eq("id", rec_id).execute()
        print(f"✅ 回答送信完了!\n" + "-" * 50)

    except Exception as e:
        print(f"❌ ポーリングエラー: {e}")

def main():
    print(f"🚀 Simple Polling Agent 起動中... (Model: {MODEL_NAME})")
    print("📡 3秒おきに chat_history を確認します...\n")
    
    while True:
        poll_and_process()
        time.sleep(3)  # 3秒間隔でチェック

if __name__ == "__main__":
    main()