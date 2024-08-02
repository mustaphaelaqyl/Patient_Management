<?php
/* Smarty version 5.3.1, created on 2024-08-01 20:57:29
  from 'file:patients/edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66abda99cc36e5_71820179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b13468997a9877908b20bf2c49dccb75b1dc7d0' => 
    array (
      0 => 'patients/edit.tpl',
      1 => 1722538637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66abda99cc36e5_71820179 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\views\\patients';
?><!-- Edit Patient Modal -->
<div class="modal fade" id="editPatientModal" tabindex="-1" aria-labelledby="editPatientModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPatientModalLabel">Edit Patient</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editPatientForm">
          <input type="hidden" id="patientId" name="id">
          <div class="mb-3">
            <label for="editName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="editName" name="name">
          </div>
          <div class="mb-3">
            <label for="editDate" class="form-label">Date and Time</label>
            <input type="text" class="form-control datetimepicker-input" id="editDate" name="date">
          </div>
          <div class="mb-3">
            <label for="editPhone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="editPhone" name="phone">
          </div>
          <div class="mb-3">
            <label for="editDoctor" class="form-label">Doctor</label>
            <select class="form-control select2" id="editDoctor" name="doctor">
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('doctors'), 'doctor');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('doctor')->value) {
$foreach0DoElse = false;
?>
                <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('doctor')['id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('doctor')['name']), ENT_QUOTES, 'UTF-8');?>
</option>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php }
}
