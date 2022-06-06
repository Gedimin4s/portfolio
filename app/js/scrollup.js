const toTop = document.querySelector("#toTop");

toTop.addEventListener("click", function(){
    $("html, body").animate({scrollTop: 0}, "slow");
});

window.addEventListener("scroll", () => {
    if(window.pageYOffset > 100){
        toTop.classList.add("active");
    }else{
        toTop.classList.remove("active");
    }
});