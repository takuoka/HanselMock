// Generated by CoffeeScript 1.4.0
var add, set_page_background_color;

set_page_background_color = function() {
  var colors, i, pages, _results;
  colors = ["red", "yellow", "blue", "green"];
  pages = document.getElementsByClassName("page");
  i = 0;
  _results = [];
  while (i < pages.length) {
    pages[i].style.backgroundColor = colors[i % 4];
    pages[i].style.opacity = 0.6;
    _results.push(i++);
  }
  return _results;
};

add = function(a, b) {
  if (a == null) {
    a = 1;
  }
  if (b == null) {
    b = 2;
  }
  return a + b;
};
