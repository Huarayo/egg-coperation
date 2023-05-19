const form = document.getElementById("myForm");


form.addEventListener("submit",(e)=> {
    e.preventDefault();
    validationForm()
})



function validationEmail(email) {
    const regex =  /^[^\s@]+@[^\s@]+\.[^\s@]{2,7}$/;
    return regex.test(email);
}


function validationForm() {
    const emailInput =  document.getElementById("email");
    const email = emailInput.value;

    if(!validationEmail(email)){
        alert("Please insert a valid email: CAMBIA EL CORREO FLACO");
    } else {
        alert("Todo tranca compa , portate bien , mira que te miró pa");
    }
    
}

