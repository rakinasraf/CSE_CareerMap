<?php
require_once __DIR__ . '/data/career_data.php';
$selected = $_GET['path'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Roadmaps | CSE CareerMap</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="stars"></div>
<header class="site-header">
  <div class="brand"><div class="crest">⚡</div><div><h1>CSE CareerMap</h1><span>The Magical Career Guide</span></div></div>
  <nav><a href="index.php">Home</a><a class="active" href="roadmap.php">Roadmaps</a><a href="jobs.php">Jobs</a></nav>
  <button id="themeToggle" class="theme-btn">☾</button>
</header>
<main class="page">
<section class="page-heading"><p class="eyebrow">✦ The Great Roadmap Hall ✦</p><h2>Choose your learning path</h2><p>Follow the glowing trail from fundamentals to your target career.</p></section>
<div class="path-tabs">
<?php foreach ($careerPaths as $key=>$path): ?>
<a class="<?= $selected===$key?'selected':'' ?>" href="roadmap.php?path=<?=urlencode($key)?>"><?= $path['icon'] ?> <?=htmlspecialchars($path['title'])?></a>
<?php endforeach; ?>
</div>
<?php if ($selected && isset($careerPaths[$selected])): $path=$careerPaths[$selected]; ?>
<section class="roadmap-detail">
  <div class="detail-head"><span class="big-icon"><?=$path['icon']?></span><div><p class="eyebrow">Career House</p><h2><?=htmlspecialchars($path['title'])?></h2><p><?=htmlspecialchars($path['description'])?></p></div></div>
  <div class="roadmap">
  <?php foreach ($path['topics'] as $i=>$topic): ?>
    <div class="road-node">
      <div class="node-number"><?=str_pad($i+1,2,'0',STR_PAD_LEFT)?></div>
      <div class="node-content"><h3><?=htmlspecialchars($topic['name'])?></h3><span class="level <?=$topic['level']?>"><?=htmlspecialchars($topic['level'])?></span><p><?=htmlspecialchars($topic['description'])?></p></div>
      <?php if ($i < count($path['topics'])-1): ?><div class="connector"></div><?php endif; ?>
    </div>
  <?php endforeach; ?>
  </div>
  <div class="jobs-unlock"><p class="eyebrow">✦ Careers unlocked ✦</p><div class="job-pills"><?php foreach($path['jobs'] as $job): ?><a href="jobs.php?job=<?=urlencode($job)?>"><?=$job?> →</a><?php endforeach; ?></div></div>
</section>
<?php else: ?>
<div class="empty-state"><div>🪄</div><h3>Select a career house</h3><p>Choose one of the paths above to reveal its learning roadmap.</p></div>
<?php endif; ?>
</main>
<footer><span>⚡ CSE CareerMap</span><span>Knowledge is the strongest magic.</span></footer>
<script src="assets/js/script.js"></script>
</body>
</html>