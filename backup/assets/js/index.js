/*===== SCROLL SECTIONS ACTIVE LINK =====*/
const sections = document.querySelectorAll('section[id]')
const navLi = document.querySelectorAll("header .nav__menu ul li a");

window.addEventListener('scroll', scrollActive)

function scrollActive(){

    const scrollY = window.pageYOffset
    let current = "";

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 1;
        sectionId = current.getAttribute('id')
        

        if(scrollY > sectionTop && scrollY < sectionTop + sectionHeight){

        // if(scrollY >= sectionTop){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active__menu')
            console.log("scrollY or Scroll Bar Position: " + scrollY);
            // https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/offsetTop
            // https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/offsetParent
            console.log("Section Top or Distance from the top of the document/DOM to the bottom of a particular html element: " + sectionTop);
            console.log("Height of the particular html element: " + sectionHeight );

            // console.log("Current Section ID:" + sectionId);
            sectionId = current.getAttribute('id');
            // document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active__menu')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active__menu')
        }
    })

    // console.log("Current Section ID:" + sectionId);


}

console.log("Scroll Bar: " + window.scrollY);

var a = document.getElementById("home");
var topPos = a.offsetTop;
console.log("Home Section - Section Top: " + topPos);


var about = document.getElementById("about");
var topPosAbout = about.offsetTop;
console.log("About Section - Section Top: " + topPosAbout);


var services = document.getElementById("services");
var topPosServices = services.offsetTop;
console.log("Services Section - Section Top: " + topPosServices);


var features = document.getElementById("features");
var topPosFeatures = features.offsetTop;
console.log("Features Section - Section Top: " + topPosFeatures);


var partners = document.getElementById("partners");
var topPosPartners = partners.offsetTop;
console.log("Partners Section - Section Top: " + topPosPartners);


var b = document.getElementById("contact");
var topPos2 = b.offsetTop;
console.log("Contact Section - Section Top: " + topPos2);

// https://developer.mozilla.org/en-US/docs/Web/API/Window/innerHeight
let intViewportHeight = window.innerHeight;
console.log("Height of the Window: " +intViewportHeight);

// https://stackoverflow.com/questions/1145850/how-to-get-height-of-entire-document-with-javascript
var body = document.body,
    html = document.documentElement;

var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );
console.log("Height of the entire document: " +height);                       





// Animated Sidebar Menu - https://codepen.io/ephs23/pen/jJMRLE
function openSlideMenu () {
    document.getElementById('menu').style.width = '250px';
    document.getElementById('side-nav-content').style.marginLeft = '250px';
  }
  
  function closeSlideMenu () {
    document.getElementById('menu').style.width = '0';
    document.getElementById('side-nav-content').style.marginLeft = '0';
  }