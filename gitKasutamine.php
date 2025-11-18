<?php
echo "<h2>GIT käsud</h2>";
echo "<ol>";
echo "<li>Repo loomine</li>";
echo "<pre>git init</pre>";
?>

<li>Konfigureerimine</li>
<pre>
git config --global user.name "Artjom Põldsaar"
git config --global user.email "artjompoldsaar@gmail.com"
git config --global --list
</pre>
<li>SSH võti loomine</li>
<pre>
    ssh-keygen -o -t rsa -C "artjompoldsaar@gmail.com"
</pre>
id_rsa.pub võti kooperitakse GitHub'i nagu Deploy Key

<li>
    Jälgimise lisamine ja commit'i tegemine
</li>

<pre>
    git status
    git add .
    git commit -a -m "commiti tekst"
    git push
</pre>

<?php
echo "<li>GitHub projektiga sidumine</li>";
echo "<pre>";
echo "git remote add origin git@github.com:GummyisHear/phpTund.git
git branch -M main
git push -u origin main";
echo "</pre>";

echo "<li>Projekti kloonimine desktopi.<br>
 * Kontrolli, et id_rsa võti on olemas .ssh kaustas.<br>
 * GIT CMD on lahti ja<br>
<pre>
    git clone git@github.com:GummyisHear/phpTund.git
</pre>
</li>";
echo "</ol>";

?>
