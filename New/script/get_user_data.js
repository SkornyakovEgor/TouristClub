document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, {
        "format" : "dd.mm.yyyy"  
    });
});


let userEmail = getCookie('email');
console.log(userEmail);
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
    
    document.querySelector("#signup-name").value = result.name; 
    document.querySelector("#signup-email").value = result.email; 
    document.querySelector("#signup-pass").value = result.password; 
    document.querySelector("#signup-birthday").value = result.birthday; 
    document.querySelector("#forum-name").value = result.name; 

    let sex = document.querySelectorAll('.sex');
    sex.value = result.sex;

    console.log(sex.value);
    
    if(sex.value == 'male'){
        document.querySelector('input[value="male"]').checked = true;
    }
    else if(sex.value == 'female'){
        document.querySelector('input[value="female"]').checked = true;
    }
    else{
        document.querySelector('input[value="other"]').checked = true;
    }
}

document.querySelector("#signup-submit").onclick = function(event){
    event.preventDefault();
    let updateSex = document.querySelectorAll('.sex');
    for(let j = 0; j<updateSex.length; j++){
        if (updateSex[j].checked){
            updateSex = updateSex[j].value;
            break;
        }
    }
    let updateData = {
        "email" : userEmail,
        "name" : document.querySelector("#signup-name").value, 

        "pass" : document.querySelector("#signup-pass").value, 
        "birthday" : document.querySelector("#signup-birthday").value, 
        "sex" : updateSex,
    } 
    ajax('core/update_user_data.php', 'POST', updateUserData, updateData);
}

function updateUserData(result){
    console.log(result);
    if (result == 1){
        alert('Данные успешно обновлены!')
    }
    else{
        alert('Ошибка обновления :(')
    }
}

