let left = document.querySelector(".left");

let right = document.querySelector(".right");

left.addEventListener("mouseenter", function() {
  left.style.flex = "10";
  left.style.transition = "flex 1s ease-in-out";
}, false);

left.addEventListener("mouseleave", function() {
  left.style.flex = "1";
  left.style.transition = "flex 0.35s ease-in-out";
}, false);

right.addEventListener("mouseenter", function() {
  right.style.flex = "10";
  right.style.transition = "flex 1s ease-in-out";
}, false);

right.addEventListener("mouseleave", function() {
  right.style.flex = "1";
  right.style.transition = "flex 0.35s ease-in-out";
}, false);