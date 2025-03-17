<?php
declare(strict_types=1); // Enable strict typing

function include_handling(string $file) {
    if (file_exists($file)) {
        require_once($file);
    } else {
        error_log("File not found: " . $file);
    }
}

$currentNav = 'Recherche';

?>



    <?php include_handling(__DIR__ . '/includes/header.php'); ?>
  
      <section class="headline">
        <div class="headline-contact__wrapper">
          <article class="headline-contact">
            <h2>Directeur de Recherche CNRS</h2>
            <p class="address">Institut Jean Le Rond D'Alembert, <br>Sorbonne Université</p>
            <div class="headline-contact__mail">
              <p>mèl : </p>
              <img src="./assets/dist/images/maurice.rossi@sorbonne-universite.fr.svg" alt="maurice.rossi at sorbonne-universite.fr" class="contact-img">
            </div>
          </article>
          <img class="headline-portrait" src="./assets/dist/images/placeholder.png" alt="">
        </div>
        <article class="headline__bio">
          <p>Les recherches de l'<a href="http://www.dalembert.upmc.fr/" target="_blank">Institut ∂'Alembert</a> ont pour objet des problèmes de mécanique des fluides, de
            mécanique des solides ou encore des problèmes d'acoustique.<br>Mon domaine est la mécanique des fluides théoriques et plus généralement des systèmes physiques
            non-linéaires. Les divers aspects de mes recherches s'égrenent ci-dessous sous la forme de thèmes.</p>
        </article>
        <article class="headline__news">
          <?php require_once(__DIR__ . '/includes/news.php'); ?>
          <h3><?php echo htmlspecialchars($news['title'], ENT_QUOTES); ?></h3>
          <p><?php echo htmlspecialchars($news['description'], ENT_QUOTES); ?></p>
        </article>
      </section>
      <section class="research">
        <div class="research-headline">
        <h3><?php echo htmlspecialchars($currentNav); ?>:</h3>
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
                          <?php if ($publication['url'] !== null && $publication['title'] !== null): ?>
                            <a href="<?php echo htmlspecialchars($publication['url'], ENT_QUOTES); ?>">
                              <?php echo htmlspecialchars($publication['title'], ENT_QUOTES); ?>
                            </a>
                          <?php endif; ?>
                        </li>
                      <?php endforeach ?>
                    <?php endif ?>
                </div>
              </a>
            </article>
          <?php endforeach ?>
        </div>
      </section>
    
    <?php include_handling(__DIR__ . '/includes/footer.php'); ?>
