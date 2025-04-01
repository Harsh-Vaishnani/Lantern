<?php
/*
Template Name: New Home
*/

?>
<?php wp_head(); ?>

<style>
  /* Desktop Navbar */
  .navbar-container {
    background: transparent;
    padding: 15px 0;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 999;
    transition: all 0.3s ease-in-out;
  }

  .navbar-container.scrolled {
    background: rgba(30, 30, 30, 0.7);
    backdrop-filter: blur(10px);
  }

  .header-signup {
    margin-left: 15px;
  }

  .logo {
    font-size: 22px;
    font-weight: bold;
    color: white;
  }

  /* Navigation Buttons */
  .nav-buttons {
    display: flex;
    gap: 15px;
    align-items: center;
  }

  .nav-buttons .btn {
    text-decoration: none;
    padding: 5px 12px;
    border-radius: 5px;
    font-weight: bold;
    transition: 0.3s ease;
  }

  .login-btn {
    background: transparent;
    color: white;
    border: 1px solid white;
    font-size: 22px;
  }

  .login-btn:hover {
    background: white;
    color: black;
  }

  .signup-btn {
    background: linear-gradient(260.94deg, #61a9fe -0.98%, #3892fb 97.66%) !important;
    color: black;
    font-size: 22px !important;
    padding: 8px 15px !important;
    margin-left: 10px;
  }

  .signup-btn:hover {
    background: linear-gradient(260.94deg, #4a94f5 -0.98%, #1e7deb 97.66%) !important;
    color: white;
  }


  /* Mobile-Specific Styling */
  @media (max-width: 768px) {
    .navbar-container {
      position: relative !important;
      /* Removes sticky behavior */
      background: transparent;
      padding: 15px 0;
    }

    .logo,
    .nav-india {
      position: static !important;
      text-align: center;
      width: 100%;
    }

    .nav-india img {
      display: inline-block;
      margin: 0 auto;
    }

    /* Sticky Bottom Navigation */
    .mobile-menu {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background: rgba(30, 30, 30, 0.8);
      backdrop-filter: blur(10px);
      z-index: 999;
      padding: 10px 0;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 15px;
      box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
      padding: 15px;
    }

    .mobile-menu .btn {
      padding: 8px 12px;
      font-size: 18px;
      border-radius: 5px;
    }
    .flip-clock-wrapper ul li a div div.inn{
            font-size: 40px;
        }
  }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="W8UP6B_9CQhqK46gB9l7kOP0qgShgkltEcXTMUZkhC8" />

  <title>Tiranga Games - Download App & Get ₹500 Sign Up Bonus - Tiranga Games App Login</title>
  <meta name="description" content="Download the Tiranga Game App to play fun Colour Games, Complete Tasks, Earn Rewards & easily withdraw rewards via UPI. Register Free and get ₹500 Sign Up Bonus Now.">
  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.freepik.com/256/808/808439.png?semt=ais_hybrid">
  <!-- AOS Library CSS Link -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Bootstrap CSS Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- External CSS Link -->
  <link rel="stylesheet" href="./index.css">
  <!-- MediaQuery CSS Link -->
  <link rel="stylesheet" href="./mediaQuery.css">
  <!-- Google Fonts Link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    
    
    <!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZjb7vjFJIvweAfIRa2r37W7/47z8/JmAODjWzo8PTHz64zF7G5Z11MFsfhN" crossorigin="anonymous">

<!-- Swiper CSS CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<!-- FlipClock.js CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css">


  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K76ZDPP6');
  </script>
  <!-- End Google Tag Manager -->

</head>


<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  @font-face {
    font-family: "Stolzl";
    src: url("./Stolzl/stolzl_bold.otf") format("opentype");
    font-weight: bold;
    /* Bold version */
    font-style: normal;
  }

  @font-face {
    font-family: "Stolzl";
    src: url("./Stolzl/stolzl_light.otf") format("opentype");
    font-weight: 300;
    /* Light version */
    font-style: normal;
  }

  body {
    font-family: "Stolzl", sans-serif;
    font-weight: 400;
    line-height: 1.4;
    color: #fff;
    background-color: #010f20 !important;
  }

  h1 {
    font-size: 33px !important;
    font-weight: 700;
  }

  h2 {
    font-size: 34px !important;
    font-weight: 700;
    color: #61a9fe !important;
  }

  h3 {
    font-size: 21px !important;
    font-weight: 600;
  }

  h4 {
    font-size: 20px !important;
    font-weight: 600;
    color: white !important;
  }

  h5 {
    font-size: 18px !important;
    font-weight: 500;
  }

  h6 {
    font-size: 18px !important;
    font-weight: 500;
  }

  p {
    font-size: 18px !important;
    font-weight: 400;
    line-height: 1.6;
  }

  span {
    font-weight: 500;
  }

  ::-webkit-scrollbar {
    width: 8px;
  }

  ::-webkit-scrollbar-track {
    background: #1a1a1a;
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb {
    background: linear-gradient(45deg, #ff9800, #ff5722);
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(45deg, #ff5722, #ff9800);
    /* Hover effect */
  }

  html {
    scroll-behavior: smooth;
  }

  body {
    overflow-x: hidden;
    scrollbar-width: thin;
    scrollbar-color: #ff9800 #1a1a1a;
  }

  ::-webkit-scrollbar {
    width: 8px;
  }

  ::-webkit-scrollbar-track {
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb {
    background: linear-gradient(245.84deg, #005dca 0.47%, #3892fb 102.01%);
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(245.84deg, #3892fb 0.47%, #005dca 102.01%);
  }

  html {
    scroll-behavior: smooth !important;
  }

  body {
    overflow-x: hidden;
    scrollbar-width: thin;
    scrollbar-color: #005dca #0a3d91;
  }

  /* Navbar */
  .navbar-container {
    background: transparent;
    padding: 15px 0;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 999;
    position: fixed;
    transition: all 0.3s ease-in-out;
  }

  .navbar-container.scrolled {
    background: rgba(30, 30, 30, 0.7);
    /* Thoda transparent black */
    backdrop-filter: blur(10px);
    /* Blur effect */
  }

  .header-signup {
    margin-left: 15px;
  }

  .logo {
    font-size: 22px;
    font-weight: bold;
    color: white;
  }

  /* Navigation Buttons */
  .nav-buttons {
    display: flex;
    gap: 15px;
    align-items: center;
  }

  .nav-buttons .btn {
    text-decoration: none;
    padding: 8px 15px;
    border-radius: 5px;
    font-weight: bold;
    transition: 0.3s ease;
  }

  .login-btn {
    background: transparent;
    color: white;
    border: 1px solid white;
    font-size: 22px;
  }

  .login-btn:hover {
    background: white;
    color: black;
  }

  .signup-btn {
    background: linear-gradient(260.94deg,
        #61a9fe -0.98%,
        #3892fb 97.66%) !important;
    color: black;
    font-size: 22px !important;
    padding: 8px 15px !important;
    /* margin-left: 15px; */
  }

  .signup-btn:hover {
    background: linear-gradient(260.94deg,
        #4a94f5 -0.98%,
        #1e7deb 97.66%) !important;
    color: white;
  }

  /* Hero Section */

  .hero-section {
    background-image: url("https://tirangagamesindia.in/wp-content/uploads/2025/02/download-4.webp");
    height: auto !important;
    display: flex;
    justify-content: center;
    align-items: center;
    background-size: cover;
  }

  .hero-content {
    text-align: left;
    max-width: 500px;
    margin-right: 30px;
  }

  .hero-content h1 {
    /* font-size: 36px; */
    font-weight: bold;
    color: white;
    margin-bottom: 20px;
  }

  .payment-box {
    background-color: #fff;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    transition: transform 0.3s ease-in-out;
  }

  .payment-box:hover {
    transform: scale(1.05);
  }

  .payment-box img {
    width: 100%;
    height: auto;
    max-height: 80px;
    object-fit: contain;
  }

  .payment-box p {
    color: #000;
    font-size: 14px;
    margin-top: 10px;
    font-weight: bold;
  }

  .hero-content p {
    /* font-size: 18px; */
    margin-bottom: 20px;
    color: white;
  }

  .cta-buttons a {
    display: inline-block;
    text-decoration: none;
    padding: 12px 25px;
    margin: 10px 0;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }

  .btn-register {
    background: linear-gradient(263.07deg, #ff9900 -8.54%, #ffd900 107.05%);

    color: black;
    width: 100%;
    /* font-size: 22px; */
    align-items: center;
    display: grid !important;
    transition: all 0.2s linear !important;
  }

  .btn-register:hover {
    background: transparent;
    color: white;
    border: 2px solid white;
  }

  .btn-login {
    background: transparent;
    border: 2px solid white;
    color: white;
    width: 48%;
    /* font-size: 22px; */
    transition: all 0.2s linear !important;
  }

  .btn-login:hover {
    background: white;
    color: black;
  }

  .btn-bonus {
    background: linear-gradient(260.94deg, #61a9fe -0.98%, #3892fb 97.66%);
    color: white;
    width: 76%;
    /* font-size: 22px; */
  }

  .btn-bonus:hover {
    background: linear-gradient(260.94deg, #4a94f5 -0.98%, #1e7deb 97.66%);
  }

  /* Hero Image */
  .hero-image {
    justify-content: center;
    display: flex;
  }

  .hero-image img {
    width: 100%;
    height: auto;
    border-radius: 5px;
    object-fit: contain;
  }

  /* About Section */
  .about-section {
    position: relative;
    padding: 80px 0;
    color: #fff;
    text-align: left;
    padding: 50px 0 0px 0px;
    overflow: hidden;
  }

  .about-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("https://tirangagamesindia.in/wp-content/uploads/2025/02/download.webp");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    opacity: 0.3;
    z-index: -1;
  }

  .section-title {
    /* font-size: 36px; */
    font-weight: bold;
    color: white;
    text-transform: uppercase;
  }

  .section-title span {
    color: white;
    font-weight: bold;
  }

  .section-desc {
    /* font-size: 18px; */
    line-height: 1.6;
    margin-bottom: 15px;
    color: #ccc;
  }

  .btn-play-now {
    display: inline-block;
    padding: 12px 24px;
    background: linear-gradient(260.94deg, #61a9fe -0.98%, #3892fb 97.66%);
    color: #fff;
    /* font-size: 22px; */
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 8px;
    transition: 0.3s;
  }

  .single-Play-btn:hover {
    background: transparent !important;
    border: 2px solid white;
  }

  .single-Play-btn {
    background: linear-gradient(263.07deg, #ff9900 -8.54%, #ffd900 107.05%);
    font-weight: bold;
  }

  .single-Play-btn:hover {
    background-color: transparent !important;
  }

  .btn-play-now:hover {
    background: linear-gradient(260.94deg, #4a94f5 -0.98%, #1e7deb 97.66%);
    transform: scale(1.05);
  }

  .about-image img {
    width: 100%;
    height: 70vh;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(255, 0, 0, 0.3);
    transition: transform 0.3s;
    object-fit: cover;
  }

  .about-image img:hover {
    transform: scale(1.05);
  }

  /* Key Features Section */
  .key-features {
    background: #1e1e1e;
    padding: 70px 0;
  }

  .feature-card {
    background: #2c2c2c;
    min-height: 310px !important;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    color: white;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .feature-card:hover {
    transform: translateY(-10px) !important;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
  }

  .feature-card h4 {
    /* font-size: 20px; */
    font-weight: bold;

    color: white;
    margin-bottom: 15px;
  }

  .feature-card p {
    /* font-size: 16px; */
    line-height: 1.6;
  }

  /* choose-tiranga CSS */

  .choose-tiranga {
    position: relative;
    padding: 60px 0;
    text-align: center;
    overflow: hidden;
  }

  .choose-tiranga::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("https://tirangagamesindia.in/wp-content/uploads/2025/02/download.webp");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    opacity: 0.3;
    z-index: -1;
  }

  .choose-tiranga-card {
    background: #222;
    color: #fff;
    padding: 20px;
    border-radius: 10px;

    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    min-height: 228px;
  }

  .choose-tiranga-card:hover {
    transform: translateY(-5px);
  }

  .choose-tiranga-card img {
    width: 60px;
    height: auto;
    margin-bottom: 10px;
  }

  .choose-tiranga-card h4 {
    /* font-size: 18px; */
    font-weight: bold;
    color: #ffcc00;
    margin-bottom: 5px;
  }

  .choose-tiranga-card p {
    /* font-size: 14px; */
    color: #ddd;
  }

  .join-tiranga {
    text-align: center;
    padding: 40px 0;
  }

  .play-btn,
  .signup-btn {
    display: inline-block;
    text-decoration: none;
    font-weight: bold;
    text-align: center;
    border-radius: 8px;
    transition: all 0.3s ease-in-out;
  }

  .play-btn {
    background: black;
    color: white;
    padding: 12px 20px;
    /* font-size: 25px; */
    width: 100%;
    border: 2px solid white;
  }

  .signup-btn {
    background: #ff0000;
    color: #fff;
    padding: 15px 25px;
    width: 100%;
  }

  .signup-bonus {
    /* font-size: 25px !important; */
  }

  .play-btn:hover {
    background: white;
    color: black;
  }

  .signup-btn:hover {
    background: #cc0000;
  }

  .combo-btn {
    width: 100%;
    padding-top: 5%;
  }

  .combo-btn-1 {
    width: 100% !important;
  }

  .game-cards {
    padding: 50px 0;
    background: #111111;
    text-align: center;
  }

  .game-card {
    color: #fff;
    padding: 20px;
    border-radius: 10px;
    transition: all 0.3s linear, box-shadow 0.3s ease-in-out;
    min-height: 140px;
    position: relative;
    overflow: hidden;
  }

  .game-card-1 {
    background-image: url("https://tirangagamesindia.in/wp-content/uploads/2025/02/Mask-group-4.png");
    width: 100% !important;
    background-size: cover !important;
  }

  .game-card-2 {
    background-image: url("https://tirangagamesindia.in/wp-content/uploads/2025/02/Mask-group-3.png");
    background-size: cover !important;
  }

  .game-card-3 {
    background-image: url("https://tirangagamesindia.in/wp-content/uploads/2025/02/Mask-group-2.png");
    background-size: cover !important;
  }

  .game-card-4 {
    background-image: url("https://tirangagamesindia.in/wp-content/uploads/2025/02/Mask-group-1.png");
    background-size: cover !important;
  }

  .game-card-5 {
    background-image: url("https://tirangagamesindia.in/wp-content/uploads/2025/02/Mask-group.png");
    background-size: cover !important;
  }

  .game-card-6 {
    background-image: url("https://tirangagamesindia.in/wp-content/uploads/2025/02/Mask-group-1-2.png");
    background-size: cover !important;
  }

  .game-card-7 {
    background-image: url("https://tirangagamesindia.in/wp-content/uploads/2025/02/Mask-group-2-1.png");
    background-size: cover !important;
  }

  .game-card-8 {
    background-image: url("https://tirangagamesindia.in/wp-content/uploads/2025/02/Mask-group-3-1.png");
    background-size: cover !important;
  }

  .game-card:hover {
    transform: translateY(-5px);
  }

  .game-card h3 {
    /* font-size: 22px; */
    margin-bottom: 8px;
    color: black;
  }

  .game-card p {
    /* font-size: 14px; */
    color: black;
  }

  /*.Popular-games {*/
  /*  width: 20%;*/
  /*}*/
  .game-card-img img {
    width: 100px;
    height: auto;
    object-fit: contain;
  }

  .game-card-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    visibility: hidden;
    opacity: 0;
  }

  .game-card-img img,
  .game-card h3 {
    visibility: visible;
    opacity: 1;
    transition: opacity 0.3s ease;
  }

  .game-card:hover .game-card-content {
    visibility: visible;
    opacity: 1;
  }

  .game-card:hover .game-card-img img,
  .game-card:hover .game-card h3 {
    visibility: hidden;
    opacity: 0;
  }

  .game-card:hover .game-card-img h3,
  .game-card:hover .game-card h3 {
    visibility: hidden;
    opacity: 0;
  }

  .hidden-content {
    color: #ddd;
    transition: all 0.3s linear !important;
  }

  .sport-betting-parent {
    width: 49% !important;
    border-radius: 20px;
    min-height: 415px;
    background: linear-gradient(245.84deg, #005dca 0.47%, #3892fb 102.01%);
  }

  #contact-support h3 {
    color: #333;
    margin-bottom: 10px;
  }

  #contact-support p {
    color: #666;
    margin-bottom: 20px;
  }

  #contact-support .btn {
    padding: 15px 30px;
    background-color: #007bff;
    border-color: #007bff;
    text-decoration: none;
    border-radius: 50px;
  }

  #contact-support .btn:hover {
    background-color: #0056b3;
    border-color: #0056b3;
  }

  #play-now h3 {
    color: #333;
    margin-bottom: 20px;
  }

  #play-now .btn {
    padding: 15px 30px;
    text-decoration: none;
    border-radius: 50px;
    font-weight: bold;
  }

  #get-started {
    background: #010f20;
    border-radius: 10px;
  }

  #get-started h2 {
    color: #333;
    margin-bottom: 20px;
  }

  .steps-list {
    list-style: none;
    padding: 0;
  }

  .steps-list li {
    margin-bottom: 10px;
    color: #444;
    display: flex;
    align-items: center;
  }

  .steps-list li strong {
    color: #007bff;
    font-weight: bold;
  }

  .register-btn {
    color: #007bff;
    font-weight: bold;
    text-decoration: none;
  }

  .bonus-text {
    font-weight: bold;
    margin: 20px 0;
    color: #28a745;
  }

  .btn-success {
    background: #28a745;
    border: none;
    padding: 12px 30px;
    border-radius: 50px;
    text-decoration: none;
    display: inline-block;
    font-weight: bold;
  }

  .btn-success:hover {
    background: #218838;
  }

  .Started-Tiranga {
    width: 45%;
    margin: auto;
  }

  #join-tiranga {
    height: auto;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;
    border-radius: 10px;
  }

  #join-tiranga h1 {
    margin-bottom: 15px;
  }

  #join-tiranga .lead {
    margin-bottom: 10px;
  }

  #join-tiranga h3 {
    margin: 15px 0;
  }

  .bonus-text {
    font-weight: bold;
    margin-bottom: 20px;
  }

  .btn-primary {
    background: #ff9800;
    border: none;
    padding: 12px 30px;
    border-radius: 50px;
    text-decoration: none;
  }

  .btn-primary:hover {
    background: #e68900;
  }

  .according-btn-que {
    font-weight: bold;
  }

  .blog-btn {
    background: linear-gradient(263.07deg, #ff9900 -8.54%, #ffd900 107.05%);
    color: black;
  }

  .blog-btn:hover {
    background-color: transparent;
    border: 2px solid white;
    color: white;
  }

  .footer {
    background: url("https://tirangagamesindia.in/wp-content/uploads/2025/02/download.webp") no-repeat center center/cover;
    position: relative;
    padding: 60px 20px;
    color: #fff;
    text-align: center;
  }

  /* Background Blur Effect */
  .footer::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(5px);
    z-index: 1;
  }

  /* Footer Content */
  .footer-content {
    position: relative;
    z-index: 2;
    max-width: 900px;
    margin: auto;
  }

  .footer-logo img {
    max-width: 150px;
  }

  .footer p {
    font-size: 14px;
    margin-bottom: 10px;
  }

  .footer a {
    color: #fff;
    font-weight: bold;
    text-decoration: none;
  }

  .footer a:hover {
    text-decoration: underline;
  }

  .Start_Playing:hover {
    background-color: white !important;
  }

  @media (max-width: 768px) {
    .parent-menu {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background: #1D2B64;
      /* Change as per your theme */
      z-index: 1050;
      padding: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      box-shadow: 0px -4px 6px rgba(0, 0, 0, 0.2);
    }

    .nav-buttons,
    .header-signup {
      display: flex;
      flex: 1;
      justify-content: center;
    }

    .nav-buttons a,
    .header-signup a {
      flex: 1;
      text-align: center;
      padding: 10px;
    }

    .navbar-container {
      background: transparent;
      padding: 15px 0;
      position: fixed;
      width: 100%;
      bottom: 0;
      left: 0;
      z-index: 999;
      position: fixed;
      transition: all 0.3s ease-in-out;
    }

    .navbar-container.scrolled {
      background: transparent;
      backdrop-filter: blur(0px);
    }

    .nav-india {
      background: rgba(30, 30, 30, 0.7);
      /* Thoda transparent black */
      backdrop-filter: blur(10px);
      /* Blur effect */
      position: static !important;

    }

    .logo {
      background: rgba(30, 30, 30, 0.7);
      /* Thoda transparent black */
      backdrop-filter: blur(10px);
      /* Blur effect */
      padding-top: 20px;
      position: static !important;

    }

    .navbar-container {

      padding: 0px;

    }

  }

  @media (max-width: 768px) {
    .hero-section {
      flex-direction: column;
      text-align: center;
      padding-top: 10px;
    }

    .nav-india {
      text-align: center;
      position: static;
    }

    .hero-content {
      max-width: 100%;
      margin-right: 0;
    }

    .hero-content h1 {
      font-size: 28px;
    }

    .cta-buttons a {
      padding: 10px 20px;
    }

    .parent_hero_div {
      display: block !important;
    }

    .hero-image {
      text-align: center !important;
      padding-top: 25px !important;
    }

    .nav-menu {
      display: block !important;
      padding: 0px;
    }

    .row {
      flex-direction: row !important;
      text-align: center;
    }

    .game-card {
      color: #fff;
      padding: 20px;
      border-radius: 10px;
      transition: all 0.3s linear, box-shadow 0.3s ease-in-out;
      min-height: 90px !important
    }

    .game-card-img img {
      height: 60px !important;
    }

    .mb-4 {
      margin-bottom: 1.5rem !important;
      PADDING: 3PX !important;
    }

    h3 {
      font-size: 12px !important;
      padding-top: 3px;

    }

    .game-card-img.d-flex {
      flex-direction: column;
    }

    p.hidden-content {
      font-size: 12px !important;
      display: none !important;


    }

  }

  @media (max-width: 375px) {
    .hero-content h1 {
      font-size: 24px;
    }

    .cta-buttons a {
      padding: 8px 15px;
    }
  }

  @media (max-width: 991px) {
    .about-section {
      text-align: center;
    }

    .about-content-parent {
      width: 100% !important;
      margin-top: 30px;
    }

    .about-content {
      margin-bottom: 30px;
    }

    .about-image img {
      max-width: 80%;
    }
  }

  @media (max-width: 768px) {
    .feature-card h4 {
      font-size: 18px;
    }

    .feature-card p {
      font-size: 14px;
    }
  }

  @media (max-width: 375px) {
    .key-features .row {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .feature-card {
      max-width: 100%;
      margin-bottom: 20px;
    }

    .feature-card h4 {
      font-size: 16px;
    }

    .feature-card p {
      font-size: 12px;
    }
  }

  @media (max-width: 768px) {
    .feature-card {
      padding: 15px;
    }

    .feature-card img {
      width: 50px;
    }

    .feature-card h4 {
      font-size: 16px;
    }

    .feature-card p {
      font-size: 13px;
    }
  }

  @media (max-width: 768px) {
    .row {
      flex-direction: column;
      text-align: center;
    }

    .play-btn,
    .signup-btn {
      width: 100%;
      max-width: none;
    }
  }

  @media (max-width: 768px) {
    .col-sm-6 {
      width: 100%;
    }
  }

  @media (max-width: 375px) {
    .game-card {
      padding: 15px;
    }

    .game-card h3 {
      font-size: 18px;
    }

    .game-card p {
      font-size: 13px;
    }
  }

  @media (max-width: 991px) {
    .sport-betting-parent {
      width: 100% !important;
    }
  }

  @media (max-width: 991px) {
    .btn-success {
      width: 100%;
    }
  }

  @media (max-width: 768px) {
    #join-tiranga {
      height: auto;
      padding: 40px 20px;
    }

    #join-tiranga h1 {
      font-size: 28px;
    }

    #join-tiranga .lead {
      font-size: 16px;
    }

    #join-tiranga h3 {
      font-size: 20px;
    }

    .btn-primary {
      width: 100%;
    }
  }

  @media (max-width: 991px) {
    .parent-Get-Started {
      display: block;
    }
  }

  @media (max-width: 1200px) {
    .Started-Tiranga {
      display: none;
    }

    .Started-Tiranga-2 {
      width: 100%;
    }

    .Started-Tiranga-2>h2 {
      text-align: center;
    }

    .content-signup {
      max-width: 600px;
      width: 95% !important;
      margin: 0 auto !important;
    }
  }

  @media (max-width: 375px) {
    .login-btn {
      font-size: 18px !important;
    }

    .signup-btn {
      font-size: 18px !important;
    }

    .hero-content h1 {
      padding-top: 20px !important;
    }
  }

  @media (max-width: 991px) and (min-width: 768px) {
    .Popular-games {
      width: 33% !important;
    }

    .main-popular-div {
      justify-content: start !important;
    }
  }

  @media (max-width: 476px) {
    .cta-buttons>div {
      display: block !important;
    }

    .cta-buttons>div>a {
      width: 100%;
    }
  }

  @media (max-width: 425px) {
    .nav-menu {
      display: block !important;
    }

    .logo {
      text-align: center;
      padding-bottom: 15px;
    }

    .hero-section {
      padding-top: 115px;
    }
  }

  @media (max-width: 767px) {
    .hero-content {
      padding-top: 30px !important;
    }
  }

  @media (max-width: 768px) {
    .nav-menu {
      display: block !important;
    }

    .logo {
      text-align: center;
      padding-bottom: 12px;
    }
  }

  @media (max-width: 769px) {
    .parent_hero_div {
      padding-top: 15%;
    }
  }

  @media (max-width: 768px) {
    .parent_hero_div {
      padding-top: 0%;
    }
  }

  @media (max-width: 415px) {
    .parent_hero_div {
      padding-top: 0%;
    }
  }

  @media (max-width: 403px) {
    .signup-btn {
      padding: 10px !important;
    }
  }

  @media (max-width: 1400px) {
    .hero-section {
      padding-top: 5%;
    }
  }

  @media (max-width: 1200px) {
    .hero-section {
      padding-top: 12%;
    }
  }

  @media (max-width: 600px) {
    .hero-section {
      padding-top: 10px;
    }
  }

  @media (max-width: 401px) {
    .hero-section {
      padding-top: 10px;
    }
  }

  @media (max-width: 425px) {
    .step-p {
      font-size: 18px !important;
      padding-bottom: 10px;
    }
  }

  @media (max-width: 768px) {
    .parent-menu {
      display: block !important;
    }

    .signup-btn {
      margin: 0px !important;
    }

    .nav-buttons>a {
      width: 50%;
      margin-bottom: 15px;
    }

    .signup-btn::after {
      content: " And Get ₹500 Bonus";
      display: inline;
    }

    .cta-buttons {
      display: none !important;
    }

    .join-register {
      width: 100%;
    }

    .signup-btn {
      width: 100% !important;
      font-size: 18px !important;
    }

    .single-Play-btn {
      width: 100% !important;
    }

    .sport-betting-parent {
      width: 95% !important;
      margin: auto;
    }

    .step-p {
      font-size: 16px !important;
    }

    .hero-image {
      padding-top: 0px !important;
    }

    .play-bet {
      font-size: 30px !important;
    }

    .btn-play-now {
      width: 100%;
    }

    .header-signup {
      margin: 0px !important;
    }

    .logo>a>img {
      width: 35% !important;
    }
  }

  @media (max-width: 346px) {
    .Sport-Betting {
      font-size: 30px !important;
    }
  }

  @media (max-width: 375px) {
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
      text-align: center;
    }
  }

  /*@media (max-width:1200px) {*/
  /*  .banner{*/
  /*    display: block  !important;*/
  /*  }*/
  /*}*/
  @media (max-width:1400px) {
    .nav-india>img {
      width: 50px !important;
    }
  }

  /*@media (max-width:1201px) {*/
  /*  .nav-india{*/
  /*    display: none !important;*/
  /*  }*/
  /*}*/
