<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Italianno&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="./assets/dist/favicon/favicon.ico" />
    <link rel="stylesheet" href="./assets/dist/reset.css">
    <link rel="stylesheet" href="./assets/dist/style.css">
</head>
<?php $currentNav = 'course'  ?>

<body>
    <div class="container">
        <?php require_once(__DIR__ . '/includes/header.php'); ?>
        <main>
            <section class="courses">
                <h3>Cours : </h3>
                <div class="courses-card__wrapper">
                    <?php require_once(__DIR__ . '/includes/courses.php');
                    foreach ($courses as $course) :
                    ?>
                        <article class="courses-card">
                            <img src="<?php echo htmlspecialchars($course['image'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($course['alt'], ENT_QUOTES); ?>">
                            <div class="courses-card__title">
                                <p><?php echo htmlspecialchars($course['id'], ENT_QUOTES) ?></p>
                                <h4><?php echo htmlspecialchars($course['title'], ENT_QUOTES) ?></h4>
                            </div>
                            <div class="courses-card__link">
                                <?php if (!empty($course['links'])) : ?>
                                    <ul>
                                        <?php foreach ($course['links'] as $link) : ?>
                                            <li>
                                                <a href="<?php echo htmlspecialchars($link['url'], ENT_QUOTES); ?>">
                                                    <?php echo isset($link['title']) ? htmlspecialchars($link['title'], ENT_QUOTES) : 'Untitled'; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endforeach ?>
                </div>
            </section>
        </main>
        <?php require_once(__DIR__ . '/includes/footer.php'); ?>
    </div>
</body>

</html>