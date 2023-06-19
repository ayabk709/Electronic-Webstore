let nav = document.querySelector('#header  #navbar');
let profile = document.querySelector('#header .profile');

document.querySelector('#menu-btn').onclick = () =>{
   nav.classList.toggle('active');
   profile.classList.remove('active');
}

document.querySelector('#user-btn').onclick = () =>{

   profile.classList.toggle('active');
   nav.classList.remove('active');
      console.log('Button clicked!');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   profile.classList.remove('active');
}

let mainImage = document.querySelector('.quick-view .box .row .image-container .main-image img');
let subImages = document.querySelectorAll('.quick-view .box .row .image-container .sub-image img');

subImages.forEach(images =>{
   images.onclick = () =>{
      src = images.getAttribute('src');
      mainImage.src = src;
   }
});
