function toggleFollow(id) {
    if(document.getElementById('status-' + id + '').className == "follow") {
        console.log("trying to unfollow");
        document.getElementById('status-' + id + '').classList.remove("follow");
        document.getElementById('status-' + id + '').classList.add("not-follow");
        $.ajax({
            type : "POST",  //type of method
            url  : "unlikeEvent.php",  //your page
            data : { id : id },// passing the values
            success: function(res){  
                
            }
        });
        alert("Unfollowed " + id);
    }
    else if(document.getElementById('status-' + id + '').className == "not-follow"){
        document.getElementById('status-' + id + '').classList.remove("not-follow");
        document.getElementById('status-' + id + '').classList.add("follow");
        $.ajax({
            type : "POST",  //type of method
            url  : "likeEvent.php",  //your page
            data : { id : id },// passing the values
            success: function(res){  
                
            }
        });
        alert("followed " + id);
    }
}