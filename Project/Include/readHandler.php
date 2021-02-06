<?php
  include_once "autoClassLoader.php";
  $display = new View();
  $result = $display->read();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Read</title>
  </head>
  <body>
    <script>
      $('.edit').hide();
      $('.dark-bg').hide();

      $('.dark-bg').click(function(event) {
        pause = !pause;
        $('.dark-bg').hide();
        $('.edit').hide();
      });
    </script>

    <div class='dark-bg'></div>
    <form class='edit'>
      <h1> ინფორმაციის ცვლილება </h1>
      <input type='text' placeholder='სახელი' id='Cname'>
      <input type='text' placeholder='გვარი' id='Csurname'>
      <input type='number' placeholder="ასაკი" id='Cage'>

      <div class='gender'>
        <label for='male'>
          <input type='radio' name='Csex' value='1' id='male' checked>
          <p>მამრობითი</p>
        </label>

        <label for='female'>
          <input type='radio' name='Csex' value='2' id='female' >
          <p>მდედრობითი</p>
        </label>
      </div>

      <div class='save'>
        <button class='agree' type='submit' onclick='edit()'>ცვლილება</button>
        <button class='decline' type='button' onclick='edit()'>გაუქმება</button>
      </div>
    </form>

  </body>
</html>

<?php
  foreach ($result as $value) {
    echo "<div class='box'>
            <img src='assets/remove.png' onclick='remove(" . $value["id"] . ")' id='remove'>
            <i class='material-icons' onclick='myID= " . $value["id"] . ";edit()' id='edit'>edit</i>
            <div class='info'>
              <p> <b>ID: </b>" . $value["id"] . " </p>
              <p> <b>სრული სახელი: </b>" . $value["name"] . " " . $value["surname"] . " </p>
              <p> <b>ასაკი: </b>" . $value["age"] . " </p>
              <p> <b>სქესი: </b>" . $value["sex"] . " </p>
            </div>
          </div>";
  }
?>
