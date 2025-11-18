function muusikaTead() {
    let check1 = document.getElementById("checkbox1");
    let check2 = document.getElementById("checkbox2");
    let check3 = document.getElementById("checkbox3");
    let check4 = document.getElementById("checkbox4");
    let vastus = document.getElementById("vastus1");

    let ans = "Sinu valitud muusikud: ";
    if (check1.checked) {
        ans += check1.value + ", ";
    }
    if (check2.checked) {
        ans += check2.value + ", ";
    }
    if (check3.checked) {
        ans += check3.value + ", ";
    }
    if (check4.checked) {
        ans += check4.value + ", ";
    }
    vastus.innerText = ans;
}

function koolArvamus() {
    let textarea = document.getElementById("teine");
    let vastus = document.getElementById("vastus2");

    vastus.innerText = "Sinu arvamus: " + textarea.value;
}

function tundidMuusika() {
    let range = document.getElementById("kolmas");
    let vastus = document.getElementById("vastus3");

    vastus.innerText = "Sa kuulad muusikat " + range.value + " tundi päevas.";
}

function kuuladRaadiot() {
    let jah = document.getElementById("checkbox5");
    let monikord = document.getElementById("checkbox6");
    let ei = document.getElementById("checkbox7");
    let vastus = document.getElementById("vastus4");

    if (jah.checked) {
        vastus.innerText = "Sa kuulad raadiot.";
    }
    if (monikord.checked) {
        vastus.innerText = "Sa mõnikord kuulad raadiot.";
    }
    if (ei.checked) {
        vastus.innerText = "Sa ei kuula raadiot.";
    }
}

function radiojaamad() {
    let text = document.getElementById("viies");
    let vastus = document.getElementById("vastus5");
    vastus.innerText = "Sinu nimetatud jaamad: " + text.value;
}

function rohkemKuulad() {
    let radio1 = document.getElementById("radio1");
    let radio2 = document.getElementById("radio2");
    let radio3 = document.getElementById("radio3");
    let radio4 = document.getElementById("radio4");
    let radio5 = document.getElementById("radio5");
    let radio6 = document.getElementById("radio6");
    let vastus = document.getElementById("vastus6");

    if (radio1.checked) {
        vastus.innerText = "Sinu vastus: " + radio1.value;
    }
    if (radio2.checked) {
        vastus.innerText = "Sinu vastus: " + radio2.value;
    }
    if (radio3.checked) {
        vastus.innerText = "Sinu vastus: " + radio3.value;
    }
    if (radio4.checked) {
        vastus.innerText = "Sinu vastus: " + radio4.value;
    }
    if (radio5.checked) {
        vastus.innerText = "Sinu vastus: " + radio5.value;
    }
    if (radio6.checked) {
        vastus.innerText = "Sinu vastus: " + radio6.value;
    }
}

function puhasta2() {
    let form = document.getElementById("vorm");

    function clearElement(element) {
        if (element.type === "text" || element.type === "password" || element.type === "email" || element.tagName === "TEXTAREA") {
            element.value = "";
        }
        else if (element.type === "radio" || element.type === "checkbox") {
            element.checked = false;
        }
        else if (element.tagName === "SELECT") {
            element.selectedIndex = -1;
        }
        if (element.id.indexOf("vastus") !== -1) {
            element.innerHTML = "";
        }
        for (let child of element.children) {
            clearElement(child);
        }
    }

    for (let element of form.elements) {
        clearElement(element);
    }

    let vastus1 = document.getElementById("vastus1");
    let vastus2 = document.getElementById("vastus2");
    let vastus3 = document.getElementById("vastus3");
    let vastus4 = document.getElementById("vastus4");
    let vastus5 = document.getElementById("vastus5");
    let vastus6 = document.getElementById("vastus6");

    vastus1.innerText = "";
    vastus2.innerText = "";
    vastus3.innerText = "";
    vastus4.innerText = "";
    vastus5.innerText = "";
    vastus6.innerText = "";
}

function kokku() {
    if (!valideeri()) {
        return;
    }

    let kokku = document.getElementById("kokku");
    let vastus1 = document.getElementById("vastus1");
    let vastus2 = document.getElementById("vastus2");
    let vastus3 = document.getElementById("vastus3");
    let vastus4 = document.getElementById("vastus4");
    let vastus5 = document.getElementById("vastus5");
    let vastus6 = document.getElementById("vastus6");

    let ans = "Kokkuvõte: <br>";
    ans += vastus1.innerText + "<br>";
    ans += vastus2.innerText + "<br>";
    ans += vastus3.innerText + "<br>";
    ans += vastus4.innerText + "<br>";
    ans += vastus5.innerText + "<br>";
    ans += vastus6.innerText + "<br>";
    kokku.innerHTML = ans;
}

function valideeri() {
    let error  = false;
    let vastus4 = document.getElementById("vastus4");
    let vastus5 = document.getElementById("vastus5");

    return !error;
}