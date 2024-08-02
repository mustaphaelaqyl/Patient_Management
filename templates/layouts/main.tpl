<!DOCTYPE html>
<html>
<head>
    <title>{$name}</title>
    <link rel="stylesheet" href="../../../assets/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


{if  isset($includeScripts) && $includeScripts}
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../../assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

{/if}

{if isset($includeScriptsDate) && $includeScriptsDate}
    {* <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> *}
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
{/if}
    <link rel="stylesheet" href="../../../assets/css/style.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        {include file='../partials/header.tpl'}
        {include file='../partials/sidebar.tpl'}

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            {include file=$dashboard}
            <!-- Content Header (Page header) -->
           
        </div>
        <!-- /.content-wrapper -->

        {include file='../partials/footer.tpl'}
    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    <script src="../../../assets/adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="../../../assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/adminlte/dist/js/adminlte.min.js"></script>
    <!-- jquery-validation -->
    <script src="../../../assets/adminlte/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../../assets/adminlte/plugins/jquery-validation/additional-methods.min.js"></script>
    {*  *}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {if isset($includeScripts) && $includeScripts}
        <!-- DataTables  & Plugins -->
        {* <script src="a"></script> *}
        <script src="../../../assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../../assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../../assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../../../assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="../../../assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../../../assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="../../../assets/adminlte/plugins/jszip/jszip.min.js"></script>
        <script src="../../../assets/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="../../../assets/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="../../../assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="../../../assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="../../../assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        {* <script src="../../../assets/adminlte/dist/js/demo.js"></script> *}
        <!-- Page specific script -->
        <script>
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
        </script>
    {/if}
    {if isset($includeScriptsDate) && $includeScriptsDate }
        
        <script src="../../../assets/adminlte/plugins/moment/moment.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../../../assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Select2 -->
        <script src="../../../assets/adminlte/plugins/select2/js/select2.full.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script>
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
        </script>
    {/if}
{block name='js'}{/block}

</body>
</html>
