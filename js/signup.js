let radioButtons = document.querySelectorAll('input[type="radio"][name="hosting"]');
// Hide all forms
let allForms = document.querySelectorAll('form');
allForms.forEach(f => f.classList.add('hidden'));

radioButtons.forEach(radioButton => {
    // Add event listener to each radio button
    radioButton.addEventListener('change', () => {
        // Get the form ID from the radio button
        let formId = radioButton.getAttribute('data-form');
        let form = document.getElementById(formId);

        // Hide all forms
        let allForms = document.querySelectorAll('form');
        allForms.forEach(f => f.classList.add('hidden'));

        // Show the selected form
        form.classList.remove('hidden');
    });
});

// Solution 1: Check for element existence
let studentForm = document.getElementById('formSignUpStudent');
if (studentForm) {
    studentForm.classList.remove('hidden'); // Remove hidden class if present
}