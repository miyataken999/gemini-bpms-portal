/**
 * Web App アクセス時の HTML 配信エンドポイント
 */
function doGet(e) {
  const template = HtmlService.createTemplateFromFile('resources/views/Sidebar');
  template.data = {
    supabaseUrl: PropertiesService.getScriptProperties().getProperty('SUPABASE_URL'),
    supabaseKey: PropertiesService.getScriptProperties().getProperty('SUPABASE_KEY')
  };
  
  return template.evaluate()
    .setTitle('gemini-bpms-portal')
    .setXFrameOptionsMode(HtmlService.XFrameOptionsMode.ALLOWALL);
}