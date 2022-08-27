function toggleLike(id){
    if (document.getElementById(`h-empty-${id}`).style.display == 'none'){
        document.getElementById(`h-full-${id}`).style.display = 'none';
        document.getElementById(`h-empty-${id}`).style.display = 'block';
        $.ajax({
            type : "POST",  //type of method
            url  : "../unlikeEvent.php",  //your page
            data : { id : id },// passing the values
            success: function(res){
            }
        });
    }
    else{
        document.getElementById(`h-full-${id}`).style.display = 'block';
        document.getElementById(`h-empty-${id}`).style.display = 'none';
        $.ajax({
            type : "POST",  //type of method
            url  : "../follow.php",  //your page
            data : { id : id },// passing the values
            success: function(res){
            }
        });
    }
}