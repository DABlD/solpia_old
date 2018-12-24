<hr>

<div class="row">
  <div class="form-group col-md-4">
    <label for="passport_number">Passport Number</label>
    <input type="text" class="form-control" name="passport_number" placeholder="Enter Passport Number">
  </div>
  <div class="form-group col-md-4">
    <label for="passport_expiry">Expiry Date</label>
    <input type="text" class="form-control" name="passport_expiry" placeholder="Select Expiry Date">
  </div>
</div>

<div class="row">
  <div class="form-group col-md-4">
    <label for="seamans_book_number">Seamans Book Number</label>
    <input type="text" class="form-control" name="seamans_book_number" placeholder="Enter Seamans Book Number">
  </div>
  <div class="form-group col-md-4">
    <label for="seamans_book_expiry">Expiry Date</label>
    <input type="text" class="form-control" name="seamans_book_expiry" placeholder="Select Expiry Date">
  </div>
</div>

<div class="row">
  <div class="form-group col-md-4">
    <label for="us_visa_number">US Visa Number</label>
    <input type="text" class="form-control" name="us_visa_number" placeholder="Enter US Visa Number">
  </div>
  <div class="form-group col-md-4">
    <label for="us_visa_expiry">Expiry Date</label>
    <input type="text" class="form-control" name="us_visa_expiry" placeholder="Select Expiry Date">
  </div>
</div>

<div class="row">
  <div class="form-group col-md-4">
    <label for="schengen_visa_number">Schengen Visa Number</label>
    <input type="text" class="form-control" name="schengen_visa_number" placeholder="Enter Schengen Visa Number">
  </div>
  <div class="form-group col-md-4">
    <label for="schengen_visa_expiry">Expiry Date</label>
    <input type="text" class="form-control" name="schengen_visa_expiry" placeholder="Select Expiry Date">
  </div>
</div>

<div class="row">
  <div class="form-group col-md-12">
    <label for="coc_details">COC Details</label>
    <textarea name="coc_details" rows="4" class="form-control"></textarea>
  </div>
</div>

<div class="row">
  <div class="form-group col-md-12">
    <label for="training_certificate_details">Training Certificate Details</label>
    <textarea name="training_certificate_details" rows="4" class="form-control"></textarea>
  </div>
</div>

<div class="row">
  <div class="form-group col-md-12">
    <label for="other_info">Other Relevant Info(Optional)</label>
    <textarea name="other_info" rows="4" class="form-control"></textarea>
  </div>
</div>

<input type="checkbox" id="fresh_grad">
<label for="fresh_grad">Fresh Grad</label>
<input type="hidden" name="fresh_grad" value="0">

<br>

<input type="checkbox" id="with_experience">
<label for="with_experience">With Sea Service Experience</label>
<input type="hidden" name="with_experience" value="0">

<div class="box-footer clearfix">
  <a class="btn btn-danger prev">Back
    <i class="fa fa-arrow-circle-left"></i>
  </a>

  <a class="pull-right btn btn-success next">Next
    <i class="fa fa-arrow-circle-right"></i>
  </a>
</div>

@push('after-styles')
  <style>
    textarea.form-control{
      border-radius: 15px;
      resize: none;
    }
  </style>
@endpush

@push('after-scripts')
  <script>
    $('[name="passport_expiry"], [name="seamans_book_expiry"], [name="us_visa_expiry"], [name="schengen_visa_expiry"]').flatpickr({
        altInput: true,
        altFormat: 'F j, Y',
        dateFormat: 'Y-m-d',
        minDate: moment().format('YYYY-MM-DD')
    });

    $('#fresh_grad').on('click', checkbox => {
      checkbox = $(checkbox.target);
      hidden = $('[name=fresh_grad]');
      if(checkbox.is(':checked')){
        hidden.val(1);
      }
      else{
        hidden.val(0);
      }
    });
    $('#with_experience').on('click', checkbox => {
      checkbox = $(checkbox.target);
      hidden = $('[name=with_experience]');
      if(checkbox.is(':checked')){
        hidden.val(1);
      }
      else{
        hidden.val(0);
      }
    });
  </script>
@endpush