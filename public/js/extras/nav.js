window.addEventListener('scroll', ()=>{
    if(window.scrollY >= 35){
        var elem = document.getElementsByClassName("nav-bar")[0];
        elem.classList.add("glued");
    }
    else{
        var elem = document.getElementsByClassName("glued")[0];
        if(elem){
            elem.classList.remove("glued");
        }
    }
})

if(window.scrollY >= 35){
    var elem = document.getElementsByClassName("nav-bar")[0];
    elem.classList.add("glued");
}
else{
    var elem = document.getElementsByClassName("glued")[0];
    if(elem){
        elem.classList.remove("glued");
    }
}