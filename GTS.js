gsap.from('.links',{
    duration:3,
    x:100, 
    delay:1,
    opactity:0,
    ease:"power2.out"})

gsap.from('#logo',{
    duration:3,
    x:-100,
    delay:1,
    opactity:0,
    ease:"power2.out"})


gsap.from('h3',{
    opacity:0,
    duration:1,
    delay:1,
    x:'-100'});

gsap.from('h2',{
    opacity:0,
    duration:1,
    delay:2,
    x:'100'});

gsap.from('button',{
    opacity:0,
    duration:1,
    delay:2,
    x:'-100'});

gsap.from('footer',{
    opacity:0,
    duration:1,
    delay:1,
    y:'100'});