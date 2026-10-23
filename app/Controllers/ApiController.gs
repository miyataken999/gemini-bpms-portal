/**
 * 外部 Webhook や API 呼び出しの受信
 */
function doPost(e) {
  try {
    const contents = JSON.parse(e.postData.contents);
    Logger.log("📩 POST 受信データ: " + JSON.stringify(contents));

    if (contents.action === "alert") {
      sendGoogleChatAlert(contents.message);
    }

    return ContentService.createTextOutput(JSON.stringify({ status: "success", received: contents }))
      .setMimeType(ContentService.MimeType.JSON);
  } catch (error) {
    return ContentService.createTextOutput(JSON.stringify({ status: "error", message: error.toString() }))
      .setMimeType(ContentService.MimeType.JSON);
  }
}

/**
 * 前段エラー時の Google Chat Webhook ワンタップ通知
 */
function sendGoogleChatAlert(messageText) {
  const webhookUrl = PropertiesService.getScriptProperties().getProperty('GOOGLE_CHAT_WEBHOOK');
  if (!webhookUrl) return;

  const payload = { "text": "⚠️ 【BPMS アラート通知】\n" + messageText };
  
  UrlFetchApp.fetch(webhookUrl, {
    method: "post",
    contentType: "application/json",
    payload: JSON.stringify(payload)
  });
}