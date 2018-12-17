<!-- Header template of the website -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test theme</title>
    <?php wp_head(); ?>
    <p>Header function get_header() works !</p>
  </head>
  <body <?php body_class(); ?> >
    <!-- we do not have to close body and html,
      that will be closed in footer template
    -->
