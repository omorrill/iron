Drupal.behaviors.cityboot = {
  attach: function (context, settings) {
    jQuery('#admin-menu').css('z-index', '9999');
    jQuery("ul.nav a.active").parent("li").addClass("active");
    jQuery("a.active").removeClass("active");
  }
};
