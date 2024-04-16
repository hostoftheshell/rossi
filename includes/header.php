<header>
      <section class="app-bar" id="top">
      <h1><a href="index.php">Maurice Rossi</a></h1>
        <nav class="app-bar__nav">
          <a href="https://www.cnrs.fr/fr" target="_blank">
            <img src="./assets/dist/images/logo_cnrs.svg" alt="" class="app-bar__item"></a>
          <a href="https://www.sorbonne-universite.fr/" target="_blank">
            <img src="./assets/dist/images/logo_upmc.svg" alt="" class="app-bar__item"></a>
          <a href="http://www.dalembert.upmc.fr/ijlrda/" target="_blank">
            <img src="./assets/dist/images/logo_alembert.jpg" alt="" class="app-bar__item"></a>
        </nav>
      </section>
      <section class="nav-bar">
       <a href="index.php"><img src="./assets/dist/images/1876496.svg" alt="" class="snail"></a>
        <nav class="nav-bar__nav">
          <ul class="nav-bar__list">
            <li <?php if ($currentNav == 'home') {echo ' class="current-nav"';} ?> class="nav-bar__item">
              <a href="index.php">Recherche</a>
            </li>
            <li <?php if ($currentNav == 'books') {echo ' class="current-nav"';} ?> class="nav-bar__item">
              <a href="books-articles.php">Livres - Articles</a>
            </li>
            <li <?php if ($currentNav == 'course') {echo ' class="current-nav"';} ?> class="nav-bar__item">
              <a href="course.php">Cours</a>
            </li>
            <li <?php if ($currentNav == 'collaborations') {echo ' class="current-nav"';} ?> class="nav-bar__item">
              <a href="collaborations.php">Collaborations</a>
            </li>
            <li <?php if ($currentNav == 'method') {echo ' class="current-nav"';} ?> class="nav-bar__item">
              <a href="method.php">Méthode</a>
            </li>
            <li <?php if ($currentNav == 'popularization') {echo ' class="current-nav"';} ?> class="nav-bar__item">
              <a href="popularization.php">Vulgarisation</a>
            </li>
          </ul>
        </nav>
      </section>
    </header>