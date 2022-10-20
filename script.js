document.querySelector(".hamburguer").addEventListener("click", () =>{
    document.querySelector (".contain").classList.toggle("show-menu")
});

const menulinks = document.querySelectorAll('.menu a[href^="#"]')



function getDistanceFromTheTop(element) {
const id = element.getAttribute("href");
return document.querySelector(id).offsetTop;
}

function nativeScroll(distanceFromTheTop) {
    window.scroll({
        top: distanceFromTheTop,
        behavior: "smooth",
});
}

function scrollToSection(event) {
    event.preventDefault();
    const distanceFromTheTop = getDistanceFromTheTop(event.target) - 90;
    nativeScroll(distanceFromTheTop);
}

menulinks.forEach((link) => {
    link.addEventListener("click", scrollToSection)
});




document.querySelector("#items").addEventListener("wheel", event => {
    if(event.deltaY > 0) {
        event.target.scrollBy(300, 0)
    } else {
        event.target.scrollBy(-300, 0)
    }
})