const form = document.querySelector("form"),
    eField = form.querySelector(".nombre"),
    eInput = eField.querySelector("input"),
    pField = form.querySelector(".password"),
    pInput = pField.querySelector("input");


    pInput.onkeyup = () => {
        if (pInput.value == "") { //si  la contrase;a es correcta
            pField.classList.add("error");
        } else {
            pField.classList.remove("error");
        }
    }
    if (!eField.classList.contains("error") && !pField.classList.contains("error")) {
        window.location.href = "file:///D:/MIO/Pagina.html";
        console.log("Form Submitted!")
    }
