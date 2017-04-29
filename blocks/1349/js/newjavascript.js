$(document).ready(function (){
   $("h3").click(function(){
       $(this).hide();
   }) ;
});

jQuery(document).ready(function ($) {
    
    var TopFixMenu = $("#abcd");
    var lu = $("#fixNav ul li");
    var right = $(".navbar-nav");
    
    $(window).scroll(function () {
       
        if ($(this).scrollTop() > 150) {
           
            
            TopFixMenu.css("position","fixed");
            TopFixMenu.css("top","0");
            lu.css("margin-right", "40px");
            TopFixMenu.css("z-index","999");
            TopFixMenu.css("width","100%");
            TopFixMenu.css("opacity",".8");
        } else
        {
            
            TopFixMenu.css("position","relative");
            TopFixMenu.css("opacity","1");
        }
    }

    )
})
$(document).ready(function(){
    $('.menu .menu-nav ul li a').click(function(){
       $(this).next().slideToggle();
    });
    $('.menu .menu-nav ul li .menu1 li a').click(function(){
       $(this).next().slideToggle();
    });
});
function openNav() {
    document.getElementById(".menu-nav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

