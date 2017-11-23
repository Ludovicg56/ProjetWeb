/*gt_function.js*/

//attendre que toute la page soit chargée
$(document).ready(function () {

    $("#gt_carousel").carousel({
        interval: 1500,
        pause: false
    });

    $("#balise3").hide();
    $("#balise1").on(
            'mouseover', function () {
                $("#balise4").css({
                    'color': 'red',
                    'font-weight': 'bold'
                }),
                        $("#balise3").show();
            })

            .on(
                    'mouseout', function () {
                        $("#balise4").css({
                            'color': 'blue',
                            'font-weight': 'bold'
                        }),
                        $("#balise3").hide();
                    });







    $("#lien1,#lien2,#lien3").hide();
    $("#lien4").click(function () {
        $("#lien1").show();
        $("#lien1").hover(function () {
            $("#lien2,#lien3").show();
        });

    });

    $("#lien3").hover(function () {
        $("#lien1,#lien3,#lien2").hide();
    });



    $("#coucou").hide();

    $("#clic_couleur").click(function () {
        $(".clic").css("color", "red");
        $("#coucou").show();
        $("#ajoutclasse").addClass("txtBleu");
    });


});