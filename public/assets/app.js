let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
const header = document.querySelector('header');
menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}
document.addEventListener('scroll',()=>{
    if(window.scrollY>0){
        header.classList.add('scrolled');
    }else{
        header.classList.remove('scrolled');
    }
})
const order = document.getElementById('order');
const table = document.querySelector('.table-container')
const appear = document.getElementById('appear');
const close = document.getElementById('close');
order.addEventListener('click', function() {
        appear.style.display = 'block';
        table.style.height ='1100px';
  });
close.addEventListener('click', function() {
    appear.style.display = 'none';
    table.style.height ='700px';
});


