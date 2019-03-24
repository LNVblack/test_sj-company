$(document).ready(function(){ 
    PopUpHide();
});
    //Функция отображения PopUp
function PopUpShow(){
    $("#popup1").show();
}
    //Функция скрытия PopUp
function PopUpHide(){
    $("#popup1").hide();
}
function CheckPerInt(){
    var checkbox = document.getElementById("checkboxI");
    var buttonshow = document.getElementById("applicationButton");
    if (checkbox.checked == true){
        buttonshow.style.display = "block";
    } else{
        buttonshow.style.display = "none";
    }
}