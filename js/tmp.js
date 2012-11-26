function tutrialInit(){
    setTimeout(disp_WelcomeToHanselImg,1500);
    setTimeout(dispTutInfoP,5000);
    var arrowTimer = setTimeout(dispTutArrowImg,7000);
    //隅っこ触ったら矢印が消える。
    $("#pagesBox").bind("start", function(event, pageObject, corner) {
      if (corner=="tl" || corner=="tr") {
            clearTimeout(arrowTimer);
            $("#tutrialArrow").css({"opacity":0});
      }
    });
    //ページ右の開いた時
    $("#pagesBox").bind("turning", function(event, page, view) {
        if (page=6) {
            setTimeout(disp_explain_UI,500);
        }
    });
}
function dispTutInfoP(){
    $("#hanselMockTutrialInfo").css({"opacity":1});
}
function dispTutArrowImg(){
    $("#tutrialArrow").css({"opacity":0.8,"top":"240px","left":"73%"});
}
function disp_WelcomeToHanselImg(){
    $("#welcomeToHanselImg").css({"opacity":0.8});
}
function disp_explain_UI(){
    $("#tutrial_explainUI").css({"opacity":0.8,"top":"498px","left":"7%"});
}