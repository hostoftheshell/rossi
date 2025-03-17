document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const navBarNav = document.querySelector(".nav-bar__nav");
    console.log(hamburger);
    console.log(navBarNav);

    hamburger.addEventListener("click", function () {
      navBarNav.classList.toggle("active");
    });
  });