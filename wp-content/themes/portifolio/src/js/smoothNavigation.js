export const smoothNavigation = function (){
    const navBar = document.querySelector('.navbar-nav');
    navBar.addEventListener('click' , function(e){
        e.preventDefault();
        if(e.target.classList.contains('nav-link')){
            const id = e.target.getAttribute('href');
            document.querySelector(id).scrollIntoView({behavior : 'smooth'});
        }
    });

}