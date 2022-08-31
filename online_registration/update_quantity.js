
$("selector").change(function(){
    alert("The text has been changed.");
  });

  $('select').on('change',(event) => {
    alert( event.target.value );
});