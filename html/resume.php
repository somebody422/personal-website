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
      <div class="img-container">
        <img src="res/headshot.png">
      </div>
      <div class="intro-text">
        <h3>About me</h3>
        <p>I'm a flexible developer with a wide variety of experience. I specialize in embedded/electrical systems, as well as web development. A strong background in linux leads to flexibility using open source tooling, embedded linux, and cloud configuration and management. </p>
        </div>
    </div>  <!-- l-intro -->


    <div class="l-experience l-centered-row">
        <h2>Experience</h2>
        <div class="experience">
          <div class="experience-location">
            <h3>Junior Firmware Engineer</h3>
            <p>Sporian Microsystems<br>June 2019 - May 2021</p>

          </div>
          <div class="experience-info">
            <p>Sporian microsystems designs and manufactures sensors for unique and/or extreme environments.</p>
            <p>During my time at Sporian, I participated in many projects, often coming quickly up to speed to contribute. Worked with both high level scripting, and low level firmware.</p>
            <p>Key skills/experiences include:</p>
            <ul>
              <li>Fast and efficent firmware in C, integrating uC with electronics capabilities</li>
              <li>Reviewing electrical schematics, and working closely with EEs</li>
              <li>Curating git repositories and documentation</li>
              <li>Creating GUIs to interact with running sensors, collecting data for lab usage</li>
            </ul>
            <p>I coordinated firmware dev for a chemicsal sensor, working within a limited budget. Working prototype was used in a high-temperature sensing environment.<p>
          </div>
          <div class="experience-location">
            <h3>BS Computer Science, Minor in EE</h3>
            <p>Rochester Institute of Technology<br>August 2014 - May 2019</p>
          </div>
          <div class="experience-info">
            <p>Study covered several areas, focusing on:</p>
            <ul>
              <li>Systems engineering</li>
              <li>Operating systems</li>
              <li>Network architecture</li>
              <li>Software engineering processes / workflows</li>
            </ul>
            <p>Persued interests in electrical engineering, learning circuit and embedded design, and ultimately finishing a minor.<p>
          </div>
          <div class="experience-location">
            <h3>Backend Web Developer</h3>
            <p>Industry Dive<br>June 2018 - August 2018</p>
          </div>
          <div class="experience-info">
            <p>Back-end web development, focusing on maintaining multiple sites:</p>
            <ul>
              <li>Adding features to Django back-end</li>
              <li>Migrating/maintaining MySQL database for multiple sites</li>
              <li>Tweaking front-end functionality (javascript)</li>
            </ul>
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
          <h4>C, Posix/libc</h4>
          <p>Plenty of experience with embedded and non-embedded C. Working with pure C/libc as well as interfacing with linux (sockets, files, syscalls) and assembly (mips, x86).
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
          <h4>Web back-end</h4>
          <p>Back-end server maintenance and development. Python/Django, and PHP/Wordpress</p>
        </div>
        <div class="skill-container">
          <h4>Code management and practices</h4>
          <p>Inspecting and fixing VCS history, mainly Git. Software practices such as creating documentation, automatic testing, code reviewing, ect.</p>
        </div>
        <div class="skill-container">
          <h4>Embedded code/electronics</h4>
          <p>Designing circuits around microcontrollers, writing firmware, debugging software and hardware issues.</p>
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
          <h4>Web Front-end</h4>
          <p>Website design, mockup and prototype creation. Varius tools/languages including HTML, CSS, javascript.</p>
        </div>
        <div class="skill-container">
          <h4>Containerization</h4>
          <p>Creating micro-services using Docker, docker-compose, kubernetes</p>
        </div>
        <div class="skill-container">
          <h4>Misc languages</h4>
          <p>Languages I know but havn't used in a while:</p>
          <p>Lua, Ruby, Rust, Perl</p>
        </div>
      </div>  <!-- skills -->
    </div>  <!-- l-skills -->


    <div class="l-footer">
      <?php require('snippets/footer-snippet.html'); ?>
    </div>  <!-- l-footer -->


  </div>
</body>
