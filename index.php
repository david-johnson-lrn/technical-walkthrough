<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles.css">

    <title>Technical Walkthrough</title>
</head>

<body>
    <div class="container-fluid">

        <!-- <div class="gallery">

            <img src="./assets/img/under-the-hood.svg" alt="under the hood">
            <img src="./assets/img/three-steps.png" alt="three_steps">
            <img src="./assets/img/anatomy02.png" alt="Anatomy of Learning Product">
        </div> -->

        <div class="d-flex justify-content-center">
            <div class="gallery top-row move-up">
                <img src="./assets/img/three-steps.png" alt="three_steps">
                <img src="./assets/img/anatomy02.png" alt="Anatomy of Learning Product">
                <img src="./assets/img/lrn-schematic-min.png" alt="Anatomy of Learning Product">
                <img src="./assets/img/item-bank-concepts.png" alt="Anatomy of Learning Product">
            </div>
        </div>


        <div class="full" id="main_image">
            <img src="./assets/img/under-the-hood.svg" alt="under the hood" id="image">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        let image = document.getElementById("image");

        let isBig = true

        $("#main_image").click(function() {

            if (isBig) {
                image.style.transform = "scale(.75)";
                image.style.transition = "transform .25s ease";
                // image.style.transform = "translateY(300px)"
                $(".top-row").removeClass("move-up")
                $(".top-row").addClass("move-down")

                isBig = false;
            } else {
                image.style.transform = "scale(1)";
                image.style.transition = "transform .25s ease";
                $(".top-row").removeClass("move-down")
                $(".top-row").addClass("move-up")

                isBig = true;
            }

            console.log("clicked")

        })
    </script>
</body>

</html>