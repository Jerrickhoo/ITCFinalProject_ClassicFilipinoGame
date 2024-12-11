<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bente Uno</title>
    <link rel="stylesheet" href="BenteUno.css" />
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
          <a href="http://localhost/ITCFinalProject_ClassicFilipinoGame/HomePage/HomePage.php">
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


      <section id="gameSection">
        <div class="game-header">
          <h1>Bente Uno</h1>
          <p>A Filipino tag game where players become "it" and tag others.</p>
        </div>

        <br />
        <br />

        <!-- Introduction Section -->
        <div class="section intro">
          <h2>Introduction</h2>
          <p>
            Bente Uno is a classic Filipino game that holds a special place in
            the hearts of many who grew up in the Philippines. It is more than
            just a game; it represents a cherished tradition and a time-honored
            way of fostering friendships, developing quick-thinking skills, and
            enjoying physical activity in a social setting. With its simple yet
            dynamic nature, Bente Uno is typically played outdoors, where the
            fresh air and open space add to the excitement of the game. Whether
            on the streets of a neighborhood or in the local playground, this
            game brings children together, reinforcing the importance of
            teamwork, agility, and fun in their daily lives.
          </p>
          <br />
          <p>
            The name "Bente Uno" comes from the phrase "Twenty-One," which
            encapsulates the essence of the game: achieving 21 points as a way
            to win. This target score is not just an arbitrary number; it adds a
            layer of challenge and excitement, making the game competitive and
            engaging. Each player strives to outmaneuver the taya (chaser) while
            running, dodging, and using quick footwork to secure points. It’s a
            fast-paced game that tests players’ reflexes and strategic thinking,
            where victory is determined by both skill and wit.
          </p>
          <br />
          <p>
            Bente Uno encapsulates Filipino culture through its emphasis on
            community spirit and active play, showcasing how traditional games
            are woven into the fabric of childhood memories and social
            interactions. It is a game that, despite the advent of modern
            technology and indoor activities, continues to be played and loved
            by new generations of Filipino children, highlighting its timeless
            appeal.
          </p>
          <div class="image-container">
            <img
              src="https://i.ytimg.com/vi/CkfjfbsyA_I/hq720.jpg?sqp=-oaymwE7CK4FEIIDSFryq4qpAy0IARUAAAAAGAElAADIQj0AgKJD8AEB-AH-CYAC0AWKAgwIABABGGUgWShOMA8=&rs=AOn4CLBT3O3cNkBCXGB52YJX_ecaHEyAlg"
              alt="Image"
            />
            <p class="image-caption">Group of people playing Bente Uno.</p>
          </div>
        </div>

        <br />
        <br />

        <!-- History Section -->
        <div class="section history">
          <h2>History</h2>
          <p>
            The history of Bente Uno is a testament to the rich tradition of
            outdoor play in Filipino culture. While it’s difficult to pinpoint
            an exact origin, it’s clear that the game emerged from a culture
            that has long valued communal play and active socialization. Early
            Filipino communities were known for their resourcefulness and
            ingenuity, creating games that required minimal equipment but
            emphasized physical prowess and group dynamics. These games were not
            only sources of entertainment but also served as ways for children
            to learn valuable life skills such as coordination, teamwork, and
            leadership.
          </p>
          <br />
          <p>
            Bente Uno is thought to have evolved from simpler tag-based games
            that were played in villages, fields, and even on the streets. The
            game reflects the importance of mobility and strategy in traditional
            Filipino games, where players needed to be agile and quick-witted to
            win. Over time, Bente Uno was passed down from generation to
            generation, with each version carrying subtle variations depending
            on the region. Some communities might have introduced their own
            chants or specific rules that added flavor to the gameplay, further
            enriching its history.
          </p>
          <br />
          <p>
            As the Philippines transitioned through various historical
            periods—from pre-Hispanic times to Spanish colonization and into
            modern-day society—the game adapted, but its essence remained
            unchanged. The colonial influence brought new activities and
            pastimes, but Filipino children maintained their traditional games,
            adapting them with creative twists. In an era when outdoor play was
            integral to childhood, Bente Uno stood out as a game that could be
            played in any open space, making it accessible to children in both
            rural and urban settings.
          </p>
          <br />
          <p>
            In contemporary times, while the influence of digital games has
            changed how children spend their free time, Bente Uno remains a
            nostalgic and beloved part of Filipino culture. It is sometimes
            revived in schools, festivals, and community events as a way to
            reconnect young people with their heritage and provide them with an
            understanding of the joys of simpler times.
          </p>
          <div class="image-container">
            <img
              src="Picture/BenteUnoPic.jpg"
              alt="Historical depiction of Bente Uno"
            />
            <p class="image-caption">Children playing Bente Uno.</p>
          </div>
        </div>

        <br />
        <br />

        <!-- How to Play Section -->
        <div class="how-to-play-section">
          <div class="how-to-play-header">
            <h1>How to Play</h1>
            <p>Follow these steps to get started with Bente Uno.</p>
            <p>(2-6 Players)</p>
          </div>

          <div class="step">
            <div class="step-icon">1</div>
            <div class="step-content">
              <h3 class="step-title">Designate Roles</h3>
              <p class="step-description">
                Choose one player to be the “taya” (chaser) and the rest as
                participants who will attempt to avoid being tagged. The taya
                stands in the center of the playing area while the others spread
                out within the designated boundaries.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">2</div>
            <div class="step-content">
              <h3 class="step-title">Set Up the Playing Area</h3>
              <p class="step-description">
                Mark the playing area with clear boundaries. The space should be
                large enough to allow players to run freely and make quick
                movements. It’s best played in an open field, park, or
                playground, with enough space for the game to flow smoothly.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">3</div>
            <div class="step-content">
              <h3 class="step-title">Start the Game</h3>
              <p class="step-description">
                The taya begins the game by shouting “Bente Uno!” and starts
                chasing the other players. The objective is for the other
                players to run and avoid being tagged by the taya while earning
                points.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">4</div>
            <div class="step-content">
              <h3 class="step-title">Scoring Points</h3>
              <p class="step-description">
                To earn points, a player must successfully run past the taya
                without being tagged. Each time they do so, they gain one point.
                Players aim to reach 21 points to win the game.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">5</div>
            <div class="step-content">
              <h3 class="step-title">Switching Roles</h3>
              <p class="step-description">
                If the taya tags a player, that player becomes the new taya, and
                the game resets with the new taya in the center. The other
                players take up their positions, ready to start again.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">6</div>
            <div class="step-content">
              <h3 class="step-title">Continue Playing</h3>
              <p class="step-description">
                The game continues until a player reaches 21 points or until the
                group decides to stop. The first player to reach 21 points wins,
                and the game can start over for another round of play.
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
              <h3 class="tip-title">Know the Rules</h3>
              <p class="tip-description">
                Ensure you understand the game’s objective and how to score
                points. Familiarity with the rules makes gameplay smoother and
                more enjoyable.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">2</div>
            <div class="tip-content">
              <h3 class="tip-title">Stay Alert</h3>
              <p class="tip-description">
                Always keep an eye on the taya and other players. Anticipating
                their movements allows you to plan your next move and avoid
                being tagged.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">3</div>
            <div class="tip-content">
              <h3 class="tip-title">Use Quick Movements</h3>
              <p class="tip-description">
                Practice quick changes in direction and rapid running. Speed and
                agility are crucial to evading the taya and reaching a score of
                21.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">4</div>
            <div class="tip-content">
              <h3 class="tip-title">Keep Your Distance</h3>
              <p class="tip-description">
                Avoid staying too close to the taya or the other players.
                Maintaining a safe distance gives you time to react and move
                when needed.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">5</div>
            <div class="tip-content">
              <h3 class="tip-title">Use the Environment</h3>
              <p class="tip-description">
                Leverage the layout of the playing area to your advantage.
                Running around obstacles or using natural cover can help you
                avoid being tagged.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">6</div>
            <div class="tip-content">
              <h3 class="tip-title">Plan Your Strategy</h3>
              <p class="tip-description">
                Think ahead and position yourself in a way that makes it
                difficult for the taya to catch you. Be unpredictable in your
                movements to throw off the taya's chase.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">7</div>
            <div class="tip-content">
              <h3 class="tip-title">Work with Friends</h3>
              <p class="tip-description">
                In larger groups, sometimes players can work together to
                outmaneuver the taya. This adds an extra level of fun and
                challenge to the game.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">8</div>
            <div class="tip-content">
              <h3 class="tip-title">Stay Calm</h3>
              <p class="tip-description">
                Panicking makes it harder to make quick decisions. Stay calm
                under pressure and focus on your next move to avoid being
                tagged.
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
              src="https://www.youtube.com/embed/EMlySybkwjo"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            >
            </iframe>
            <p class="image-caption">
              Watch the video on how to play Bente Uno.
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

    <script src="BenteUno.js"></script>
  </body>
</html>
