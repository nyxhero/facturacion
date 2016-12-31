$(document).ready(function(){
    $(".menu_opcion a").on("click",function(e){
        e.preventDefault();
    });

    $(".menu_opcion").on("click",function(){
        enlace = $(this).find("a");

        $(".menu_opcion").removeClass("active");
        $(this).addClass("active");

        $("#cuerpoPagina").waitMe();

        $("#cuerpoPagina").load("pages/contenido.php",
            {
                p: enlace.attr("href"),
                c: enlace.attr("clase"),
                t: $(this).find("a span").html(),
            }, function(){
                $("#cuerpoPagina").waitMe('reset');
        });
    });

});

