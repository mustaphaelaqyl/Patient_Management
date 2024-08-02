<?php
/* Smarty version 5.3.1, created on 2024-08-02 12:52:55
  from 'file:views/patients/ajouter.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66acba87b20dc7_07022442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b906658d32c5f4ba05e850718931a6bc70d88362' => 
    array (
      0 => 'views/patients/ajouter.tpl',
      1 => 1722595973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66acba87b20dc7_07022442 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\views\\patients';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<div class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Ajouter Patients</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="?page=dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="?page=patients">Patients</a></li>
                <li class="breadcrumb-item active">Ajouter</li>
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
                        <!-- /.card-header -->
            <div class="card-body">
                <div id="message" class="alert" role="alert" style="display: none;"></div>

                <form id="quickForm" action="includes/patients.php" method="post">
                    <div class='row mb-3'>
                        <div class='col-6'>
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder='Full Name ....'>
                           
                        </div>
                        <div class='col-6'>
                            <div class="form-group">
                                <label for='reservationdatetime'>Date and time:</label>
                                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                    <input type="text" name='date' class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='col-6'>
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder='Phone Number ....'>
                        </div>
                        <div class='col-6'>
                            <div class="form-group">
                                <label for='doctor'>Doctor</label>
                                <select class="form-control select2bs4" name="doctor" id="doctor" style="width: 100%;">
                                    <option value="" disabled selected>-- Select Doctor --</option>
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
                        </div>
                      
                        
                       
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
            <!-- /.card-body -->
          </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_55464667066acba87b161f6_09426053', 'js');
?>




<?php }
/* {block 'js'} */
class Block_55464667066acba87b161f6_09426053 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Wassim\\Documents\\Test\\patient_management\\templates\\views\\patients';
?>

    <!-- jQuery -->
    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- jquery-validation -->
    <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/jquery-validation/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../../assets/adminlte/plugins/jquery-validation/additional-methods.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    $(function () {
        // Initialize datetime picker
        $('#reservationdatetime').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss'
        });
    
        $.validator.setDefaults({
            submitHandler: function (form) {
                var formData = $(form).serialize();
    
                $.ajax({
                    url: $(form).attr('action'),
                    type: 'POST',
                    data: formData,
                    dataType: 'json', // Expecting JSON response
                    success: function (response) {
                        var messageDiv = $('#message');
    
                        if (response.status === 'success') {
                            messageDiv.removeClass('alert-danger').addClass('alert-success').text(response.message);
                            $(form)[0].reset();
                        } else {
                            messageDiv.removeClass('alert-success').addClass('alert-danger').text("Error: " + response.message);
                        }
    
                        messageDiv.show();
                    },
                    error: function (xhr, status, error) {
                        // Handle errors
                        var messageDiv = $('#message');
                        messageDiv.removeClass('alert-success').addClass('alert-danger').text("An error occurred: " + error);
                        messageDiv.show();
                    }
                });
            }
        });
    
        $('#quickForm').validate({
            rules: {
                name: { required: true },
                date: { required: true },
                phone: { required: true },
                doctor: { required: true }
            },
            messages: {
                name: "Please enter a Name",
                date: "Please enter a Date",
                phone: "Please enter a phone number",
                doctor: "Please select a doctor"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
    
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'js'} */
}
