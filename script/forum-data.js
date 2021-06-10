document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, {
        "format" : "dd.mm.yyyy"  
    });
});


let userEmail = getCookie('email');
//console.log(userEmail);
ajax('../core/get_user_data.php', 'POST', getUserData, {"email" : userEmail});

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}

function getUserData(result){
    result = JSON.parse(result);
    console.log(result);
    document.querySelector("#forum-name").value = result.name;
    document.querySelector("#forum-nickname").value = result.nickname;

    M.updateTextFields();
}

