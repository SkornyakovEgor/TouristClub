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

let mas = ["../img/gallery/1.jpg",
           "../img/gallery/2.jpg",
           "../img/gallery/3.jpg",
           "../img/gallery/4.jpg",
           "../img/gallery/5.jpg",]; // массив картинок
let to = 1;  // Счетчик, указывающий на текущую картинки

function right_arrow() // Открытие следующей картинки(движение вправо)
{ 
    let obj = document.getElementById("img");
        if (to < mas.length-1)  to++ ;
        else
            to = 0;
            obj.src = mas[to];	 
}

function left_arrow() // Открытие предыдущей картинки(движение влево)
{     
    let obj = document.getElementById("img");
        if (to > 0) to--;
        else
            to = mas.length-1;
            obj.src = mas[to];	  			 
}