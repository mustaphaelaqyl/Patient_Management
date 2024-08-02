<?php
/* Smarty version 5.3.1, created on 2024-08-01 17:51:28
  from 'file:errors/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66abaf007c97a6_25324191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9a455471c499391f65d14a58331ba0b0f5a53cd' => 
    array (
      0 => 'errors/index.tpl',
      1 => 1722527244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66abaf007c97a6_25324191 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\views\\errors';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Not Found</title>
    <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="alert alert-danger" role="alert">
                        The page you requested was not found.
                    </div>
                    <a href="index.php?page=dashboard" class="btn btn-primary">Go to Dashboard</a>
                </div>
            </section>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="adminlte/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="adminlte/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
