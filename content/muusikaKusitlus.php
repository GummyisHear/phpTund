<link rel="stylesheet" href="../style/muusikaStyle.css">

<form name="muusikaKysitlus" id="vorm">
    <h2 class="muusika-pealkiri">Muusika Küsitlus</h2>
    <table class="muusika-tabel">
        <tr>
            <td>
                <span class="question">
                    Milliseid muusikuid/ansambleid sa tead?
                </span>
                <br>
                <div class="checkboxes">
                    <div class="checkbox-item">
                        <input oninput="muusikaTead()" type="checkbox" name="esimene" id="checkbox1" value="Rammstein">
                        <label for="checkbox1">Rammstein</label>
                    </div>
                    <div class="checkbox-item">
                        <input oninput="muusikaTead()" type="checkbox" name="esimene" id="checkbox2" value="The Beatles">
                        <label for="checkbox2">The Beatles</label>
                    </div>
                    <div class="checkbox-item">
                        <input oninput="muusikaTead()" type="checkbox" name="esimene" id="checkbox3" value="Machine Girl">
                        <label for="checkbox3">Machine Girl</label>
                    </div>
                    <div class="checkbox-item">
                        <input oninput="muusikaTead()" type="checkbox" name="esimene" id="checkbox4" value="Nirvana">
                        <label for="checkbox4">Nirvana</label>
                    </div>
                </div>
            </td>
            <td id="vastus1">

            </td>
        </tr>
        <tr>
            <td>
                <label class="question" for="teine">Mida arvad muusika kuulamisest koolis?</label>
                <br>
                <textarea oninput="koolArvamus()" name="teine" id="teine" cols="30" rows="6"></textarea>
            </td>
            <td id="vastus2">

            </td>
        </tr>
        <tr>
            <td>
                <label class="question" for="kolmas">Mitu tundi päevas sa kuulad muusikat?</label>
                <br>
                <input oninput="tundidMuusika()" type="range" name="kolmas" id="kolmas" min="0" max="24" value="0">
            </td>
            <td id="vastus3">

            </td>
        </tr>
        <tr>
            <td>
                <span class="question">
                    Kas sa kuulad raadiot?
                </span>
                <br>
                <div class="checkboxes">
                    <div class="checkbox-item">
                        <input oninput="kuuladRaadiot()" type="radio" name="neljas" id="checkbox5">
                        <label for="checkbox5">Jah</label>
                    </div>
                    <div class="checkbox-item">
                        <input oninput="kuuladRaadiot()" type="radio" name="neljas" id="checkbox6">
                        <label for="checkbox6">Mõnikord</label>
                    </div>
                    <div class="checkbox-item">
                        <input oninput="kuuladRaadiot()" type="radio" name="neljas" id="checkbox7">
                        <label for="checkbox7">Ei</label>
                    </div>
                </div>
            </td>
            <td id="vastus4">

            </td>
        </tr>
        <tr>
            <td>
                <label class="question" for="viies">
                    Milliseid raadiojaamu oskad nimetada?
                </label>
                <br>
                <input oninput="radiojaamad()" type="text" name="viies" id="viies">
            </td>
            <td id="vastus5">

            </td>
        </tr>
        <tr>
            <td>
                <span class="question">
                    Millist muusikat sa kõige rohkem kuulad?
                </span>
                <br>
                <div class="checkboxes">
                    <div class="checkbox-item">
                        <input oninput="rohkemKuulad()" type="radio" name="kuues" id="radio1" value="Rock">
                        <label for="radio1">Rock</label>
                    </div>
                    <div class="checkbox-item">
                        <input oninput="rohkemKuulad()" type="radio" name="kuues" id="radio2" value="Jazz">
                        <label for="radio2">Jazz</label>
                    </div>
                    <div class="checkbox-item">
                        <input oninput="rohkemKuulad()" type="radio" name="kuues" id="radio3" value="Jungle">
                        <label for="radio3">Jungle</label>
                    </div>
                    <div class="checkbox-item">
                        <input oninput="rohkemKuulad()" type="radio" name="kuues" id="radio4" value="Breakbeat">
                        <label for="radio4">Breakbeat</label>
                    </div>
                    <div class="checkbox-item">
                        <input oninput="rohkemKuulad()" type="radio" name="kuues" id="radio5" value="DnB">
                        <label for="radio5">DnB</label>
                    </div>
                    <div class="checkbox-item">
                        <input oninput="rohkemKuulad()" type="radio" name="kuues" id="radio6" value="Atmospheric">
                        <label for="radio6">Atmospheric</label>
                    </div>
                </div>
            </td>
            <td id="vastus6">

            </td>
        </tr>
    </table>
    <input onclick="kokku()" type="button" value="Saada" id="saada">
    <input onclick="puhasta2()" type="button" value="Puhasta" id="puhasta">
    <div id="kokku">

    </div>
</form>