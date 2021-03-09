window.addEventListener('scroll', () => {
    document.body.style.setProperty('--scroll',window.pageYOffset / (document.body.offsetHeight - window.innerHeight));
    console.log(window.pageYOffset);
    console.log(document.body.offsetHeight);
    //console.log(window.innerHeight);
}, false);
