<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Начало</title>
    <link type="text/css" href="styles/style.css" rel="stylesheet"/>
</head>
<body>
<header>
    <?php include 'templates/header.php'; ?>
</header>
<main>
    <div id="main-wrapper">
        <h1>Създатели на сайта</h1>
        <img src="http://static3.businessinsider.com/image/4bcf1bdc7f8b9acf574d0100-480/southpark-bear.jpg" alt="page-creators"/>
        <hr/>
        <div id="text-main">
            <br/>
            Ние сме
            <strong>TEAM DEEP SKY BLUE</strong>
            , екип студенти
            <a href="http://softuni.bg" target="_blank">Software University</a>
            . Този сайт е продукт на нашата дейност, свързана с курса по HTML/CSS.
            <br/>
            Целия source код на проекта може да намерите
            <a href="https://github.com/rozay/WebFundamentals-HTML-CSS-Teamwork" target="_blank">тук</a>
            .
            <br/>
            <br/>
            <hr/>

            <section>
                <article id="nikola" class="personal">
                    <img src="http://icons.iconarchive.com/icons/icons-land/vista-people/256/Person-Male-Light-icon.png" alt="icon"/>
                    <div class="text">
                        Никола Николов
                    </div>
                </article>

                <article id="todor" class="personal"></article>
                <article id="rossica" class="personal"></article>
                <article id="ivelin" class="personal"></article>
            </section>

        </div>
    </div>
</main>
<footer>
    <?php include 'templates/footer.php'; ?>
</footer>
</body>
</html>
