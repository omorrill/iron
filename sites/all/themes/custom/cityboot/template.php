<?php
/**
* Add unique class (mlid) to all menu items.
*/
function cityboot_menu_tree__main_menu($variables) {
  return '<div class="container"><ul class="nav navbar-nav navbar-right">' . $variables['tree'] . '</ul></div>';
}
