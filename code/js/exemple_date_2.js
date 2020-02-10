
/**
 * Affiche la date actuelle et la met à jour toutes les secondes
 *
 * @param container l'élément du DOM où il faut afficher la date actuelle
 */
function displayDateInRealTime(container) {

    container.innerHTML = new Date();

    // on met à jour la date toutes les 1000ms = 1s
    setTimeout(() => {
        displayDateInRealTime(container);
    }, 1000);

}

/**
 * Une autre façons d'écrire les fonctions en paramètres
 *
 * @param container l'élément du DOM où il faut afficher la date actuelle
 */
function displayDateInRealTime2(container) {

    container.innerHTML = new Date();

    // on met à jour la date toutes les 1000ms = 1s
    setTimeout(function() {
        displayDateInRealTime(container);
    }, 1000)

}
