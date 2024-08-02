<?php
/* Smarty version 5.3.1, created on 2024-08-02 15:35:47
  from 'file:layouts/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66ace0b3000949_98439641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eae25bea51de7591b62259c91a2d5885bef31c1a' => 
    array (
      0 => 'layouts/main.tpl',
      1 => 1722605746,
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
function content_66ace0b3000949_98439641 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\layouts';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
</title>
    <link rel="stylesheet" href="../../../assets/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<?php if ((null !== ($_smarty_tpl->getValue('includeScripts') ?? null)) && $_smarty_tpl->getValue('includeScripts')) {?>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<?php }?>

<?php if ((null !== ($_smarty_tpl->getValue('includeScriptsDate') ?? null)) && $_smarty_tpl->getValue('includeScriptsDate')) {?>
    <!-- daterange picker -->
<link rel="stylesheet" href="../../../assets/adminlte/plugins/daterangepicker/daterangepicker.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="../../../assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="../../../assets/adminlte/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="../../../assets/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="../../../assets/adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
<!-- BS Stepper -->
<link rel="stylesheet" href="../../../assets/adminlte/plugins/bs-stepper/css/bs-stepper.min.css">
<!-- dropzonejs -->
<link rel="stylesheet" href="../../../assets/adminlte/plugins/dropzone/min/dropzone.min.css">

 <!-- Select2 -->
 <link rel="stylesheet" href="../../../assets/adminlte/plugins/select2/css/select2.min.css">
 <link rel="stylesheet" href="../../../assets/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
 <!-- Bootstrap4 Duallistbox -->
 <link rel="stylesheet" href="../../../assets/adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
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
    <!-- jquery-validation -->
    <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/jquery-validation/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/jquery-validation/additional-methods.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"><?php echo '</script'; ?>
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
    <?php if ((null !== ($_smarty_tpl->getValue('includeScriptsDate') ?? null)) && $_smarty_tpl->getValue('includeScriptsDate')) {?>
        
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/moment/moment.min.js"><?php echo '</script'; ?>
>
        <!-- Tempusdominus Bootstrap 4 -->
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"><?php echo '</script'; ?>
>
        <!-- Select2 -->
        <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/select2/js/select2.full.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
        $(function () {

           //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
            theme: 'bootstrap4'
            })
            $('#reservationdatetime').datetimepicker({
                format: 'MM/DD/YYYY HH:mm' // Ensure this matches the format used in PHP
            });
        })
        <?php echo '</script'; ?>
>
    <?php }
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_180463521866ace0b2f34107_06267251', 'js');
?>


</body>
</html>
<?php }
/* {block 'js'} */
class Block_180463521866ace0b2f34107_06267251 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\layouts';
}
}
/* {/block 'js'} */
}
