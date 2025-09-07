gsap.from(".sm",{
    opacity:0,
    x:-200,
    duration: 3,
    stagger:0.4,
    Delay:3,
})
gsap.from(".herosection-text",{
    x:-100,
    duration: 2,
    opacity: 1,
})
gsap.from(".navbar-list ul li", {
    y:-100,
    stagger:0.5,
    duration: 1,
})
gsap.from(".boxs",{
    x:-100,
    opacity: 0,
    duration:1,

    scrollTrigger:{
        trigger:"#page2",
        start: "top 0%",
        end: "top 1%"
    }
})
gsap.from(".q",{
    y:-100,
    opacity:0,
    duration:1,
    stagger: 0.5,
})