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
<!--    <script src="/../node_modules/jquery/dist/jquery.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="container">
    <h1>This is my JS practice project</h1>
    <div class="slider">
        <ul class="slides">
            <li class="slide1">
                <img src="slides/slide1.jpg" />
                <p>Winter slide1</p>
            </li>
            <li class="slide2">
                <img src="slides/slide2.jpg" />
                <p>Winter slide2</p>
            </li>
            <li>
                <img src="slides/slide3.jpg" />
                <p>Winter slide3</p>
            </li>
            <li>
                <img src="slides/slide4.jpg" />
                <p>Winter slide4</p>
            </li>
            <li>
                <img src="slides/slide5.jpg" />
                <p>Winter slide5</p>
            </li>
        </ul>
    </div>
</div>

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

</script>


</body>
</html>