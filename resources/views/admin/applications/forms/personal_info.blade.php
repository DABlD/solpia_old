<hr>

<div class="row">
  <div class="form-group col-md-4">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
  </div>
  <div class="form-group col-md-4">
    <label for="mname">Middle Name</label>
    <input type="text" class="form-control" name="mname" placeholder="Enter Middle Name">
  </div>
  <div class="form-group col-md-4">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
  </div>
</div>

<div class="row">
  <div class="form-group col-md-4">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email">
  </div>
  <div class="form-group col-md-4">
    <label for="contact">Contact Number</label>
    <input type="text" class="form-control" name="contact" placeholder="Enter Contact Number">
  </div>
</div>

<div class="row">

  <div class="form-group col-md-2">
    <label for="birthday">Birthday</label>
    <input type="email" class="form-control" name="birthday" placeholder="Select Birthday">
  </div>

  <div class="form-group col-md-2">
    <label for="gender">Gender</label>

    <br>
    <label class="radio-inline">
      <input type="radio" name="gender" value="Male" checked> Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender" value="Female"> Female
    </label>
  </div>
</div>

<div class="row">
  <div class="form-group col-md-4">
    <label for="nationality">Nationality</label>
    <input type="text" class="form-control" name="nationality" placeholder="Enter Nationality">
  </div>
</div>

<div class="row">
  <div class="form-group col-md-6">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter Address">
  </div>
</div>

<h3><b>Employment Details</b></h3>
<hr>

<div class="row">
  <div class="form-group col-md-6">
    <label for="expected_salary">Expected Salary</label>
    <div class="input-group">
      <span class="input-group-addon"><i>&#8369;</i></span>
      <input type="text" min="0" pattern="/^[0-9,.]*$/" class="form-control" id="display_salary" placeholder="Enter Expected Salary">
      <input type="hidden" name="expected_salary">
    </div>
  </div>
</div>

<div class="row">
  <div class="form-group col-md-6">
    <label for="desired_position">Desired Position(Max:3)</label>
    <select name="desired_position[]" multiple class="form-control">
      <option value=""></option>
      <option value="Position 1">Position 1</option>
      <option value="Position 2">Position 2</option>
      <option value="Position 3">Position 3</option>
      <option value="Position 4">Position 4</option>
      <option value="Position 5">Position 5</option>
    </select>
  </div>
</div>

<div class="box-footer clearfix">
  <a class="pull-right btn btn-success next">Next
    <i class="fa fa-arrow-circle-right"></i>
  </a>
</div>

@push('after-styles')
  <style>
    .select2-selection__choice{
      color: black !important;
    }
  </style>
@endpush

@push('after-scripts')
  <script>
    $('[name="birthday"]').flatpickr({
        altInput: true,
        altFormat: 'F j, Y',
        dateFormat: 'Y-m-d',
        maxDate: moment().format('YYYY-MM-DD')
    });

    $('#display_salary').on('input', input => {
      input.target.value = numeral(input.target.value).format('0,0');
      $('[name="expected_salary"]').val(numeral(input.target.value).format('0.00'));
    });

    $('[name="desired_position[]"]').select2({
      tags: true,
      placeholder: 'Select Desired Position',
      maximumSelectionLength: 3
    })
  </script>
@endpush