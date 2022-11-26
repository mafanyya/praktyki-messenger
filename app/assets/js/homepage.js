import '../styles/homepage.css';

document.addEventListener('DOMContentLoaded', () =>{
    const error = document.querySelector('[data-error]');
    if(error){
        document.getElementById("background_modal").hidden = false;
        document.getElementById("login_modal").style.visibility = 'visible';
    }

})



document.getElementById("close_button").addEventListener(

    "click",
    () => {
        document.getElementById("background_modal").hidden = true;
        document.getElementById("login_modal").style.visibility = 'hidden';
    },
    false
);

document.getElementById("login_button").addEventListener(

    "click",
    () => {
        document.getElementById("background_modal").hidden = false;
        document.getElementById("login_modal").style.visibility = 'visible';
    },
    false
);