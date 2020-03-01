// 컨텐츠 페이지를 대상으로 실행
chrome.tabs.executeScript({
  file:"autologin.js"
}, function (result) {
  // 위의 코드가 호출된 후에, 이 함수를 호출해주세요.
  if(chrome.runtime.lastError) {
    alert("Script injection failed: " + chrome.runtime.lastError.message);
  }
});

window.addEventListener('locationchange', function(){
  console.log('location changed!');
})

