<?php

declare(strict_types=1);
global $currentNav;

$currentNav = $currentNav ?? 'Recherche';

function createNavItem(string $title, string $link, string $currentNav): string
{
  $isActive = ($currentNav === $title) ? ' class="current-nav"' : '';
  return "<li$isActive class=\"nav-bar__item\"><a href=\"$link\">$title</a></li>";
}
?>
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

<body>
  <div class="container">
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
        <img src="./assets/dist/images/1876496.svg" alt="" class="snail">
        <div class="hamburger">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
        <nav class="nav-bar__nav">
          <ul class="nav-bar__list">
            <?php
            echo createNavItem('Recherche', 'index.php', $currentNav);
            echo createNavItem('Livres-Article', 'books-articles.php', $currentNav);
            echo createNavItem('Cours', 'course.php', $currentNav);
            echo createNavItem('Collaborations', 'collaborations.php', $currentNav);
            echo createNavItem('Méthode', 'method.php', $currentNav);
            echo createNavItem('Vulgarisation', 'popularization.php', $currentNav);
            ?>
          </ul>
        </nav>
      </section>
    </header>
    <main>