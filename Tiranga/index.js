document.querySelectorAll(".game-card").forEach((card) => {
  card.addEventListener("mouseenter", () => {
    const content = card.querySelector(".game-card-content");
    content.style.transition = "opacity 0.5s ease-in-out";
    content.style.opacity = "1";
  });

  card.addEventListener("mouseleave", () => {
    const content = card.querySelector(".game-card-content");
    content.style.transition = "opacity 0.5s ease-in-out";
    content.style.opacity = "0";
  });
});

window.addEventListener("scroll", function () {
  let navbar = document.querySelector(".navbar-container");
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});
