<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patintero</title>
    <link rel="stylesheet" href="Patintero.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Karla:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
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
          <h1>Patintero</h1>
          <p>A traditional Filipino game of agility and strategy.</p>
        </div>

        <br />
        <br />

        <!-- Introduction Section -->
        <div class="section intro">
          <h2>Introduction</h2>
          <p>
            Patintero is a beloved traditional Filipino game that brings joy,
            excitement, and friendly competition to players of all ages. This
            game has stood the test of time due to its simple rules,
            accessibility, and the sheer fun it brings. Often played in
            schoolyards, community parks, or any open space, Patintero can
            easily be set up wherever there is room to run, making it an ideal
            game for spontaneous play during school breaks, neighborhood
            gatherings, or local festivals. Its energetic and fast-paced
            gameplay not only entertains but also strengthens physical skills,
            sharpens reflexes, and promotes social interaction among players.
          </p>
          <br />
          <p>
            The game embodies the essence of Filipino outdoor play, where
            camaraderie, laughter, and active participation are cherished. It
            emphasizes teamwork, quick reflexes, and strategic thinking, which
            makes it a popular choice among families and friends who want to
            enjoy simple yet challenging competition. The ease with which
            Patintero can be played with minimal equipment—often just a
            designated playing area and clear boundaries—adds to its widespread
            appeal. Beyond its entertainment value, Patintero fosters important
            life skills such as cooperation, quick decision-making, and
            resilience. It also serves as a way to connect younger generations
            with their cultural heritage, ensuring that the spirit of
            traditional play continues to thrive.
          </p>
          <div class="image-container">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Pinaka_Mahabang_Todo_Patintero_2012_%287732009648%29.jpg/1200px-Pinaka_Mahabang_Todo_Patintero_2012_%287732009648%29.jpg"
              alt="Patintero Game"
            />
            <p class="image-caption">Players engaged in a game of Patintero.</p>
          </div>
        </div>

        <br />
        <br />

        <!-- History Section -->
        <div class="section history">
          <h2>History</h2>
          <p>
            The history of Patintero is intertwined with the long tradition of
            Filipino outdoor games that have been a vital part of community life
            for centuries. Filipino children have played games like Patintero
            for generations, drawing from the influences of pre-colonial and
            colonial times when communal activities and physical games were
            essential aspects of social life. These games were often not only
            for fun but also for teaching children physical endurance, social
            skills, and strategy in an unstructured environment.
          </p>
          <br />
          <p>
            The origins of Patintero are believed to be linked to earlier
            versions of tag and chase games, which were popular among children
            in many rural and urban areas of the Philippines. Over time, the
            game evolved and became more defined, with rules and strategies
            forming to make the gameplay more challenging and fun. The name
            Patintero itself may be a playful nod to the dynamic action of the
            game, with "patintero" possibly coming from the root word "patir,"
            which means "to hit" or "strike," alluding to the nature of tagging
            or striking other players.
          </p>
          <br />
          <p>
            As Filipino society developed and modernized, Patintero retained its
            place as a cherished game due to its simplicity and the joy it
            brings. It has been passed down from one generation to the next,
            with older generations teaching the game to younger family members
            and friends. This continuity reflects the importance of play in
            Filipino culture and serves as a reminder of the value placed on
            community and shared experiences.
          </p>
          <div class="image-container">
            <img
              src="Picture/patintero.jpg"
              alt="Historical depiction of Patintero"
            />
            <p class="image-caption">Children playing Patintero.</p>
          </div>
        </div>

        <br />
        <br />

        <!-- How to Play Section -->
        <div class="how-to-play-section">
          <div class="how-to-play-header">
            <h1>How to Play</h1>
            <p>Follow these steps to get started with Patintero.</p>
            <p>(6-20 Players, ideal for larger groups)</p>
          </div>

          <div class="step">
            <div class="step-icon">1</div>
            <div class="step-content">
              <h3 class="step-title">Form Teams</h3>
              <p class="step-description">
                Divide the group into two teams, ensuring that each team has an
                equal number of players for fairness. The teams can be adjusted
                based on the total number of players and the space available.
                Each team will need to designate one player as the "chaser" or
                the "it" player, who is responsible for tagging the other team
                members.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">2</div>
            <div class="step-content">
              <h3 class="step-title">Set Up the Playing Area</h3>
              <p class="step-description">
                Choose a large, open space with clearly defined boundaries to
                prevent players from running out of the play zone. The space
                should be big enough for players to move around freely and
                create a dynamic gameplay experience.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">3</div>
            <div class="step-content">
              <h3 class="step-title">Mark Safe Zones (Optional)</h3>
              <p class="step-description">
                In some versions of Patintero, safe zones may be designated
                areas where tagged players can temporarily take refuge to avoid
                being tagged. These zones should be marked clearly and agreed
                upon by all players before starting.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">4</div>
            <div class="step-content">
              <h3 class="step-title">Decide on Starting Positions</h3>
              <p class="step-description">
                One team starts at one end of the playing field, while the other
                team starts at the opposite end. The "it" player, chosen by one
                team, starts in the center of the playing area or at a
                designated starting point.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">5</div>
            <div class="step-content">
              <h3 class="step-title">The Game Begins</h3>
              <p class="step-description">
                The game starts with the "it" player trying to tag members of
                the opposing team as they run around the playing area. The
                objective for the running team is to avoid being tagged and stay
                in play, while the "it" player tries to tag as many opponents as
                possible.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">6</div>
            <div class="step-content">
              <h3 class="step-title">Tagging and Being Tagged</h3>
              <p class="step-description">
                If a player is tagged by the "it" player, they are considered
                "out" and must move to a designated "safe zone" or temporarily
                leave the game until a new round begins. Some variations of
                Patintero may allow tagged players to be "rescued" by teammates
                by touching them without being tagged.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">7</div>
            <div class="step-content">
              <h3 class="step-title">Winning the Game</h3>
              <p class="step-description">
                The game continues until all players from one team have been
                tagged and moved to the "safe zone" or until a predetermined
                time limit expires. The team that tags the most players or has
                the fewest players in the "safe zone" at the end of the game is
                declared the winner.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">8</div>
            <div class="step-content">
              <h3 class="step-title">Switch Roles</h3>
              <p class="step-description">
                After each round, switch roles so that the team that was "it"
                becomes the running team and vice versa. This ensures that
                everyone gets a chance to play each role and keeps the game
                balanced and fair.
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
              <h3 class="tip-title">Develop Quick Reflexes</h3>
              <p class="tip-description">
                To avoid being tagged, practice quick reflexes and fast
                movements. Sprinting, sharp turns, and sudden stops can help you
                elude the "it" player.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">2</div>
            <div class="tip-content">
              <h3 class="tip-title">Communicate with Your Teammates</h3>
              <p class="tip-description">
                Effective communication is essential for coordinated team play.
                Use hand signals or short calls to alert teammates about the
                "it" player's position or when it's safe to make a move.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">3</div>
            <div class="tip-content">
              <h3 class="tip-title">Use the Entire Playing Area</h3>
              <p class="tip-description">
                Make the most of the available space by running to different
                areas of the playing field. Avoid staying in one place for too
                long, as it makes you an easy target.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">4</div>
            <div class="tip-content">
              <h3 class="tip-title">Learn to Read the "It" Player</h3>
              <p class="tip-description">
                Watch the "it" player's body language and movements to predict
                their next move. This allows you to plan your escape route and
                avoid being tagged.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">5</div>
            <div class="tip-content">
              <h3 class="tip-title">Create Distractions</h3>
              <p class="tip-description">
                Team members can create distractions to divert the "it" player’s
                attention. This can help other players make successful moves and
                avoid getting caught.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">6</div>
            <div class="tip-content">
              <h3 class="tip-title">Practice Team Strategies</h3>
              <p class="tip-description">
                Work with your teammates to develop strategies such as running
                in pairs, creating blocking formations, or drawing the "it"
                player away from others.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">7</div>
            <div class="tip-content">
              <h3 class="tip-title">Use Feints and Fake-Outs</h3>
              <p class="tip-description">
                Pretend to head in one direction before quickly changing your
                course. This can trick the "it" player and give you a chance to
                escape.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">8</div>
            <div class="tip-content">
              <h3 class="tip-title">Stay Alert and Focused</h3>
              <p class="tip-description">
                Keep an eye on the game at all times, even when it’s not your
                turn to be "it." This helps you react quickly when needed and be
                aware of your surroundings.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">9</div>
            <div class="tip-content">
              <h3 class="tip-title">Condition Your Body</h3>
              <p class="tip-description">
                Physical conditioning can improve your endurance and speed.
                Practice running, jumping, and agility drills to enhance your
                performance.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">10</div>
            <div class="tip-content">
              <h3 class="tip-title">Respect Your Opponents and Play Fair</h3>
              <p class="tip-description">
                The most important aspect of Patintero is having fun and
                fostering good sportsmanship. Play fairly, respect your
                teammates and opponents, and enjoy the camaraderie that comes
                with playing this traditional Filipino game.
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
              src="https://www.youtube.com/embed/vMvoUCJzqJ0"
              title="Patintero - How to Play"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
            <p class="image-caption">
              Watch the video on how to play Patintero.
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
    <script src="Patintero.js"></script>
  </body>
</html>
