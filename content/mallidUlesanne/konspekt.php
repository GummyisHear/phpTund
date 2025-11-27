<h2>Mobillimallid Konspekt</h2>
<p class="quote">
    Minu ülesanne oli leida veebilehe kujundusmall, mis on "responsiivne" ja töötab nii arvutis kui ka mobiiltelefonides.
    Siin selgitan, kuidas see töötab.</p>
<p>Responsiveness tähendab, et leht kohandub automaatselt igale ekraanisuurusele (telefon, tahvelarvuti, arvuti).   </p>
<h3>Paindlikud Mõõdud ja Paigutus</h3>
<p>Meie CSS kasutab fikseeritud suuruste asemel paindlikke lahendusi:</p>
<ul class="spaced-list">
    <li>Maksimaalne laius (max-width: 600px): See hoiab sisu lauaarvutis kenasti keskel ja ei lase sel liiga laiaks venida. Mobiilis täidab sisu automaatselt ekraani.</li>
    <li>Flexbox (display: flex): See paigutus juhib lehe peamisi osi. See on võtmeks, et hoida jalus (#footer) alati lehe allservas.</li>
    <li>Puutepinnad (padding ja min-width): Menüülingid on tehtud piisavalt suurteks, et neid oleks telefoniekraanil lihtne näpuga vajutada.</li>

</ul>

<h3>Meediapäringud</h3>
<p>
    <b>@media</b> on reegel, mis ütleb CSS-ile: "Kui ekraan on nii lai, kasuta neid uusi stiile." See laseb meil muuta lehe välimust kindla ekraanisuuruse jaoks.</p>

<pre>
@media (min-width: 640px) { ... }
</pre>

<p>
    See rakendub tahvelarvutites ja arvutites. Annab sisu ümber rohkem vaba ruumi (suurem polsterdus ja veeris), muutes teksti lugemise mugavamaks.
</p>

<pre>
@media (max-width: 400px) { ... }
</pre>

<p>
    See rakendub kõige kitsamatel telefoniekraanidel. Näiteks teeb see pealkirja (#header h1) veidi väiksemaks, et see mahuks kitsale alale mugavalt ära.
</p>

<h3>Kokkuvõtteks</h3>
<p>
    Meie disain on ehitatud põhimõttel "mobiil ennekõike": kõigepealt teeme lehe telefonile sobivaks ja seejärel lisame meediapäringutega detailid suurematele ekraanidele.
</p>

<h3>Pildi Näide</h3>
<p>
    Minu Anekdoodikogu disain töötab ka telefoniekraanidel.
</p>
<div class="pretty-img">
    <img src="image/mobile1.png" alt="Skriinshot">
</div>





