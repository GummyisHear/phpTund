<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Artjom Põldsaar PHP Tööd</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="js/script.js"></script>
</head>
<body>
<?php
// päis
include('header.php');
?>
<?php
// navigeerimismenüü
include('nav.php');
?>

<main>
  <section>
      <div class="flex-container">
          <div>
              <?php
              if (isset($_GET['link'])) {
                  include('content/'.$_GET['link']);
              } else {
                  include('content/avaleht.php');
              }
              ?>
          </div>
          <div>
              <img src="image/parrot.jpg" alt="papagoi">
              <br>
              <table class="centered button-table">
                  <tr>
                      <td><input onclick="todayIs(this)" class="button2" type="button" name="todayIsButton" value="Täna on" data-target="todayIs"></td>
                      <td><span class="text-answer" id="todayIs"></span></td>
                  </tr>
                  <tr>
                      <td>
                          <input onclick="untilBirthday(this)" class="button2" type="button" name="birthdayButton" value="Minu Sünnipäevani (03-02-2026)" data-target="untilBirthday">
                      </td>
                      <td>
                          <span class="text-answer" id="untilBirthday"></span>
                      </td>
                  </tr>
              </table>
          </div>
      </div>
  </section>
</main>

<?php
// jalus
include('footer.php');
?>

<script src="js/muusika.js"></script>
</body>
</html>