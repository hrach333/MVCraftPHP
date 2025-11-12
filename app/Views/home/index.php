<?php
?>
<section>
  <?php foreach ($posts as $p): ?>
    <article class="card">
      <h2><?= htmlspecialchars($p['title']) ?></h2>
      <p><?= nl2br(htmlspecialchars($p['body'])) ?></p>
      <a class="btn" href="/post/<?= (int)$p['id'] ?>">Открыть</a>
    </article>
  <?php endforeach; ?>
  <?php if (empty($posts)): ?>
    <div class="card">Постов пока нет</div>
  <?php endif; ?>
</section>
