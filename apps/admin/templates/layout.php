<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
      <title>TwinTog</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
  <?php include_partial('global/header', array('active' => $sf_context->getModuleName())); ?>
  <table cellpadding="0" cellspacing="0" width="100%" >
      <tr>
          <td>

              <?php echo $sf_content ?>
          </td>
      </tr>
  </table>
  </body>
</html>
