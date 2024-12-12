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
        <a href="/ITCFinalProject_ClassicFilipinoGame/HomePage/HomePage.php">
          <img src="Picture/ICONFORWEBSITE.png" />
          <span>LaroKultura</span>
        </a>
      </div>

      <div class="nav">
        <a href="/ITCFinalProject_ClassicFilipinoGame/MAINTAINANCEPAGE/UNAVAILABLE.html">Media</a>
        <a href="/ITCFinalProject_ClassicFilipinoGame/MAINTAINANCEPAGE/UNAVAILABLE.html">About us</a>
        <a href="/ITCFinalProject_ClassicFilipinoGame/MAINTAINANCEPAGE/UNAVAILABLE.html">Whats New</a>
        <a href="/ITCFinalProject_ClassicFilipinoGame/MAINTAINANCEPAGE/UNAVAILABLE.html">Support Us</a>
      </div>

      <div class="setting">
        <!-- Hidden checkbox for toggle -->
        <input type="checkbox" id="settingsToggle" class="settings-checkbox" />
        <!-- Label acts as the button -->
        <label for="settingsToggle" class="setting-btn">⚙️</label>
        <!-- Menu -->
        <div class="settings-menu">
          <div class="user-info">
            <?php if (isset($_SESSION['email'])): ?>
              <?php
              $email = $_SESSION['email'];
              $query = "SELECT firstName, lastName FROM users WHERE email = '$email'";
              $result = $conn->query($query);

              if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                $userName = isset($_SESSION['firstName'], $_SESSION['lastName'])
                  ? $_SESSION['firstName'] . ' ' . $_SESSION['lastName']
                  : "Guest";
                echo "<p class='welcome-text'>Welcome, <strong>$userName</strong></p>";
              }
              ?>
              <a href="logout.php" class="logout-btn">Logout</a>
            <?php else: ?>
              <a href="login.php" class="login-btn">Login</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </header>

    <!--!=====================================================================================================================================================-->
    <!--*IntroVedio-->
    <!--!=====================================================================================================================================================-->

    <div id="introVideo">
      <video autoplay muted loop>
        <source src="Video/LARONG PINOY (PROMOTIONAL VIDEO).mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
    </div>


    <!--!=====================================================================================================================================================-->
    <!--*gameSection-->
    <!--!=====================================================================================================================================================-->

    <div id="gameSectioncontainer">
      <h3 id="gameSectionTitle">GAME SECTION</h3>

      <div id="gameSection">
        <div class="individualGameSection">
          <!--?Luksongbaka===================================================-->
          <a href="/ITCFinalProject_ClassicFilipinoGame/GameSection/Luksongbaka/Luksongbaka.php">
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
          <a href="/ITCFinalProject_ClassicFilipinoGame/GameSection/LangitLupa/LangitLupa.php">
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
          <a href="/ITCFinalProject_ClassicFilipinoGame/GameSection/BenteUno/BenteUno.php">
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
          <a href="/ITCFinalProject_ClassicFilipinoGame/GameSection/SekyuBase/SekyuBase.php">
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
          <a href="/ITCFinalProject_ClassicFilipinoGame/GameSection/Patintero/Patintero.php">
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


    <div id="introVideo">
      <video autoplay muted loop>
        <source src="Video/Smile (Children of The Philippines).mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
    </div>


    <!--!=====================================================================================================================================================-->
    <!--*Comment Section-->
    <!--!=====================================================================================================================================================-->

    <div id="commentSectionContainer">
      <h2 id="commentSectionTitle">Comments</h2>

      <!-- Add Comment Form -->
      <form id="addCommentForm" action="add_comment.php" method="POST">
        <div class="add-comment">
          <?php if (isset($_SESSION['firstName'], $_SESSION['lastName'], $_SESSION['user_id'])): ?>
            <textarea id="commentInput" name="comment"
              placeholder="Add a comment as <?php echo htmlspecialchars($_SESSION['firstName'] . ' ' . $_SESSION['lastName']); ?>..."
              required></textarea>
          <?php else: ?>
            <textarea id="commentInput" name="comment" placeholder="Add a public comment..." required></textarea>
          <?php endif; ?>
          <button type="submit">Comment</button>
        </div>
      </form>

      <!-- Display Comments -->
      <ul id="comments">
        <?php
        $query = "SELECT c.id, c.user_id, c.content, c.created_at, c.likes, u.firstName, u.lastName 
              FROM comments c 
              JOIN users u ON c.user_id = u.Id 
              ORDER BY c.created_at DESC";
        $result = $conn->query($query);

        if ($result) {
          while ($row = $result->fetch_assoc()) {
            $isAuthor = false;

            if (isset($_SESSION['user_id'], $row['user_id']) && $_SESSION['user_id'] == $row['user_id']) {
              $isAuthor = true;
            }

            $userName = htmlspecialchars($row['firstName'] . ' ' . $row['lastName']);
            echo "<li class='comment' data-id='{$row['id']}' data-user-id='{$row['user_id']}'>
                    <div class='comment-content'>
                        <div>
                            <span class='comment-user'>{$userName}</span>
                            <span class='comment-time'>{$row['created_at']}</span>
                        </div>
                        <p class='comment-text'>{$row['content']}</p>
                        <div class='comment-actions'>";

            // Display edit and delete buttons only for the comment's author
            if ($isAuthor) {
              echo "<div class='comment-edit-delete'>
                        <button onclick='editComment(this)'>Edit</button>
                        <button onclick='deleteComment(this)'>Delete</button>
                      </div>";
            }

            echo "<button onclick='heartComment(this)'>❤️ {$row['likes']}</button>
                    </div>
                </div>
            </li>";
          }
        } else {
          echo "<li>Error fetching comments. Please try again later.</li>";
        }
        ?>
      </ul>
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