###
to COMPILE
"coffee --watch --bare --compile --output js/ js/coffee/*.coffee"
at HanselMock/
###


### ---------チュートリアル--------- ###
tutrialInit = ->
  setTimeout disp_WelcomeToHanselImg, 1500
  setTimeout dispTutInfoP, 5000
  arrowTimer = setTimeout(dispTutArrowImg, 7000)
  #隅っこ触ったら矢印が消える。
  $("#pagesBox").bind "start", (event, pageObject, corner) ->
    if corner is "tl" or corner is "tr"
      clearTimeout arrowTimer
      $("#tutrialArrow").css opacity: 0
  #ページ右の開いた時
  $("#pagesBox").bind "turning", (event, page, view) ->
    setTimeout disp_explain_UI, 500  if page = 6


dispTutInfoP = ->
  $("#hanselMockTutrialInfo").css opacity: 1

dispTutArrowImg = ->
  $("#tutrialArrow").css
    opacity: 0.8
    top: "240px"
    left: "73%"

disp_WelcomeToHanselImg = ->
  $("#welcomeToHanselImg").css opacity: 0.8

disp_explain_UI = ->
  $("#tutrial_explainUI").css
    opacity: 0.8
    top: "498px"
    left: "7%"
### ---------ここまでチュートリアル--------- ###