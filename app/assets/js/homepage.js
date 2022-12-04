import '../styles/homepage.css';

// const isAuth = document.getElementById('isAuth').getAttribute('data-isAuth');

// if(isAuth == "false"){

    // console.log("false")


    var username = document.getElementById('username_home').value
    console.log(username)


    document.addEventListener('DOMContentLoaded', () =>{
        const error = document.querySelector('[data-error]');
        if(error){
            document.getElementById("background_modal").hidden = false;
            document.getElementById("login_modal").style.visibility = 'visible';
        }

    })

document.getElementById("close_login").addEventListener(

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
document.getElementById("sign_in").addEventListener(

    "click",
    () => {
        document.getElementById("login_modal").style.visibility = 'visible';
        document.getElementById("register_modal").style.visibility = 'hidden';
    },
    false
);


    var reg_error = document.getElementById("reg_form_error");

    if (reg_error){
        console.log('is error')
    }


    document.getElementById("close_register").addEventListener(

        "click",
        () => {
            document.getElementById("background_modal").hidden = true;
            document.getElementById("register_modal").style.visibility = 'hidden';
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




// } else if (isAuth == "true"){
//
//     console.log("true")
//
//     document.getElementById('open_make_post').addEventListener(
//         "click",
//         () => {
//             document.getElementById("make_post").style.visibility = 'visible';
//             document.getElementById("make_post_btn").style.visibility = 'hidden';
//
//         },
//         false
//     )
//
// }









