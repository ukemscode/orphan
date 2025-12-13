let state = 0;
function change() {
    if (state == 0) {
        state = 1;
        document.getElementsByClassName("menu")[0].style.display = "block";
        // document.getElementsByClassName("menu")[0].style.transition = "2s";
    }

    else {
        state = 0;
        document.getElementsByClassName("menu")[0].style.display = "none";
        // document.getElementsByClassName("menu")[0].style.transition = "2s";
    }

}

document.getElementById("nav").onmouseleave = () => document.getElementsByClassName("menu")[0].style.display = "none";



window.onresize = (handle, e) => {
    document.getElementsByClassName("menu")[0].style.display = "none";

}


