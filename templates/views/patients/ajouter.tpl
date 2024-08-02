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
            {* <div class="card-header">
                <h4>Ajouter Patients</h4>
            </div> *}
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
                                    {foreach from=$doctors item=doctor}
                                        <option value="{$doctor.id}">{$doctor.name}</option>
                                    {/foreach}
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

{block name='js'}
    <!-- jQuery -->
    <!-- Scripts -->
    <script src="../../../assets/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- jquery-validation -->
    <script src="../../../assets/adminlte/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../../assets/adminlte/plugins/jquery-validation/additional-methods.min.js"></script>
    <script>
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
    
</script>

{/block}



