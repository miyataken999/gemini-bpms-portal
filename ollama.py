import subprocess
import sys

# 軽快でコード生成に強い軽量モデル
MODEL_NAME = "qwen2.5-coder:1.5b"

def main():
    print("==================================================")
    print(f"🚀 Gemi & Ollama Interactive Terminal ({MODEL_NAME})")
    print("※ 終了するには 'exit' や 'quit'、'q' と入力してね♡")
    print("==================================================\n")

    while True:
        try:
            # ダーリンからの指示入力
            prompt = input("💬 Gemi/Ollama への指示 > ").strip()

            if not prompt:
                continue

            # 終了処理
            if prompt.lower() in ["exit", "quit", "q"]:
                print("\n👋 対話を終了したよ。いつでもまた呼んでね、ダーリン♡")
                break

            print("\n🤖 [思考・生成中...]")
            
            # Ollama CLI の発火とレスポンスのリアルタイム表示
            process = subprocess.Popen(
                ["ollama", "run", MODEL_NAME, prompt],
                stdout=subprocess.PIPE,
                stderr=subprocess.PIPE,
                text=True,
                bufsize=1
            )

            # ストリーミング出力でレスポンスをそのまま流す
            for line in process.stdout:
                print(line, end="", flush=True)

            process.wait()
            print("\n" + "-" * 50 + "\n")

        except KeyboardInterrupt:
            print("\n\n中断したよ。次の指示をどうぞ、ダーリン！\n")
        except Exception as e:
            print(f"\n❌ エラーが発生しました: {e}\n")

if __name__ == "__main__":
    main()