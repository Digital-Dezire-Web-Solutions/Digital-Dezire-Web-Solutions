

// header sticky code

const stickyNavbar =  document.querySelector('.header-style-one');

const stickyNavFunc = () => {

    stickyNavbar.classList.toggle('stickyNav', window.scrollY > 300);
}

window.addEventListener("scroll", () => stickyNavFunc())


// _______________________________________________________




var tl =  gsap.timeline();


// tl.to('.preloader-comp .preloader-bx' , {

//     opacity : 0,

        
// })


tl.from('.preloader-comp .loader-text-bx1 .loader-text h6', {
    x : -40,
    stagger : 0.2,
    duration : .7,
    opacity : 0,

})

tl.from('.preloader-comp .line', {
    width : 100,
    duration : .7,
    opacity : 0,
    left : 0,
    delay : -0.5,

})

 
tl.from('.preloader-comp .loader-text-bx2 .loader-text h6', {
    x : 40,
    stagger : 0.2,
    duration : .7,
    opacity : 0,
    delay : -0.78,
})

// ________________________none 

tl.to('.preloader-comp .loader-text-bx1 .loader-text h6', {
    x : 40,
    stagger : 0.2,
    duration : .5,
    opacity : 0,


})

tl.to('.preloader-comp .line', {
    x : 300,
    duration : .5,
    opacity : 0,
    delay : -0.5,

})

 
tl.to('.preloader-comp .loader-text-bx2 .loader-text h6', {
    x : -40,
    stagger : 0.2,
    duration : .5,
    opacity : 0,
    delay : -0.78,

})

tl.to('.preloader-comp .loader-text-bx1', {
    display : "none",
    delay : -1,

})

tl.to('.preloader-comp .line', {
   
    display : "none",
    delay : -1,


})

tl.to('.preloader-comp .loader-text-bx2 ', {
    display : "none",
    delay : -1,

})

tl.from('.preloader-comp .welcome-text h6', {
    display : "none",
    delay : -0.2,

})


tl.from('.preloader-comp .peloader-box .preloader-logo', {
    y : 40,
    duration : .5,
    opacity : 0,
    display : "none",
    delay : -0.4,
    
})



tl.from('.preloader-comp .peloader-box .welcome-text h6', {
    y : 10,
    stagger : 0.1,
    duration : .5,
    opacity : 0,
    // display : "none",

})


tl.to('.preloader-comp .peloader-box .preloader-logo',{

    opacity : 0,   
    duration : .4,
    delay : -0.2,

})

tl.to('.preloader-comp .peloader-box .welcome-text h6',{

    opacity : 0,    
    duration : .4,
    delay : -0.2,


})

tl.to('.preloader-comp',{
    y : -500,
    duration : .65,
    opacity : 0,    
})

tl.to('.preloader-comp',{
    display : "none",
})




const onLoad = document.querySelector('.peloader-box');

const screenLoad = () => {

    onLoad.classList.add('showbx');
    
}

window.addEventListener('load' , screenLoad);