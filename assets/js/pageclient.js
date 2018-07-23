
//fonction qui me permet d'affecter la bonne hauteur a ma div
function adpaterALaTailleDeLaFenetre(){

    //recupere la hauteur de ma fenetre

    var hauteur = document.documentElement.clientHeight;


    //je recupere l'id de ma div
    // et lui affecte deus fois la hauteur de ma fenetre que je divise par deux

    var source = document.getElementById('historiqueCommande'); // récupère l'id source

    source.style.height = hauteur+ hauteur/2 +'px'; // applique la hauteur de la page



}



// Une fonction de compatibilité pour gérer les évènements

function addEvent(element, type, listener){

    if(element.addEventListener){

        element.addEventListener(type, listener, false);

    }else if(element.attachEvent){

        element.attachEvent("on"+type, listener);

    }

}



// On exécute la fonction une première fois au chargement de la page

addEvent(window, "load", adpaterALaTailleDeLaFenetre);

// Puis à chaque fois que la fenêtre est redimensionnée

addEvent(window, "resize", adpaterALaTailleDeLaFenetre);

