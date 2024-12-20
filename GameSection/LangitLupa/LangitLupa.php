<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Langit Lupa</title>
    <link rel="stylesheet" href="LangitLupa.css" />
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
          <h1>Langit Lupa</h1>
          <p>A fun Filipino chasing game involving "heaven" and "earth."</p>
        </div>

        <br />
        <br />

        <!-- Introduction Section -->
        <div class="section intro">
          <h2>Introduction</h2>
          <p>
            "Langit Lupa" is a beloved traditional Filipino children's game that
            blends excitement, strategy, and physical activity. The game
            typically involves a group of children, with one designated as the
            "taya" or chaser, who is tasked with tagging other players. The
            playing field is divided into two main zones: langit (heaven) and
            lupa (earth). Langit represents elevated, safe zones such as
            benches, small platforms, or designated areas that players can use
            as a temporary refuge. Lupa is the ground level where players are
            vulnerable and at risk of being tagged.
          </p>
          <br />
          <p>
            Players move back and forth between langit and lupa as they try to
            outmaneuver the taya. The objective for the other participants is to
            avoid getting tagged while continually shifting between these two
            zones, creating a game that requires quick reflexes, agility, and
            strategic thinking. Each time the players chant a specific rhyme or
            phrase—often serving as a cue for movement—the taya tries to tag
            those who are momentarily on the ground (lupa). Players must time
            their movements carefully to stay ahead of the chaser and avoid
            being tagged.
          </p>
          <br />
          <p>
            The game is not only a test of physical prowess but also fosters
            social interaction, teamwork, and playful competitiveness. It holds
            a special place in Filipino childhoods, serving as a cherished
            memory and a cultural tradition that connects young generations to
            their heritage. Through games like Langit Lupa, children learn the
            importance of strategy, quick decision-making, and communal fun.
          </p>
          <div class="image-container">
            <!-- Updated Image Source -->
            <img
              src="https://preview.redd.it/iakl024zyhr71.png?width=960&format=png&auto=webp&s=9da3fa068d60e6e706040e7a703cfe354ba286c1"
              alt="Image"
            />
            <p class="image-caption">Family playing Langit Lupa.</p>
          </div>
        </div>

        <br />
        <br />

        <!-- History Section -->
        <div class="section history">
          <h2>History</h2>
          <p>
            The history of Langit Lupa is deeply intertwined with the rich
            tradition of play in Filipino culture, showcasing the way games have
            been used for generations as a means of bonding, education, and
            cultural transmission. While precise historical records about the
            origins of Langit Lupa are scarce, the game is thought to have
            evolved from the playful activities of pre-Hispanic Filipino
            communities, who were known for their creative and spirited ways of
            engaging in social play.
          </p>
          <br />
          <p>
            The Philippines has a long history of games that combine physical
            activity with elements of strategy, storytelling, and group
            participation. In the past, indigenous Filipino communities, such as
            the Tagalog, Visayans, and other ethnic groups, used games not only
            to entertain but also to teach young people important life skills
            like teamwork, quick thinking, and leadership. Langit Lupa fits into
            this cultural context as a game that emphasizes agility,
            coordination, and strategic planning, skills that were valued in the
            community’s way of life.
          </p>
          <br />
          <p>
            The name itself reflects the game’s simple yet symbolic division
            between two realms: langit (heaven) and lupa (earth). This division
            may be rooted in Filipino beliefs and folklore where the spiritual
            and the earthly coexist. In traditional Filipino cosmology, langit
            often represented the heavens or an elevated state, while lupa
            signified the earth, where human activity took place. The game’s use
            of these concepts could have been a way to integrate playful
            interpretations of the natural and spiritual world into a shared
            childhood experience.
          </p>
          <br />
          <p>
            As the Spanish colonizers arrived in the 16th century, they brought
            their own customs and games, but Filipino culture remained
            resilient, blending new influences with traditional practices.
            Langit Lupa continued to be played in the rural and urban areas of
            the country, especially among children. This continuity can be
            attributed to its simplicity, requiring no special equipment other
            than open space, making it accessible to communities across the
            archipelago.
          </p>
          <br />
          <p>
            Over time, Langit Lupa became not just a game but a social ritual,
            with various versions and adaptations developing depending on the
            region. In some areas, specific chants or rhymes accompanied the
            gameplay, incorporating local language and idiomatic expressions.
            These chants were not only a signal for movement but also a way of
            passing down stories, cultural values, and even hints of local
            history.
          </p>
          <br />
          <p>
            In modern times, Langit Lupa is less commonly played as children
            turn to more contemporary forms of entertainment. Yet, it remains an
            iconic symbol of traditional Filipino play. It’s a reminder of the
            country's rich heritage and the timeless nature of childhood
            activities that emphasize movement, community, and joy. Cultural
            programs and educational initiatives in the Philippines sometimes
            revive these games to teach younger generations about their roots
            and the playful aspects of their ancestors’ lives.
          </p>
          <br />
          <p>
            Thus, Langit Lupa serves as both a historical artifact and a living
            piece of Filipino heritage, embodying the spirit of play that has
            been cherished for centuries in the archipelago.
          </p>
          <div class="image-container">
            <img
              src="Picture/LangitLupaPic.jpg"
              alt="Historical depiction of Langit Lupa"
            />
            <p class="image-caption">Children playing Langit Lupa.</p>
          </div>
        </div>

        <br />
        <br />

        <!-- How to Play Section -->
        <div class="how-to-play-section">
          <div class="how-to-play-header">
            <h1>How to Play</h1>
            <p>Follow these steps to get started with Langit Lupa.</p>
            <p>(3-10 Players)</p>
          </div>

          <div class="step">
            <div class="step-icon">1</div>
            <div class="step-content">
              <h3 class="step-title">Assign Roles</h3>
              <p class="step-description">
                Designate one player as the “taya” (chaser), while the remaining
                players are the participants who will try to avoid being tagged.
                The game is best played in an open space where the “langit”
                (safe zones) and “lupa” (ground) areas can be clearly defined.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">2</div>
            <div class="step-content">
              <h3 class="step-title">Set Up the Game Area</h3>
              <p class="step-description">
                Establish boundaries for langit and lupa. Langit can be marked
                with objects like benches, rocks, or chalk lines, while lupa
                covers the area between them. Players must stay within these
                zones during gameplay.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">3</div>
            <div class="step-content">
              <h3 class="step-title">Start the Chant</h3>
              <p class="step-description">
                The game begins with the group singing a chant or phrase that
                signals players to move between langit and lupa. The taya counts
                or waits until the chant is complete to tag players.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">4</div>
            <div class="step-content">
              <h3 class="step-title">Move Between Zones</h3>
              <p class="step-description">
                Players must strategically move between langit (safe areas) and
                lupa (ground) while avoiding the taya. Players can only stay on
                langit for a limited time before they must move to lupa.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">5</div>
            <div class="step-content">
              <h3 class="step-title">Tagging and Switching Roles</h3>
              <p class="step-description">
                If the taya tags a player, that player becomes the new taya. The
                game resets with the new taya in the designated starting
                position, and the other players prepare to play again.
              </p>
            </div>
          </div>

          <div class="step">
            <div class="step-icon">6</div>
            <div class="step-content">
              <h3 class="step-title">Keep the Game Going</h3>
              <p class="step-description">
                Continue playing, switching roles as needed, until everyone has
                had a turn as the taya or until the group decides to stop.
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
                Make sure you fully grasp the rules and objectives before
                starting. Practicing your movements and timing will give you
                confidence during the game.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">2</div>
            <div class="tip-content">
              <h3 class="tip-title">Use Your Environment</h3>
              <p class="tip-description">
                Take advantage of the layout of the game area. Use the langit
                zones effectively to maximize your safety while staying alert to
                where the taya is.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">3</div>
            <div class="tip-content">
              <h3 class="tip-title">Stay Agile</h3>
              <p class="tip-description">
                Quick and agile movements are essential. Practice your speed and
                reflexes to change direction quickly when transitioning between
                lupa and langit.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">4</div>
            <div class="tip-content">
              <h3 class="tip-title">Learn the Chant</h3>
              <p class="tip-description">
                Familiarize yourself with the chant used in the game. This helps
                you anticipate when it’s time to move and makes gameplay
                smoother and more coordinated.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">5</div>
            <div class="tip-content">
              <h3 class="tip-title">Be Strategic with Positioning</h3>
              <p class="tip-description">
                Don’t stay in langit for too long or go there too often. Move
                between zones at the right moments to make it difficult for the
                taya to predict your next move.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">6</div>
            <div class="tip-content">
              <h3 class="tip-title">Watch Your Opponents</h3>
              <p class="tip-description">
                Pay attention to the taya’s behavior and the movement patterns
                of other players. This will help you predict who might be tagged
                next and where to position yourself to avoid being tagged.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">7</div>
            <div class="tip-content">
              <h3 class="tip-title">Keep Calm Under Pressure</h3>
              <p class="tip-description">
                The game can get intense, especially when the taya is close.
                Maintain your composure and focus on your next move, even when
                the pace picks up.
              </p>
            </div>
          </div>

          <div class="tip">
            <div class="tip-icon">8</div>
            <div class="tip-content">
              <h3 class="tip-title">Practice Group Coordination</h3>
              <p class="tip-description">
                When playing in larger groups, communicate non-verbally with
                other players to coordinate movements and make the game more
                challenging for the taya.
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
              src="https://www.youtube.com/embed/7SjJFER359I"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            >
            </iframe>
            <p class="image-caption">
              Watch the video on how to play Langit Lupa.
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
    <script src="LangitLupa.js"></script>
  </body>
</html>
