const Header = document.querySelector(".Header");
const Nav = document.querySelector(".nav-wrapper");
const NavMob = document.querySelector(".navbar");
document.addEventListener("scroll", () => {
  const windowHeight = window.innerHeight;
  const revealPoint = 50;
  if (Header.getBoundingClientRect().top < -66) {
    Nav.style.position = "fixed";
    Nav.style.paddingTop = "0";
    Nav.style.backgroundColor = "#111111";
    Nav.style.width = "100%";
  } else {
    Nav.style.position = "relative";
    Nav.style.paddingTop = "0px";
    Nav.style.backgroundColor = "transparent";
    Nav.style.width = "99%";
  }
});
document.addEventListener("touchmove", () => {
  const windowHeight = window.innerHeight;
  const revealPoint = 50;
  if (Header.getBoundingClientRect().top < -80) {
    NavMob.classList.add("test");
  } else {
    NavMob.classList.remove("test");
  }
});
