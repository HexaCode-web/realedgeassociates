<?php
if(isset($_POST['submit']))
{
$user_name = $_POST['Partner-Name'];
$user_email = $_POST['Partner-Email'];
$user_company = $_POST['Partner-Company'];
$user_phone = $_POST['Partner-Phone'];
$user_country = $_POST['Partner-Country'];
$user_Partnership = $_POST['Partner-Partnership'];
$user_subject = $_POST['Partner-Title'];
$user_message = $_POST['Partner-Message'];
$email_form='Realedge@Realedge.com';
$subject="Partnership request from $user_name ";
$title=$user_subject;
$body=
"<div>Person info is:</div>".
"<div>Name:$user_name.</div>".
"<div>Company:$user_company.</div>".
"<div>Phone:$user_phone.</div>".
"<div>Country:$user_country.</div>".
"<div>Partnership Interest:$user_Partnership.</div>".
"<div>message:$user_message.</div>".
"<div>Email : $user_email.</div>\n";
$email_body='<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <link rel="preconnect" href="https://fonts.googleapis.com" /> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" /> <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet" /> <title>'.$subject.'</title> <style> body { font-family: "Montserrat"; margin: 0; height: 100vh; padding: 0; } .text-center img { width: 8rem; } .body { font-size: 1.5rem; padding: 1rem; margin: 2rem 0; } </style> </head> <body style="background: #e1e1e1"> <div class="container"> <div class="text-center imc"style=" background: #0a0a0a;display: flex;justify-content: center;align-items: center;padding: 0.5rem; margin-top:1rem;"> <img src="https://realedge1.000webhostapp.com//images/rea-original.png" alt="" style="margin: 0 auto;" /> </div> <div class="d-flex mt"> <div class="mt fs-big" style="font-size: 2.5rem; text-align: center; margin: 2rem 0" > '.$title.' </div> <div class="body"> '.$body.' </div> <div class="footer" style=" margin-top: auto; background: #0a0a0a; display: flex; padding: 0.5rem; justify-content: center; align-items: center; color: white;width:100;text-align:center;" > realedge © 2022 All Rights Reserved. </div> </div> </div> </body> </html>';
$to_email="realedgeassociates@gmail.com";
$headers="From: $email_form \r\n";
$headers .="Reply-To: $user_email \r\n";
$headers  .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
mail($to_email, $subject, $email_body, $headers)or die("Error!");
}
echo'
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <title>realedgeassociates</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="index.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
  </head>
  <body>
    <div class="main">
      <section class="Header">
        <div class="nav-wrapper">
          <a class="logo" href="index.html"
            ><img src="images/rea-original.png" alt="Logo"
          /></a>
          <ul class="nav">
            <li class="nav-item"><a href="index.html">Home</a></li>
            <li class="nav-item">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Data Science
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li>
                  <a
                    class="dropdown-item"
                    href="/Data-science.html"
                    >Data Science</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="/WhatData.html"
                    >What is Data Science</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="/actionable-intelligence.html"
                    >Actionable Intelligence</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="/data-science-technologies.html"
                    >Data Science Platforms
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >How to approach the challenge</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Bespoke vs Off the Shelf Data Science
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Risks in Data Science </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Examples of Data Science products
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >What is decision science?
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="/commercial-reasearch.html"
                >Commercial Research</a
              >
            </li>
            <li class="nav-item">
              <a href="/Data.html">Data</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Machine Learning
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li>
                  <a
                    class="dropdown-item"
                    href="/machine-learning.html"
                  >
                    Machine Learning</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="/What-is-Machine-Learning.html"
                    >What is Machine Learning?</a
                  >
                </li>
              </ul>
            </li>
             <li class="nav-item">
              <a href="big-data.html">Big Data</a>
            </li>
            <li class="nav-item">
              <a href="/services.html">Services</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Company Overview
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li>
                  <a
                    class="dropdown-item"
                    href="/Alliances-and-Partnerships.html"
                    >Alliances-and-Partnerships</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="/Quick-Glance.html"
                    >Quick Glance</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="/about-us.html"
                    >About Us</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="/team.html"
                    >Our Team
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <nav class="navbar navbar-dark bg-dark fixed-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"
              ><img src="images/rea-original.png" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasDarkNavbar"
              aria-controls="offcanvasDarkNavbar"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="offcanvas offcanvas-end text-bg-dark"
              tabindex="-1"
              id="offcanvasDarkNavbar"
              aria-labelledby="offcanvasDarkNavbarLabel"
            >
              <div class="offcanvas-header">
                <button
                  type="button"
                  class="btn-close btn-close-white"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item"><a href="index.html">Home</a></li>
                  <li class="nav-item">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Data Science
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li>
                        <a
                          class="dropdown-item"
                          href="/Data-science.html"
                          >Data Science</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          href="/WhatData.html"
                          >What is Data Science</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          href="/actionable-intelligence.html"
                          >Actionable Intelligence</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          href="/data-science-technologies.html"
                          >Data Science Platforms
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"
                          >How to approach the challenge</a
                        >
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"
                          >Bespoke vs Off the Shelf Data Science
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"
                          >Risks in Data Science
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"
                          >Examples of Data Science products
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#"
                          >What is decision science?
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a
                      href="/commercial-reasearch.html"
                      >Commercial Research</a
                    >
                  </li>
                  <li class="nav-item">
                    <a href="/Data.html">Data</a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Machine Learning
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li>
                        <a
                          class="dropdown-item"
                          href="/machine-learning.html"
                        >
                          Machine Learning</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          href="/What-is-Machine-Learning.html"
                          >What is Machine Learning?</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li><a href="big-data.html">Big Data</a></li>
                  <li class="nav-item">
                    <a href="/services.html"
                      >Services</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Company Overview
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li>
                        <a
                          class="dropdown-item"
                          href="/Alliances-and-Partnerships.html"
                          >Alliances-and-Partnerships</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          href="/Quick-Glance.html"
                          >Quick Glance</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          href="/about-us.html"
                          >About Us</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item"
                          href="/team.html"
                          >Our Team
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <div class="content">
          <h1>Thank You For Contacting Us</h1>
          <p class="fromPageText">
            we will reach back to you shortly!
          </p>
          <a href="index.html"
            ><button>Home</button></a
          >
        </div>
      </section>
      <section class="footer">
      <div class="col one">
        <h4>Realedge Associates</h4>
        <p>
          Company Number: 7119449
          <br />
          © 2014. All right reserve
        </p>
      </div>
      <div class="col two">
        <h4>Contact Info</h4>
        <p>
          Phone:(+44) 0208 886 6354<br />Email:
          sales@realedgeassociates.co.uk<br />Registered Office Address: 2
          Woodberry Grove, London, N12 0DR, UK
        </p>
      </div>
      <div class="col three">
        <h4>Follow Us</h4>
        <ul class="Socials">
        <li>
          <a href="https://www.linkedin.com/in/realedge-associates/" target="_blank"
            ><img src="../images/linkedin.png" alt="linkedin"
          /></a>
        </li>
        <li>
          <a href="https://twitter.com/Reasso_com" target="_blank"
            ><img src="../images/twitter.png" alt="twitter"
          /></a>
        </li>
      </ul>
        <a href="terms-of-use.html">Terms Of Use</a>
        <a href="privacy-policy.html">Privacy Policy</a>
      </div>
    </section>
  </div>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"
  ></script>
</body>
</html>
';
?>