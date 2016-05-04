<nav id="mainNav" class="navbar navbar-default">
  <?php if ($logo): ?>
    <a class="logo navbar-btn col-sm-1" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </a>
  <?php endif; ?>

  <div class="spacer"><div>
  <?php if (!empty($site_name)): ?>
    <a class="name navbar-brand col-sm-3" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
  <?php endif; ?>
  <div class="col-sm-6">
    <?php if (!empty($page['navigation'])): ?>
      <?php print render($page['navigation']); ?>
    <?php endif; ?>
  </div>
</nav>

<header id="header" class="hero-image" role="banner">
  <div class="container">
    <?php if (!empty($page['header'])): ?>
      <?php print render($page['header']); ?>
    <?php endif; ?>
  </div>
</header>

<div class="container main-content spacer">
  <div class="row">
    <aside>
      <div class="col-lg-2 sidebar_first">
        <?php if (!empty($page['sidebar_first'])): ?>
          <?php print render($page['sidebar_first']); ?>
        <?php endif; ?>
      </div>
    </aside>
    <article>
      <div class="col-lg-8 content">
        <?php if (!empty($page['content'])): ?>

          <?php if (!empty($page['highlighted'])): ?>
            <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
          <?php endif; ?>
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if (!empty($title)): ?>
            <h1 class="page-header"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print $messages; ?>
          <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>
          <?php if (!empty($page['help'])): ?>
            <?php print render($page['help']); ?>
          <?php endif; ?>
          <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>

          <?php print render($page['content']); ?>
        <?php endif; ?>
      </div>
    </article>
    <aside>
      <div class="col-lg-2 sidebar_second">
        <?php if (!empty($page['sidebar_second'])): ?>
          <?php print render($page['sidebar_second']); ?>
        <?php endif; ?>
      </div>
    </aside>
  </div><!-- end row -->
</div>
<footer>
</footer>
