$('#remove').hover(function() {
  pause = true;
}, function() {
  pause = false;
});

function remove(user_id){
  $.ajax({
    url: "Include/deleteHandler.php",
    type: "GET",
    data: {id: user_id}
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
}
