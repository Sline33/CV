// Ouverture de mon menu
function openMenu(){
  var button = document.querySelector('#btnHb');
  button.onclick = showMenu;
}
function showMenu(){
    var navbarOpen = document.querySelector('#navbar');
    navbarOpen.classList.toggle("menuOpen");
}
openMenu();

function test(){
    var menuLi = document.querySelector('.menu1');
        menuLi1 = document.querySelector('.menu2');
        menuLi2 = document.querySelector('.menu3');
        menuLi3 = document.querySelector('.menu4');
        menuLi4 = document.querySelector('.menu5');
    menuLi.onclick = hidden;
    menuLi1.onclick = hidden;
    menuLi2.onclick = hidden;
    menuLi3.onclick = hidden;
    menuLi4.onclick = hidden;

}
function hidden(){
    var navbarClose = document.querySelector('#navbar');
    navbarClose.classList.remove("menuOpen");
}
test();

// function parallax(){
//     var logo = document.querySelector('.home-page');
//     logo.style.top = -(window.pageYOffset / 4) + 'px';
// }
// window.addEventListener("Scroll", parallax, false);

// Effet apparition
window.sr = ScrollReveal({reset: false});
sr.reveal('.maBio', {opacity: 0, distance: '800px', delay: 600, viewFactor: 0.2, origin: 'left' });

sr.reveal('.titre-section', {opacity: 0, distance: '800px', delay: 300, viewFactor: 0.2, origin: 'left' });
sr.reveal('.title-hr', {opacity: 0, distance: '800px', delay: 300, viewFactor: 0.2, origin: 'left' });
// Contenu compétences

// Hobbies
sr.reveal('.hobbies', {opacity: 0, distance: '800px', delay: 600, viewFactor: 0.2, origin: 'left' });
sr.reveal('.ho1', {opacity: 0, distance: '800px', delay: 800, viewFactor: 0.2, origin: 'left' });
sr.reveal('.ho2', {opacity: 0, distance: '800px', delay: 1000, viewFactor: 0.2, origin: 'left' });



// Scroll vers mes section
$(".scroll").click(function() {
    var section = $("." + this.id);
    $("html,body").animate({scrollTop: section.offset().top}, 'slow');
});
