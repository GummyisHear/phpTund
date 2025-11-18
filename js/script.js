function todayIs(button) {
    // html koodis nupul on data-target attribuut, millel kirjutatakse div Id kus
    // me tahame kirjutada kuupäev vastus, siin me seda leiame
    let targetId = button.getAttribute("data-target");
    let target = document.getElementById(targetId);
    const now = new Date();

    // padStart kasutame et Stringile lisada nullid algusesse, kui numbri pikkus on väiksem kui 2 täht
    let day = now.getDate().toString().padStart(2, '0');
    let month = now.getMonth().toString().padStart(2, '0');
    let year = now.getFullYear();
    let time = readableTime(now);

    console.log("Päev: ", day);
    console.log("Kuu: ", month);
    console.log("Aasta: ", year);
    console.log("Aeg: ", time);

    target.innerHTML = `${day}-${month}-${year} ${time}`;
}

function untilBirthday(button) {
    // html koodis nupul on data-target attribuut, millel kirjutatakse div Id kus
    // me tahame kirjutada kuupäev vastus, siin me seda leiame
    let targetId = button.getAttribute("data-target");
    let target = document.getElementById(targetId);

    let now = new Date();
    // minu sünnipaev (03.02) järgmises aastas (praegune aasta + 1)
    let birthday = new Date(now.getFullYear() + 1, 2, 3);
    let ms = birthday.getTime() - now.getTime();
    let paevad = ms / (1000 * 60 * 60 * 24);

    console.log("ajavahemik päevades: ", paevad);

    // Math.floor kasutatakse et me saame täisarvu
    target.innerHTML = `${Math.floor(paevad)} päevad`;
}

function readableTime(date) {
    // padStart kasutame et Stringile lisada nullid algusesse, kui numbri pikkus on väiksem kui 2 täht
    let hours = date.getHours().toString().padStart(2, '0');
    let minutes = date.getMinutes().toString().padStart(2, '0');
    let seconds = date.getSeconds().toString().padStart(2, '0');

    return `${hours}:${minutes}:${seconds}`;
}