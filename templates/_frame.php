<!DOCTYPE html>
<html lang="tw">
  <head>
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" />

    <title><?php echo title ($title);?></title>
    <?php echo load_meta ($title);?>

    <?php echo load_css_js ('css', array ('https://fonts.googleapis.com/css?family=Roboto:400,300,700|Comfortaa:400,300,700'));?>
    <?php echo load_css_js ('js', array ('jrit'));?>

  </head>
  <body lang="zh-tw">

    <?php echo $header; ?>

    <div id='_c'>
      <div>
        <?php echo $left;?>
        <div>
          <?php echo $tab;?>
          <div class='_c'><?php echo $content;?></div>
          <?php echo $msg;?>
        </div>
        <span></span>
      </div>
    </div>

    <?php echo $footer;?>

    <div id='fb-root'></div>

  </body>
</html>
