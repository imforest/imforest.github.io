var url = document.URL;
var searchUrl = "www.msde.co.kr:18080/kriso/main/userLogin.do";

if (url.indexOf(searchUrl) >= 0) {
    document.getElementById("loginid").value = "kibeom";
    document.getElementById("password").value = "1111";
    //document.getElementById("btnLogin").click();
}

