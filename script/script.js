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

let mas = ["../TouristClub/img/gallery/1.jpg",
           "../TouristClub/img/gallery/2.jpg",
           "../TouristClub/img/gallery/3.jpg",
           "../TouristClub/img/gallery/4.jpg",
           "../TouristClub/img/gallery/5.jpg"]; // массив картинок
let to = 0;  // Счетчик, указывающий на текущую картинки

function right_arrow(){ 
    let obj = document.getElementById("img");
        if (to < mas.length-1)  to++;
        else
            to = 0;
            obj.src = mas[to];	 
}

function left_arrow(){     
    let obj = document.getElementById("img");
        if (to > 0) to--;
        else
            to = mas.length-1;
            obj.src = mas[to];	  			 
}



/*------------------------------------------------------------------------------------------------------*/

document.querySelector("#icon").onclick = function(){
    document.querySelector("#navBlock").style.marginTop = "0px";
}
document.querySelector("#closeMenuButton").onclick = function(){
    document.querySelector("#navBlock").style.marginTop = "-1000px";
}

let prevScrollpos = window.pageYOffset;
window.onscroll = function(){
    let currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navBlock").style.top = "0";
        document.getElementById("icon").style.top = "0";
    }else{
        document.getElementById("navBlock").style.top = "-150px";
        document.getElementById("icon").style.top = "-150px";
    }
    if(document.querySelector("#navBlock").style.marginTop == "0px"){
        document.getElementById("navBlock").style.top = "0";
        document.getElementById("icon").style.top = "0";
    }
    prevScrollpos = currentScrollPos;
}


/*------------------------------------------------------------------------------------------------------*/

function init(e){
    let tabBody = document.querySelectorAll('.activity-content');
    let tabKey = document.querySelectorAll('.dot');
    for(let i = (e); i < tabBody.length; i++){
        tabBody[i].style.display = "none";
        tabKey[i].classList.remove("active");

    }
}
init(1); 

let tab = document.querySelectorAll('.dot');
tab.forEach(function(element){
    element.onclick = showTabs;
});

function showTabs(){
    let data = this.getAttribute('data');
    console.log(data);
    init(0); 
    document.querySelector(`.activity-content[data ="${data}"]`).style.display = 'block';
    document.querySelector(`.dot[data ="${data}"]`).classList.add("active");
    makeTimer();
}

let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("activity-content");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}

let timer = 0;
makeTimer(); //Создаем интервал 
function makeTimer(){
   clearInterval(timer) //Очистим интервал, это позволит прервать его работу и отменить перелистывание
   timer = setInterval(function(){
        showSlides(slideIndex);
    },10000);
 } 


 function preCacheHeros(){
    $.each(mas, function(){
        var img = new Image();
        img.src = this;
    });
};
 
$(window).load(function(){
    preCacheHeros();
});