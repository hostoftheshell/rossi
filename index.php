<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
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
      <section class="headline">
        <div class="headline-contact__wrapper">
          <article class="headline-contact">
            <h2>Directeur de Recherche CNRS</h2>
            <p>Institut Jean Le Rond D'Alembert, <br>Sorbonne Université</p>
            <div class="headline-contact__mail">
              <p>mèl : </p>
              <img src="./assets/dist/images/maurice.rossi@sorbonne-universite.fr.svg" alt="maurice.rossi at sorbonne-universite.fr" class="contact-img">
            </div>
          </article>
          <img src="./assets/dist/images/1 KfCI25uPVcyqH9g3On6U7w.png" alt="">
        </div>
        <article class="headline__bio">
          <p>Les recherches de l'<a href="http://www.dalembert.upmc.fr/" target="_blank">Institut ∂'Alembert</a> ont pour objet des problèmes de mécanique des fluides, de
            mécanique des solides ou encore des problèmes d’acoustique.<br>Mon domaine est la mécanique des fluides théoriques et plus généralement des systèmes physiques
            non-linéaires. Les divers aspects de mes recherches s’égrennent ci-dessous sous la forme de thèmes.</p>
        </article>
        <article class="headline__news">
          <?php require_once(__DIR__ . '/includes/news.php'); ?>
          <h3><?php echo htmlspecialchars($news['title'], ENT_QUOTES); ?></h3>
          <p><?php echo htmlspecialchars($news['description'], ENT_QUOTES); ?></p>
        </article>
      </section>
      <section class="research">
        <div class="research-headline">
          <h3>Recherche : </h3>
        </div>
        <div class="research-card__wrapper">
          <?php require_once(__DIR__ . '/includes/researches.php');
          foreach ($researches as $research) : ?>
            <article class="research-card">
              <a href="research.php?id=<?php echo urlencode($research['id']); ?>">
                <img src="<?php echo htmlspecialchars($research['image'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($research['alt']); ?>">
                <div class="research-card__container">
                  <h4><?php echo htmlspecialchars($research['title'], ENT_QUOTES); ?></h4>
                  <p><?php echo htmlspecialchars($research['description'], ENT_QUOTES); ?></p>

                  <?php if (!empty($research['publications'])) : ?>
                    <ul>
                      <?php foreach ($research['publications'] as $publication) : ?>
                        <li>
                          <a href="<?php echo htmlspecialchars($publication['url'], ENT_QUOTES); ?>">
                            <?php echo isset($publication['title']) ? htmlspecialchars($publication['title'], ENT_QUOTES) : ''; ?>
                          </a>
                        </li>
                      <?php endforeach ?>
                    <?php endif ?>
                </div>
              </a>
            </article>
          <?php endforeach ?>
        </div>
      </section>
    </main>
    <?php require_once(__DIR__ . '/includes/footer.php'); ?>
  </div>
</body>

</html>