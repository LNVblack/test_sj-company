$(document).ready(function(){ 
    PopUpHide();
    $("#applicationTelephone").mask("+7(000)000-00-00", {
        placeholder: "+7(___)___-__-__",
        clearIfNotMatch: true
      });
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