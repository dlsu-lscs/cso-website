var curr_slide = 1;
var curr_slide_timer = null;
var num_slides  = document.getElementsByClassName("slideshow__content").length;

var slide_width  = document.getElementsByClassName("slideshow__container")[0].offsetWidth;
// console.log(slide_width);

var stage  = document.getElementsByClassName("slideshow__stage")[0];


function jsonCopy(src) {
    return (JSON.stringify(src));
}

function setupCarousel(){
    stage  = document.getElementsByClassName("slideshow__stage")[0];

    var kids = stage.children;
    // console.log(kids);
    var firstcopy = kids[0].cloneNode(true);
    firstcopy.setAttribute('id', 'firstcopy');
    stage.append(firstcopy);
    var lastcopy = kids[kids.length-2].cloneNode(true);
    lastcopy.setAttribute('id', 'lastcopy');
    stage.insertBefore(lastcopy, kids[0]);

    stage  = document.getElementsByClassName("slideshow__stage")[0];
    stage.style.width = ((num_slides+2)*100)+"%";
    const size = kids[0].scrollWidth;
    stage.style.transform = 'translateX('+(-1*(100/(num_slides+2))*curr_slide)+'%)';
    
    // stage.style.visibility = "visible";

    var contents  = document.getElementsByClassName("slideshow__content");
    for(var content in contents){
        if(content.style)
        content.style.width = (1/num_slides)*100+"%";
    }
}
setupCarousel();


function updateSlides(){

    // var slide_width  = document.getElementsByClassName("slideshow__container")[0].offsetWidth;
    stage  = document.getElementsByClassName("slideshow__stage")[0];

    stage.style.transform = 'translateX('+(-1*(100/(num_slides+2))*curr_slide)+'%)';
    // var stage = document.getElementsByClassName("slideshow__stage")[0];
    // stage.style.marginLeft = -1*(curr_slide-1)*100+"%";
    var selected = document.getElementsByClassName("crsl-focus")[0];
    if(selected){
        selected.classList.remove("crsl-focus");
    }

    var crnum = 1;
    if(curr_slide == 0){
        crnum = num_slides;
    }
    else if(curr_slide == num_slides+1){
        crnum = 1;
    }
    else{
        crnum = curr_slide;
    }
    var selector = document.getElementsByClassName("crs"+crnum)[0];
    selector.classList.add("crsl-focus");

    // var disabled_arrow = document.getElementsByClassName("crsl-disabled")[0];
    // if(disabled_arrow)
    //     disabled_arrow.classList.remove("crsl-disabled");
    // if(curr_slide == 0){
    //     var arrow = document.getElementsByClassName("crsl-left")[0];
    //     arrow.classList.add("crsl-disabled");
    // }
    // if(curr_slide == num_slides){
    //     var arrow = document.getElementsByClassName("crsl-right")[0];
    //     arrow.classList.add("crsl-disabled");
    // }
}

function prevSlide(){
    stage.style.transition = "transform 0.4s ease-in-out";
    curr_slide -= 1;
    if(curr_slide<0)
        curr_slide = num_slides;
    updateSlides();
}
function nextSlide(){

    stage.style.transition = "transform 0.4s ease-in-out";
    curr_slide += 1;
    if(curr_slide>num_slides+1)
        curr_slide = 1;
    updateSlides();
}

function turnSlide(slidenum){
    if(slidenum < 0 || slidenum > num_slides){
        slidenum = 1;
    }
    curr_slide = slidenum;
    updateSlides();
    clearInterval(curr_slide_timer);
    set_slider_timer();
}

function set_slider_timer(){
    curr_slide_timer = setInterval(()=>{
        nextSlide();
    },10000);
}

set_slider_timer();

function slidePrev(){

    stage.style.transition = "transform 0.4s ease-in-out";
    if(curr_slide-1 >= 0){
        curr_slide-=1;
    }
    updateSlides();
    clearInterval(curr_slide_timer);
    set_slider_timer();
    
}

function slideNext(){

    stage.style.transition = "transform 0.4s ease-in-out";
    if(curr_slide+1 <= num_slides+1){
        curr_slide+=1;
    }
    updateSlides();
    clearInterval(curr_slide_timer);
    set_slider_timer();
}

stage.addEventListener('transitionend', () => {
    if(curr_slide == 0){
        stage.style.transition = "none";
        curr_slide = num_slides;
        updateSlides();
        clearInterval(curr_slide_timer);
        set_slider_timer();
    }
    else if(curr_slide == num_slides+1){
        stage.style.transition = "none";
        curr_slide = 1;
        updateSlides();
        clearInterval(curr_slide_timer);
        set_slider_timer();
    }
});
