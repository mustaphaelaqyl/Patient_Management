<?php
/* Smarty version 5.3.1, created on 2024-08-01 18:42:45
  from 'file:C:\Users\Wassim\Documents\Test\patient_management\templates\layouts\../partials/sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66abbb052cef40_74917465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9981afeeec4bce712e282ed513f5f337b36652b' => 
    array (
      0 => 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\layouts\\../partials/sidebar.tpl',
      1 => 1722530444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66abbb052cef40_74917465 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\partials';
?><aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link flex justify-content-center text-center py-5">
                <span class="brand-text font-weight-bold text-white">MediCore Hospital</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('navigationItems'), 'item', false, 'page');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('page')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                <li class="nav-item my-1">
                    <a href="?page=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page')), ENT_QUOTES, 'UTF-8');?>
" class="nav-link font-weight-bold py-3 text-white<?php if ($_smarty_tpl->getValue('currentPage') == $_smarty_tpl->getValue('page')) {?> active<?php }?>">
                        <i class="nav-icon <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['icon']), ENT_QUOTES, 'UTF-8');?>
 mr-2"></i>
                        <p><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['label']), ENT_QUOTES, 'UTF-8');?>
</p>
                    </a>
                </li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <!-- Other items -->
            </ul>
        </nav>
    </div>
</aside>
<?php }
}
