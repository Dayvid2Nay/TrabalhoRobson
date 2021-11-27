
$(document).ready(function () {
    var cat1 = 1;
    var cat2 = 1;
    var cat3 = 1;
    var cat4 = 1;
    var cat5 = 1;

    var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    
    $(".short").hide();


    if (w <= 850) {
        $(".full").hide();
        $(".short").show();

    }else{
        $(".short").hide();
        $(".full").show();

    }

    document.body.onresize = function() {
        if (document.body.clientWidth < 850) {
            $(".full").hide();
        $(".short").show();

        }else{
            $(".short").hide();
        $(".full").show();

        }
    };


    $(".noticia2").hide();
    $(".noticia3").hide();

   function moveCard(categoria,specShort) {
    if(categoria == 1){
        $(specShort+" .noticia1").fadeOut(800, function(){
            $(specShort+" .noticia2").fadeIn(800);
        });
        console.log("passou 1");
        return 2;
    }
    else if(categoria == 2){
        $(specShort+" .noticia2").fadeOut(800,function() {
            $(specShort+" .noticia3").fadeIn(800);
        });
        console.log("passou 2");
        return 3;
    }
    else if(categoria == 3){
        $(specShort+" .noticia3").fadeOut(800,function(){
            $(specShort+" .noticia1").fadeIn(800);
        });
        console.log("passou 3");
        return 1;
    }

}

    $("#right-arrow").click(function () { 
       cat1 = moveCard(cat1 , "#noticias");
    });
    $("#left-arrow").click(function () { 
        cat1 = moveCard(cat1 , "#noticias");
    });


    $("#right-arrow1").click(function () { 
        cat2 = moveCard(cat2, "#esporte");
    });
    $("#left-arrow1").click(function () { 
        cat2 = moveCard(cat2, "#esporte");
    });

    $("#right-arrow1").click(function () { 
        cat2 = moveCard(cat3, "#jogos");
    });
    $("#left-arrow1").click(function () { 
        cat2 = moveCard(cat3, "#jogos");
    });

    $("#right-arrow1").click(function () { 
        cat2 = moveCard(cat4, "#culinaria");
    });
    $("#left-arrow1").click(function () { 
        cat2 = moveCard(cat4, "#culinaria");
    });

    $("#right-arrow1").click(function () { 
        cat2 = moveCard(cat5, "#humor");
    });
    $("#left-arrow1").click(function () { 
        cat2 = moveCard(cat5, "#humor");
    });
});