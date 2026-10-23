/**
 * ライブラリ内の Sidebar.html を読み込んで評価し、HTMLOutput を返す関数
 * @param {Object} data - サイドバーへ渡したい変数
 * @return {HtmlOutput} 評価済みの HTML オブジェクト
 */
function getSidebarOutput(data) {
  const template = HtmlService.createTemplateFromFile('resources/views/Sidebar');
  template.data = data || { user: "ゲスト", mode: "Default" };
  
  return template.evaluate()
    .setTitle('BPM Library Sidebar')
    .setXFrameOptionsMode(HtmlService.XFrameOptionsMode.ALLOWALL);
}

/**
 * 呼び出し側スプレッドシートから直接サイドバーを起動するテスト用関数
 */
function showTestSidebar(data) {
  const htmlOutput = getSidebarOutput(data);
  SpreadsheetApp.getUi().showSidebar(htmlOutput);
}