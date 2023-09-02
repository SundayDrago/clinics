function toggleNav() {
    const navLinks = document.getElementById("navLinks");
    navLinks.classList.toggle("active");
  }

  document.querySelector('.menu-icon').addEventListener('click', function() {
    document.querySelector('.navbar').classList.toggle('active');
  });

  
const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const arrowBtns = document.querySelectorAll(".wrapper i");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const carouselChildrens = [...carousel.children];

let isDragging = false, startX, startScrollLeft, timeoutId;

// Get the number of cards children that can fit the carousel at once
let cardPerView = Math.round(carousel.offsetWidth/firstCardWidth);

// Insert the copies  of the last few cards to the beginning of the carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert the copies  of the last few cards to the end of the carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        console.log(btn.id);
        carousel.scrollLeft += btn.id ==="left" ? -firstCardWidth: firstCardWidth;
    });
});
const autoPlay = () => {
    if(window.innerWidth < 800){
        return;
        timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
    }
}
autoPlay();

const dragStart = ()=>{
    isDragging = true;
    carousel.classList("dragging");
// Records the intial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft - (e.pageX-startX);
}
const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false then return immediately here
    // Update the scroll position of the carousel based on the cursor moovement
    carousel.scrollLeft = e.pageX;
}
const dragStop = (e) => {
    isDragging = false;
    carousel.scrollLeft = e.pageX;
}

const infinteScroll = () => {
       // If the carousel is already at the beginning, scroll to the end
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
    carousel.scrollLeft = carousel.scrollWidth -(2 * carousel.offsetWidth); 
    carousel.classList.remove("no-transition");
    }
    // If the carousel is already at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
        
    
}
carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infinteScroll);
wrapper.addEventListener("mouseenter", ()=> clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);
  