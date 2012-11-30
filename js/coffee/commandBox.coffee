###
to COMPILE
"coffee --watch --bare --compile --output js/ js/coffee/*.coffee"
at HanselMock/
###



### ---------チュートリアル--------- ###

tutrialInit = ->
  setTimeout(disp_WelcomeToHanselImg, 1500)
  setTimeout(dispTutInfoP, 3000)
  arrowTimer = setTimeout(dispTutArrowImg, 4500)

  # ページめくり中に発火するイベント
  $("#pagesBox").bind "turning", (event, page, view) ->
    console.log " - - - - turning event fire! - - - - "
    console.log "page:"+page
    console.log "view:"+view
    hide_final_logo()
    hide_final_subtitle()
    hide_explain_UI()
    hide_massage_2()

  # ページめくった後に発火するイベント
  $("#pagesBox").bind "turned", (event, page, view) ->
    console.log "-------- turned event fire! --------"
    console.log "page:"+page
    console.log "view:"+view
    clearTimeout(arrowTimer)
    hideArrowImg()
    if page == 6 or page == 7
      setTimeout(disp_explain_UI, 500)
      arrowTimer = setTimeout(dispTutArrowImg,4300)
    if page == 8 or page == 9
      setTimeout(disp_massage_2, 500)
      arrowTimer = setTimeout(dispTutArrowImg,5000)
    if page == 10
      setTimeout( disp_final_logo, 1500)
      setTimeout( disp_final_subtitle, 4000)



disp_WelcomeToHanselImg = ->
  $("#welcomeToHanselImg").css opacity: 1
dispTutInfoP = ->
  $("#hanselMockTutrialInfo").css opacity: 1


dispTutArrowImg = ->
  $("#tutrialArrow").css
    opacity: 0.8
    top: "303px"
    left: "73%"
hideArrowImg = ->
  $arrow = $("#tutrialArrow")
  $arrow.css({opacity:0})
  setTimeout( (()->$arrow.css(left: 0,top: "100%")) ,1000)


disp_explain_UI = ->
  $("#tutrial_explainUI").css
    opacity: 0.8
    top: "528px"
    left: "7%"
hide_explain_UI = ->
  $("#tutrial_explainUI").css
    opacity: 0
    top: "-100px"


disp_massage_2 = ->
  $("#tutrial_message2").css
    opacity: 0.8
    top: "468px"
    left: "20%"
hide_massage_2 = ->
  $("#tutrial_message2").css
    opacity: 0
    top: "-100px"

disp_final_logo = -> $("#finalHanselLogo").css(opacity:1)
hide_final_logo = -> $("#finalHanselLogo").css(opacity:0)
disp_final_subtitle = -> $("#finalSubTitle").css(opacity:1)
hide_final_subtitle = -> $("#finalSubTitle").css(opacity:0)

### ---------ここまでチュートリアル--------- ###






