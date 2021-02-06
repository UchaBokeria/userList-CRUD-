// this var pauses jquery load() at 58 line
var pause = false;
let myID = 0;

$('#edit').hover(function() {
  pause = true;
}, function() {
  pause = false;
});

function edit(){
  // toggle editmode
  pause = !pause;
  console.log("pause="+pause);
  $('.edit').toggle();
  $('.dark-bg').toggle();
  
    $('.edit').submit(function(event) {
      event.preventDefault();
      // console.log("id" + myID);
      // console.log("name" + $('#Cname').val());
      // console.log("surname" + $('#Csurname').val());
      // console.log("age" + $('#Cage').val());
      // console.log("sex" + $("input[name='Csex']:checked").val());

      var name = $('#Cname').val();
      var surname = $('#Csurname').val();
      var age = $('#Cage').val();
      var sex = $("input[name='Csex']:checked").val();

      $.ajax({
        url: 'Include/updateHandler.php',
        type: 'POST',
        data: {name: name, surname: surname,
                age: age, sex: sex,id: myID}
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

    });


}
