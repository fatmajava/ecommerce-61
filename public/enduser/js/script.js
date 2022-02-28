let showImages = document.querySelectorAll(".show-more-image");
let showButton = document.querySelector(".btn-show-more")
let showLess = document.querySelector(".btn-show-less")
showButton.addEventListener("click", () => {
    for (let index = 0; index < showImages.length; index++) {
        showImages[index].style.display = "block"
    }
    showButton.style.display = "none";
    showLess.style.display = "block";
})
showLess.addEventListener("click", () => {
        for (let index = 0; index < showImages.length; index++) {
            showImages[index].style.display = "none"
        }
        showButton.style.display = "block";
        showLess.style.display = "none";
    })
    // start shop brand slider
$('.brand-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
    // end shop brand slider


// sticky navbar &scrol to top
// shop brandlet scrollToTop= document.querySelector(".scroll-to-top")
let scrollToTop = document.querySelector(".scroll-to-top")
let stickyNav = document.querySelector(".sticky-navbar")
let body = document.querySelector("html,body")

window.addEventListener("scroll", () => {
    if (body.scrollTop >= 100) {
        scrollToTop.style.display = "block"
        scrollToTop.addEventListener('click', () => {
            window.scrollTo(0, 0)
        });

    } else {
        scrollToTop.style.display = "none"
    }
})

window.addEventListener("scroll", () => {
    if (body.scrollTop >= 100) {

        stickyNav.style.display = "block";



    } else {
        stickyNav.style.display = "none";


    }
})