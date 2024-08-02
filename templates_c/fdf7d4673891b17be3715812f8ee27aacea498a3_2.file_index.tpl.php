<?php
/* Smarty version 5.3.1, created on 2024-08-02 15:39:11
  from 'file:views/patients/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66ace17f9f5cf4_13711063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdf7d4673891b17be3715812f8ee27aacea498a3' => 
    array (
      0 => 'views/patients/index.tpl',
      1 => 1722605949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/patients/delete.tpl' => 1,
  ),
))) {
function content_66ace17f9f5cf4_13711063 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\views\\patients';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<div class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Patients Details</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="?page=dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">Patients</li>
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
            <div>
            <div class="card">
            <div class="card-header">
              <div class='d-flex justify-content-end align-items-center'>
                  <a href="?page=ajouter_patients" class='btn btn-primary font-weight-bold'>Ajouter Patients</a>
              </div>
            </div>
        
        
            <!-- /.card-header -->
            <div class="card-body">
            <div id="message" class="alert" role="alert" style="display: none;"></div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Date</th>
                  <th>Phone Number</th>
                  <th>Doctor</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('patients'), 'patient');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('patient')->value) {
$foreach0DoElse = false;
?>
                  <tr>
                      <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('patient')['name']), ENT_QUOTES, 'UTF-8');?>
</td>
                      <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('patient')['date']), ENT_QUOTES, 'UTF-8');?>
</td>
                      <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('patient')['phone']), ENT_QUOTES, 'UTF-8');?>
</td>
                      <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('patient')['doctor_name']), ENT_QUOTES, 'UTF-8');?>
</td>
                      <td>
                        <a href="?page=edit_patients&id=<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('encryptId')($_smarty_tpl->getValue('patient')['id'])), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary btn-sm">Edit</a>
                      <!-- Delete Button -->
                      <button type="button" data-bs-toggle="modal" class="btn btn-danger btn-sm" data-bs-target="#deleteModal" data-item-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('encryptId')($_smarty_tpl->getValue('patient')['id'])), ENT_QUOTES, 'UTF-8');?>
">
                        Delete
                      </button>
                                        </td>
                  </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <?php $_smarty_tpl->renderSubTemplate("file:views/patients/delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


</section>
<!-- /.content -->
<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_109903480466ace17f9e9671_55675690', "js");
?>







<?php }
/* {block "js"} */
class Block_109903480466ace17f9e9671_55675690 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\views\\patients';
?>


  <!-- JavaScript to handle the deletion -->
<!-- JavaScript to handle the deletion -->
<?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $(document).ready(function() {
    // When the modal is shown
    $('#deleteModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var itemId = button.data('item-id'); // Extract item ID from data-* attributes

      // Set the hidden input field in the form
      $('#item_id').val(itemId);
    });

    $('#deleteForm').on('submit', function(event) {
      event.preventDefault(); // Prevent default form submission

      var form = $(this);
      var formData = form.serialize(); // Serialize form data
      console.log(formData);
      $.ajax({
        url: form.attr('action'),
        type: 'POST',
        data: formData,
        dataType: 'json', // Expecting JSON response
        success: function(response) {
          console.log(response);
          var messageDiv = $('#message');

          if (response.status === 'success') {
              messageDiv.removeClass('alert-danger').addClass('alert-success').text(response.message);
              form[0].reset(); // Reset form
              setTimeout(function() {
                  $('#deleteModal').modal('hide'); // Hide modal after success
                  window.location.href = '?page=patients'; //get New Data
              }, 2000); // Adjust timing if needed
          } else {
              messageDiv.removeClass('alert-success').addClass('alert-danger').text("Error: " + response.message);
          }

          messageDiv.show();
        },
        error: function(xhr, status, error) {
            // Handle errors
            var messageDiv = $('#message');
            messageDiv.removeClass('alert-success').addClass('alert-danger').text("An error occurred: " + xhr.responseText);
            messageDiv.show();
        }
      });
    });
  });
<?php echo '</script'; ?>
>


  

<?php
}
}
/* {/block "js"} */
}
