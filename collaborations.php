<?php
$currentNav = 'Collaborations'; // Define the current navigation title
require_once(__DIR__ . '/includes/header.php'); ?>
<section class="collaborations">
    <h3><?php echo htmlspecialchars($currentNav); ?>:</h3> <!-- Sanitize output -->
    <article class="collaborations-articles">
        <h4>Pages des collègues</h4>
        <ul>
            <li><a href="http://www.lmm.jussieu.fr/~chibbaro/Home.html">Sergio Chibbaro</a></li>
            <li><a href="http://www.dalembert.upmc.fr/delbende/">Ivan Delbende</a></li>
            <li><a href="http://www.lmm.jussieu.fr/~antkowiak/">Arnaud Antkowiak</a></li>
            <li><a href="http://www.lmm.jussieu.fr/~audoly/">Basile Audoly</a></li>
        </ul>
    </article>
    <article class="collaborations-articles">
        <h4>Pages des étudiants</h4>
        <!-- Add content for student pages here -->
    </article>
</section>
<?php require_once(__DIR__ . '/includes/footer.php'); ?>