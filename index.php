<?php
require_once __DIR__ . '/data/career_data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CSE CareerMap | The Magical Career Guide</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="stars"></div>
<header class="site-header">
  <div class="brand">
    <div class="crest">⚡</div>
    <div><h1>CSE CareerMap</h1><span>The Magical Career Guide</span></div>
  </div>
  <nav>
    <a class="active" href="index.php">Home</a>
    <a href="roadmap.php">Roadmaps</a>
    <a href="jobs.php">Jobs</a>
  </nav>
  <button id="themeToggle" class="theme-btn" aria-label="Toggle theme">☾</button>
</header>

<main>
<section class="hero">
  <div class="hero-text">
    <p class="eyebrow">✦ Welcome, young wizard of CSE ✦</p>
    <h2>Discover the <span>magic</span> behind your career.</h2>
    <p class="hero-desc">Find out which CSE topics to learn, what skills they unlock, and which career paths they can lead to.</p>
    <div class="search-wrap">
      <input id="globalSearch" type="text" placeholder="Search a topic, career or job...">
      <button onclick="searchSite()">Search</button>
    </div>
    <div id="searchResults" class="search-results"></div>
  </div>
  <div class="magic-card">
    <div class="wand">🪄</div>
    <h3>Your journey begins here</h3>
    <p>Choose a path, learn the spells, master the skills.</p>
    <a href="roadmap.php" class="gold-btn">Explore Roadmaps →</a>
  </div>
</section>

<section class="section">
  <div class="section-title">
    <div><p class="eyebrow">✦ Choose your path ✦</p><h2>Popular Career Houses</h2></div>
  </div>
  <div class="card-grid">
  <?php foreach ($careerPaths as $key => $path): ?>
    <a class="career-card" href="roadmap.php?path=<?= urlencode($key) ?>">
      <div class="card-icon"><?= $path['icon'] ?></div>
      <h3><?= htmlspecialchars($path['title']) ?></h3>
      <p><?= htmlspecialchars($path['description']) ?></p>
      <span><?= count($path['topics']) ?> topics · <?= count($path['jobs']) ?> careers →</span>
    </a>
  <?php endforeach; ?>
  </div>
</section>

<section class="section parchment">
  <div class="section-title"><div><p class="eyebrow">✦ The learning spellbook ✦</p><h2>How it works</h2></div></div>
  <div class="steps">
    <div class="step"><b>01</b><h3>Pick a Career Path</h3><p>Choose the area of CSE that interests you.</p></div>
    <div class="step"><b>02</b><h3>Follow the Roadmap</h3><p>Learn topics in a logical beginner-to-advanced order.</p></div>
    <div class="step"><b>03</b><h3>Unlock Job Roles</h3><p>See which careers become accessible as your skills grow.</p></div>
  </div>
</section>
</main>

<footer><span>⚡ CSE CareerMap</span><span>Built for curious CSE students · No database required</span></footer>
<script src="assets/js/script.js"></script>
</body>
</html>