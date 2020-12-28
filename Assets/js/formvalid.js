function validateForm() {
    var x = document.forms["myForm"]["KullaniciAdi"].value;
    var y = document.forms["myForm"]["Kullanıcıemail"].value;
    var z = document.forms["myForm"]["Kullanicisifre"].value;
    if (x == "" || y == "" || z == "") {
        alert("Name must be filled out");
        return false;
    }
}