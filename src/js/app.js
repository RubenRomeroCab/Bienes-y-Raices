document.addEventListener('DOMContentLoaded',function (){
eventListener();
darkMode();

});

function darkMode(){
    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    })
}
function eventListener(){
    const mobileMenu = document.querySelector('.menu-mobile');
    mobileMenu.addEventListener('click' ,navegacionResposive)

}

function navegacionResposive(){
    const navegacion = document.querySelector('.navegacion');
    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else{
        navegacion.classList.add('mostrar');
    }
}