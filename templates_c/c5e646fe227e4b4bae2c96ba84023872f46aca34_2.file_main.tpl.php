<?php
/* Smarty version 5.3.1, created on 2024-08-01 14:19:27
  from 'file:../patient_management/templates/layouts/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66ab7d4f938550_60011551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5e646fe227e4b4bae2c96ba84023872f46aca34' => 
    array (
      0 => '../patient_management/templates/layouts/main.tpl',
      1 => 1722514764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/header.tpl' => 1,
    'file:../partials/sidebar.tpl' => 1,
    'file:../partials/footer.tpl' => 1,
  ),
))) {
function content_66ab7d4f938550_60011551 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\layouts';
?><!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
</title>
    <link rel="stylesheet" href="assets/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="assets/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php $_smarty_tpl->renderSubTemplate('file:../partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->renderSubTemplate('file:../partials/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('dashboard'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <!-- Content Header (Page header) -->
           
        </div>
        <!-- /.content-wrapper -->

        <?php $_smarty_tpl->renderSubTemplate('file:../partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="assets/adminlte/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/adminlte/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
