const hamburger = document.querySelector(".hamburger");
const mobile = document.querySelector(".mobile");
const close = document.querySelector(".mobile__close");

function tabNew() {
    if(mobile.classList.contains("mobile")){
        mobile.classList.add("mobile__active");
        mobile.classList.remove("mobile");
    }else if(mobile.classList.contains("mobile__active")){
        mobile.classList.add("mobile");
        mobile.classList.remove("mobile__active")
    }

}

