<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Начало</title>
    <link type="text/css" href="styles/style.css" rel="stylesheet"/>
    <link type="text/css" href="styles/styles-index.css" rel="stylesheet"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/global.js"></script>
</head>
<body>
<header>
    <?php include 'templates/header.php'; ?>
</header>
<main>
    <div id="main-wrapper">
        <h1 id="homeHeader">Добре дошли в нашия сайт!</h1>
    <h3 id="homeSubheader">Тук можете да откриете всякакви нелепици от ежедневието на програмиста. </h3>
	
	<a href="gallery.php" class="homeLinks">
		<section class="homeSection">
			<h4>Галерия</h4>
			<img src="resources/images/gallery.jpg" alt="galleryImage" class="homeImgSection"/>
			<p class="homeParagraph">В нашата галерия ще откриете интересни гифчета и картинки.</p>
		</section>
	</a>
	<a href="guide.php" class="homeLinks">
		<section class="homeSection">
			<h4>Наръчник</h4>
			<img src="resources/images/guide.jpg" alt="guideImage" class="homeImgSection"/>
			<p class="homeParagraph">Какво трябва да направя, за да стана програмист? </p>
		</section>
	</a>
	<a href="jokes.php" class="homeLinks">
		<section class="homeSection">
			<h4>Бисери</h4>
			<img src="resources/images/text.png" alt="textImage" class="homeImgSection"/>
			<p class="homeParagraph">В секцията с бисери сме ви подготвили всякакви тъпотии в писмен вид</p>
		</section>
	</a>
    </div>
</main>
<footer>
    <?php include 'templates/footer.php'; ?>
</footer>
</body>
</html>
