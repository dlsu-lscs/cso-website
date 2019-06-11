


$(document).ready(function(){
    console.log('playvid accessed');
    $("#btn-home-vid").click(function(){
        $(".banner-content").hide();
        $("#vid-wrapper").show();
       
        $(".banner__center").removeClass("banner__center__bg");
        console.log('play video');
    });
});