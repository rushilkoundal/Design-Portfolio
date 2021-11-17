document.querySelectorAll('a[href^="#"]').forEach(anchor=>{
    anchor.addEventListener("click", function(e){
        e.preventDefault();
        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth"
        });
    });
});

const btnScrollToTop = document.querySelector("#btnScrollToTop");

window.addEventListener('scroll', function(){
    var scroll = this.scrollY;
    if(scroll<30 && !btnScrollToTop.classList.contains('hide')){
        btnScrollToTop.classList.add('hide')
    }
    else if(scroll>30 && btnScrollToTop.classList.contains('hide')){
        btnScrollToTop.classList.remove('hide')
    }
})
btnScrollToTop.addEventListener("click", function(){
    window.scrollTo({
        top: 0,
        left: 0, 
        behavior: "smooth"
    });
});
