<?php
session_start();
include("connect.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HomePage</title>
  <link rel="stylesheet" href="HomePage.css" />
  <script src="https://accounts.google.com/gsi/client" async defer></script>
  <script src="scripts.js" defer></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Karla:wght@400;700&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/4da0ed7177.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <!--!=====================================================================================================================================================-->
    <!--*Header-->
    <!--!=====================================================================================================================================================-->

    <header class="header">
      <div class="title">
        <a href="http://localhost/ITCFinalProject_ClassicFilipinoGame/HomePage/HomePage.php">
          <img src="Picture/logoPlaceholder.png" />
          <span>LaroKultura</span>
        </a>
      </div>

      <div class="nav">
        <a href="#">Game Info</a>
        <a href="#">Media</a>
        <a href="#">*****</a>
        <a href="#">*******</a>
        <a href="#">Support</a>
        <a href="#">More</a>
      </div>

      <div class="setting">
        <a href="#"><img src="Picture/gear-solid.svg" alt="Settings" /></a>
      </div>

      <div class="login">
        <a href="#" onclick="openLoginModal()">Login</a>
      </div>
    </header>

    <!--!=====================================================================================================================================================-->
    <!--*IntroVedio-->
    <!--!=====================================================================================================================================================-->

    <div id="introVideo">
      <video autoplay muted loop>
        <source src="Video/Makalimutan_Ka_Until_Then_Edit.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
    </div>

    <!--!=====================================================================================================================================================-->
    <!--*Side Panel-->
    <!--!=====================================================================================================================================================-->

    <div id="sidePanel">
      <div class="individualSidePanel">
        <img src="Picture/bx-question-mark.svg" />
        <span class="sidePanelText">What's New?</span>
      </div>
      <div class="individualSidePanel">
        <img src="Picture/bx-alarm-exclamation.svg" />
        <span class="sidePanelText">Latest Alerts</span>
      </div>
      <div class="individualSidePanel">
        <img src="Picture/bx-group.svg" />
        <span class="sidePanelText">Community</span>
      </div>
    </div>

    <!--!=====================================================================================================================================================-->
    <!--*gameSection-->
    <!--!=====================================================================================================================================================-->

    <div id="gameSectioncontainer">
      <h3 id="gameSectionTitle">GAME SECTION</h3>

      <div id="gameSection">
        <div class="individualGameSection">
          <!--?Luksongbaka===================================================-->
          <a href="http://localhost/ITCFinalProject_ClassicFilipinoGame/GameSection/Luksongbaka/Luksongbaka.html">
            <div class="logo">
              <img src="Picture/LuksongBakaImg.png" />
            </div>
            <div class="gameContent">
              <h3>Luksong Baka</h3>
              <p class="summary">(2-10 Players)</p>
              <p class="summary">
                Players jump over a crouching "baka," which rises higher each
                round.
              </p>
              <p class="moreText">
                A jumping game where players take turns leaping over a "baka"
                (a crouched player). The "baka" gradually rises higher,
                challenging participants to jump without touching.
              </p>
            </div>
          </a>
        </div>

        <div class="individualGameSection">
          <!--?Langit Lupa===================================================-->
          <a href="http://localhost/ITCFinalProject_ClassicFilipinoGame/GameSection/LangitLupa/LangitLupa.html">
            <div class="logo">
              <img src="Picture/LangitLupaImg.png" />
            </div>
            <div class="gameContent">
              <h3>Langit Lupa</h3>
              <p class="summary">(3-10 Players)</p>
              <p class="summary">
                A tag game where players avoid being "it" by staying on
                elevated surfaces.
              </p>
              <p class="moreText">
                A tag game where "it" chases players who must stay on "langit"
                (elevated surfaces) to avoid being tagged while moving between
                safe zones.
              </p>
            </div>
          </a>
        </div>

        <div class="individualGameSection">
          <!--?Bente Uno===================================================-->
          <a href="http://localhost/ITCFinalProject_ClassicFilipinoGame/GameSection/BenteUno/BenteUno.html">
            <div class="logo">
              <img src="Picture/BenteUnoImg.png" />
            </div>
            <div class="gameContent">
              <h3>Bente Uno</h3>
              <p class="summary">(2-6 Players)</p>
              <p class="summary">
                A hide-and-seek game where players must return to base without
                being caught.
              </p>
              <p class="moreText">
                A thrilling game of hide-and-seek combined with a base
                defense. Players hide, but must reach the "base" without being
                caught by the seeker.
              </p>
            </div>
          </a>
        </div>

        <div class="individualGameSection">
          <!--?Sekyu===================================================-->
          <a href="http://localhost/ITCFinalProject_ClassicFilipinoGame/GameSection/SekyuBase/SekyuBase.html">
            <div class="logo">
              <img src="Picture/SenkyuBaseImg.png" />
            </div>
            <div class="gameContent">
              <h3>Sekyu Base</h3>
              <p class="summary">(5-15 Players)</p>
              <p class="summary">
                A guard-and-thief game where players sneak into a guarded area
                without getting tagged.
              </p>
              <p class="moreText">
                A chasing game similar to tag, inspired by security guards
                ("sekyu") and thieves. One player guards a designated area,
                while others try to sneak in without getting caught.
              </p>
            </div>
          </a>
        </div>

        <div class="individualGameSection">
          <!--?Patintero===================================================-->
          <a href="http://localhost/ITCFinalProject_ClassicFilipinoGame/GameSection/Patintero/Patintero.html">
            <div class="logo">
              <img src="Picture/PatinteroImg.png" />
            </div>
            <div class="gameContent">
              <h3>Patintero</h3>
              <p class="summary">(4-10 Players)</p>
              <p class="summary">
                Teams try to cross a grid while avoiding guards who tag along
                the lines.
              </p>
              <p class="moreText">
                A strategic team game where players attempt to cross lines
                guarded by opponents who try to tag them, requiring agility
                and quick thinking.
              </p>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!--!=====================================================================================================================================================-->
    <!--*Comment Section-->
    <!--!=====================================================================================================================================================-->

    <h3 id="commentSectionTitle">COMMENT SECTION</h3>
    <div id="commentSectionContainer">
      <div class="add-comment">
        <img class="comment-avatar" src="default-avatar.png" alt="Avatar" />
        <textarea id="commentInput" placeholder="Add a public comment..."></textarea>
        <button onclick="addComment()">Comment</button>
      </div>
      <ul id="comments"></ul>
    </div>

    <!--!=====================================================================================================================================================-->
    <!--*Footer Section-->
    <!--!=====================================================================================================================================================-->

    <!-- Footer Section -->
    <footer>
      <!-- Site Name -->
      <div class="site-name">
        ClassicFilipinoGames
      </div>

      <!-- Creator Information -->
      <div class="creator-info">
        <p>Created by:</p>
        <p>Justin Jerrickho Amaguin</p>
        <p>Joseph Angelo Japitana</p>
        <p>Kurt David Dayao</p>
        <p>Jesse Antoine G. Tacluyan</p>
      </div>

      <!-- Copyright Information -->
      <div class="copyright">
        <p>&copy; 2024 ClassicFilipinoGames. All rights reserved.</p>
      </div>
    </footer>

  </div>



  <script src="HomePage.js"></script>

</body>

</html>