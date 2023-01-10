const Header = document.querySelector(".Header-nonLanding");
const Nav = document.querySelector(".nav-wrapper");
const NavMob = document.querySelector(".navbar");
document.addEventListener("scroll", () => {
  ViewEl();
});
document.addEventListener("touchmove", () => {
  ViewEl();
});
const ViewEl = () => {
  if (Header.getBoundingClientRect().top < -40) {
    Nav.style.position = "fixed";
    Nav.style.paddingTop = "0";
    Nav.style.backgroundColor = "#111111";
    Nav.style.width = "100%";
    NavMob.classList.add("test");
  } else {
    Nav.style.position = "relative";
    Nav.style.paddingTop = "0px";
    Nav.style.width = "99%";
    NavMob.classList.remove("test");
  }
};
