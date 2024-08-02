<?php
/* Smarty version 5.3.1, created on 2024-08-01 15:23:37
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66ab8c5941f741_29308407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aab893296de67921c570164f3008247f2332dd2' => 
    array (
      0 => 'main.tpl',
      1 => 1722518614,
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
function content_66ab8c5941f741_29308407 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\layouts';
?><!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
</title>
    <link rel="stylesheet" href="../../../assets/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<?php if ((null !== ($_smarty_tpl->getValue('includeScripts') ?? null)) && $_smarty_tpl->getValue('includeScripts')) {?>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href=".../../../assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../assets/adminlte/dist/css/adminlte.min.css">
<?php }?>
    <link rel="stylesheet" href="../../../assets/css/style.css">
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
 src="../../../assets/adminlte/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../../assets/adminlte/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>

    
    <?php if ((null !== ($_smarty_tpl->getValue('includeScripts') ?? null)) && $_smarty_tpl->getValue('includeScripts')) {?>
        <!-- DataTables  & Plugins -->
                <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/datatables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/jszip/jszip.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/pdfmake/pdfmake.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/pdfmake/vfs_fonts.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"><?php echo '</script'; ?>
>
        <!-- AdminLTE for demo purposes -->
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/dist/js/demo.js"><?php echo '</script'; ?>
>
        <!-- Page specific script -->
        <?php echo '<script'; ?>
>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        });
        <?php echo '</script'; ?>
>
    <?php }?>

</body>
</html>
<?php }
}
