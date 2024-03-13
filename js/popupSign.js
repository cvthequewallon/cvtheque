"use strict";
// POP-UP CODE
document.addEventListener('DOMContentLoaded', () => {
    //all butons of the homepage in a list    
    const buttonsList = document.querySelectorAll("button");
    //Boutons Sign Up
    const btnSignUp = document.getElementById('btnSignUp');
    const closePopupBtn = document.getElementById('closePopupBtn');
    const popup = document.getElementById('popup');
    const backgroundShadow = document.getElementById('backgroundShadow');

    //Content pop-up for modify and remove
    let titleSignUpStudent = document.getElementById("titleSignUpStudent");

    //FORM SIGN UP COMPANY
    let formSignUpCompany = document.getElementById("formSignUpCompany");
    //FORM SIGN UP STUDENT
    let formSignUpStudent = document.getElementById("formSignUpStudent");

    
    buttonsList.forEach(element => {
        if (!element.hasAttribute('button_type')) {
            return "error";
        }

        //███████ ██  ██████  ███    ██     ██    ██ ██████       ██████  ██████  ███    ███ ██████   █████  ███    ██ ██    ██ 
        //██      ██ ██       ████   ██     ██    ██ ██   ██     ██      ██    ██ ████  ████ ██   ██ ██   ██ ████   ██  ██  ██  
        //███████ ██ ██   ███ ██ ██  ██     ██    ██ ██████      ██      ██    ██ ██ ████ ██ ██████  ███████ ██ ██  ██   ████   
        //     ██ ██ ██    ██ ██  ██ ██     ██    ██ ██          ██      ██    ██ ██  ██  ██ ██      ██   ██ ██  ██ ██    ██    
        //███████ ██  ██████  ██   ████      ██████  ██           ██████  ██████  ██      ██ ██      ██   ██ ██   ████    ██             
        if (element.getAttribute('button_type') == "btnSignUpCompany") {
            element.addEventListener('click', () => {

                popup.style.display = 'table';
                backgroundShadow.classList.remove('hidden');

                // Change style of title
                titleSignUpCompany.textContent = "S'inscrire en tant qu'entreprise";

                //Show content form sign in student
                formSignUpCompany.style.display = 'block';
                
                //Hide content form sign in student 
                formSignUpStudent.style.display = 'none';
            });
        };

        //███████ ██  ██████  ███    ██     ██    ██ ██████      ███████ ████████ ██    ██ ██████  ███████ ███    ██ ████████ 
        //██      ██ ██       ████   ██     ██    ██ ██   ██     ██         ██    ██    ██ ██   ██ ██      ████   ██    ██    
        //███████ ██ ██   ███ ██ ██  ██     ██    ██ ██████      ███████    ██    ██    ██ ██   ██ █████   ██ ██  ██    ██    
        //     ██ ██ ██    ██ ██  ██ ██     ██    ██ ██               ██    ██    ██    ██ ██   ██ ██      ██  ██ ██    ██    
        //███████ ██  ██████  ██   ████      ██████  ██          ███████    ██     ██████  ██████  ███████ ██   ████    ██              
        if (element.getAttribute('button_type') == "btnSignUpStudent") {

            element.addEventListener('click', () => {
                
                popup.style.display = 'table';
                backgroundShadow.classList.remove('hidden');

                // Change style of title
                titleSignUpStudent.textContent = "S'inscrire en tant qu'étudiant";

                //Show content form sign in student
                formSignUpStudent.style.display = 'block';
                
                //Hide content form sign in company
                formSignUpCompany.style.display = 'none';
                
            });
        };
    });
    
    // ██████ ██       ██████  ███████ ███████ 
    //██      ██      ██    ██ ██      ██      
    //██      ██      ██    ██ ███████ █████   
    //██      ██      ██    ██      ██ ██      
    // ██████ ███████  ██████  ███████ ███████ 
    if (btnSignUpStudent && closePopupBtn && popup) {
        closePopupBtn.addEventListener('click', () => {
            popup.style.display = 'none';
            backgroundShadow.classList.add('hidden');
        });
    }
});