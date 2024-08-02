<?php
/* Smarty version 5.3.1, created on 2024-08-01 13:52:11
  from 'file:dashboard/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66ab76ebd1cd00_22135891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5be8f25326786787644ad91ebf85558a2b18dd4' => 
    array (
      0 => 'dashboard/index.tpl',
      1 => 1722513129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66ab76ebd1cd00_22135891 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\dashboard';
?><div class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Healthcare Management System</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="content">
            <h2>Welcome, <?php echo htmlspecialchars((string) (htmlspecialchars((string)$_smarty_tpl->getValue('name'), ENT_QUOTES, 'UTF-8', true)), ENT_QUOTES, 'UTF-8');?>
!</h2>
            <p>This is the main content area.</p>
        </div>

    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php }
}
