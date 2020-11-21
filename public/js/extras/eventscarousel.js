var curr_slide = 1;
var curr_slide_timer = null;
var num_slides  = document.getElementsByClassName("carousel-items")[0].children.length;

// var slide_width  = document.getElementsByClassName("slideshow__container")[0].offsetWidth;
var slide_width  = document.getElementsByClassName("carousel-items")[0].children[0].offsetWidth;
// console.log(slide_width);

var stage  = document.getElementsByClassName("carousel-items")[0];


function setupCarousel(){
    // stage  = document.getElementsByClassName("carousel-items")[0];

    // var kids = stage.children;
    // // console.log(kids);
    // var firstcopy = kids[0].cloneNode(true);
    // firstcopy.setAttribute('id', 'firstcopy');
    // stage.append(firstcopy);
    // var lastcopy = kids[kids.length-2].cloneNode(true);
    // lastcopy.setAttribute('id', 'lastcopy');
    // stage.insertBefore(lastcopy, kids[0]);

    // stage  = document.getElementsByClassName("carousel-items")[0];
    // // stage.style.width = ((num_slides+2)*100)+"%";
    // const size = kids[0].scrollWidth;
    // stage.style.transform = 'translateX(0px)';
    
    // // stage.style.visibility = "visible";

    // var contents  = document.getElementsByClassName("carousel-items");
    // for(var content in contents){
    //     if(content.style)
    //     content.style.width = (1/num_slides)*100+"%";
    // }
}
setupCarousel();


function updateSlides(){

    stage  = document.getElementsByClassName("carousel-items")[0];

    stage.style.transform = 'translateX('+(-240*curr_slide)+'px)';
}

function turnSlide(slidenum){
    if(slidenum < 0 || slidenum > num_slides){
        slidenum = 1;
    }
    curr_slide = slidenum;
    updateSlides();
}

function slidePrev(){

    stage.style.transition = "transform 0.4s ease-in-out";
    if(curr_slide-1 >= 0){
        curr_slide-=1;
    }
    updateSlides();
}

function slideNext(){
    stage.style.transition = "transform 0.4s ease-in-out";
    if(curr_slide+6 <= num_slides){
        curr_slide+=1;
    }
    updateSlides();
}

var statex = 0;
var currentx = 0;

carousel = document.getElementsByClassName("carousel-items")[0];
carousel.onmousedown = function(event) {
    event.preventDefault(); // prevent selection start (browser action)

    let shiftX = event.clientX;
    // shiftY not needed, the thumb moves only horizontally

    document.addEventListener('mousemove', onMouseMove);
    document.addEventListener('mouseup', onMouseUp);
    document.addEventListener('ontouchend', onTouchUp);
    document.addEventListener('touchstart', onTouchMove);
    
    function onMouseMove(event) {
        let leftmove = event.clientX - shiftX;
        let newLeft = statex+leftmove;
        if(newLeft >= -250*(num_slides-5) && newLeft <= 0){
        currentx = leftmove;
        
        stage.style.transform = 'translateX('+newLeft+'px)';
        // // the pointer is out of slider => lock the thumb within the bounaries
        // if (newLeft < 0) {
        // newLeft = 0;
        // }
        // let rightEdge = slider.offsetWidth - thumb.offsetWidth;
        // if (newLeft > rightEdge) {
        // newLeft = rightEdge;
        // }

        // thumb.style.left = newLeft + 'px';
        console.log(newLeft);
        }
    }
    function onTouchMove(event) {

        let leftmove = event.touches[0].clientX - shiftX;
        let newLeft = statex+leftmove;
        if(newLeft >= -250*(num_slides-5) && newLeft <= 0){
        currentx = leftmove;
        
        stage.style.transform = 'translateX('+newLeft+'px)';
        console.log(newLeft);
        }
    }
    

    function onMouseUp() {
        statex += currentx;
        document.removeEventListener('mouseup', onMouseUp);
        document.removeEventListener('mousemove', onMouseMove);
        document.removeEventListener('ontouchend', onTouchUp);
        document.removeEventListener('touchstart', onTouchMove);
    }

    function onTouchUp(){
        statex += currentx;
        document.removeEventListener('mouseup', onMouseUp);
        document.removeEventListener('mousemove', onMouseMove);
        document.removeEventListener('ontouchend', onTouchUp);
        document.removeEventListener('touchstart', onTouchMove);
    }
};