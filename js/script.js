/*nav-toggle*/

var toggleMenu = document.querySelector('.nav-toggle');
var toggleMenuFirstLine = document.querySelector('.nav-toggle > div:nth-child(1)');
var toggleMenuSecondLine = document.querySelector('.nav-toggle > div:nth-child(2)');
var toggleMenuThirdLine = document.querySelector('.nav-toggle > div:nth-child(3)');
var navMobileLayout = document.querySelector('.nav-mobile-layout');

toggleMenu.addEventListener("click", function(){

    toggleMenuFirstLine.classList.toggle('line-f');
    toggleMenuSecondLine.classList.toggle('line-s');
    toggleMenuThirdLine.classList.toggle('line-t');
    navMobileLayout.classList.toggle('nav-mobile-layout-toggle');
}) 

/*inner-header*/
var slow = document.querySelector('.slow-scroll');
var scrollSpeedRatio = 0.6; // Réglez le rapport de vitesse de défilement souhaité (dans cet exemple, 50% plus lent)
var logoMobile = document.querySelector('.logo-mobile');
var scrollThreshold = window.innerHeight * 0.7; // Calculer le seuil de défilement à 60vh depuis le haut de la page

window.addEventListener('scroll', function() {
  var distance = window.scrollY * scrollSpeedRatio; // Calcule la distance de défilement ajustée
  slow.style.transform = 'translate3d(0, ' + distance + 'px, 0)'; // Ajuste la position de l'élément en utilisant une transformation CSS

  if (window.scrollY > scrollThreshold) {
    logoMobile.style.opacity = 1; // Afficher l'élément si le seuil de défilement est atteint
  } else {logoMobile.style.opacity = 0;}
});


//sing-in-up

var singInMenu = document.querySelector('.sing-in-up > div > ul > li:nth-child(1)');
var singUpMenu = document.querySelector('.sing-in-up > div > ul > li:nth-child(2)');
var singIn = document.querySelector('.sing-in');
var singUp = document.querySelector('.sing-up');

singInMenu.addEventListener("click", function(){
  singIn.classList.remove('hidden');
  singUp.classList.add('hidden');
}) 

singUpMenu.addEventListener("click", function(){
  singIn.classList.add('hidden');
  singUp.classList.remove('hidden');
}) 
