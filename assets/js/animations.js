document.addEventListener(
"DOMContentLoaded",
()=>{


const items =
document.querySelectorAll(
"[data-animation]"
);



const observer =
new IntersectionObserver(
(entries)=>{


entries.forEach(
(entry)=>{


if(entry.isIntersecting){

entry.target.classList.add(
"active"
);


observer.unobserve(
entry.target
);

}


});


},
{
threshold:0.15
}
);



items.forEach(
(item)=>{

observer.observe(item);

}

);


});