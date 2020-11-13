
window.addEventListener("DOMContentLoaded", (event) => {
    let displayByCodeBtn = document.querySelector('.card_by_code');

    displayByCodeBtn.addEventListener("click", (event) => {
        let inputByCodes = document.querySelector('#card_title').value;

        window.location = '/Jeu_de_carte?title=' + inputByCodes.substring(0, 1) + '&color='  + inputByCodes.substring(1, 2);
    });
});