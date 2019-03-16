var curr_slide = 1;
var curr_slide_timer = null;
var num_slides  = document.getElementsByClassName("slideshow__content").length;

var slide_width  = document.getElementsByClassName("slideshow__container")[0].offsetWidth;
console.log(slide_width);

function setupCarousel(){
    var stage  = document.getElementsByClassName("slideshow__stage")[0];
    stage.style.width = (num_slides*100)+"%";
    stage.style.visibility = "visible";

    var contents  = document.getElementsByClassName("slideshow__content");
    for(var content in contents){
        if(content.style)
        content.style.width = (1/num_slides)*100+"%";
    }
}
setupCarousel();


function updateSlides(){
    var stage = document.getElementsByClassName("slideshow__stage")[0];
    stage.style.marginLeft = -1*(curr_slide-1)*100+"%";
    var selected = document.getElementsByClassName("crsl-focus")[0];
    selected.classList.remove("crsl-focus");
    var selector = document.getElementsByClassName("crs"+curr_slide)[0];
    selector.classList.add("crsl-focus");

    var disabled_arrow = document.getElementsByClassName("crsl-disabled")[0];
    if(disabled_arrow)
        disabled_arrow.classList.remove("crsl-disabled");
    if(curr_slide == 1){
        var arrow = document.getElementsByClassName("crsl-left")[0];
        arrow.classList.add("crsl-disabled");
    }
    if(curr_slide == num_slides){
        var arrow = document.getElementsByClassName("crsl-right")[0];
        arrow.classList.add("crsl-disabled");
    }
}

function prevSlide(){
    curr_slide -= 1;
    if(curr_slide<=0)
        curr_slide = num_slides;
    updateSlides();
}
function nextSlide(){
    curr_slide += 1;
    if(curr_slide>num_slides)
        curr_slide = 1;
    updateSlides();
}

function turnSlide(slidenum){
    if(slidenum <= 0 || slidenum > num_slides){
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
    },4000);
}

set_slider_timer();

function slidePrev(){
    if(curr_slide-1 >0){
        curr_slide-=1;
    }
    updateSlides();
    clearInterval(curr_slide_timer);
    set_slider_timer();
    
}

function slideNext(){
    if(curr_slide+1 <= num_slides){
        curr_slide+=1;
    }
    updateSlides();
    clearInterval(curr_slide_timer);
    set_slider_timer();
}