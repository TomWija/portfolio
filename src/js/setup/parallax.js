let setup = function() {

    // Create cross browser requestAnimationFrame method:
    window.requestAnimationFrame = window.requestAnimationFrame
        || window.mozRequestAnimationFrame
        || window.webkitRequestAnimationFrame
        || window.msRequestAnimationFrame
        || function(f){setTimeout(f, 1000/60);};

    const splashImage = document.getElementById("splash-image");

    let parallax = function() {
        let scrolltop = window.pageYOffset; // get number of pixels document has scrolled vertically
        splashImage.style.top = -scrolltop * .3 + "px";
    };

    window.addEventListener("scroll", function(){ // on page scroll
        requestAnimationFrame(parallax); // call parallaxbubbles() on next available screen paint
    }, false);
};

module.exports = setup;
