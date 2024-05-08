<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <h1>Add New Students</h1>
    </div>

    <div class="container">
        <div class="book_container">
            <h2>R.Suracxana</h2>
            <h4>2019/ICTS/76</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia aliquam ratione, corrupti cum maxime nesciunt accusamus asperiores fuga dolorem repellendus doloribus, nisi aut sit. Molestiae exercitationem impedit sed voluptates maxime.</p>
        <button id="btn" onclick="del(event)">Delete</button>
        </div>
    </div>

    <div class="popup_overlay">
        <div class="popup_box">
            <h2>Add Student</h2>
            <form>
                <input type="text" placeholder="Student Name" id="book_title">
                <input type="text" placeholder="Reg_No" id="book_author">
                <textarea placeholder="Personal Details" id="discription"></textarea>
                <button id="addbook"> Add</button>
                <button id="cancelpopup" >cancel</button>
            </form>
        </div>
    </div>
    <button class="add_button" id="add_popup">+</button>

   
    <script >

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

        document.addEventListener("DOMContentLoaded", function(event) {
    var container = document.querySelector(".container");
    var addbook = document.getElementById("addbook");
    var book_title = document.getElementById("book_title");
    var book_author = document.getElementById("book_author");
    var discription = document.getElementById("discription");
    var popup_box = document.querySelector(".popup_box");
    var popup_overlay = document.querySelector(".popup_overlay");

    addbook.addEventListener("click", function(event) {
        event.preventDefault();
        var div = document.createElement("div");
        div.setAttribute("class", "book_container");
        div.innerHTML = `<h2>${book_title.value}</h2>
        <h4>${book_author.value}</h4>
        <p>${discription.value}</p>
        <button id="btn" onclick="del(event)">Delete</button>`;
        container.append(div);
        popup_box.style.display = "none";
        popup_overlay.style.display = "none";
    });
});
function del(event)
{
event.target.parentElement.remove();
}
    </script>
</body>
</html>