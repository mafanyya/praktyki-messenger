import '../styles/homepage.css';

document.addEventListener('DOMContentLoaded', () =>{
    const error = document.querySelector('[data-error]');
    if(error){
        document.getElementById("background_modal").hidden = false;
        document.getElementById("login_modal").style.visibility = 'visible';
    }

})

const isValid = document.getElementById('register_error').getAttribute('data-isValid');

if(isValid == "false"){
    document.getElementById("background_modal").hidden = false;
    document.getElementById("register_modal").style.visibility = 'visible';
}



document.getElementById("close_login").addEventListener(

    "click",
    () => {
        document.getElementById("background_modal").hidden = true;
        document.getElementById("login_modal").style.visibility = 'hidden';
    },
    false
);

document.getElementById("close_register").addEventListener(

    "click",
    () => {
        document.getElementById("background_modal").hidden = true;
        document.getElementById("register_modal").style.visibility = 'hidden';
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

document.getElementById("sign_up_home") .addEventListener(

    "click",
    () => {
        document.getElementById("background_modal").hidden = false;
        document.getElementById("register_modal").style.visibility = 'visible';
    },
    false
);

document.getElementById("sign_up") .addEventListener(

    "click",
    () => {
        document.getElementById("register_modal").style.visibility = 'visible';
        document.getElementById("login_modal").style.visibility = 'hidden';
    },
    false
);

document.getElementById("sign_in").addEventListener(

    "click",
    () => {
        document.getElementById("login_modal").style.visibility = 'visible';
        document.getElementById("register_modal").style.visibility = 'hidden';
    },
    false
);