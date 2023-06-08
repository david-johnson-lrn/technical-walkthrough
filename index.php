<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        @import url("https://res.leadoo.com/fonts/gilroy-medium.css");
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="./assets/styles.css">


    <title>Technical Walkthrough</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-around">
        <a class="navbar-brand" href="https://demos.learnosity.com/" style="font-weight:400;">Demo Site </a>
        <img src="./assets/img/LearnosityLogo.svg" width="300" height="100" alt="">
        </img>
        <a class="navbar-brand" href="https://reference.learnosity.com/" style="font-weight:400;">Developer Documentation</a>
        <button id="select" class="btn btn-outline-primary">Select</button>
    </nav>
    <div class="container-fluid">



        <!-- Select Tool Rectangle Div.  This will dynamically create a rectangle border once the Javascript events fire. -->
        <div id="rectangle"></div>



        <div id="mainView">
            <div class="full" id="main_image">
                <img src="./assets/img/under-the-hood.svg" alt="under the hood" id="image">
            </div>
            <div id="galleryContainer">
                <div class="d-flex justify-content-center">
                    <div class="gallery top-row move-down">
                        <img src="./assets/img/three-steps.png" alt="three_steps">
                        <img src="./assets/img/anatomy02.png" alt="Anatomy of Learning Product">
                        <img src="./assets/img/lrn-schematic-min.png" alt="Anatomy of Learning Product">
                        <img src="./assets/img/item-bank-concepts.png" alt="Item Bank Concepts">
                        <img src="./assets/img/lrn-schematic (1).png" alt="Full Schematic">
                        <img src="./assets/img/lrn-schematic-authorsite.png" alt="Cloud Author Site">
                    </div>
                </div>
            </div>
            <aside>
                <p id="codeArrow">&#8250;</p>
            </aside>
        </div>

        <p id="demoArrow">&#8249;</p>
        <div id="codeView" style="display:none">


            <div class="card card-body" style="margin:0 10vw 0 0;">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <img src="./assets/img/logos/product-author-full.png" alt="">
                    </div>
                    <div class="col-9">
                        <section class="d-flex justify-content-center">


                            <div class="card column ">
                                <ul>
                                    <li><a href="../code_samples/author_api_item_list.php" target="_blank">Item List View</a></li>
                                    <li><a href="../code_samples/author_api_activity_list.php" target="_blank">Activity List View</a></li>
                                    <li><a href="">Read Only</a></li>
                                    <li><a href="">1</a></li>
                                    <li><a href="">1</a></li>
                                    <li><a href="">1</a></li>
                                    <li><a href="">1</a></li>
                                    <li><a href="">1</a></li>
                                    <li><a href="">1</a></li>
                                </ul>
                            </div>

                        </section>
                    </div>
                </div>

            </div>

        </div>


        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                    <strong>Learnosity</strong> Technical inquires to David Johnson @ david.johnson@learnosity.com, David O'Sullivan @ david.osullivan@learnosity.com. Learn more at
                    <a href="https://learnosity.com/">Learnosity</a>.

                </p>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
    </script>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script> -->
    <script>
        let isBig = true
        let selectToggle = false;
        let rectangle = document.getElementById('rectangle');
        let isDrawing = false;
        let startX, startY;
        $("#galleryContainer").hide();
        $("#demoArrow").hide();


        $("body").keydown(function(e) {


            console.log(e.keyCode)
            if (e.keyCode === 32) {
                e.preventDefault();

                if (isBig) {
                    $("#image").css("transform", "scale(.75) translateY(-10vh)");
                    $("#image").css("transition", "transform .25s ease");
                    $(".top-row").removeClass("move-down")
                    $(".top-row").addClass("move-up")
                    $("#galleryContainer").show();

                    isBig = false;
                } else {
                    $("#image").css("transform", "scale(1) translateY(-10px)");
                    $("#image").css("transition", "transform .25s ease");
                    $(".top-row").removeClass("move-up")
                    $(".top-row").addClass("move-down")
                    $("#galleryContainer").hide();

                    isBig = true;
                }
            }
        })

        $(".gallery img").click(function(e) {
            let mainImageLink = $("#image").attr('src');
            let imageLink = e.target.getAttribute('src')

            $("#image").fadeOut(function() {
                $("#image").attr('src', imageLink);
            });
            $(this).fadeOut();
            $(this)[0].setAttribute('src', mainImageLink);
            $(this).fadeIn();

            $("#image").fadeIn();
        })

        $("#codeArrow").click(function() {

            $("#mainView").animate({
                right: "2000px",
                display: "none"
            }, "slow", function() {
                $("#mainView").fadeOut();
                $("#codeView").show();

                $("#codeView").animate({
                    left: "100px",
                    top: "-13vh"
                }, 1000, function() {

                });
            });
            $("#demoArrow").show();
        })

        $("#demoArrow").click(function() {


            $("#codeView").animate({
                left: "2000px",
                display: "none"
            }, 1000, function() {
                $("#mainView").fadeIn();
                $("#mainView").animate({
                    right: "0px",

                }, function() {
                    $("#demoArrow").hide();
                })
            });

        })

        $("#select").click(function() {
            console.log('clicked')
            if (selectToggle === false) {
                selectToggle = true;
                $(this).addClass("active")
                $(".container-fluid").css("cursor", "crosshair")
            } else {
                selectToggle = false;
                $(this).removeClass("active")
                $(".container-fluid").css("cursor", "auto")
                console.log("Select Off")
            }

        })


        $(".container-fluid").mousedown(function(event) {
            if (selectToggle === true) {
                isDrawing = true;
                startX = event.clientX;
                startY = event.clientY;
                rectangle.style.left = startX + 'px';
                rectangle.style.top = startY + 'px';
                rectangle.style.width = '0';
                rectangle.style.height = '0';
                rectangle.style.display = 'block';

                console.log('select is on')


            }
        });


        $(".container-fluid").mousemove(function(event) {

            if (!isDrawing) return;

            var width = event.clientX - startX;
            var height = event.clientY - startY;
            rectangle.style.width = Math.abs(width) + 'px';
            rectangle.style.height = Math.abs(height) + 'px';

            if (width < 0) {
                rectangle.style.left = event.clientX + 'px';
            }

            if (height < 0) {
                rectangle.style.top = event.clientY + 'px';
            }



        });

        $(".container-fluid").mouseup(function() {

            rectangle.style.display = 'none';
            isDrawing = false;


        });
    </script>
</body>

</html>