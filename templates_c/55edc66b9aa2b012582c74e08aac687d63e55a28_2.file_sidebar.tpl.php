<?php
/* Smarty version 5.3.1, created on 2024-08-01 14:22:17
  from 'file:C:\Users\Wassim\Documents\Test\patient_management\templates\layouts\../partials/sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66ab7df98bc152_41390740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55edc66b9aa2b012582c74e08aac687d63e55a28' => 
    array (
      0 => 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\layouts\\../partials/sidebar.tpl',
      1 => 1722513731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66ab7df98bc152_41390740 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\partials';
?><aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link flex justify-content-center text-center py-5">
                <span class="brand-text font-weight-bold text-white">MediCore Hospital</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
            <li class="nav-item my-1">
                <a href="?page=dashboard" class="nav-link font-weight-bold py-3 text-white">
                    <i class="nav-icon fas fa-tachometer-alt mr-2"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item my-1">
                <a href="?page=patients" class="nav-link font-weight-bold py-3 text-white">
                    <i class="nav-icon fas fa-user mr-2"></i>
                    <p>Patient Details</p>
                </a>
            </li>
                <!-- Other items -->
            </ul>
        </nav>
    </div>
</aside>
<?php }
}