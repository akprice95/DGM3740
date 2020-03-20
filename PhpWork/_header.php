<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>NASA Crusie</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="slick/slick.css" />
    <link rel="stylesheet" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Alegreya:400,800"
      rel="stylesheet"
    />
  </head>

  <body onresize="resize()">
    <header>
      <div class="head">
        <img
          src="Images/logo100"
          alt="logo"
          srcset="
            Images/logo100.png 1x,
            Images/logo200.png 2x,
            Images/logo300.png 3x
          "
        />
        <a class="phone" id="phone" href="tel:1-800-555-1234">1-800-555-1234</a>
      </div>
    </header>
    <!-- NAVIGATION HERE -->
    <nav class="clearfix">
      <div class="topnav" id="myTopnav"></div>
      <button id="hamburgerBtn">
        <span><i>&equiv;</i>OPEN</span> <span><i>&otimes;</i>CLOSE</span>
      </button>
      <ul id="primaryNav">
        <li><a href="index.php">Home</a></li>
        <li class="current-menu-item"><a href="cruise.php">Cruise</a></li>
        <li class="parent">
          <a href="#">Agents</a>
          <ul class="subNav">
            <li>
              <a href="agent1.php">Kamal</a>
              <a href="agent2.php">Holden</a>
            </li>
          </ul>
        </li>
        <li><a href="book.php">Books</a></li>
      </ul>
      <div class="search-container">
        <input type="search" placeholder="Search..." />
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>
    </nav>
    <main class="clearfix">


    <!-- Start Slide -->