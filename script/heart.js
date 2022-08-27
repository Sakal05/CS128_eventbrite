function toggleLike(id){
    if (document.getElementById(`h-empty-${id}`).style.display == 'none'){
        document.getElementById(`h-full-${id}`).style.display = 'none';
        document.getElementById(`h-empty-${id}`).style.display = 'block';
        let newEvents = JSON.parse(localStorage.getItem("following"));
    }
    else{
        document.getElementById(`h-full-${id}`).style.display = 'block';
        document.getElementById(`h-empty-${id}`).style.display = 'none';
    }
}