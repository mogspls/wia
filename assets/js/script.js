$(document).ready(function(){
    var scene = document.getElementById("scene");
    var parallaxInstance = new Parallax(scene);
    
    // The Modal
    $("a#openVideo").on('click', function(){
        $("#modal").fadeToggle();
    });
    $("#modal").on('click', function(){
        $(this).fadeToggle();
    });
})