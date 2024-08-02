<?php
/* Smarty version 5.3.1, created on 2024-08-01 15:21:39
  from 'file:C:\Users\Wassim\Documents\Test\patient_management\templates\layouts\../partials/main-footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66ab8be3efa470_02245113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4827200bd84843b76f7ee580c330e6b8a9eed723' => 
    array (
      0 => 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\layouts\\../partials/main-footer.tpl',
      1 => 1722518462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66ab8be3efa470_02245113 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\partials';
?><!-- Scripts -->
<?php echo '<script'; ?>
 src="assets/adminlte/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/adminlte/dist/js/adminlte.min.js"><?php echo '</script'; ?>
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
<?php }
}
}
