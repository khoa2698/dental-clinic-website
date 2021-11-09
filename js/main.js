
// -----------scroll Navbar effect-----------
const NavEffect = document.querySelector('.NavEffect');
const navbar = document.querySelector('.navbar');

const widthWindow = $(window).width();
window.addEventListener('scroll', fixNav)

function fixNav() {
    if(window.scrollY > NavEffect.offsetHeight + 250) {
        navbar.classList.add('active');
        navbar.classList.add("transform");
    } else {
        navbar.classList.remove('active')
    }
}

// -----------scroll background-image effect-----------
document.getElementById("body").onscroll = function myFunction() {  
    var scrollToTop = document.scrollingElement.scrollTop;
    var targets = document.querySelectorAll(".BgScrollEffect");
    var xValue = "center";
    var factor = 0.2;
    var yValue = scrollToTop * factor;
    targets.forEach((target) => {
        target.style.backgroundPosition = xValue + " " + yValue + "px";
    })
  }
  
// -----------change pseudo_element's content-----------
var containerWorkingHour = document.querySelector(".containerWorkingHour")
var btn_toggle = document.querySelector('#btn-toggle');
var tmp = document.createElement("span");
tmp.innerHTML = '&#x2039;';
btn_toggle.setAttribute('data-icon', tmp.innerText);

btn_toggle.addEventListener("click", () => {
    containerWorkingHour.classList.toggle("closed");
    btn_toggle.classList.toggle("rotate");
})

const ElementScrolls = document.querySelectorAll('.ElementScrollEffect')
function ElementScrollEffect() {
    const triggerBottom = window.innerHeight / 9 * 8
    ElementScrolls.forEach(ElementScroll => {
            const ElementScrollTop = ElementScroll.getBoundingClientRect().top
            if(ElementScrollTop < triggerBottom) {
                ElementScroll.classList.add('show')
            }
    })
}
window.addEventListener('scroll', ElementScrollEffect)
ElementScrollEffect()

//-------------- appear item ------------
const FadeInItems = document.querySelectorAll(".FadeInItem")
function scrollEffect2() {
    const triggerBottom = window.innerHeight / 9 * 8
    FadeInItems.forEach(FadeInItem => {
        const FadeInItemTop = FadeInItem.getBoundingClientRect().top
        if(FadeInItemTop < triggerBottom) {
            FadeInItem.style.opacity = "1";
            FadeInItem.style.transform = "scale(1)";
        }
    })
}
window.addEventListener('scroll', scrollEffect2)
scrollEffect2()

const infoToggle = document.querySelector(".infoToggle");
const contactInfo = document.querySelector(".contact__info");
console.log(contactInfo)
infoToggle.addEventListener("click", () => {
    contactInfo.classList.toggle("active");
    infoToggle.classList.toggle("active");
})


// const SequentialAppears = document.querySelectorAll('.SequentialAppear')
// function SequentialAppear() {
//     const triggerBottom = window.innerHeight / 9 * 8
//     SequentialAppears.forEach(item => {
//             const itemTop = item.getBoundingClientRect().top
//             if(itemTop < triggerBottom) {
//                 const tests = document.querySelector('.SequentialAppear').querySelectorAll(".test");
//                 var index = 0;
//                 setInterval(()=> {
//                     if (index < tests.length) {
//                         const element = tests[index];
//                         element.style.opacity = "1";
//                         index ++;
//                     } else {
//                         clearInterval();
//                     }
//                 }, 250);
//             }
//     })
// }
// window.addEventListener('scroll', SequentialAppear)
// SequentialAppear()
