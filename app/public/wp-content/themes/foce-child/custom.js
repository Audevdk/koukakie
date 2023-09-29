//*mouvement des titres lors du scroll avec API

let observer = new IntersectionObserver(observables=>
  {
    for(let observable of observables){
      if(observable.intersectionRatio > 0.5){
        observable.target.classList.add("Anim");
      }
      else{
        observable.target.classList.remove("Anim");}
      }
    },{
      threshold:[0.5],
    });


var titres = document.querySelectorAll('.toAnim');
console.log(titres);
titres.forEach(titre =>{
  observer.observe(titre)
})




//*parallax banner
  var image = document.getElementById('#logo');
  new simpleParallax(image, {
    orientation: 'up', 
    scale: 1.9,
    overflow: false,
    CustomContainer: '.banner',
    
  }); 

//*swiper
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow", 
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,           
    depth: 100,            
    stretch: 0,           
    modifier: 1,                           
    slideShadows: false,
  },

});

//*parallax nuages
var nuage = document.getElementsByClassName('#place')
new simpleParallax(nuage ,{
  orientaton : 'left',
  scale: 1.9,
  overflow:false,
  CustomContainer:'.nuages',
  CustomWrapper: '.nuages',
  maxTransition: 300,
})
  
//*menu burger
var sidenav = document.getElementById("site-navigation");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

function openNav() {
  sidenav.classList.add("active");
}

function closeNav() {
  sidenav.classList.remove("active");
}
  

  
  
