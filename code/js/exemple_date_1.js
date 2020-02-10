
function displayDate(button_id, container) {

    document.getElementById(button_id).addEventListener("click", function(event){
        container.innerHTML = new Date();
    });

}
