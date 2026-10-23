/**
 * GASのスクリプトプロパティを全取得し、Hugging FaceのSecretに一括登録・更新する
 * 
 */
function syncPropertiesToHuggingFaceSecret() {
  const scriptProperties = PropertiesService.getScriptProperties();
  const allProps = scriptProperties.getProperties();

  const hfToken = allProps['HF_TOKEN'];
  const hfUser = allProps['HF_USER'] || 'kenken999';
  const repoName = 'hutter-prize-workadventure-town';
  const spaceId = `${hfUser}/${repoName}`;

  if (!hfToken) {
    Logger.log("❌ エラー: スクリプトプロパティに 'HF_TOKEN' が設定されていません。");
    return;
  }

  Logger.log(`🚀 Hugging Face Space [${spaceId}] へのSecret同期を開始します...`);

  const ignoreKeys = ['HF_TOKEN'];
  let successCount = 0;
  let failCount = 0;

  Object.keys(allProps).forEach(key => {
    if (ignoreKeys.includes(key)) return;

    const value = allProps[key];
    const url = `https://huggingface.co/api/spaces/${spaceId}/secrets`;

    const payload = { "key": key, "value": String(value) };
    const options = {
      "method": "post",
      "contentType": "application/json",
      "headers": { "Authorization": `Bearer ${hfToken}` },
      "payload": JSON.stringify(payload),
      "muteHttpExceptions": true
    };

    try {
      const response = UrlFetchApp.fetch(url, options);
      const statusCode = response.getResponseCode();

      if (statusCode === 200 || statusCode === 201) {
        Logger.log(`✅ [成功] ${key}`);
        successCount++;
      } else {
        Logger.log(`⚠️ [失敗] ${key} - Status: ${statusCode}`);
        failCount++;
      }
    } catch (e) {
      Logger.log(`❌ [例外] ${key}: ${e.message}`);
      failCount++;
    }
  });

  Logger.log(`\n🎉 同期完了！ (成功: ${successCount} 件 / 失敗: ${failCount} 件)`);
}