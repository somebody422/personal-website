<!DOCTYPE html>

<?php
  session_start();
  if (isset($_SESSION['page_loads']))
    $_SESSION['page_loads']++;
  else
    $_SESSION['page_loads'] = 1;
?>

<head>
  <link href="./global.css", rel="stylesheet">
  <link href="./resume.css", rel="stylesheet">
  <title>#<?php echo $_SESSION['page_loads'] ?></title>
</head>


<body data-theme="light-blocky">
  <div class="l-page">
    <!-- TODO: Decide where to use HTML5 tags like header, nav, seciton, ect -->

    <div class="l-header">
      <?php require('snippets/navbar-snippet.html'); ?>
    </div>


    <div class="l-intro l-centered-row">
      <div class="intro">
        <img src="res/kittens.jpg">
        <div class="intro-text">
          <h3>About me</h3>
          <p>Here is some info. I guess i like computers like a big nerd. Sometimes I type things into a keyboard and think about stuff for money.</p>
          <p>Hey I also like music! Ill play some rad basslines if you ask nicely. Used to hit things with sticks but now i forget how.</p>
          </div>
      </div>
    </div>  <!-- l-intro -->


    <div class="l-experience l-centered-row">
        <h2>Experience</h2>
        <div class="experience">
          <div class="experience-sporian-left">
            <h3>Junior Firmware Engineer</h3>
            <p>Sporian Microsystems<br>June 2019 - May 2021</p>

          </div>
          <div class="experience-sporian-right">
            <p>Sporian microsystems designs and manufactures sensors for unique and/or extreme environments.</p>
            <p>During my time at Sporian, I participated in many projects, often coming quickly up to speed and contributing, and sometimes leading the software development side of the effort.</p>
            <p>I coordinated firmware dev for a redox potential sensor, working within a limited budget. Ultimately, we produced a working prototype.<p>
          </div>
          <div class="experience-rit-left">
            <h3>BS Computer Science, Minor in EE</h3>
            <p>Rochester Institute of Technology<br>August 2014 - May 2019</p>
          </div>
          <div class="experience-rit-right">
            <p>Study covered several areas, focusing on:</p>
            <ul>
              <li>Systems engineering</li>
              <li>Operating systems</li>
              <li>Network architecture</li>
              <li>Software engineering processes / workflows</li>
            </ul>
            <p>During my last semester, persued my interested in electrical engineering, finishing a minor.<p>
          </div>
          <div class="experience-id-left">
            <h3>Backend Web Developer</h3>
            <p>Industry Dive<br>June 2018 - August 2018</p>
          </div>
          <div class="experience-id-right">
            <p>Industry dive is a place</p>
          </div>
        </div>
    </div>  <!-- l-experience -->


    <div class="l-skills">
      <h2>Skills</h2>
      <div class="skills-header">
        <hr>
        <div>
          <h3>Advanced: High-level mastery</h3>
          <img src="res/5star.jpg">
        </div>
      </div> <!-- skills-header -->
      <div class="skills">
        <div class="skill-container">
          <h4>Java</h4>
          <p>My first programming language. Made several GUIs and simple games.</p>
        </div>
        <div class="skill-container">
          <h4>C, Posix/libc</h4>
          <p>Plenty of experience with embedded and non-embedded C. Working with pure C as well as libc and interfacing with linux (sockets, files, syscalls).
        </div>
        <div class="skill-container">
          <h4>Python</h4>
          <p>Several GUI programs made through python-QT5, as well as automated scripting, web services, interfacing with C, and much more.</p>
        </div>
        <div class="skill-container">
          <h4>Database Management</h4>
          <p>MySQL, SQLite. Experience designing as well as maintaining database systems.</p>
        </div>
        <div class="skill-container">
          <h4>Web Front-end</h4>
          <p>TODO: learn this shit first then description</p>
        </div>
        <div class="skill-container">
          <h4>Web back-end</h4>
          <p>TODO: learn this shit first then description</p>
        </div>
      </div>  <!-- skills -->
      <div class="skills-header">
        <hr>
        <div>
          <h3>Proficent</h3>
          <img src="res/4star.jpg">
        </div>
      </div> <!-- skills-header -->
      <div class="skills">
        <div class="skill-container">
          <h4>Containerization</h4>
          <p>Docker, vagrant. TODO: more info here</p>
        </div>
        <div class="skill-container">
          <h4>placeholder</h4>
          <p>something I havn't learned yet. blah blah blah blah blah</p>
        </div>
        <div class="skill-container">
          <h4>Toasting Bread</h4>
          <p>Deep experience with toasting white, wheat, and sourdough. Specialize in darkness settings 2 through 6.<br>Second place won at the Intercollegiate Tournament for Competetive Toasting.</p>
        </div>
      </div>  <!-- skills -->
    </div>  <!-- l-skills -->


    <div class="l-footer">
      <?php require('snippets/footer-snippet.html'); ?>
    </div>  <!-- l-footer -->


  </div>
</body>
