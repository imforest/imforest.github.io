//console.log('hello');

// 컨텐츠 페이지를 대상으로 실행
chrome.tabs.executeScript({
  code:'var loginid = document.getElementById("loginid").value = "kibeom";  var password = document.getElementById("password").value = "1111"; document.getElementById("btnLogin").click(); '
}, function (result) {
});
