<!doctype html>
<html lang="ja">
<?php var_dump("test");?>
    <head>
        <meta charset="UTF-8">
        <title>
            Hansel Mock
        </title>

        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="css/stylesheets/index.css" />
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/turn.min.js"></script>
        <script src="js/commandBox.js"></script>
        <!-- https://typesquare.com -->
        <script src="http://typesquare.com/accessor/script/typesquare.js?rJ-VByOxeoQ%3D"></script>

        <script>
            //全てはここから始まる
            $(function() {
                //TODO ここで動的にページ追加する予定
                //www.turnjs.com/
                $("#pagesBox").turn({page:4});
                // チュートリアル専用の処理
                tutrialInit();
            });
        </script>

    </head>

    <body>

            <div id="titleRow" class="row">
                <div class="span3">
                    <a href="#" id="titleAnchor">
                        <img id="titleImg" src="img/Logo.png" height="314" width="900"/>
                    </a>
                </div>
            </div>
            <div id="subtitleRow" class="row">
                <div class="span3">
                    <img id="subtitleImg" src="img/Subtitle.png"/>
                </div>
            </div>


        <div class="container" id="bookContainer">
            <div class="row" id="bookRow">
                <div class="span9" id="bookSpan">
                    <div id="book">
                        <img id="bookImg" src="img/Notebook-website_merge_shadow.png" height="590" width="781">
                        <div id="pagesBox">
                            <div class="page rightPage"><img src="img/noteRight.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page leftPage"><img src="img/noteLeft.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page rightPage"><img src="img/noteRight.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div>
                            <!-- page4(welcome to hansel) -->
                            <div class="page leftPage">
                                <img src="img/noteLeft.jpg" class="pageBgImg" height="1156" width="824"/>
                                <div class="pageContent">
                                    <img src="img/welcome.png" id="welcomeToHanselImg" height="470" width="647"/>
                                </div>
                            </div>
                            <!-- page5 -->
                            <div class="page rightPage">
                                <img src="img/noteRight.jpg" class="pageBgImg" height="1156" width="824"/>
                                <div class="pageContent">
                                    <p id="hanselMockTutrialInfo">Hanselのモックアップです。<br>ページの端っこをクリック(またはドラッグ)してみてください。</p>
                                </div>
                            </div>
                            <!-- UI説明 -->
                            <div class="page leftPage"><img src="img/samplePage.png" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div>
                            <div class="page rightPage"><img src="img/samplePage2.png" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div>
                            <!-- あついコトバ -->
                            <div class="page leftPage"><img src="img/samplePage.png" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div>
                            <div class="page rightPage"><img src="img/samplePage2.png" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div>
                            <!-- クライマックス -->
                            <div class="page leftPage">
                                <img src="img/noteLeft.jpg" class="pageBgImg" height="1156" width="824"/>
                                <div class="pageContent">
                                </div>
                            </div>
                            <div class="page rightPage">
                                <img src="img/noteRight.jpg" class="pageBgImg" height="1156" width="824"/>
                                <div class="pageContent">
                                </div>
                            </div>
                        <!--
                            <div class="page"><img src="img/samplePage.png" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div>
                            <div class="page"><img src="img/samplePage2.png" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div>

                            <div class="page"><img src="img/samplePage.png" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/samplePage2.png" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/samplePage.png" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/samplePage2.png" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/noteLeft.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/noteRight.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/noteLeft.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/noteRight.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/noteLeft.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/noteRight.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/noteLeft.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/noteRight.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/noteLeft.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/noteRight.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div><div class="page"><img src="img/noteLeft.jpg" class="pageBgImg" height="1156" width="824"/><div class="pageContent"></div></div>
                        -->
                        </div>
                    </div><!-- end of #book -->
                </div><!-- end of #bookSpan -->
            </div><!-- end of #bookRow -->
        </div><!-- end of #bookContainer -->

        <!-- チュートリアル用のエレメンツ -->
        <img src="img/arrow.png" id="tutrialArrow"/>
        <p class="tutrialMessage" id="tutrial_explainUI">
            これがHanselのUIです。</br>
            毎日、Web上での活動の記録を</br>
            １日１ページづつ、</br>
            素敵に残していきます。</br>
        </p>
        <p class="tutrialMessage" id="tutrial_message2">
            mixiさん、</br>僕らは今、Hanselを本気で作っています。</br>
            このサービスはきっと世界をハッピーにする。</br>
            そう信じています。</br>
            ぜひ、このHanselをmixiさんと一緒に</br>
            ブラッシュアップさせてください。</br>
            どうかよろしくお願いします。
        </p>

        <img src="img/Logo.png" id="finalHanselLogo"/>
        <img src="img/forMOCK_finalSubTitle.png" id="finalSubTitle"/>


        <footer></footer>
    </body>
</html>