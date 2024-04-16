<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Collaborations</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Italianno&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="icon" href="./assets/dist/favicon/favicon.ico" />
        <link rel="stylesheet" href="./assets/dist/reset.css">
        <link rel="stylesheet" href="./assets/dist/style.css">
    </head>
    <?php $currentNav = 'collaborations'  ?>
    <body>
        <div class="container">
            <?php require_once(__DIR__ . '/includes/header.php'); ?>
            <main>
                <section class="collaborations">
                    <h3>Collaborations : </h3>
                    <article class="collaborations-articles">
                        <h4>Pages des collègues</h4>
                        <ul>
                            <li><a href="http://www.lmm.jussieu.fr/~chibbaro/Home.html ">Sergio Chibbaro</a></li>
                            <li><a href="http://www.dalembert.upmc.fr/delbende/">Ivan Delbende</a></li>
                            <li><a href="http://www.lmm.jussieu.fr/~antkowiak/">Arnaud Antkowiak</a></li>
                            <li><a href="http://www.lmm.jussieu.fr/~audoly/">Basile Audoly </a></li>
                        </ul>
                    </article>
                    <article class="collaborations-articles">
                        <h4>Pages des étudiants</h4>
                    </section>
                </article>
                </main>
            <?php require_once(__DIR__ . '/includes/footer.php'); ?>
        </div>
    </body>
</html>
