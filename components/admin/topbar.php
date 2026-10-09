<header class="app-topbar">
        <div class="page-title">
          <h1><?= isset($pageTitle) ? $pageTitle : "dashboard admin"; ?></h1>
          <?php if (isset($pageSubtitle)): ?>
      <p><?= $pageSubtitle; ?></p>
    <?php endif; ?>
        </div>
        <div class="topbar-user">
          <span class="avatar">BS</span>
          <div>
            Budi Santoso<br>
            <span class="badge badge-member" style="margin-top:2px;">Member</span>
          </div>
        </div>
      </header>