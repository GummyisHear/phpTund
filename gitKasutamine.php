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
echo "<li>GitHub projektiga sidumine</li>"

?>
