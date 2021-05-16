document.querySelectorAll('.modal-show').forEach(function(element){
    element.onclick = showModal;
});

document.querySelectorAll('.closeButton').forEach(function(element){
    element.onclick = closeModal;
});

/* document.querySelectorAll('.modal-wrap').forEach(function(element){
 //   console.log(element);
    element.onclick = closeModalWrap;
});
 */

function showModal(){
    let modalId = this.dataset.modal;
    document.querySelector(modalId).parentElement.classList.remove('hide');
    document.querySelector(modalId).classList.remove('hide');
}

function closeModal(){
    let modalId = this.dataset.modal;
    console.log(document.querySelector(modalId).parentElement.classList.add('hide'));
    document.querySelector(modalId).classList.add('hide');
}


/*------------------------------------------------------------------------------------------------------*/

function init(e){
    let tabBody = document.querySelectorAll('.activity-content');
    let tabKey = document.querySelectorAll('.tab');
    for(let i = (e); i < tabBody.length; i++){
        tabBody[i].style.display = "none";
        tabKey[i].classList.remove("active");
    }
}
init(1); 

let tab = document.querySelectorAll('.tab');
tab.forEach(function(element){
    element.onclick = showTabs;
});

function showTabs(){
    let data = this.getAttribute('data');
    console.log(data);
    init(0); 
    document.querySelector(`.activity-content[data ="${data}"]`).style.display = 'block';
    document.querySelector(`.tab[data ="${data}"]`).classList.add("active");
}

/*------------------------------------------------------------------------------------------------------*/