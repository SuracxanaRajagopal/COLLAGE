//selecting class ---so we use quarySelector
var popup_overlay=document.querySelector(".popup_overlay")
var popup_box=document.querySelector(".popup_box")
var add_popup=document.getElementById("add_popup")//select id

add_popup.addEventListener("click",function(){
    popup_box.style.display="block"
    popup_overlay.style.display="block"
})

//select cancel button
var cancelpopup=document.getElementById("cancelpopup")

cancelpopup.addEventListener("click",function(event)
{
    event.preventDefault()
    popup_box.style.display="none"
    popup_overlay.style.display="none"
})



//select container,add button,booktitle,ather,description
