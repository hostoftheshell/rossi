
<?php $currentNav = 'Cours'  ?>


        <?php require_once(__DIR__ . '/includes/header.php'); ?>
        
            <section class="courses">
            <h3><?php echo htmlspecialchars($currentNav); ?>:</h3>
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
        
        <?php require_once(__DIR__ . '/includes/footer.php'); ?>
