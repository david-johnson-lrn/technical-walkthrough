<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="./assets/styles.css">


    <title>Technical Walkthrough</title>
</head>

<body>
    <div class="container-fluid">

        <!-- As a link -->
        <nav class="navbar navbar-light bg-light justify-content-around">
            <a class="navbar-brand" href="https://demos.learnosity.com/" style="font-weight:400;">Demo Site </a>
            <img src="./assets/img/LearnosityLogo.svg" width="300" height="100" alt="">
            </img>
            <a class="navbar-brand" href="https://reference.learnosity.com/" style="font-weight:400;">Developer Documentation</a>
        </nav>

        <!-- As a heading -->

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
                        <img src="./assets/img/item-bank-concepts.png" alt="Anatomy of Learning Product">
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
                            <div class="card column is-one-third">
                                <p class="title is-4 has-text-centered">Item List Mode</p>
                                <div class="card-content">
                                    <div class="content">
                                        View a standard instance of the Author API in Item List Mode
                                    </div>
                                    <div class="spaceBetween">
                                        <a href="./author_api_item_list.php"><button class="button is-danger is-outlined">Demo</button></a>
                                        <a href="./sample.php?file=author_api_item_list.php"><button class="button is-danger is-outlined">Embeded</button></a>
                                        <a href="https://demos.learnosity.com/authoring/item-list.php" target="_blank"><button class="button is-danger is-outlined">Link</button></a>

                                    </div>
                                </div>
                            </div>
                            <div class="card column is-one-third">
                                <p class="title is-4 has-text-centered">Activity List Mode</p>
                                <div class="card-content">
                                    <div class="content">
                                        View a standard instance of the Author API in Activity List Mode

                                    </div>
                                    <div class="spaceBetween">
                                        <a href="./author_api_activity_list.php"><button class="button is-danger is-outlined">Demo</button></a>
                                        <a href="./sample.php?file=author_api_activity_list.php"><button class="button is-danger is-outlined">Embeded</button></a>
                                        <a href="https://demos.learnosity.com/authoring/activity-list.php" target="_blank"><button class="button is-danger is-outlined">Link</button></a>

                                    </div>
                                </div>
                            </div>
                            <div class="card column is-one-third">
                                <p class="title is-4 has-text-centered">Read Only</p>
                                <div class="card-content">
                                    <div class="content">
                                        Redefine the config object to request your Item Bank in Read-Only mode

                                    </div>
                                    <div class="spaceBetween">
                                        <a href="./author_api_read_only.php"><button class="button is-danger is-outlined">Demo</button></a>
                                        <a href="./sample.php?file=author_api_read_only.php"><button class="button is-danger is-outlined">Embeded</button></a>


                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <img src="./assets/img/logos/product-assessments-full.png" alt="">
                    </div>
                    <div class="col-9">
                        <section class="d-flex justify-content-center">
                            <div class="card column is-one-third">
                                <p class="title is-4 has-text-centered">(Activity) Assess Mode</p>
                                <div class="card-content">
                                    <div class="content">
                                        View the Assess player loading a specific activity. In this example we will see a prebuilt activity 'demo-activity-1'.
                                    </div>
                                    <div class="spaceBetween">
                                        <a href="./items_api_activity.php"><button class="button is-danger is-outlined">Demo</button></a>
                                        <a href="./sample.php?file=items_api_activity.php"><button class="button is-danger is-outlined">Embeded</button></a>

                                    </div>
                                </div>
                            </div>
                            <div class="card column is-one-third">
                                <p class="title is-4 has-text-centered">Inline Mode</p>
                                <div class="card-content">
                                    <div class="content">
                                        Render single or multiple Items on a page to be consumed by test takers. Inline items have freedom to be rendered wherever you want on page. Use this option to scatter items in different places.
                                    </div>
                                    <div class="spaceBetween">
                                        <a href="./items_api_inline.php"><button class="button is-danger is-outlined">Demo</button></a>
                                        <a href="./sample.php?file=items_api_inline.php"><button class="button is-danger is-outlined">Embeded</button></a>
                                        <a href="https://demos.learnosity.com/assessment/inline.php" target="_blank"><button class="button is-danger is-outlined">Link</button></a>

                                    </div>
                                </div>
                            </div>
                            <div class="card column is-one-third">
                                <p class="title is-4 has-text-centered">Assess Mode</p>
                                <div class="card-content">
                                    <div class="content">
                                        View our full Assess player by rendering in Assess Mode.
                                    </div>
                                    <div class="spaceBetween">
                                        <a href="./items_api_assess.php"><button class="button is-danger is-outlined">Demo</button></a>
                                        <a href="./sample.php?file=items_api_assess.php"><button class="button is-danger is-outlined">Embeded</button></a>
                                        <a href=" https://demos.learnosity.com/assessment/activities.php" target="_blank"><button class="button is-danger is-outlined">Link</button></a>
                                    </div>
                                </div>
                            </div>


                        </section>
                    </div>
                </div>


                <div class="row">
                    <div class="col-3 align-items-center d-flex">
                        <img src="./assets/img/logos/product-analytics-full.png" alt="">
                    </div>
                    <div class="col-9">
                        <section class="d-flex justify-content-center">
                            <div class="card column is-one-third">
                                <p class="title is-4 has-text-centered"> One Simple Report</p>
                                <div class="card-content">
                                    <div class="content">
                                        View a single report. Can be viewed stand alone, or embedded in your program. In this example, the Sessions Summary report.
                                    </div>
                                    <div class="spaceBetween">
                                        <a href="./reports_api_simple_report.php"><button class="button is-danger is-outlined">Demo</button></a>
                                        <a href="./sample.php?file=reports_api_simple_report.php"><button class="button is-danger is-outlined">Embeded</button></a>

                                    </div>
                                </div>
                            </div>
                            <div class="card column is-one-third">
                                <p class="title is-4 has-text-centered">Report using Tags</p>
                                <div class="card-content">
                                    <div class="content">
                                        Report using a Tag Hierarchical approach. Can be viewed stand alone, or embedded in your program.
                                    </div>
                                    <div class="spaceBetween">
                                        <a href="./reports_api_using_tags.php"><button class="button is-danger is-outlined">Demo</button></a>
                                        <a href="./sample.php?file=reports_api_using_tags.php"><button class="button is-danger is-outlined">Embeded</button></a>

                                    </div>
                                </div>
                            </div>
                            <div class="card column is-one-third">
                                <p class="title is-4 has-text-centered">Data API</p>
                                <div class="card-content">
                                    <div class="content">
                                        Click Demo to see JSON representation of the Data API
                                    </div>
                                    <div class="spaceBetween">
                                        <a href="./data_api_get_item.php"><button class="button is-danger is-outlined">Demo</button></a>
                                        <a href="https://demos.learnosity.com/analytics/data/index.php" target="_blank"><button class="button is-danger is-outlined">Link</button></a>
                                    </div>
                                </div>
                            </div>


                        </section>
                    </div>
                </div>






            </div>

        </div>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
    </script>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script> -->
    <script>
        let isBig = true
        $("#galleryContainer").hide();

        $("#main_image").click(function() {

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
                    top: "-150px"
                }, 900, function() {

                });
            });




            console.log("code")
        })
    </script>
</body>

</html>