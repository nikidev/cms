$().ready(function() {  
  

//for moving elements up and down
$('.up-button').click(function(){
  $('#orderSelect option:selected:first-child').prop("selected", false);
  before = $('#orderSelect option:selected:first').prev();
    $('#orderSelect option:selected').detach().insertBefore(before);

});

$('.down-button').click(function(){
  $('#orderSelect option:selected:last-child').prop("selected", false);
  after = $('#orderSelect option:selected:last').next();
    $('#orderSelect option:selected').detach().insertAfter(after);
}); 


    
  });  






/*if up-button is pressed
	value = categoryOrder + 1


if down-button is pressed
	value = categoryOrder - 1*/