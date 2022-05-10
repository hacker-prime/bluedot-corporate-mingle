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


//   https://stackoverflow.com/questions/39802412/change-navbar-color-while-scrolling

var myNav = document.getElementById("scroll");

window.onscroll = function() {
    "use strict";
    if (document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50) {

        // https://www.delftstack.com/howto/javascript/change-image-src-javascript/#:~:text=Change%20the%20Source%20of%20an,image%20using%20the%20src%20property.
        document.getElementById("logo").src="assets/images/bluedot logo - complex.png";

        // var side_nav_icon = document.querySelectorAll(".slide a");
        // side_nav_icon.style.color = "#0039A6";
        var side_nav_icon = document.getElementById("sidenavigationicon");
        side_nav_icon.style.color ="#0039A6";


        myNav.classList.add("scroll");

        var x = document.querySelectorAll(".nav__link");
        for (let i = 0; i < x.length; i++) {
           x[i].style.color = "#0039A6";
        }

        // https://stackoverflow.com/questions/4481485/changing-css-pseudo-element-styles-via-javascript
        var y = document.querySelectorAll(".nav__link");
        for (let i = 0; i <y.length; i++) {
            // https://ourcodeworld.com/articles/read/332/how-to-check-if-an-element-of-an-array-is-the-last-within-a-loop-in-javascript
            if((i + 1) == (y.length)){
                console.log("Last iteration with item : " + i);
                y[i].style.setProperty("--special-blue", "#fff");
                // https://stackoverflow.com/questions/29581925/change-css-class-by-javascript-when-default-class-is-set-by-id
                // document.getElementById('signup').className = 'signup'; For some reason this affects the color of the pseudo selector on the last navigation menu item of contact and changes it to white
            } else{
                y[i].style.setProperty("--special-blue", "#0039A6");
                console.log(y.length);
            }
        }
    } else {

            // https://www.delftstack.com/howto/javascript/change-image-src-javascript/#:~:text=Change%20the%20Source%20of%20an,image%20using%20the%20src%20property.
            document.getElementById("logo").src="assets/images/bluedot-white.png";
            var side_nav_icon = document.getElementById("sidenavigationicon");
            side_nav_icon.style.color = "#fff";
            var mobilescroll = document.getElementById("scroll");
            mobilescroll.style.color ="#0039A6";

            myNav.classList.remove("scroll");
            var x = document.querySelectorAll(".nav__link");
            for (let i = 0; i < x.length; i++) {
            x[i].style.color = "#fff";
            }

            var y = document.querySelectorAll(".nav__link");
            for (let i = 0; i <y.length; i++) {
            y[i].style.setProperty("--special-blue", "#FFF");
            }
    }
};

  
  
  
   