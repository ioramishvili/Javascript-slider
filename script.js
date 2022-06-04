let slidesCount = 3;
let viewSlide = 0;
let startX = 0;
let startY = 0;
let isDown = false;
let innerHeight = 0;

let viewport = document.getElementById("viewport").offsetWidth;
let slider = document.querySelector("div.slider");
let popup = document.querySelector("div.popup-slider");
let scrollbar = document.querySelector(".scrollbar img");
let scrolltext = document.querySelector(".scroll-text");
let scrollinner = document.querySelectorAll(".scroll-text div p");
let scrolltextinner = document.querySelector(".scroll-text div");

scrollinner.forEach((element) => {
    innerHeight += element.scrollHeight + 10;
})

let outerHeight = scrolltext.offsetHeight - 60;
let delta = (innerHeight + 100 - outerHeight) / 330;

function fadeIn(element, maxop) {
  let op = 0;
  let delta = 0.01;
  element.style.display = "block";
  let timer = setInterval(function () {
    if (op >= maxop) {
      clearInterval(timer);
    }
    element.style.opacity = op;
    element.style.filter = "alpha(opacity=" + op * 100 + ")";
    op += op + delta;
  }, 30);
}

function fadeOut(element, op) {
  let timer = setInterval(function () {
    let delta = 0.01;
    if (op <= 0.1) {
      clearInterval(timer);
      element.style.display = "none";
    }
    element.style.opacity = op;
    element.style.filter = "alpha(opacity=" + op * 100 + ")";
    op -= op - delta;
  }, 30);
}

function showPopup() {
  let popupEl = document.getElementById("popup");
  let popupBack = document.getElementById("popup-background");
  fadeIn(popupEl, 1);
  fadeIn(popupBack, 0.55);
}

function hidePopup() {
  let popupEl = document.getElementById("popup");
  let popupBack = document.getElementById("popup-background");
  fadeOut(popupEl, 1);
  fadeOut(popupBack, 0.55);
}

function showSlide(fisrt, second) {
  let slideFisrt = document.querySelector(".popup-slide." + fisrt);
  let dotFirst = document.querySelector(".dot." + fisrt);
  let slideSecond = document.querySelector(".popup-slide." + second);
  let dotSecond = document.querySelector(".dot." + second);

  fadeIn(slideFisrt, 1);
  fadeOut(slideSecond, 1);

  dotFirst.classList.add("active");
  dotSecond.classList.remove("active");
}

function animateSlide() {
  const animation = [
    { transform: "translateX(100px) translateY(50px)", opacity: "0" },
    { transform: "translateX(0) translateY(0)" },
  ];

  const layer1 = document.querySelector(".layer1");
  const layer2 = document.querySelector(".layer2");
  const layer3 = document.querySelector(".layer3");
  const layer4 = document.querySelector(".layer4");
  const layer5 = document.querySelector(".layer5");

  layer1.animate(animation, {
    duration: 2000,
  });
  layer2.animate(animation, {
    duration: 1500,
  });
  layer3.animate(animation, {
    duration: 1000,
  });
  layer4.animate(animation, {
    duration: 2000,
  });
  layer5.animate(animation, {
    duration: 1000,
  });
}

function firstSlide() {
  let slider = document.querySelector("div.slider");
  slider.style.left = "0px";
  if (viewSlide == 2) hidePopup();
  viewSlide = 0;
}

function nextSlide() {
  if (viewSlide < slidesCount - 1) {
    viewSlide++;
  } else {
    viewSlide = 0;
  }
  slider.style.left = -viewSlide * viewport + "px";

  if (viewSlide == 1) animateSlide();
}

function prewSlide() {
  if (viewSlide == 2) hidePopup();
  if (viewSlide > 0) {
    viewSlide--;
  } else {
    viewSlide = slidesCount - 1;
  }
  slider.style.left = -viewSlide * viewport + "px";

  if (viewSlide == 1) animateSlide();
}

slider.addEventListener("touchstart", (event) => {
  startX = event.touches[0].pageX;
  startY = event.touches[0].pageY;
});

slider.addEventListener("touchend", (event) => {
  deltaX = event.changedTouches[0].clientX - startX;
  deltaY = event.changedTouches[0].clientY - startY;
  let eps = 80;

  if (deltaX < -eps && viewSlide < 2) {
    nextSlide();
  } else if (deltaX > eps && viewSlide > 0) {
    prewSlide();
  }
});

scrollbar.addEventListener(
  "touchstart",
  function (e) {
    isDown = true;
    offsetY = scrollbar.offsetTop - event.touches[0].pageY;
  },
  true
);

scrollbar.addEventListener(
  "touchend",
  function () {
    isDown = false;
  },
  true
);

scrollbar.addEventListener(
  "touchmove",
  function (event) {
    if (isDown) {
      mousePositionY = event.changedTouches[0].clientY;

      if (mousePositionY + offsetY > 60 && mousePositionY + offsetY < 390) {
        //delta = 330
        scrollbar.style.top = mousePositionY + offsetY + "px";
        scrolltextinner.scroll(0, delta * (mousePositionY + offsetY - 60));
      }
    }
  },
  true
);