</style>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K76ZDPP6"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  <header class="navbar-container overflow-hidden d-none d-md-block">
    <div class="container d-flex justify-content-between align-items-center nav-menu">
      <!-- Logo -->
      <div class="logo" data-aos="" data-aos-duration="000">
        <a href=""> <img
            src="https://tirangagamesindia.in/wp-content/uploads/2025/02/tiranga-app-.webp"
            alt="" style="width: 50%;"> </a>
      </div>
      <div class="nav-india">
        <img
          src="https://tirangagamesindia.in/wp-content/uploads/2025/02/WhatsApp_Image_2025-02-05_at_16.33.54_9c0915d6-removebg-preview.png"
          alt="" style="width: 60px;">
        <span style="font-size: 14px !important; font-weight:600;">INDIA'S MOST POPULAR TIRANGA CLUB GAMES SITE</span>

      </div>

      <div class="d-flex justify-content-between parent-menu">
        <div class="nav-buttons" data-aos="" data-aos-duration="00">
          <a href="https://tirangagamesindia.in/blog/"
            class="btn blog-btn login-btn">Blogs</a>
          <a href="https://faleinadfasds.com/#/login" class="btn login-btn">Login</a>

        </div>
        <div class="header-signup" data-aos="" data-aos-duration="00">
          <a href="https://faleinadfasds.com/#/register?invitationCode=82281491664" class="btn signup-btn">Sign Up</a>
        </div>
      </div>
    </div>
  </header>


  <header class="navbar-container overflow-hidden d-lg-none d-block">
    <div class="container justify-content-between align-items-center">
      <!-- Logo (Non-sticky on Mobile) -->
      <div class="logo" data-aos="" data-aos-duration="000">
        <a href="">
          <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/tiranga-app-.webp"
            alt="Tiranga Logo" style="width: 50%;">
        </a>
      </div>

      <!-- Nav India (Non-sticky on Mobile) -->
      <div class="nav-india">
        <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/WhatsApp_Image_2025-02-05_at_16.33.54_9c0915d6-removebg-preview.png"
          alt="India Logo" style="width: 60px;">
        <span style="font-size: 14px !important; font-weight:600;">INDIA'S MOST POPULAR TIRANGA CLUB GAMES
          SITE</span>
      </div>
    </div>
  </header>

  <!-- Navigation Buttons (Sticky at Bottom on Mobile) -->
  <div class="mobile-menu justify-content-between d-lg-none d-block">
    <div class="nav-buttons" data-aos="" data-aos-duration="00">
      <a href="https://tirangagamesindia.in/blog/" class="btn blog-btn login-btn">Blogs</a>
      <a href="https://faleinadfasds.com/#/login" class="btn login-btn">Login</a>
    </div>
    <div class="header-signup" data-aos="" data-aos-duration="00">
      <a href="https://faleinadfasds.com/#/register?invitationCode=82281491664" class="btn signup-btn">Sign
        Up</a>
    </div>
  </div>







  <!-- Hero Section -->
  <section class="hero-section overflow-hidden">
    <div class="container d-flex justify-content-between align-items-center parent_hero_div">
      <div class="hero-content">
        <h1 data-aos="fade-right" data-aos-duration="1000">Tiranga Games – Play & Win Big in India’s Top Betting
          Platform!</h1>
        <p data-aos="fade-right" data-aos-duration="1200">Join Tiranga Game Now — Surprises are waiting for you
        </p>
        <p data-aos="fade-right" data-aos-duration="1500" class="m-0">Experience the thrill of online casinos
          and betting
          games. Play your favorite games, win real cash,
          and enjoy seamless withdrawals.</p>

        <div class="cta-buttons">
          <div class="w-100 justify-content-between d-flex" data-aos="fade-right" data-aos-duration="1500">
            <a href="https://faleinadfasds.com/#/login" class="btn btn-register "
              style="font-size: 22px !important;">Login &
              Start
              Winning</a>
          </div>
          <a href="https://faleinadfasds.com/#/register?invitationCode=82281491664" class="btn btn-bonus w-100"
            data-aos="fade-right" data-aos-duration="1500" data-aos="zoom-out" data-aos-duration="1500"
            style="font-size: 22px !important;">Get ₹500 Bonus
            on Sign-Up</a>
        </div>
      </div>
      <div class="hero-image text-end" data-aos="flip-left" data-aos-duration="1000">
        <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/1.png"
          alt="Game Image">
      </div>
    </div>
  </section>

  <div class="banner text-center d-none" style="background-color: transparent !important;">
    <img
      src="https://tirangagamesindia.in/wp-content/uploads/2025/02/WhatsApp_Image_2025-02-05_at_16.33.54_9c0915d6-removebg-preview.png"
      alt="Indian Flag" style="width: 120px;">
    <span>INDIA'S MOST POPULAR TIRANGA CLUB GAMES SITE</span>
  </div>

  <!-- About Section -->
  <section class="about-section overflow-hidden pb-4">
    <div class="container">
      <div class="row align-items-center  justify-content-between">
        <div class="col-lg-6 about-content-parent " style="width:100%;">
          <div class="about-content">
            <h2 class="section-title text-center pb-3" data-aos="fade-up" data-aos-duration="1000">
              Welcome
              to <span style="font-style: 22px;">Tiranga Games</span></h2>
            <p class="section-desc" data-aos="fade-up" data-aos-duration="1300">
              Tiranga Games is India’s most trusted platform for online betting and casino games.
              Tiranga Games is designed for those who seek both thrill and real-money rewards. Our
              platform blends fun, skill, and strategy, offering engaging games that challenge your
              analytical abilities and instincts. Whether you love Teen Patti, Rummy, Poker, Andar Bahar,
              Roulette, or Sports Betting, we offer the best odds and highest payouts.
            </p>
            <p class="section-desc" data-aos="fade-up" data-aos-duration="1500">
              At Tiranga Games, we bring you an exciting fusion of entertainment and earning
              opportunities. Whether you’re a seasoned player or just starting your journey in online
              gaming, our platform offers a wide variety of games that test your prediction skills,
              strategy, and luck. With an easy-to-use interface and smooth navigation, playing and winning
              has never been easier!
            </p>
            <div class="text-center">
              <a href="https://faleinadfasds.com/#/login"
                class="btn-play-now m-auto text-decoration-none" data-aos="fade-down" data-aos-duration="1500">Play
                Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="game-cards overflow-hidden">
    <div class="container">
      <div class="row main-popular-div" style="justify-content: space-between;">
        <div>
          <h2 class="play-bet" data-aos="fade-down" data-aos-duration="1000">Popular games on Tiranga Games
          </h2>
          <div class="my-2 py-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="d-flex mt-3" style="justify-content: center;">
              <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/Vector.png"
                alt="" style="object-fit: contain;">
              <h2 class="ps-3 m-0 Sport-Betting" style="color: white !important;">Casino Games</h2>
            </div>
            <div class="mb-4">
              <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/Vector-1.png"
                alt="" style="width: 225px;">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 mb-4 Popular-games">
          <div class="game-card d-flex justify-content-around  game-card-1" style="padding: 20px 10px;"
            data-aos="flip-up" data-aos-duration="1000">
            <a href="https://faleinadfasds.com/#/login" class="register-btn">
              <div class="game-card-img d-flex ">
                <img
                  src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—slot-777-of-jackpot-modern_6036852-1.png"
                  alt="Slots">
                <div>
                  <h3 style="text-transform: uppercase;"> Slots</h3>
                </div>
              </div>
              <div class="game-card-content">
                <h3 style="text-transform: uppercase;">Slots</h3>
                <p class="hidden-content" style="line-height: 20px; width: 150px;">Play jackpot slots & win
                  big.</p>
              </div>
            </a>
          </div>
        </div>



        <div class="col-md-3 col-6 mb-4 Popular-games">
          <div class="game-card d-flex justify-content-around game-card-2" style="padding: 20px 10px;"
            data-aos="flip-down" data-aos-duration="1200">
            <a href="https://faleinadfasds.com/#/login" class="register-btn">
              <div class="game-card-img d-flex">
                <img
                  src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—playing-cards-and-poker-chips_6053961-1.png"
                  alt="">
                <div>
                  <h3 style="text-transform: uppercase;"> Teen Patti</h3>
                </div>
              </div>
              <div class="game-card-content">
                <h3 style="text-transform: uppercase;">Teen Patti</h3>
                <p class="hidden-content" style="line-height: 20px; width: 150px;">India’s favorite card
                  game.</p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-3 col-4 mb-4 Popular-games">
          <div class="game-card d-flex justify-content-around game-card-3" style="padding: 20px 10px;"
            data-aos="flip-up" data-aos-duration="1400">
            <a href="https://faleinadfasds.com/#/login" class="register-btn">
              <div class="game-card-img d-flex">

                <img
                  src="https://tirangagamesindia.in/wp-content/uploads/2025/02/Asset-1-1.png"
                  alt="">
                <div>
                  <h3 style="text-transform: uppercase;">Andar Bahar</h3>
                </div>
              </div>
              <div class="game-card-content">
                <h3 style="text-transform: uppercase;">Andar Bahar</h3>
                <p class="hidden-content" style="line-height: 20px; width: 150px;">Test your luck & skills.
                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-3 col-4 mb-4 Popular-games">
          <div class="game-card d-flex justify-content-around game-card-4 " style="padding: 20px 10px;"
            data-aos="flip-down" data-aos-duration="1500">
            <a href="https://faleinadfasds.com/#/login" class="register-btn">
              <div class="game-card-img d-flex">
                <img
                  src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—casino-and-poker-gambling-.png"
                  alt="">
                <div>
                  <h3 style="text-transform: uppercase;">Poker</h3>
                </div>
              </div>
              <div class="game-card-content">
                <h3 style="text-transform: uppercase;">Poker</h3>
                <p class="hidden-content" style="line-height: 20px; width: 150px;">Challenge players & build
                  your
                  bankroll.</p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-3 col-4 mb-4 Popular-games">
          <div class="game-card d-flex justify-content-around game-card-5" style="padding: 20px 10px;" data-aos="flip-up"
            data-aos-duration="1500">
            <a href="https://faleinadfasds.com/#/login" class="register-btn">
              <div class="game-card-img d-flex">
                <img
                  src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—casino-gambling-roulette_4100060-1.png"
                  alt="">
                <div>
                  <h3 style="text-transform: uppercase;">Roulette</h3>
                </div>
              </div>
              <div class="game-card-content">
                <h3 style="text-transform: uppercase;">Roulette</h3>
                <p class="hidden-content" style="line-height: 20px; width: 150px;">Spin the wheel & bet on
                  your lucky
                  number.</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 col-4 mb-4 Popular-games">
          <div class="game-card d-flex justify-content-around game-card-6" style="padding: 20px 10px;" data-aos="flip-up"
            data-aos-duration="1500">
            <a href="https://faleinadfasds.com/#/login" class="register-btn">
              <div class="game-card-img d-flex">
                <img
                  src="https://tirangagamesindia.in/wp-content/uploads/2025/02/gamecategory_20240221154444kutg.png"
                  alt="">
                <div>
                  <h3 style="text-transform: uppercase;">Popular</h3>
                </div>
              </div>
              <div class="game-card-content">
                <h3 style="text-transform: uppercase;">Popular</h3>
                <p class="hidden-content" style="line-height: 20px; width: 150px;">Discover the most popular games & start
                  winning.</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 col-4 mb-4 Popular-games">
          <div class="game-card d-flex justify-content-around game-card-7" style="padding: 20px 10px;" data-aos="flip-up"
            data-aos-duration="1500">
            <a href="https://faleinadfasds.com/#/login" class="register-btn">
              <div class="game-card-img d-flex">
                <img
                  src="https://tirangagamesindia.in/wp-content/uploads/2025/02/gamecategory_20240221154540veqj-1.png"
                  alt="">
                <div>
                  <h3 style="text-transform: uppercase;">Lottery</h3>
                </div>
              </div>
              <div class="game-card-content">
                <h3 style="text-transform: uppercase;">Lottery</h3>
                <p class="hidden-content" style="line-height: 20px; width: 150px;">Try your luck with the lottery & win
                  exciting prizes!</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 col-4 mb-4 Popular-games">
          <div class="game-card d-flex justify-content-around game-card-8" style="padding: 20px 10px;" data-aos="flip-up"
            data-aos-duration="1500">
            <a href="https://faleinadfasds.com/#/login" class="register-btn">
              <div class="game-card-img d-flex">
                <img
                  src="https://tirangagamesindia.in/wp-content/uploads/2025/02/gamecategory_20240221154454akso.png"
                  alt="">
                <div>
                  <h3 style="text-transform: uppercase;">Sports</h3>
                </div>
              </div>
              <div class="game-card-content">
                <h3 style="text-transform: uppercase;">Sports</h3>
                <p class="hidden-content" style="line-height: 20px; width: 150px;">Bet on your favorite sports & experience
                  the thrill!</p>
              </div>
          </div>
          </a>
        </div>
      </div>
    </div>
  </section>


  <section class="overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-12 my-2 py-2" data-aos="fade-up" data-aos-duration="1000">
          <div class="d-flex justify-content-center mt-3 mb-2">
            <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/vecter-ball.png"
              alt="" style="object-fit: contain;">
            <h2 class="ps-3 m-0 Sport-Betting" style="text-transform: uppercase; color: white !important;">
              Sport Betting
            </h2>
          </div>
          <div class="mb-4 text-center">
            <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/Vector-1.png"
              alt="" style="width: 255px;">
          </div>
        </div>
      </div>

      <div class="row d-flex justify-content-between">
        <div class="col-12 col-md-6 col-lg-5 mb-4 sport-betting-parent" data-aos="fade-right" data-aos-duration="1000">
          <div class="d-flex flex-column align-items-center" data-aos="fade-down-left" data-aos-duration="1200">
            <a href="https://faleinadfasds.com/#/register?invitationCode=82281491664" class="register-btn">
              <img
                src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—cricket-logo_18283404-1.png"
                alt="" class="img-fluid" style="max-width: 270px; height: auto;"> </a>
            <div class="text-center mt-3">
              <h3 class="text-white play-bet">Cricket Betting</h3>
              <h4>Bet on IPL, T20, and International matches</h4>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-5 mb-4 sport-betting-parent" data-aos="fade-left" data-aos-duration="1000">
          <div class="d-flex flex-column align-items-center" data-aos="fade-down-right" data-aos-duration="1200">
            <a href="https://faleinadfasds.com/#/register?invitationCode=82281491664" class="register-btn">
              <img
                src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—sports-equipments-solid-white-background_16890897-1.png"
                alt="" class="img-fluid" style="max-width: 270px; height: auto;">
              <div class="text-center mt-3">
            </a>
            <h3 class="text-white play-bet">Football, Kabaddi, and More</h3>
            <h4>Live odds, high returns, and in-play betting</h4>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <section id="play-nowplay-now" class="overflow-hidden">
    <div class="container text-center my-5">
      <h2 class="text-white play-bet" data-aos="fade-down" data-aos-duration="1000">Play Now & Win Real Money</h2>
      <a href="https://faleinadfasds.com/#/login" class="btn  btn-lg single-Play-btn"
        data-aos="fade-up" data-aos-duration="1000">Play Now</a>
    </div>
  </section>
  <!-- Key Features Section -->
  <section class="key-features overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="text-center" style="margin-bottom: 20px;" data-aos="fade-down" data-aos-duration="1000">
          <h2 class="play-bet">Key Features</h2>
        </div>
        <div class="mb-4 col-md-4 ">
          <div class="feature-card" style="min-height: 192.4px;" data-aos="fade-right" data-aos-duration="1000">
            <h3>Seamless & User-Friendly Gaming Experience</h3>
            <p class="feature-content">
              At Tiranga Games, we prioritize user experience to ensure that gaming is smooth and
              hassle-free.
            </p>
          </div>
        </div>
        <div class="mb-4 col-md-4">
          <div class="feature-card" style="min-height: 192.4px;" data-aos="fade-down" data-aos-duration="1100">
            <h3>Intuitive User Interface</h3>
            <p>Our platform is designed for effortless navigation, making it easy for both beginners and
              experienced gamers to explore and enjoy their favorite games.</p>
          </div>
        </div>
        <div class="mb-4 col-md-4">
          <div class="feature-card" data-aos="fade-left" data-aos-duration="1200">
            <h3>Secure & Fast Transactions</h3>
            <p>Security is our top priority. We use advanced encryption technologies to protect all
              financial transactions, ensuring the safety of user data and funds at all times.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-4 d-flex justify-content-center">
          <div class="feature-card" data-aos="fade-right" data-aos-duration="1300">
            <h3>Instant Withdrawals – Get Your Winnings Instantly!</h3>
            <p>At Tiranga Games, we know how important it is for players to access their winnings without
              delays. That’s why we offer instant withdrawals via UPI, Paytm, and Bank Transfer, ensuring
              a quick and hassle-free cash-out process.</p>
          </div>
        </div>
        <div class="col-md-6 mb-4 d-flex justify-content-center">
          <div class="feature-card" data-aos="fade-left" data-aos-duration="1400">
            <h3>Fair Play & Transparency – 100% Trustworthy Gaming</h3>
            <p>Tiranga Games is committed to fair play and transparency. Our games are powered by secure and
              random algorithms, ensuring that every outcome is fair and unpredictable. We follow strict
              guidelines to create a safe, secure, and enjoyable betting environment for all players.</p>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Why Choose Tiranga Games -->
  <section class="choose-tiranga overflow-hidden">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-duration="1200">
          <div class="choose-tiranga-card">
            <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/security-1.png"
              alt="Secure & Legal">
            <h3>100% Secure & Legal</h3>
            <p>Play with confidence on a verified platform.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-left" data-aos-duration="1200">
          <div class="choose-tiranga-card">
            <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/wallet-1.png"
              alt="Instant Withdrawals">
            <h3>Instant Withdrawals</h3>
            <p>Get your winnings instantly via UPI, Paytm, and bank transfer.</p>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-duration="1400">
          <div class="choose-tiranga-card">
            <img
              src="https://tirangagamesindia.in/wp-content/uploads/2025/02/customer-service-1.png"
              alt="24/7 Support">
            <h3>24/7 Support</h3>
            <p>Our customer support team is always here to help.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-down" data-aos-duration="1400">
          <div class="choose-tiranga-card">
            <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/verified-1.png"
              alt="Verified Algorithms">
            <h3>Transparent & Verified Algorithms</h3>
            <p>Driven by transparent, verified algorithms for fair play</p>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-left" data-aos-duration="1400">
          <div class="choose-tiranga-card">
            <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/bonus-1.png"
              alt="Exciting Bonuses">
            <h3>Exciting Bonuses</h3>
            <p>Claim daily rewards, cashback, and referral bonuses.</p>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-duration="1500">
          <div class="choose-tiranga-card">
            <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/money-bag-1.png"
              alt="Fair Gameplay">
            <h3>No Manipulation</h3>
            <p>100% Fair Gameplay</p>
          </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-left" data-aos-duration="1500">
          <div class="choose-tiranga-card">
            <img
              src="https://tirangagamesindia.in/wp-content/uploads/2025/02/stability-_1_-1.png"
              alt="Equal Opportunities">
            <h3>Equal Winning Opportunities for All Players</h3>
            <p>Every player has an equal chance to win at every turn.</p>
          </div>
        </div>
      </div>

      <!-- Buttons -->
      <div class="row justify-content-center text-center combo-btn m-auto">
        <div class="col-md-6 mb-md-0 m-auto mb-3 w-100" data-aos="fade-down" data-aos-duration="1000">
          <a href="https://faleinadfasds.com/#/register?invitationCode=82281491664" class="play-btn"
            style="font-size: 22px !important;">Join Tiranga Games & Start Playing Now!</a>
        </div>
        <div class="col-md-6 combo-btn-1 mt-3" data-aos="fade-down" data-aos-duration="1200">
          <a href="https://faleinadfasds.com/#/register?invitationCode=82281491664" class="signup-btn signup-bonus">Sign
            Up & Get ₹500 Bonus</a>
        </div>
      </div>
    </div>
  </section>



  <!-- Popular Games on Tiranga Games -->
  <!--<section class="game-cards overflow-hidden">-->
  <!--    <div class="container">-->
  <!--        <div class="row main-popular-div" style="justify-content: space-between;">-->
  <!--            <div>-->
  <!--                <h2 class="play-bet" data-aos="fade-down" data-aos-duration="1000">Popular games on Tiranga Games-->
  <!--                </h2>-->
  <!--                <div class="my-2 py-2" data-aos="fade-up" data-aos-duration="1000">-->
  <!--                    <div class="d-flex mt-3" style="justify-content: center;">-->
  <!--                        <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/Vector.png" alt="" style="object-fit: contain;">-->
  <!--                        <h2 class="ps-3 m-0 Sport-Betting" style="color: white !important;">Casino Games</h2>-->
  <!--                    </div>-->
  <!--                    <div class="mb-4">-->
  <!--                        <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/Vector-1.png" alt="" style="width: 225px;">-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->
  <!--            <div class="col-md-3 col-sm-6 mb-4 Popular-games">-->
  <!--                <div class="game-card d-flex justify-content-around  game-card-1" style="padding: 20px 10px;"-->
  <!--                    data-aos="flip-up" data-aos-duration="1000">-->
  <!--                    <div class="game-card-img d-flex ">-->
  <!--                        <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—slot-777-of-jackpot-modern_6036852-1.png" alt="Slots">-->
  <!--                        <div>-->
  <!--                            <h3 style="text-transform: uppercase;"> Slots</h3>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="game-card-content">-->
  <!--                        <h3 style="text-transform: uppercase;">Slots</h3>-->
  <!--                        <p class="hidden-content" style="line-height: 20px; width: 150px;">Play jackpot slots & win-->
  <!--                            big.</p>-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->


  <!--            <div class="col-md-3 col-sm-6 mb-4 Popular-games">-->
  <!--                <div class="game-card d-flex justify-content-around game-card-2" style="padding: 20px 10px;"-->
  <!--                    data-aos="flip-down" data-aos-duration="1200">-->
  <!--                    <div class="game-card-img d-flex">-->
  <!--                        <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—playing-cards-and-poker-chips_6053961-1.png" alt="">-->
  <!--                        <div>-->
  <!--                            <h3 style="text-transform: uppercase;"> Teen Patti</h3>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="game-card-content">-->
  <!--                        <h3 style="text-transform: uppercase;">Teen Patti</h3>-->
  <!--                        <p class="hidden-content" style="line-height: 20px; width: 150px;">India’s favorite card-->
  <!--                            game.</p>-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->

  <!--            <div class="col-md-3 col-sm-6 mb-4 Popular-games">-->
  <!--                <div class="game-card d-flex justify-content-around game-card-3" style="padding: 20px 10px;"-->
  <!--                    data-aos="flip-up" data-aos-duration="1400">-->
  <!--                    <div class="game-card-img d-flex">-->
  <!--                        <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/Asset-1-1.png" alt="">-->
  <!--                        <div>-->
  <!--                            <h3 style="text-transform: uppercase;">Andar Bahar</h3>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="game-card-content">-->
  <!--                        <h3 style="text-transform: uppercase;">Andar Bahar</h3>-->
  <!--                        <p class="hidden-content" style="line-height: 20px; width: 150px;">Test your luck & skills.-->
  <!--                        </p>-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->

  <!--            <div class="col-md-3 col-sm-6 mb-4 Popular-games">-->
  <!--                <div class="game-card d-flex justify-content-around game-card-4 " style="padding: 20px 10px;"-->
  <!--                    data-aos="flip-down" data-aos-duration="1500">-->
  <!--                    <div class="game-card-img d-flex">-->
  <!--                        <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—casino-and-poker-gambling-.png" alt="">-->
  <!--                        <div>-->
  <!--                            <h3 style="text-transform: uppercase;">Poker</h3>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="game-card-content">-->
  <!--                        <h3 style="text-transform: uppercase;">Poker</h3>-->
  <!--                        <p class="hidden-content" style="line-height: 20px; width: 150px;">Challenge players & build-->
  <!--                            your-->
  <!--                            bankroll.</p>-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->

  <!--            <div class="col-md-3 col-sm-6 mb-4 Popular-games">-->
  <!--                <div class="game-card d-flex justify-content-around game-card-5" style="padding: 20px 10px;"-->
  <!--                    data-aos="flip-up" data-aos-duration="1500">-->
  <!--                    <div class="game-card-img d-flex">-->
  <!--                        <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—casino-gambling-roulette_4100060-1.png" alt="">-->
  <!--                        <div>-->
  <!--                            <h3 style="text-transform: uppercase;">Roulette</h3>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="game-card-content">-->
  <!--                        <h3 style="text-transform: uppercase;">Roulette</h3>-->
  <!--                        <p class="hidden-content" style="line-height: 20px; width: 150px;">Spin the wheel & bet on-->
  <!--                            your lucky-->
  <!--                            number.</p>-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->
  <!--             <div class="col-md-3 col-sm-6 mb-4 Popular-games">-->
  <!--                <div class="game-card d-flex justify-content-around game-card-6" style="padding: 20px 10px;"-->
  <!--                    data-aos="flip-up" data-aos-duration="1500">-->
  <!--                    <div class="game-card-img d-flex">-->
  <!--                        <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/gamecategory_20240221154444kutg.png" alt="">-->
  <!--                        <div>-->
  <!--                            <h3 style="text-transform: uppercase;">Popular</h3>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="game-card-content">-->
  <!--                        <h3 style="text-transform: uppercase;">Popular</h3>-->
  <!--                        <p class="hidden-content" style="line-height: 20px; width: 150px;">Discover the most popular games & start winning.</p>-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->
  <!--             <div class="col-md-3 col-sm-6 mb-4 Popular-games">-->
  <!--                <div class="game-card d-flex justify-content-around game-card-7" style="padding: 20px 10px;"-->
  <!--                    data-aos="flip-up" data-aos-duration="1500">-->
  <!--                    <div class="game-card-img d-flex">-->
  <!--                        <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/gamecategory_20240221154540veqj-1.png" alt="">-->
  <!--                        <div>-->
  <!--                            <h3 style="text-transform: uppercase;">Lottery</h3>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="game-card-content">-->
  <!--                        <h3 style="text-transform: uppercase;">Lottery</h3>-->
  <!--                        <p class="hidden-content" style="line-height: 20px; width: 150px;">Try your luck with the lottery & win exciting prizes!</p>-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->
  <!--            <div class="col-md-3 col-sm-6 mb-4 Popular-games">-->
  <!--                <div class="game-card d-flex justify-content-around game-card-8" style="padding: 20px 10px;"-->
  <!--                    data-aos="flip-up" data-aos-duration="1500">-->
  <!--                    <div class="game-card-img d-flex">-->
  <!--                        <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/gamecategory_20240221154454akso.png" alt="">-->
  <!--                        <div>-->
  <!--                            <h3 style="text-transform: uppercase;">Sports</h3>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="game-card-content">-->
  <!--                        <h3 style="text-transform: uppercase;">Sports</h3>-->
  <!--                        <p class="hidden-content" style="line-height: 20px; width: 150px;">SBet on your favorite sports & experience the thrill!</p>-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->
  <!--        </div>-->
  <!--    </div>-->
  <!--</section>-->
  <!--<section class="overflow-hidden">-->
  <!--    <div class="container">-->
  <!--        <div class="row">-->
  <!--            <div class="col-12 my-2 py-2" data-aos="fade-up" data-aos-duration="1000">-->
  <!--                <div class="d-flex justify-content-center mt-3 mb-2">-->
  <!--                    <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/vecter-ball.png" alt="" style="object-fit: contain;">-->
  <!--                    <h2 class="ps-3 m-0 Sport-Betting" style="text-transform: uppercase; color: white !important;">-->
  <!--                        Sport Betting-->
  <!--                    </h2>-->
  <!--                </div>-->
  <!--                <div class="mb-4 text-center">-->
  <!--                    <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/Vector-1.png" alt="" style="width: 255px;">-->
  <!--                </div>-->
  <!--            </div>-->
  <!--        </div>-->

  <!--        <div class="row d-flex justify-content-between">-->
  <!--            <div class="col-12 col-md-6 col-lg-5 mb-4 sport-betting-parent" data-aos="fade-right"-->
  <!--                data-aos-duration="1000">-->
  <!--                <div class="d-flex flex-column align-items-center" data-aos="fade-down-left"-->
  <!--                    data-aos-duration="1200">-->
  <!--                    <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—cricket-logo_18283404-1.png" alt="" class="img-fluid"-->
  <!--                        style="max-width: 270px; height: auto;">-->
  <!--                    <div class="text-center mt-3">-->
  <!--                        <h2 class="text-white play-bet">Cricket Betting</h2>-->
  <!--                        <h5>Bet on IPL, T20, and International matches</h5>-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->

  <!--            <div class="col-12 col-md-6 col-lg-5 mb-4 sport-betting-parent" data-aos="fade-left"-->
  <!--                data-aos-duration="1000">-->
  <!--                <div class="d-flex flex-column align-items-center" data-aos="fade-down-right"-->
  <!--                    data-aos-duration="1200">-->
  <!--                    <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—sports-equipments-solid-white-background_16890897-1.png" alt=""-->
  <!--                        class="img-fluid" style="max-width: 270px; height: auto;">-->
  <!--                    <div class="text-center mt-3">-->
  <!--                        <h2 class="text-white play-bet">Football, Kabaddi, and More</h2>-->
  <!--                        <h5>Live odds, high returns, and in-play betting</h5>-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->
  <!--        </div>-->
  <!--    </div>-->
  <!--</section>-->
  <!--<section class="overflow-hidden">-->
  <!--    <div class="container">-->
  <!--        <div class="row">-->
  <!--            <div class="col-12 my-2 py-2" data-aos="fade-up" data-aos-duration="1000">-->
  <!--                <div class="d-flex justify-content-center mt-3 mb-2">-->
  <!--                    <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/vecter-ball.png" alt="" style="object-fit: contain;">-->
  <!--                    <h2 class="ps-3 m-0 Sport-Betting" style="text-transform: uppercase; color: white !important;">-->
  <!--                        Sport Betting-->
  <!--                    </h2>-->
  <!--                </div>-->
  <!--                <div class="mb-4 text-center">-->
  <!--                    <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/Vector-1.png" alt="" style="width: 255px;">-->
  <!--                </div>-->
  <!--            </div>-->
  <!--        </div>-->

  <!--        <div class="row d-flex justify-content-between">-->
  <!--            <div class="col-12 col-md-6 col-lg-5 mb-4 sport-betting-parent" data-aos="fade-right"-->
  <!--                data-aos-duration="1000">-->
  <!--                <div class="d-flex flex-column align-items-center" data-aos="fade-down-left"-->
  <!--                    data-aos-duration="1200">-->
  <!--                    <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—cricket-logo_18283404-1.png" alt="" class="img-fluid"-->
  <!--                        style="max-width: 270px; height: auto;">-->
  <!--                    <div class="text-center mt-3">-->
  <!--                        <h2 class="text-white play-bet">Cricket Betting</h2>-->
  <!--                        <h5>Bet on IPL, T20, and International matches</h5>-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->

  <!--            <div class="col-12 col-md-6 col-lg-5 mb-4 sport-betting-parent" data-aos="fade-left"-->
  <!--                data-aos-duration="1000">-->
  <!--                <div class="d-flex flex-column align-items-center" data-aos="fade-down-right"-->
  <!--                    data-aos-duration="1200">-->
  <!--                    <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/—Pngtree—sports-equipments-solid-white-background_16890897-1.png" alt=""-->
  <!--                        class="img-fluid" style="max-width: 270px; height: auto;">-->
  <!--                    <div class="text-center mt-3">-->
  <!--                        <h2 class="text-white play-bet">Football, Kabaddi, and More</h2>-->
  <!--                        <h5>Live odds, high returns, and in-play betting</h5>-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->
  <!--        </div>-->
  <!--    </div>-->
  <!--</section>-->
  <!--<section id="play-nowplay-now" class="overflow-hidden">-->
  <!--    <div class="container text-center my-5">-->
  <!--        <h2 class="text-white play-bet" data-aos="fade-down" data-aos-duration="1000">Play Now & Win Real Money</h2>-->
  <!--        <a href="https://faleinadfasds.com/#/register?invitationCode=4557115480515"-->
  <!--            class="btn  btn-lg single-Play-btn" data-aos="fade-up" data-aos-duration="1000">Play Now</a>-->
  <!--    </div>-->
  <!--</section>-->
  <section id="get-started" class="py-5 overflow-hidden">
    <div class="container">
      <div class="row align-items-center parent-Get-Started pb-3" style="justify-content: space-between;">
        <div class="col-lg-6 text-center Started-Tiranga" data-aos="fade-down-right" data-aos-duration="1000">
          <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/login_img.jpg"
            alt="Get Started" class="img-fluid" style="width: 40% !important; border-radius: 20px;">
        </div>

        <div class="col-lg-6 Started-Tiranga-2" data-aos="fade-down-left" data-aos-duration="1000">
          <h2 class="fw-bold play-bet" style="color: white !important;">How to Get Started on Tiranga Games
          </h2>
          <ul class="steps-list">
            <li style="display: flex; align-items: start;" class="content-signup " data-aos="fade-left"
              data-aos-duration="1000">
              <div style="min-width: 85px;"><strong style="font-size: 22px;">Step 1:</strong></div>
              <div class="text-white ps-5 text-start step-p" style="font-size: 22px;"> Sign Up – Click on
                <a href="https://faleinadfasds.com/#/register?invitationCode=82281491664" class="register-btn">Register
                  Now</a> create your account.
              </div>
            </li>

            <li style="display: flex; align-items: start; " class="content-signup" data-aos="fade-left"
              data-aos-duration="1200">
              <div style="min-width: 85px;"> <strong style="font-size: 22px;">Step 2:</strong></div>
              <div class="text-white ps-5 text-start step-p" style="font-size: 22px;"> Deposit – Add money
                via
                UPI, Paytm,
                PhonePe, or Net Banking.
              </div>
            </li>
            <li style="display: flex; align-items: start;" class="content-signup" data-aos="fade-left"
              data-aos-duration="1200">
              <div style="min-width: 85px;"><strong style="font-size: 22px;">Step 3:</strong></div>
              <div class="text-white ps-5 text-start step-p" style="font-size: 22px;"> Play & Win – Choose
                your
                favorite
                games
                and start playing.
            </li>
            <li style="display: flex; align-items: start;" class="content-signup" data-aos="fade-left"
              data-aos-duration="1400">
              <div style="min-width: 85px;"><strong style="font-size: 22px;">Step 4:</strong></div>
              <div class="text-white ps-5 text-start step-p" style="font-size: 22px;"> Withdraw Instantly
                –
                Withdraw your
                winnings anytime!
            </li>
          </ul>
        </div>
      </div>
      <h2 class="bonus-text text-center text-white pt-3 play-bet" style="letter-spacing: 1px;" data-aos="fade-up"
        data-aos-duration="1000"><strong>Join Now & Claim ₹500
          Bonus Instantly!</strong></h2>
      <div class="text-center" data-aos="fade-up" data-aos-duration="1200">
        <a href="https://faleinadfasds.com/#/register?invitationCode=82281491664"
          class="btn btn-success btn-lg signup-btn" style="padding: 15px !important;">Sign Up & Start
          Winning</a>
      </div>
    </div>
  </section>

  <section id="join-tiranga" class="overflow-hidden">
    <div class="container h-100 d-flex align-items-center justify-content-center text-center">
      <div>
        <h2 class="fw-bold play-bet" data-aos="fade-right" data-aos-duration="1200">Join Tiranga Games Today!
        </h2>
        <p class="lead" data-aos="fade-left" data-aos-duration="1200">Tiranga Games is your ultimate destination
          for online casino and betting games in India.
          Whether you love card games, slots, or sports betting, we’ve got something exciting for you!</p>
        <h3 class="fw-bold text-danger play-bet" style="color: #55A2FE !important;" data-aos="fade-right"
          data-aos-duration="1200">🎯 Play, Bet, Win – Anytime,
          Anywhere!</h3>
        <p class="bonus-text text-white" data-aos="fade-left" data-aos-duration="1200">Get Started Now & Claim
          <strong>₹500 Free!</strong> 🔥
        </p>
        <a href="https://faleinadfasds.com/#/register?invitationCode=82281491664"
          class="btn  btn-lg join-register text-white fw-bold" data-aos="flip-up" data-aos-duration="1200"
          style="background-color: #55A2FE;">Register Now</a>
      </div>
    </div>
  </section>


  <section id="faq-section" class="overflow-hidden">
    <div class="container">
      <h2 class="text-center mb-4 mt-4 p-3 play-bet" data-aos="fade-down" data-aos-duration="1000">Frequently
        Asked
        Questions (FAQs)</h2>

      <div class="accordion" id="faqAccordion">
        <div class="row">
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-right" data-aos-duration="1000">
              <h3 class="accordion-header" id="headingOne">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Q1: What is Tiranga Games?
                </button>
              </h3>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Tiranga Games is India’s top online casino and betting platform, offering real-money
                  gaming and sports betting.
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-left" data-aos-duration="1000">
              <h3 class="accordion-header" id="headingTwo">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  Q2: How do I deposit money?
                </button>
              </h3>
              <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  You can deposit using UPI, Paytm, Google Pay, PhonePe, or Net Banking.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-right" data-aos-duration="1100">
              <h3 class="accordion-header" id="headingThree">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  Q3: How do I withdraw my winnings?
                </button>
              </h3>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Withdrawals are processed instantly via UPI, Paytm, and bank transfer.
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-left" data-aos-duration="1100">
              <h3 class="accordion-header" id="headingFour">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                  Q4: Is Tiranga Games legal in India?
                </button>
              </h3>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, Tiranga Games operates legally and ensures fair play & responsible gaming.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-right" data-aos-duration="1200">
              <h3 class="accordion-header" id="headingFive">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                  Q5: Can I play Tiranga Games on mobile?
                </button>
              </h3>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes! Tiranga Games is mobile-friendly and works seamlessly on both Android & iOS
                  devices.
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-left" data-aos-duration="1200">
              <h3 class="accordion-header" id="headingSix">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                  Q6: How do I create an account on Tiranga Games?
                </button>
              </h3>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  To create an account, click on <a
                    href="https://faleinadfasds.com/#/register?invitationCode=82281491664" target="_blank">Register
                    Now</a>, enter your details, set a password,
                  and verify your account.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-right" data-aos-duration="1300">
              <h3 class="accordion-header" id="headingSeven">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                  Q7: Is my personal information safe on Tiranga Games?
                </button>
              </h3>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes! We use advanced encryption and security protocols to protect all personal and
                  financial data.
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-left" data-aos-duration="1300">
              <h3 class="accordion-header" id="headingEight">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                  Q8: What is the minimum deposit amount?
                </button>
              </h3>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  The minimum deposit varies based on promotions, but it typically starts from ₹100.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-right" data-aos-duration="1400">
              <h3 class="accordion-header" id="headingNine">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                  Q9: How long does it take to process withdrawals?
                </button>
              </h3>
              <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Withdrawals are usually instant, but in some cases, it may take up to 24 hours due
                  to verification processes.
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-left" data-aos-duration="1400">
              <h3 class="accordion-header" id="headingTen">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                  Q10: Are there any withdrawal fees?
                </button>
              </h3>
              <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  No! Tiranga Games does not charge any withdrawal fees. However, your payment
                  provider may apply standard charges.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-right" data-aos-duration="1500">
              <h3 class="accordion-header" id="headingEleven">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                  Q11: What types of games are available on Tiranga Games?
                </button>
              </h3>
              <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We offer a variety of games, including:
                  <ul>
                    <li>✔ Colour Prediction Game</li>
                    <li>✔ Teen Patti & Rummy</li>
                    <li>✔ Roulette & Poker</li>
                    <li>✔ Andar Bahar</li>
                    <li>✔ Sports Betting (Cricket, Football, Kabaddi, etc.)</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-left" data-aos-duration="1500">
              <h3 class="accordion-header" id="headingTwelve">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                  Q12: Are Tiranga Games outcomes fair and random?
                </button>
              </h3>
              <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes! We use certified randomization algorithms to ensure all game outcomes are fair
                  and unbiased.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-right" data-aos-duration="1600">
              <h3 class="accordion-header" id="headingThirteen">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                  Q13: What bonuses or promotions are available?
                </button>
              </h3>
              <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We offer multiple bonuses including:
                  <ul>
                    <li>Welcome Bonus</li>
                    <li>Weekly Cashbacks</li>
                    <li>Referral Bonuses</li>
                    <li>Special Festival Offers</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-left" data-aos-duration="1600">
              <h3 class="accordion-header" id="headingFourteen">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                  Q14: How can I contact Tiranga Games support?
                </button>
              </h3>
              <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  You can reach our customer support team via:
                  <ul>
                    <li>
                      <p>Email: <a href="mailto:support@tirangagames.com">support@tirangagames.com</a></p>
                    </li>
                    <li>
                      <p>Live Chat: <a href="https://www.tirangagames.com" target="_blank">Live Chat on our Website</a>
                      </p>
                    </li>
                    <li>
                      <p>Phone: <a href="tel:+911234567890">+91 123 456 7890</a></p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-right" data-aos-duration="1700">
              <h3 class="accordion-header" id="headingFifteen">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen">
                  Q15: How can I refer a friend to Tiranga Games?
                </button>
              </h3>
              <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  You can refer a friend by sharing your referral code. When they sign up, both of you
                  will receive bonuses.
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="accordion-item mb-3" data-aos="fade-left" data-aos-duration="1700">
              <h3 class="accordion-header" id="headingSixteen">
                <button class="accordion-button according-btn-que" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                  Q16: Can I change my account details?
                </button>
              </h3>
              <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, you can update your account details such as email and phone number via the
                  settings page.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <!--here  start blog-->
   <section id="get-started" class="py-5 overflow-hidden">
 <div class="container">
     
     <h2 class="section-title text-center pb-3" data-aos="fade-up" data-aos-duration="1000">
           Latest Blog   <span style="font-style: 22px;"></span></h2>
    <div class="row">
        <div class="col-12">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 5,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : get_template_directory_uri() . '/assets/images/default-image.jpg';
                            ?>
                            <div class="swiper-slide">
                                <div class="col-md-12">
                                    <div class="blog-slide">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid" style="height: 250px; object-fit: cover;">
                                        </a>
                                        <div class="blog-content p-3">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <p><?php echo get_the_date(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No posts found.</p>';
                    endif;
                    ?>
                </div>
                <!-- Swiper Navigation -->
                <!--<div class="swiper-button-next"></div>-->
                <!--<div class="swiper-button-prev"></div>-->
                <!--<div class="swiper-pagination"></div>-->
            </div>
        </div>
    </div>
</div>

</section>
  
  
  


  <section id="faq-section" class="overflow-hidden">

    <h2 class="text-center mb-4 mt-4 p-3 play-bet" data-aos="fade-down" data-aos-duration="1000">Accepted Payment Methods</h2>

    <div class="container mt-4">
      <div class="row justify-content-center g-3">
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
          <div class="payment-box">
            <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/download.png" alt="Paytm">
            <p>PAYTM</p>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
          <div class="payment-box">
            <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/download-2.png" alt="PhonePe">
            <p>PHONEPE</p>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
          <div class="payment-box">
            <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/download-3.png" alt="BHIM">
            <p>BHIM</p>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
          <div class="payment-box">
            <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/MobiKwik-Logo.wine_.png" alt="MobiKwik">
            <p>MOBIKWIK</p>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
          <div class="payment-box">
            <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/Google_Pay_Logo.svg_.png" alt="Google Pay">
            <p>GOOGLE PAY</p>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
          <div class="payment-box">
            <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/SBI-Logo-scaled.jpg" alt="SBI">
            <p>SBI</p>
          </div>
        </div>
      </div>
    </div>



  </section>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-logo pb-3" data-aos="fade-up" data-aos-duration="1000">
        <img src="https://tirangagamesindia.in/wp-content/uploads/2025/02/tiranga-app-.webp"
          alt="Tiranga Logo">
      </div>

      <p style="font-size: 16px !important;" data-aos="fade-right" data-aos-duration="1000">Disclaimer:- This
        Website is only for 18+ users. If you are from
        Telangana, Orissa, Assam, Sikkim, and
        Nagaland, please leave the website immediately. Be aware of fraudsters, we only deal via WhatsApp.</p>
      <p style="font-size: 16px !important;" data-aos="fade-right" data-aos-duration="1100">We Only Promote
        Fantasy Games. No Real Money Involvement.</p>
      <p style="font-size: 16px !important;" data-aos="fade-right" data-aos-duration="1200">
        Tiranga Game Official is a trusted and verified platform, designed to provide users with a seamless
        registration process. By joining, you become part of the exclusive Tiranga Pride Flag community. Signing
        up is quick and easy—simply fill out your details, and you’ll gain instant access to our growing
        network.
      </p>
      <p style="font-size: 16px !important;" data-aos="fade-right" data-aos-duration="1300">
        We prioritize your security and privacy, ensuring that your information is always protected. As a member
        of the Tiranga Game community, you’ll stay updated with the latest news, offers, and benefits available
        only to registered users.
      </p>
      <p style="font-size: 16px !important;" data-aos="fade-right" data-aos-duration="1400">Signup Tiranga Game
        today and take pride in being part of a vibrant,
        inclusive, and innovative movement!
      </p>
      <hr>
      <p style="font-size: 16px !important;">©2025 <strong>Tiranga Club Games</strong> | <a
          href="https://faleinadfasds.com/#/register?invitationCode=82281491664">Register
          Tiranga Game Signup & Login</a> - All
        Rights Reserved.</p>
    </div>
  </footer>
  
  
 <div class="modal fade" id="countdownModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4 position-relative">
            <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
            <h2 class="mb-3">Get ₹500 off on signing in</h2>
            <div class="countdown-timer"></div>
        </div>
    </div>
</div>
  
</body>

</html>
<!-- Bootstrap JS Link -->




<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-3oQ3FsTppnqFd8yyBcJYVZpNkOd5NCB2Jj8uPAg69aOMp5CfsLOVf+9P1FNmZQ9x" crossorigin="anonymous"></script>

<!-- Swiper JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- jQuery (required for FlipClock.js) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- FlipClock.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.js"></script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="./index.js"></script>
<!-- AOS Library JS Link -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
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

  window.addEventListener("scroll", function() {
    let navbar = document.querySelector(".navbar-container");
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
</script>
<script>
  AOS.init({
    once: true,
  });
</script>



<script>
jQuery(document).ready(function ($) {
    // Ensure FlipClock is available
    if (typeof $.fn.FlipClock === "undefined") {
        console.error("FlipClock.js is not loaded properly.");
        return;
    }

    // Set countdown time: 7 days, 3 hours, 5 minutes, 8 seconds
    var timeRemaining = 615908; 

    // Initialize FlipClock Countdown
    var clock = $(".countdown-timer").FlipClock(timeRemaining, {
        clockFace: "DailyCounter",
        countdown: true
    });

    // Show modal after 2 seconds
    setTimeout(function () {
        var countdownModal = new bootstrap.Modal(document.getElementById("countdownModal"));
        countdownModal.show();
    }, 5000);
});
</script>


<script>
    
  
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            600: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
});
</script>
  
    
</script>