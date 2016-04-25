<header class="container-fluid">
  <div class="row">
    <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left col-sm-2 col-md-2 col-lg-2" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
    <nav class="col-sm-4 col-md-6 col-lg-8">
      <?php print render($page['navigation']); ?>
    </nav>
    <div class="col-sm-2 col-md-2 col-lg-2">
      <?php print render($page['header']); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-2 col-lg-12">
      <?php print render($page['search']); ?>
    </div>
  </div>
</header>

<div id="hero-image" class="container-fluid">
  <div class="row">
    <div class="hero-background">
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">

      <aside class="col-md-2">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->

      <section class="col-md-8">
        <?php print render($page['content']); ?>
      </section> <!-- Main content section -->

      <aside class="col-md-2">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    </div>
  </div>
</div>

<footer class="container-fluid">
  <div class="row">
    <div class="col-sm-6 col-md-3 col-lg-3">
      <?php print render($page['footer_left']); ?>
    </div>
    <div class="col-sm-6 col-md-3 col-lg-3">
      <?php print render($page['footer_mid_left']); ?>
    </div>
    <div class="col-sm-6 col-md-3 col-lg-3">
      <?php print render($page['footer_mid_right']); ?>
    </div>
    <div class="col-sm-6 col-md-3 col-lg-3">
      <?php print render($page['footer_right']); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <?php print render($page['footer']); ?>
    </div>
  </div>
</footer>
