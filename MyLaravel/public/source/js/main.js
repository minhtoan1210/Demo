function IntervalTimer(callback, interval) {
    var timerId, startTime, remaining = 0;
    var state = 0; //  0 = idle, 1 = running, 2 = paused, 3= resumed

    this.pause = function () {
        if (state != 1) return;

        remaining = interval - (new Date() - startTime);
        window.clearInterval(timerId);
        state = 2;
    };

    this.resume = function () {
        if (state != 2) return;

        state = 3;
        window.setTimeout(this.timeoutCallback, remaining);
    };

    this.timeoutCallback = function () {
        if (state != 3) return;

        callback();

        startTime = new Date();
        timerId = window.setInterval(callback, interval);
        state = 1;
    };

    startTime = new Date();
    timerId = window.setInterval(callback, interval);
    state = 1;
}
let slideritem = document.querySelectorAll(".slide");
let dem = 0;
let sliderDost = document.querySelectorAll('.slider__slides-btnul ul li')
document.querySelector(".--pev").addEventListener("click",function()
{
    if (dem === 0) {
        slideritem[slideritem.length - 1].classList.add('active');
        slideritem[0].classList.remove('active');
        sliderDost[slideritem.length - 1].classList.add("is-selected");
        sliderDost[0].classList.remove("is-selected");
        dem=slideritem.length - 1;
        console.log(dem)
        return;
    }
    if (dem > 0) {
        slideritem[dem].classList.remove('active');
        slideritem[dem - 1].classList.add('active');
        sliderDost[dem].classList.remove("is-selected");
        dem--;
        sliderDost[dem].classList.add("is-selected");
    }
})
document.querySelector(".--next").addEventListener("click",function()
{
    
    if (dem == slideritem.length - 1) {
        slideritem[slideritem.length - 1].classList.remove('active');
        slideritem[0].classList.add('active');
        sliderDost[slideritem.length - 1].classList.remove("is-selected");
        sliderDost[0].classList.add("is-selected");
        dem=0;
        return;
      
    }
    if (dem < slideritem.length - 1) {
        slideritem[dem].classList.remove('active');
        slideritem[dem + 1].classList.add('active');
        sliderDost[dem].classList.remove("is-selected");
        dem++;
        sliderDost[dem].classList.add("is-selected");
    }
})
sliderDost.forEach((e, i) => {
    e.addEventListener('click', function () {
        sliderto(i);
    })
})
function sliderto(to) {
    slideritem[dem].classList.remove('active');
    slideritem[to].classList.add('active');
    sliderDost[dem].classList.remove("is-selected");
    sliderDost[to].classList.add("is-selected");
    dem = to;
}
var timer = new IntervalTimer(function () {
    if (dem == slideritem.length - 1) {
        slideritem[slideritem.length - 1].classList.remove('active');
        slideritem[0].classList.add('active');
        sliderDost[slideritem.length - 1].classList.remove("is-selected");
        sliderDost[0].classList.add("is-selected");
        dem=0;
        return;
      
    }
    if (dem < slideritem.length - 1) {
        slideritem[dem].classList.remove('active');
        slideritem[dem + 1].classList.add('active');
        sliderDost[dem].classList.remove("is-selected");
        dem++;
        sliderDost[dem].classList.add("is-selected");
    }
}, 1000);
document.querySelector(".slider").addEventListener("mouseenter", function () {
    timer.pause();
})
document.querySelector(".slider").addEventListener("mouseleave", function () {
    timer.resume();
})
//slider End
let a=0;
window.addEventListener("scroll", function () {
    
    let b=0;
    let scrolltop1 = document.querySelector("html").scrollTop;
    let nav= document.querySelector(".nav");
         console.log(scrolltop1);
         if(scrolltop1>document.querySelector('.header').offsetHeight)
         {
            nav.classList.add("mobi");
         }
         if(scrolltop1<document.querySelector('.header').offsetHeight)
         {
            nav.classList.remove("mobi");
         }
})