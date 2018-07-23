//fonction de rafraichissement auto;

function reFresh() {
    location.reload(true)
}
window.setInterval("reFresh()",600000);

//fonction de simulation de l'ajax (uniquement pour les test d'intégration)

function initElement() {
    var carte = document.getElementById();
    carte.onclick = showBadge;
}

function showBadge() {
    var badge1 = document.getElementById('badge1');
    var badge2 = document.getElementById('badge2');

    if (badge1.className === badge2.className){
        badge1.className = "badge badge-success";
    }
    else if (badge1.className === "badge badge-success") {
        badge1.className = "view";
        badge2.className = "badge badge-danger";
    }else if (badge1.className === "view" && badge2.className === "badge badge-danger") {
        badge2.className = "view";
        carte.className = "view";
    }

}

// fonction ajax
/*
$.ajax({
    url : "admin/commande"
    }


)*/

// Fonction pour le checkall des tables sur la page pizzaadmin

$(document).ready(function(){
    $("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });

    $("[data-toggle=tooltip]").tooltip();
});

// AJAX de l'édition de pizza
function truc(id){

    alert(id)

    $.ajax({
        url : 'http://aioli.pizza/pizzaadmin/test',
        type : 'GET',
        dataType : 'html',
        data : 'id=' + id,

    });
}

