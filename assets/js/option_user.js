const icon = document.getElementById('btn_icon_user');
const menu = document.getElementById('menu');

var i = 0;

icon.addEventListener('click', function(){
    if (i == 0) {
        i = 1;
        menu.classList.add("show");
    }
    else{
        i = 0;
        menu.classList.toggle("show", false);
    }
}); 



// icon.addEventListener('click', function(){
//     i = 1;
//     menu.classList.add("show");
// });   





        
