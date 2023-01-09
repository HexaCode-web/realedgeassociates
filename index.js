const Header = document.querySelector(".Header");
const Nav = document.querySelector(".nav-wrapper");
const NavMob = document.querySelector(".navbar");
const SectionList = document.querySelectorAll("section");
const CardsList = document.querySelectorAll(".Card");
const buttonsList = SectionList[2].querySelectorAll("button");
const reload = document.querySelector("#reload");
const num1EL = document.querySelector(".Fnumber");
const num2EL = document.querySelector(".Snumber");
const result = document.querySelector(".result");
const submitBTN = document.querySelector("#submit");
const statusMSG = document.querySelector(".status");
const Form = document.querySelector("form");
const FormInput = Form.querySelectorAll(".InputItem");
document.addEventListener("scroll", () => {
  ViewEl();
});
document.addEventListener("touchmove", () => {
  ViewEl();
});
const ViewEl = () => {
  const windowHeight = window.innerHeight;
  const revealPoint = 150;
  if (Header.getBoundingClientRect().top < -66) {
    Nav.style.position = "fixed";
    Nav.style.paddingTop = "0";
    Nav.style.backgroundColor = "#111111";
    Nav.style.width = "100%";
    NavMob.classList.add("test");
  } else {
    Nav.style.position = "relative";
    Nav.style.paddingTop = "0px";
    Nav.style.backgroundColor = "transparent";
    Nav.style.width = "99%";
    NavMob.classList.remove("test");
  }
  if (SectionList[1].getBoundingClientRect().top < windowHeight - revealPoint) {
    SectionList[1].querySelector("h2").style.opacity = "1";
    SectionList[1].querySelector("h2").style.animation =
      "SlideFromTop 1s 0.3s both";
    CardsList.forEach((Card, i) => {
      switch (i) {
        case 0:
          Card.style.animation = "SlideFromLeft 1s 0.3s both";
          break;
        case 1:
          Card.style.animation = "SlideFromTop 1s 0.4s both";
          break;
        case 2:
          Card.style.animation = "SlideFromRight 1s 0.5s both";
          break;
        case 3:
          Card.style.animation = "SlideFromLeft 1s 0.6s both";
          break;
        case 4:
          Card.style.animation = "SlideFromBottom 1s 0.7s both";
          break;
        case 5:
          Card.style.animation = "SlideFromRight 1s 0.8s both";
          break;
        default:
          break;
      }
    });
  }
  if (SectionList[2].getBoundingClientRect().top < windowHeight - revealPoint) {
    buttonsList.forEach((button, i) => {
      switch (i) {
        case 0:
          button.style.opacity = "1";
          button.style.animation = "SlideFromLeft 1s 0s both";
          break;
        case 1:
          button.style.opacity = "1";
          button.style.animation = "SlideFromTop 1s 0s both";
          break;
        case 2:
          button.style.opacity = "1";
          button.style.animation = "SlideFromRight 1s 0s both";
          break;
        case 3:
          button.style.opacity = "1";
          button.style.animation = "SlideFromLeft 1s .2s both";
          break;
        case 4:
          button.style.opacity = "1";
          button.style.animation = "SlideFromBottom 1s 0s both";
          break;
        case 5:
          button.style.opacity = "1";
          button.style.animation = "SlideFromRight 1s .2s both";
          break;
        default:
          break;
      }
    });
  }
  if (SectionList[3].getBoundingClientRect().top < windowHeight - revealPoint) {
    SectionList[3].querySelector(".innerInfo").style.opacity = "1";
    SectionList[3].querySelector(".innerInfo").style.animation =
      "SlideFromLeft 1s 0s both";
    SectionList[3].querySelector(".Who-Photo").style.opacity = "1";
    SectionList[3].querySelector(".Who-Photo").style.animation =
      "SlideFromRight 1s 0s both";
  }
  if (Form.getBoundingClientRect().top < windowHeight - 100) {
    let delay = 0.1;
    SectionList[3].querySelector(".Contact").querySelector("h1").style.opacity =
      "1";
    SectionList[3]
      .querySelector(".Contact")
      .querySelector("h1").style.animation = "SlideFromTop 1s 0s both";
    FormInput.forEach((element) => {
      element.style.opacity = "1";
      delay += 0.1;
      element.style.animation = `SlideFromTop 1s ${delay}s both`;
    });
    Form.querySelector(".text").style.animation = `SlideFromBottom 1s .3s both`;
    Form.querySelector(
      "#recaptcha"
    ).style.animation = `SlideFromBottom 1s .4s both`;
  }
  if (SectionList[4].getBoundingClientRect().top < windowHeight - revealPoint) {
    console.log(SectionList[4]);
  }
};
submitBTN.addEventListener("click", (e) => {
  if (!recaptcha) {
    statusMSG.innerHTML = "Invalid captcha";
    e.preventDefault();
  }
});
reload.addEventListener("click", () => {
  randomizer();
  result.value = "";
  statusMSG.innerHTML = "";
  submitBTN.classList.add("inactive");
  submitBTN.style.cursor = "default";
});
const randomizer = () => {
  num1 = random();
  num2 = random();
  if (num1 > num2) {
    sum = num1 - num2;
    if (sum < 0) {
      debugger;
      num1 = random();
      num2 = random();
      sum = num1 - num2;
    }
    num2EL.innerHTML = num2;
    num1EL.innerHTML = num1;
  } else {
    sum = num2 - num1;
    if (sum < 0) {
      debugger;
      num1 = random();
      num2 = random();
      sum = num1 - num2;
    }
    num2EL.innerHTML = num1;
    num1EL.innerHTML = num2;
  }
  if (sum < 0) {
    console.log(sum);
  }
};
const random = () => {
  return Math.floor(Math.random() * 50);
};
randomizer();
result.addEventListener("keyup", (e) => {
  statusMSG.innerHTML = "";
  const input = Number(result.value);
  if (input === sum) {
    recaptcha = true;
    statusMSG.classList.remove("error");
    statusMSG.innerHTML = "correct!";
    submitBTN.classList.remove("inactive");
    submitBTN.style.cursor = "pointer";
    submitBTN.removeAttribute("disabled");
  } else {
    statusMSG.innerHTML = "Invalid captcha";
    statusMSG.classList.add("error");
    submitBTN.classList.add("inactive");
    submitBTN.style.cursor = "default";
  }
});
