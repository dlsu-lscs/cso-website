window.addEventListener('scroll', ()=>{
    console.log(window.scrollY);
    if(window.scrollY >= 645){
        var elem = document.getElementsByClassName("socialcontent")[0];
        elem.classList.add("socialglue");
    }
    else{
        var elem = document.getElementsByClassName("socialglue")[0];
        if(elem){
            elem.classList.remove("socialglue");
        }
    }
})

if(window.scrollY >= 645){
    var elem = document.getElementsByClassName("socialcontent")[0];
    elem.classList.add("socialglue");
}
else{
    var elem = document.getElementsByClassName("socialglue")[0];
    if(elem){
        elem.classList.remove("socialglue");
    }
}