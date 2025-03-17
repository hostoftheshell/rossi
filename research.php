<?php $currentNav = 'Recherche'  ?>

        <?php require_once(__DIR__ . '/includes/header.php'); ?>
        
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
        
            <?php require_once(__DIR__ . '/includes/footer.php'); ?>