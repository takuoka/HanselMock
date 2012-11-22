###
to COMPILE
"coffee --watch --compile --bare --output js/ js/coffee/*.coffee"
at HanselMock/
###


set_page_background_color = ->
  colors = ["red", "yellow", "white", "green"]
  pages = document.getElementsByClassName("page")
  i = 0
  while i < pages.length
    pages[i].style.backgroundColor = colors[i % 4]
    pages[i].style.opacity = 0.6
    i++


add = (a=1,b=2) ->
	return a+b+333