<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sekyu Base</title>
    <link rel="stylesheet" href="SekyuBase.css" />
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

      <!-- Game Section -->
      <section id="gameSection">
        <div class="game-header">
          <h1>Sekyu Base</h1>
          <p>
            A Filipino team game where you protect your base and rescue your
            teammates.
          </p>
        </div>

        <br />
        <br />

        <!-- Introduction Section -->
        <div class="section intro">
          <h2>Introduction</h2>
          <p>
            Sekyu Base is a classic Filipino game celebrated for its
            combination of strategy, speed, and teamwork, making it a favorite
            among children and even older players in the Philippines. It is
            often played in schoolyards, playgrounds, and open spaces in
            neighborhoods, where the game brings people together in an
            environment full of laughter, energy, and friendly competition. The
            appeal of Sekyu Base lies in its simplicity—players only need
            minimal equipment to play, typically just markers for bases and
            enough open space to run around.
          </p>
          <br />
          <p>
            The essence of Sekyu Base is rooted in the thrill of racing,
            dodging, and strategizing as players try to outwit each other and
            achieve their goal. The objective is straightforward but engaging:
            to capture the opposing team's base while defending your own. This
            element of offense and defense requires players to communicate, make
            quick decisions, and coordinate movements, all while maintaining
            physical activity. The game teaches valuable life skills such as
            teamwork, leadership, and critical thinking, helping players develop
            both mentally and physically.
          </p>
          <br />
          <p>
            In many Filipino communities, Sekyu Base is more than just a
            pastime; it’s a part of childhood that instills a sense of community
            and camaraderie. The game evokes nostalgia among older generations
            who fondly remember playing it as kids and now pass on the tradition
            to younger family members and friends. Sekyu Base is a shining
            example of how simple, traditional games can have lasting appeal,
            creating memorable experiences and reinforcing cultural bonds.
          </p>
          <div class="image-container">
            <img
              src="https://devcomcreatives.wordpress.com/wp-content/uploads/2012/08/hpim32353.jpg?w=1200"
              alt="Image"
            />
            <p class="image-caption">
              Group of children playing Sekyu Base.
            </p>
          </div>
        </div>

        <br />
        <br />

        <!-- History Section -->
        <div class="section history">
          <h2>History</h2>
          <p>
            Sekyu Base is deeply embedded in Filipino culture, representing an
            integral part of the country's rich heritage of traditional games.
            Its origins can be traced back to a time when outdoor play was an
            essential part of daily life in rural and urban communities. These
            games were created to provide children with healthy and active ways
            to engage with each other and develop physical and social skills.
          </p>
          <br />
          <p>
            The history of Sekyu Base is intertwined with the legacy of play
            and social interaction that has been passed down for generations.
            The game is believed to have emerged from the influence of early
            games that involved elements of tag and capture. As Filipino society
            evolved over centuries, these games adapted, and Sekyu Base emerged
            as a distinct variation that blended strategic play with physical
            activity. Its name, "Sekyu Base," may stem from the words “senkyu”
            (a playful expression of thanks or acknowledgment) and "base,"
            referring to the central goal of the game.
          </p>
          <br />
          <p>
            Historically, Sekyu Base was not just a way for children to pass
            the time but also a method for them to build strong relationships
            with friends and neighbors. It was often played during festivals,
            school breaks, and on weekends, with children from various
            backgrounds coming together to join in. The game reflects the
            Filipino values of community, cooperation, and a love for fun, which
            have been woven into the culture through shared experiences. Despite
            the rise of modern games and technology, Sekyu Base continues to be
            enjoyed in communities, reminding people of the simple joys of
            playing outdoors.
          </p>
          <div class="image-container">
            <img src="Picture/SenkyuBasePic.jpg" alt="Historical depiction of Luksong Baka" />
            <p class="image-caption">
              Children playing Sekyu Base.
            </p>
          </div>
        </div>

        <br />
        <br />

        <!-- How to Play Section -->
        <div class="how-to-play-section">
          <div class="how-to-play-header">
            <h1>How to Play</h1>
            <p>Follow these steps to get started with Sekyu Base.</p>
            <p>(6-16 Players, split into two teams)</p>
          </div>

          <div class="step">
            <div class="step-icon">1</div>
            <div class="step-content">
              <h3 class="step-title">Divide into Teams</h3>
              <p class="step-description">
                Form two teams of equal size. Teams can vary in number based on
                the available space and group size, but balance ensures a fair
                game. Each team chooses a leader or decides on roles like
                attackers and defenders.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">2</div>
            <div class="step-content">
              <h3 class="step-title">Set Up the Bases</h3>
              <p class="step-description">
                Identify and mark two bases at opposite ends of the playing
                field. These bases can be represented using objects like cones,
                shoes, sticks, or chalk drawings. Each team should have one base
                to defend while trying to capture the other’s.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">3</div>
            <div class="step-content">
              <h3 class="step-title">Assign Roles</h3>
              <p class="step-description">
                Designate players as either attackers or defenders. Attackers
                aim to reach the opposing base and capture it, while defenders
                protect their own base and attempt to tag attackers.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">4</div>
            <div class="step-content">
              <h3 class="step-title">Starting the Game</h3>
              <p class="step-description">
                The game begins when one team’s leader calls out a signal, like
                “Ready, Set, Go!” Attackers start at their base while defenders
                spread out to protect it. The attackers’ goal is to make it to
                the opposing base and touch it.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">5</div>
            <div class="step-content">
              <h3 class="step-title">Defend and Tag</h3>
              <p class="step-description">
                Defenders try to tag the attackers before they can reach the
                base. If an attacker is tagged, they are out and must return to
                their starting position or the designated safe zone to re-enter
                the game.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">6</div>
            <div class="step-content">
              <h3 class="step-title">Capture the Base</h3>
              <p class="step-description">
                An attacker successfully captures the base when they touch it
                and return to their own base without being tagged. The attacking
                team earns points for each successful capture.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">7</div>
            <div class="step-content">
              <h3 class="step-title">Switch Roles</h3>
              <p class="step-description">
                After each round, teams switch roles. The team that was
                attacking becomes the defending team and vice versa, to ensure
                that all players experience both aspects of the game.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">8</div>
            <div class="step-content">
              <h3 class="step-title">Continue Playing</h3>
              <p class="step-description">
                The game continues until a set time limit is reached, or until a
                predetermined number of rounds have been completed. The team
                with the most successful captures wins the game.
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
              <h3 class="tip-title">Communicate with Your Team</h3>
              <p class="tip-description">
                Strong communication helps synchronize movements and strategies.
                Use hand signals or short calls to alert teammates about the
                position of the defenders or when to switch roles.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">2</div>
            <div class="tip-content">
              <h3 class="tip-title">Be Agile and Quick</h3>
              <p class="tip-description">
                Improve your footwork and speed to outmaneuver the defenders.
                Practice running in short bursts and making sharp, sudden
                changes in direction.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">3</div>
            <div class="tip-content">
              <h3 class="tip-title">Use Decoys and Distractions</h3>
              <p class="tip-description">
                Attackers can use feints to mislead defenders and create
                openings for others. Distract the defenders by pretending to
                head toward one direction and quickly changing course.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">4</div>
            <div class="tip-content">
              <h3 class="tip-title">Anticipate Defender Moves</h3>
              <p class="tip-description">
                Defenders should study the attackers’ behavior to predict their
                path and prevent them from reaching the base. Strategic
                positioning and anticipation can stop the attackers in their
                tracks.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">5</div>
            <div class="tip-content">
              <h3 class="tip-title">Learn to Time Your Runs</h3>
              <p class="tip-description">
                Good timing can make the difference between getting tagged and
                reaching the base. Wait for the right moment when defenders are
                out of position or distracted to make your move.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">6</div>
            <div class="tip-content">
              <h3 class="tip-title">Strengthen Team Coordination</h3>
              <p class="tip-description">
                Work together as a unit. Defenders should cover each other and
                shift positions to provide maximum coverage, while attackers
                should collaborate to create a collective push toward the base.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">7</div>
            <div class="tip-content">
              <h3 class="tip-title">Stay Focused Under Pressure</h3>
              <p class="tip-description">
                Whether you're attacking or defending, staying calm and alert is
                crucial. Don’t let excitement or fear make you lose focus—keep
                your eyes on the goal and play smart.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">8</div>
            <div class="tip-content">
              <h3 class="tip-title">Practice Makes Perfect</h3>
              <p class="tip-description">
                Play regularly to build your stamina, speed, and teamwork
                skills. The more you play, the better you’ll get at reading the
                game and improving your strategies.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">9</div>
            <div class="tip-content">
              <h3 class="tip-title">Adapt to the Game’s Pace</h3>
              <p class="tip-description">
                Every match can be different, so adjust your strategy according
                to how the game is progressing. Be flexible in your approach and
                ready to change tactics when needed.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">10</div>
            <div class="tip-content">
              <h3 class="tip-title">Enjoy the Spirit of the Game</h3>
              <p class="tip-description">
                Sekyu Base is all about having fun and connecting with others.
                Remember to enjoy each moment, celebrate victories, and learn
                from losses. The game’s true value lies in the friendships and
                memories created through play.
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
              src="https://www.youtube.com/embed/Iph3wygfgF0"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
            <p class="image-caption">
              Watch the video on how to play Sekyu Base.
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
    <script src="SekyuBase.js"></script>


  </body>
</html>
