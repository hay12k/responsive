$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
    });

    // toggle manu/navbarscript
    $('.menu-brn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-brn i').toggleClass("active");
    });
    //  typing Animation script
var typed = new Typed(".typing", {
    strings: [ "Developer", "YouTuber", "Designer"],
    typeSpeed: 50,
    backSpeed: 60,
    loop: true

  });

  var typed = new Typed(".typing_2", {
    strings: [ "Developer", "YouTuber", "Designer"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true

  });
});


