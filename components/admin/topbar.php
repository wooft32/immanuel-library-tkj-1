<header class="topbar">
  <div class="topbar-title">
    <h1><?= isset($pageTitle) ? $pageTitle : "dashboard admin"; ?></h1>
    <?php if (isset($pageSubtitle)): ?>
      <p><?= $pageSubtitle; ?></p>
    <?php endif; ?>
  </div>
  <div class="topbar-profile">
    <span>admin</span>
  </div>
</header>