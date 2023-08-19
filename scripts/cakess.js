console.log("this is cakes.js");

// ELEMENTS
const cakes_heading = document.getElementById("cakes_heading");
const flavour_heading = document.getElementById("flavour_heading");
const cakes_cont = document.getElementById("cakes_cont");
const flavour_cont = document.getElementById("flavour_cont");

// EVENTS
flavour_heading.addEventListener('click', ()=>{
    flavour_cont.classList.remove("d-none");
    cakes_cont.classList.add("d-none");
    cakes_heading.classList.remove("underline");
    flavour_heading.classList.add("underline");
});

cakes_heading.addEventListener('click', ()=>{
    flavour_cont.classList.add("d-none");
    cakes_cont.classList.remove("d-none");
    cakes_heading.classList.add("underline");
    flavour_heading.classList.remove("underline");
});

// SLIDER
const slider1 = document.getElementById("slider1");
const slider2 = document.getElementById("slider2");
const slider3 = document.getElementById("slider3");
const radio1 = document.getElementById("radio1");
const radio2 = document.getElementById("radio2");
const radio3 = document.getElementById("radio3");

// SLIDER EVENTS
radio1.addEventListener('click', ()=>{
    slider2.classList.add("d-none");
    slider3.classList.add("d-none");
    slider1.classList.remove("d-none");
});

radio2.addEventListener('click', ()=>{
    slider1.classList.add("d-none");
    slider3.classList.add("d-none");
    slider2.classList.remove("d-none");
});

radio3.addEventListener('click', ()=>{
    slider1.classList.add("d-none");
    slider2.classList.add("d-none");
    slider3.classList.remove("d-none");
});