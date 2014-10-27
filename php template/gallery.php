<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Галерия</title>
    <link type="text/css" href="styles/style.css" rel="stylesheet"/>
    <link type="text/css" href="styles/styles-gallery.css" rel="stylesheet"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/global.js"></script>
    <link rel="stylesheet" href="css/baguetteBox.min.css">
    <script src="js/baguetteBox.min.js" async></script>
</head>
<body>
<header class="header">
    <?php include 'templates/header.php'; ?>
</header>
<main>
    <div id="main-wrapper">
        <section class="baguetteBoxOne">
            <div class="galleryWrapper">
                <table>
                    <tr>
                        <td><div><a src="resources/images/gallery/2typesOfPeople.png"><img src="resources/images/gallery/2typesOfPeople.png"></a></div></td>
                        <td><div><a src="resources/images/gallery/7-being-a-programmer-joke.jpg"><img src="resources/images/gallery/7-being-a-programmer-joke.jpg"></a></div></td>
                        <td><div><a src="resources/images/gallery/10-awesome-programming-jokes.jpg"><img src="resources/images/gallery/10-awesome-programming-jokes.jpg"></a></div></td>
                        <td><div><a src="resources/images/gallery/automation.png"><img src="resources/images/gallery/automation.png"></a></div></td>
                    </tr>
                    <tr>
                        <td><div><a src="resources/images/gallery/chuck-norris-demotivational.jpg"><img src="resources/images/gallery/chuck-norris-demotivational.jpg"></a></div></td>
                        <td><div><a src="resources/images/gallery/codeStyleEvolution.jpg"><img src="resources/images/gallery/codeStyleEvolution.jpg"></a></div></td>
                        <td><div><a src="resources/images/gallery/compiling2.png"><img src="resources/images/gallery/compiling2.png"></a></div></td>
                        <td><div><a src="resources/images/gallery/evolution.jpg"><img src="resources/images/gallery/evolution.jpg"></a></div></td>
                    </tr>
                    <tr>
                        <td><div><a src="resources/images/gallery/free_lancer.jpg"><img src="resources/images/gallery/free_lancer.jpg"></a></div></td>
                        <td><div><a src="resources/images/gallery/gradeC++.jpg"><img src="resources/images/gallery/gradeC++.jpg"></a></div></td>
                        <td><div><a src="resources/images/gallery/homeSweetHome.jpg"><img src="resources/images/gallery/homeSweetHome.jpg"></a></div></td>
                        <td><div><a src="resources/images/gallery/lol_programming.jpg"><img src="resources/images/gallery/lol_programming.jpg"></a></div></td>
                    </tr>
                    <tr>
                        <td><div><a src="resources/images/gallery/MAoO4uT.jpg"><img src="resources/images/gallery/MAoO4uT.jpg"></a></div></td>
                        <td><div><a src="resources/images/gallery/notSure.jpg"><img src="resources/images/gallery/notSure.jpg"></a></div></td>
                        <td><div><a src="resources/images/gallery/programmer%20jokes.jpg"><img src="resources/images/gallery/programmer%20jokes.jpg"></a></div></td>
                        <td><div><a src="resources/images/gallery/programmers-be-like.jpg"><img src="resources/images/gallery/programmers-be-like.jpg"></a></div></td>
                    </tr>
                    <tr>
                        <td><div><a src="resources/images/gallery/random_number.png"><img src="resources/images/gallery/random_number.png"></a></div></td>
                        <td><div><a src="resources/images/gallery/softwareProduct.jpg"><img src="resources/images/gallery/softwareProduct.jpg"></a></div></td>
                        <td><div><a src="resources/images/gallery/stagesOfEveryTask.jpg"><img src="resources/images/gallery/stagesOfEveryTask.jpg"></a></div></td>
                        <td><div><a src="resources/images/gallery/tan_lines_of_a_programmer2.jpg"><img src="resources/images/gallery/tan_lines_of_a_programmer2.jpg"></a></div></td>
                    </tr>
                    <tr>
                        <td><div><a src="resources/images/gallery/WaterFallApproachInTheoryVSInPractice.jpg"><img src="resources/images/gallery/WaterFallApproachInTheoryVSInPractice.jpg"></a></div></td>
                    </tr>
                </table>
            </div>
        </section>
    </div>
</main>
<footer>
    <?php include 'templates/footer.php'; ?>
</footer>
<script>
    window.onload = function() {
        baguetteBox.run('.baguetteBoxOne');
    };
</script>
</body>
</html>
