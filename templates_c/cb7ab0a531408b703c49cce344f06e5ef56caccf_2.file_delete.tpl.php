<?php
/* Smarty version 5.3.1, created on 2024-08-02 15:27:22
  from 'file:views/patients/delete.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66acdeba9f3f39_69806141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb7ab0a531408b703c49cce344f06e5ef56caccf' => 
    array (
      0 => 'views/patients/delete.tpl',
      1 => 1722605232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66acdeba9f3f39_69806141 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\views\\patients';
?><!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this patient?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <form id="deleteForm" method="post" action="includes/deletePatient.php">
            <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="item_id" id="item_id">
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php }
}
