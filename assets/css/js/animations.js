document.addEventListener(
"DOMContentLoaded",
()=>{


const elements =
document.querySelectorAll(
"[data-animation]"
);


const observer =
new IntersectionObserver(
entries=>{


entries.forEach(
entry=>{


if(entry.isIntersecting){

entry.target.classList.add(
"active"
);

}

});


}
);


elements.forEach(
el=>observer.observe(el)
);


});