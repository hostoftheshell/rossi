<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Italianno&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="./assets/dist/favicon/favicon.ico" />
    <link rel="stylesheet" href="./assets/dist/reset.css">
    <link rel="stylesheet" href="./assets/dist/style.css">
</head>
<?php $currentNav = 'home'  ?>

<body>
    <div class="container">
        <?php require_once(__DIR__ . '/includes/header.php'); ?>
        <main>
            <section class="research">
                <?php $id = isset($_GET['id']) ? (int)$_GET['id'] : 0; ?>
                <?php include(__DIR__ . '/includes/researches.php');
                foreach ($researches as $research) :
                    if ($id == $research['id']) :
                ?>
                        <article class="research-article">
                            <h3><?php echo $research['title']; ?></h3>
                            <figure>
                                <img src="<?php echo htmlspecialchars($research['image']); ?>" alt="<?php echo $research['alt']; ?>">
                                <figcaption><?php echo htmlspecialchars($research['figcaption']); ?></figcaption>
                            </figure>
                            <p><?php echo htmlspecialchars($research['description']); ?></p>
                        </article>
                <?php endif;
                endforeach; ?>
            </section>
        </main>
        <?php require_once(__DIR__ . '/includes/footer.php'); ?>
    </div>
</body>

</html>