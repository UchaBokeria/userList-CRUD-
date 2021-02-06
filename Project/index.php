<?php include_once "Include/autoClassLoader.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="Style/defaults.css">
    <link rel="stylesheet" href="Style/index.css">

    <script src='Js/update.js'></script>
    <script src='Js/delete.js'></script>

    <title>this is a title</title>
    <meta charset="utf-8">
  </head>
  <body>
    <div class="Menu">
      <a href="#List" id="list"><i class="fa fa-user"></i> სია</a>
      <a href="#Create" id="create"><i class="fa fa-user-plus"></i> ახალი</a>
    </div>

    <div id="content" class="list">
      <p class="center">ჩატვირთვა..</p>
    </div>

    <div class="create">
      <form id="createForm">
        <input type="text" name="name" required placeholder="სახელი" id="name" maxlength="222"> <br>
        <input type="text" name="surname" required placeholder="გვარი" id="surname" maxlength="222"> <br>
        <input type="number" name="age" required placeholder="ასაკი" min="1" max="150" id="age"> <br>

        <label for="male">
          <input type="radio" name="sex" value="1" id='male'>
          <p>მამრობითი</p>
        </label>

        <br>
        <label for="female">
          <input type="radio" name="sex" value="2" id='female'>
          <p>მდედრობითი</p>
        </label>

        <br>
        <button type="submit">Create</button>
      </form>

      <div id="complete"></div>
    </div>


    <script>
      $('.create').hide();

      // READ
      $(document).ready(function(){
        interval = setInterval(function(){
          if(pause == false)
            $('#content').load("Include/readHandler.php");
        }, 300);

        // navigation
        $('#create').click(function() {
          $('.list').hide();
          $('.create').show();
        });
        $('#list').click(function() {
          $('.create').hide();
          $('.list').show();
        });

        // CREATE
        $('#createForm').submit(function(event) {
          event.preventDefault();

          var name = $('#name').val();
          var surname = $('#surname').val();
          var age = $('#age').val();
          var sex = $("input[name='sex']:checked").val();

          $.ajax({
            url: "Include/createHandler.php",
            type: "POST",
            data: {name: name,surname: surname,age: age,sex: sex}
          })
          .done(function() {
            console.log("success");
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });


          name = $('#name').val("");
          surname = $('#surname').val("");
          age = $('#age').val("");

          $('.create').hide();
          $('.list').show();
        });
      });
    </script>

  </body>
</html>
