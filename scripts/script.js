console.log("This is script.js");

const icon_1 = document.getElementById('icon_1');
const element_to_display = document.getElementById('icons_desc');


icon_1.addEventListener('mouseover', ()=>{
        console.log("Hovering");
        element_to_display.classList.remove("d-none");
        element_to_display.classList.add("d-block");
});

icon_1.addEventListener('mouseout', ()=>{
        console.log("Hovering");
        element_to_display.classList.remove("d-block");
        element_to_display.classList.add("d-none");
});
