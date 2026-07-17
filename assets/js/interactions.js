document.addEventListener(
"DOMContentLoaded",
()=>{


const images =
document.querySelectorAll(
".gallery-thumbs img"
);


const main =
document.querySelector(
".gallery-main img"
);



images.forEach(
(img)=>{


img.addEventListener(
"click",
()=>{


main.src =
img.src;


});


});


});