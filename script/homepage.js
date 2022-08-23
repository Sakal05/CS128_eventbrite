function toggleLike(id){
    if (document.getElementById(`heart-empty-${id}`).style.display == `none`){
        document.getElementById(`heart-full-${id}`).style.display = 'none';
        document.getElementById(`heart-empty-${id}`).style.display = 'block';
    }
    else{
        document.getElementById(`heart-full-${id}`).style.display = 'block';
        document.getElementById(`heart-empty-${id}`).style.display = 'none';
    }
}
// window.onload = function(){
//     console.log("hello world");
//     let fullHearts = document.getElementsByClassName("heart-full");
//     for (let i = 0; i < fullHearts.length; i++) {
//         fullHearts[i].style.display = 'none';
//     }

//     console.log(fullHearts);
// }