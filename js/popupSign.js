"use strict";
// POP-UP CODE
document.addEventListener('DOMContentLoaded', () => {
    //all butons of the homepage in a list    
    const buttonsList = document.querySelectorAll("button");
    //Boutons Sign In, Sign In
    const btnSignIn = document.getElementById('btnSignIn');
    const closePopupBtn = document.getElementById('closePopupBtn');
    const popup = document.getElementById('popup');
    const backgroundShadow = document.getElementById('backgroundShadow');

    //Content pop-up for modify and remove
    let titleSignInStudent = document.getElementById("titleSignInStudent");

    //FORM SIGN IN COMPANY
    let formSignInCompany = document.getElementById("formSignInCompany");
    //FORM SIGN IN STUDENT
    let formSignInStudent = document.getElementById("formSignInStudent");

    
    buttonsList.forEach(element => {
        if (!element.hasAttribute('button_type')) {
            return "error";
        }

        //███████ ██  ██████  ███    ██     ██ ███    ██      ██████  ██████  ███    ███ ██████   █████  ███    ██ ██    ██ 
        //██      ██ ██       ████   ██     ██ ████   ██     ██      ██    ██ ████  ████ ██   ██ ██   ██ ████   ██  ██  ██  
        //███████ ██ ██   ███ ██ ██  ██     ██ ██ ██  ██     ██      ██    ██ ██ ████ ██ ██████  ███████ ██ ██  ██   ████   
        //     ██ ██ ██    ██ ██  ██ ██     ██ ██  ██ ██     ██      ██    ██ ██  ██  ██ ██      ██   ██ ██  ██ ██    ██    
        //███████ ██  ██████  ██   ████     ██ ██   ████      ██████  ██████  ██      ██ ██      ██   ██ ██   ████    ██    
        if (element.getAttribute('button_type') == "btnSignInCompany") {
            element.addEventListener('click', () => {

                popup.style.display = 'table';
                backgroundShadow.classList.remove('hidden');

                // Change style of title
                titleSignInCompany.textContent = "Se connecter en tant qu'entreprise";

                //Show content form sign in student
                formSignInCompany.style.display = 'block';
                
                //Hide content form sign in student 
                formSignInStudent.style.display = 'none';
            });
        };

        //███████ ██  ██████  ███    ██     ██ ███    ██     ███████ ████████ ██    ██ ██████  ███████ ███    ██ ████████ 
        //██      ██ ██       ████   ██     ██ ████   ██     ██         ██    ██    ██ ██   ██ ██      ████   ██    ██    
        //███████ ██ ██   ███ ██ ██  ██     ██ ██ ██  ██     ███████    ██    ██    ██ ██   ██ █████   ██ ██  ██    ██    
        //     ██ ██ ██    ██ ██  ██ ██     ██ ██  ██ ██          ██    ██    ██    ██ ██   ██ ██      ██  ██ ██    ██    
        //███████ ██  ██████  ██   ████     ██ ██   ████     ███████    ██     ██████  ██████  ███████ ██   ████    ██   
        if (element.getAttribute('button_type') == "btnSignInStudent") {

            element.addEventListener('click', () => {
                
                popup.style.display = 'table';
                backgroundShadow.classList.remove('hidden');

                // Change style of title
                titleSignInStudent.textContent = "Se connecter en tant qu'étudiant";

                //Show content form sign in student
                formSignInStudent.style.display = 'block';
                
                //Hide content form sign in company
                formSignInCompany.style.display = 'none';
                
            });
        };
    });
    
    // ██████ ██       ██████  ███████ ███████ 
    //██      ██      ██    ██ ██      ██      
    //██      ██      ██    ██ ███████ █████   
    //██      ██      ██    ██      ██ ██      
    // ██████ ███████  ██████  ███████ ███████ 
    if (btnSignInStudent && closePopupBtn && popup) {
        closePopupBtn.addEventListener('click', () => {
            popup.style.display = 'none';
            backgroundShadow.classList.add('hidden');
        });
    }
});