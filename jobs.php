<?php
require_once __DIR__ . '/data/career_data.php';
$selectedJob = $_GET['job'] ?? '';
$allJobs = [];
foreach ($careerPaths as $key=>$path) foreach ($path['jobs'] as $job) $allJobs[$job][]=$key;
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jobs | CSE CareerMap</title><link rel="stylesheet" href="assets/css/style.css"></head>
<body><div class="stars"></div>
<header class="site-header"><div class="brand"><div class="crest">⚡</div><div><h1>CSE CareerMap</h1><span>The Magical Career Guide</span></div></div>
<nav><a href="index.php">Home</a><a href="roadmap.php">Roadmaps</a><a class="active" href="jobs.php">Jobs</a></nav><button id="themeToggle" class="theme-btn">☾</button></header>
<main class="page"><section class="page-heading"><p class="eyebrow">✦ Careers beyond the castle ✦</p><h2>Explore CSE Job Roles</h2><p>See the learning paths connected to each career.</p></section>
<div class="job-list">
<?php foreach($allJobs as $job=>$paths): ?>
<article class="job-card <?= $selectedJob===$job?'highlight':'' ?>">
<div class="job-symbol">✦</div><div><h3><?=htmlspecialchars($job)?></h3><p>Build the skills shown in the connected CSE roadmaps to prepare for this role.</p><div class="related">Paths: <?php foreach(array_unique($paths) as $p): ?><a href="roadmap.php?path=<?=urlencode($p)?>"><?=htmlspecialchars($careerPaths[$p]['title'])?></a><?php endforeach;?></div></div>
</article>
<?php endforeach; ?>
</div></main><footer><span>⚡ CSE CareerMap</span><span>Choose skills. Shape your future.</span></footer>
<script src="assets/js/script.js"></script></body></html>