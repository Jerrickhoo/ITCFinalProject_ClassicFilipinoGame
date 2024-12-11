<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Luksong Baka</title>
    <link rel="stylesheet" href="LuksongBaka.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Karla:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/4da0ed7177.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <header class="header">
        <div class="title">
          <a
            href="http://localhost/ITCFinalProject_ClassicFilipinoGame/HomePage/HomePage.php"
          >
            <img src="Picture/ICONFORWEBSITE.png" />
            <span>LaroKultura</span>
          </a>
        </div>
        <div class="nav">
          <a href="/ITCFinalProject_ClassicFilipinoGame/MAINTAINANCEPAGE/UNAVAILABLE.html">Home</a>
          <a href="/ITCFinalProject_ClassicFilipinoGame/MAINTAINANCEPAGE/UNAVAILABLE.html">About</a>
          <a href="/ITCFinalProject_ClassicFilipinoGame/MAINTAINANCEPAGE/UNAVAILABLE.html">Games</a>
          <a href="/ITCFinalProject_ClassicFilipinoGame/MAINTAINANCEPAGE/UNAVAILABLE.html">Gallery</a>
          <a href="/ITCFinalProject_ClassicFilipinoGame/MAINTAINANCEPAGE/UNAVAILABLE.html">Contact</a>
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
              <a href="\ITCFinalProject_ClassicFilipinoGame\HomePage\logout.php" class="logout-btn">Logout</a>
            <?php else: ?>
              <a href="\ITCFinalProject_ClassicFilipinoGame\HomePage\login.php" class="login-btn">Login</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      </header>

      <!-- Game Section -->
      <section id="gameSection">
        <div class="game-header">
          <h1>Luksong Baka</h1>
          <p>
            A traditional Filipino game from Bulacan involving jumping over a
            "baka."
          </p>
        </div>

        <br />
        <br />

        <!-- Introduction Section -->
        <div class="section intro">
          <h2>Introduction</h2>
          <p>
            Luksong Baka is a traditional Filipino children’s game that
            originated in the province of Bulacan. The name translates to "Jump
            Over the Cow," with the "cow" being represented by one of the
            players who acts as the "baka." The game begins with the baka in a
            crouched position, making it easier for other players to leap over
            them. With each successful round, the baka progressively rises to a
            higher stance, making the jump increasingly challenging for the
            other players.
          </p>
          <br />
          <p>
            This exciting and physically engaging game is a variation of
            leapfrog, requiring players to use their agility, strength, and
            coordination to clear the baka without making contact. It is
            typically played in open spaces, such as backyards, fields, or
            schoolyards, and is enjoyed by children of various ages.
          </p>
          <br />
          <p>
            More than just a pastime, Luksong Baka reflects the playful and
            communal spirit of Filipino culture. It fosters camaraderie,
            teamwork, and friendly competition among players. The game also
            highlights the resourcefulness of Filipino children, as it requires
            no special equipment—just energy, creativity, and a sense of fun.
          </p>
          <br />
          <p>
            Today, Luksong Baka is cherished as a nostalgic reminder of simpler
            times, evoking fond memories for many Filipinos who grew up playing
            it. Efforts to preserve and promote this traditional game continue,
            ensuring that future generations can experience and appreciate this
            unique part of the Philippines' cultural heritage.
          </p>
          <div class="image-container">
            <img
              src="https://randynadzblogspot.wordpress.com/wp-content/uploads/2017/03/042dfd242cf42af0b7998e27f5b13abf.jpg"
              alt="Image of Luksong Baka"
            />
            <p class="image-caption">Art about kids playing Luksong Baka.</p>
          </div>
        </div>

        <br />
        <br />

        <!-- History Section -->
        <div class="section history">
          <h2>History</h2>
          <p>
            Luksong Baka originated in the province of Bulacan, Philippines, and
            has been played for generations, deeply embedded in Filipino culture
            and traditions. The game is believed to have emerged as a way for
            children in rural communities to entertain themselves with minimal
            resources, showcasing their creativity and adaptability. Its
            simplicity and reliance on physical agility made it accessible to
            everyone, requiring no specialized equipment—just open spaces and
            enthusiastic players.
          </p>
          <br />
          <p>
            Historically, Luksong Baka was more than just a recreational
            activity; it was a social and cultural event. The game was a popular
            feature during fiestas, barrio celebrations, and community
            gatherings, where it brought together children and even adults in an
            atmosphere of laughter and camaraderie. These occasions not only
            strengthened community bonds but also allowed families to pass down
            cultural practices and values to younger generations.
          </p>
          <br />
          <p>
            The game reflects the Filipino emphasis on teamwork, resilience, and
            joy in shared experiences. In the pre-digital era, it served as a
            significant form of physical activity, promoting health and fitness
            among children. It also symbolized a sense of resourcefulness, where
            fun was derived from collective creativity rather than material
            possessions.
          </p>
          <br />
          <p>
            In the broader context of Philippine history, games like Luksong
            Baka highlight the communal spirit and ingenuity of Filipinos in
            making the most of what they had. While it may not have been
            officially documented in early historical texts, its enduring
            presence in rural life speaks volumes about its role in shaping the
            cultural fabric of the Philippines.
          </p>
          <br />
          <p>
            Today, as urbanization and technology shift the way children spend
            their time, efforts to preserve traditional games like Luksong Baka
            have gained importance. Cultural organizations and schools
            incorporate it into heritage programs to keep the tradition alive
            and to remind modern generations of the simple joys and values it
            embodies.
          </p>
          <div class="image-container">
            <img
              src="https://filipinoculture643599086.wordpress.com/wp-content/uploads/2018/07/lk.jpg"
              alt="Historical depiction of Luksong Baka"
            />
            <p class="image-caption">Children playing Luksong Baka.</p>
          </div>
        </div>

        <br />
        <br />

        <!-- How to Play Section -->
        <div class="how-to-play-section">
          <div class="how-to-play-header">
            <h1>How to Play</h1>
            <p>Follow these steps to get started with Luksong Baka.</p>
            <p>(2-10 Players)</p>
          </div>

          <div class="step">
            <div class="step-icon">1</div>
            <div class="step-content">
              <h3 class="step-title">Assign Roles</h3>
              <p class="step-description">
                Choose one player to act as the "baka" (cow). The baka starts in
                a crouching position.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">2</div>
            <div class="step-content">
              <h3 class="step-title">Take Turns Jumping</h3>
              <p class="step-description">
                The remaining players line up and take turns attempting to leap
                over the baka without making contact.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">3</div>
            <div class="step-content">
              <h3 class="step-title">Increase the Difficulty</h3>
              <p class="step-description">
                After each successful round, the baka gradually rises higher,
                progressing from a crouch to kneeling, squatting, and eventually
                standing upright.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">4</div>
            <div class="step-content">
              <h3 class="step-title">Switch Roles</h3>
              <p class="step-description">
                If a player fails to clear the baka or makes contact while
                jumping, they become the new baka, and the game resets with the
                new baka in a crouched position.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">5</div>
            <div class="step-content">
              <h3 class="step-title">Keep the Fun Going</h3>
              <p class="step-description">
                Continue the game until players decide to stop or everyone has
                taken a turn as the baka.
              </p>
            </div>
          </div>
        </div>

        <br />
        <br />

        <!-- Tips Section -->
        <section class="tips-section">
          <div class="tips-header">
            <h1>Pro Tips for Mastering the Game</h1>
            <p>Follow these tips to enhance your skills and strategies.</p>
          </div>

          <div class="tip">
            <div class="tip-icon">1</div>
            <div class="tip-content">
              <h3 class="tip-title">Understand the Basics</h3>
              <p class="tip-description">
                Make sure you’re familiar with the game’s rules and objectives.
                Spend some time in practice mode to refine your foundational
                skills.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">2</div>
            <div class="tip-content">
              <h3 class="tip-title">Stay Strategic</h3>
              <p class="tip-description">
                Plan your moves carefully. Think a few steps ahead to anticipate
                challenges and opportunities.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">3</div>
            <div class="tip-content">
              <h3 class="tip-title">Practice Timing</h3>
              <p class="tip-description">
                Many games require precise timing. Work on improving your
                reaction speed and muscle memory to perform actions accurately.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">4</div>
            <div class="tip-content">
              <h3 class="tip-title">Learn from Others</h3>
              <p class="tip-description">
                Watch tutorials or gameplay videos from experts to learn
                advanced techniques and tricks.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">5</div>
            <div class="tip-content">
              <h3 class="tip-title">Stay Calm Under Pressure</h3>
              <p class="tip-description">
                Maintaining composure in tense moments can make all the
                difference. Take deep breaths and focus on the task at hand.
              </p>
            </div>
          </div>
        </section>

        <br />
        <br />

        <!-- Watch How to Play Section -->
        <div class="section video-tutorial">
          <h2>Watch How to Play</h2>
          <div class="image-container">
            <iframe
              width="560"
              height="315"
              src="https://www.youtube.com/embed/BNM5FIxXf-o"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            >
            </iframe>
            <p class="image-caption">
              Watch the video on how to play Luksong Baka.
            </p>
          </div>
        </div>
      </section>

      <!--!=====================================================================================================================================================-->
      <!--*Footer Section-->
      <!--!=====================================================================================================================================================-->

      <!-- Footer Section -->
      <footer>
        <!-- Site Name -->
        <div class="site-name">ClassicFilipinoGames</div>

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
    <script src="LuksongBaka.js"></script>
  </body>
</html>
