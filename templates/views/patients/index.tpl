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
                {foreach from=$patients item=patient}
                  <tr>
                      <td>{$patient.name}</td>
                      <td>{$patient.date}</td>
                      <td>{$patient.phone}</td>
                      <td>{$patient.doctor_name}</td>
                      <td>
                        <a href="?page=edit_patients&id={$patient.id|encryptId}" class="btn btn-primary btn-sm">Edit</a>
                      <!-- Delete Button -->
                      <button type="button" data-bs-toggle="modal" class="btn btn-danger btn-sm" data-bs-target="#deleteModal" data-item-id="{$patient.id|encryptId}">
                        Delete
                      </button>
                      {* <a href="deplete_patient.php?id={$patient.id}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this patient?');">Delete</a> *}
                  </td>
                  </tr>
                {/foreach}
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    {include file="views/patients/delete.tpl"}


</section>
<!-- /.content -->
{block name="js"}

  <!-- JavaScript to handle the deletion -->
<!-- JavaScript to handle the deletion -->
<script src="../../../assets/adminlte/plugins/jquery/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script>
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
</script>


  

{/block}


{* {extends file='../../layouts/main.tpl'} *}




