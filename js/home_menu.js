$(document).ready(function(){
    $(".nav.navbar-nav > li").click(function(){
    $(".nav.navbar-nav > li").removeClass("active");
    $(this).addClass("active")
});
});