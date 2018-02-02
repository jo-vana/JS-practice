<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP practices</title>

    <!-- JS-->
<!--    <script src="arrays.js" type="text/javascript"></script>-->
<!--    <script src="loops.js" type="text/javascript"></script>-->
    <script src="js/jquery.js"></script>
<!--    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
</head>
<body>
<!--<div class="container">-->
<!--    <h1>This is my JS practice project</h1>-->
<!--    <div class="slider">-->
<!--        <div class="buttons">-->
<!--            <button data-img-id="img1" class="button-link">Button1</button>-->
<!--            <button data-img-id="img2" class="button-link">Button2</button>-->
<!--            <button data-img-id="img3" class="button-link">Button3</button>-->
<!--            <button data-img-id="img4" class="button-link">Button4</button>-->
<!--            <button data-img-id="img5" class="button-link">Button5</button>-->
<!--        </div>-->
<!--        <ul class="slides">-->
<!--            <li id="slide1" class="content">-->
<!--                <img src="slides/slide1.jpg" />-->
<!--                <p>Winter slide1</p>-->
<!--            </li>-->
<!--            <li id="slide2" class="content">-->
<!--                <img src="slides/slide2.jpg" />-->
<!--                <p>Winter slide2</p>-->
<!--            </li>-->
<!--            <li id="slide3" class="content">-->
<!--                <img src="slides/slide3.jpg" />-->
<!--                <p>Winter slide3</p>-->
<!--            </li>-->
<!--            <li id="slide4" class="content">-->
<!--                <img src="slides/slide4.jpg" />-->
<!--                <p>Winter slide4</p>-->
<!--            </li>-->
<!--            <li id="slide5" class="content">-->
<!--                <img src="slides/slide5.jpg" />-->
<!--                <p>Winter slide5</p>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->

<script>
    $(document).ready(function () {
        //wait for my all document load up  before I try to run any java script
        //doc can contain many doc.ready functions
    });
    //or sort version
    $(function () {

    });

//    $(function () {
//     $(".slider").hide(300).show(1000).hide(300).show(1000);
//    });
//    $(function () {
//        $(".slider").fadeOut(1000).delay(1000).slideDown(1000);
//    });
//    $(function () {
//        $(".slider").css({
//            color:"red",
//            fontWeight:"bold"
//        });
//    });

//    $(function () {
//        $(".slider .slide1").hide();
//        $(".slider .slide2").css({opacity:"0.5"});
//    });
    //Lesson 2......................
//    $ (function () {
////       $(".button-link").on("click", function () {
////          $("#slide1").toggle();
////       });
//        var content = "My new awesome content.";
//
//        $(".button-link").on("click", function () {
//            var buttonId = $(this).attr("data-img-id");
//            $('#' + buttonId).toggle();//not working!!!
//            $('#'+buttonId+'.content').html(content);//not working!!!
////            alert(buttonId);
////            $("#slide1").toggle();
//
//        });
////        $("#button2").on("click", function () {
////            $("#slide2").toggle();
////        });
////        $("#button3").on("click", function () {
////            $("#slide3").toggle();
////        });
////        $("#button4").on("click", function () {
////            $("#slide4").toggle();
////        });
////        $("#button5").on("click", function () {
////            $("#slide5").toggle();
////        });
//
//    });
</script>
<!--Lesson 3....DOM Document Object Module Traversal with JQ________-->
<!--<ul class="list">-->
<!--    <li>one</li>-->
<!--    <li class="special">two</li>-->
<!--    <li>three</li>-->
<!--    <li>-->
<!--        <ul class="sublist">-->
<!--            <li>1</li>-->
<!--            <li>2</li>-->
<!--            <li>3</li>-->
<!--        </ul>-->
<!--    </li>-->
<!--</ul>-->
<!--<style>-->
<!--    .special {-->
<!--        color: deepskyblue;-->
<!--    }-->
<!--</style>-->
<!--<script>-->
<!--    $(function () {-->
<!--        $('li').on('click', function () {-->
<!--//            $(this).siblings().hide();//with .siblings it will remove all except choose li-->
<!--            $(this).removeClass('special');-->
<!--            $(this).siblings().addClass('special');-->
<!--        })-->
<!--    });-->
<!--</script>-->
<!--Tab panel widget-------------------------------------->
<div class="tab-panels">
    <ul class="tabs">
        <li rel="panel1" class="active">panel1</li>
        <li rel="panel2">panel2</li>
        <li rel="panel3">panel3</li>
    </ul>
    <div id="panel1" class="panel active">
        content1<br/>
        content1<br/>
        content1<br/>
        content1<br/>
        content1<br/>
    </div>
    <div id="panel2" class="panel">
        content2<br/>
        content2<br/>
        content2<br/>
        content2<br/>
        content2<br/>
    </div>
    <div id="panel3" class="panel">
        content3<br/>
        content3<br/>
        content3<br/>
        content3<br/>
        content3<br/>
    </div>
</div>
<div class="tab-panels">
    <ul class="tabs">
        <li rel="panel4" class="active">panel4</li>
        <li rel="panel5">panel5</li
    </ul>
    <div id="panel4" class="panel active">
        content4<br/>
        content4<br/>
        content4<br/>
        content4<br/>
        content4<br/>
    </div>
    <div id="panel5" class="panel">
        content5<br/>
        content5<br/>
        content5<br/>
        content5<br/>
        content5<br/>
    </div>
</div>
<style>
    ul.tabs>li {
        display: inline-block;
    }
    li.active {
        color: red;
    }
    .panel {
        display: none;
    }
    .panel.active {
        display: block;
        color: red;
    }
</style>
<script>
    $(function () {

        $(".tab-panels .tabs li").on('click', function () {
            //if we have more than one similar panels
            var panel = $(this).closest('.tab-panels');

            //switching active class to tabs
            panel.find(".tabs li.active").removeClass('active');
            $(this).addClass('active');
            //figure out which panel to show
            var panelToShow= $(this).attr('rel');

            //hide current panel
            panel.find(".panel.active").slideUp(300, function () {
                $(this).removeClass('active');

                $("#"+panelToShow).slideDown(300, function () {
                    $(this).addClass('active');
                });
            });
            //show new panel
        });
    });
</script>


</body>
</html>