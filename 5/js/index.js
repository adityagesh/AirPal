$('.slider').slick({
  arrows: false,
  dots: true,
  infinite: false,
  speed: 0,
  focusOnSelect: false,
  customPaging: function(slider, i) {
    return '<a><svg width="100%" height="100%" viewBox="0 0 16 16"><circle cx="8" cy="8" r="6.215"></circle></svg><span></span></a>';
  },
}).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
  $('.item').removeClass('from-right from-left ready');
  c = (currentSlide < nextSlide) ? 'from-right' : 'from-left';
  $('.item').eq(nextSlide).addClass(c);
}).on('afterChange', function(event, slick, currentSlide) {
  $('.item').eq(currentSlide).addClass('ready');
});

// Dropdown Menu
var dropdown = document.querySelectorAll('.dropdown');
var dropdownArray = Array.prototype.slice.call(dropdown,0);
dropdownArray.forEach(function(el){
  var button = el.querySelector('a[data-toggle="dropdown"]'),
      menu = el.querySelector('.dropdown-menu'),
      arrow = button.querySelector('i.icon-arrow');

  button.onclick = function(event) {
    if(!menu.hasClass('show')) {
      menu.classList.add('show');
      menu.classList.remove('hide');
      arrow.classList.add('open');
      arrow.classList.remove('close');
      event.preventDefault();
    }
    else {
      menu.classList.remove('show');
      menu.classList.add('hide');
      arrow.classList.remove('open');
      arrow.classList.add('close');
      event.preventDefault();
    }
  };
})

Element.prototype.hasClass = function(className) {
    return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
};