<hr>

<div class="row">
  <div class="form-group col-md-3">
    <label for="position">Position</label>
    <input type="text" class="form-control" name="position" placeholder="Enter Position">
  </div>
  <div class="form-group col-md-4">
    <label for="agency">Agency</label>
    <input type="text" class="form-control" name="agency" placeholder="Enter Agency">
  </div>
  <div class="form-group col-md-4">
    <label for="trade_route">Trade Route</label>
    <input type="text" class="form-control" name="trade_route" placeholder="Enter Trade Route">
  </div>
</div>

<div class="row">
  <div class="form-group col-md-3">
    <label for="vessel">Vessel</label>
    <input type="text" class="form-control" name="vessel" placeholder="Enter Vessel">
  </div>
  <div class="form-group col-md-3">
    <label for="vessel_type">Vessel Type</label>
    <input type="text" class="form-control" name="vessel_type" placeholder="Enter Vessel Type">
  </div>
  <div class="form-group col-md-3">
    <label for="sign_on">Sign On Date</label>
    <input type="text" class="form-control" name="sign_on" placeholder="Select Sign On Date">
  </div>
  <div class="form-group col-md-3">
    <label for="sign_off">Sign Off Date</label>
    <input type="text" class="form-control" name="sign_off" placeholder="Select Sign Off Date">
  </div>
</div>

<div class="box-footer clearfix">
  <a class="btn btn-danger prev">Back
    <i class="fa fa-arrow-circle-left"></i>
  </a>

  <a class="btn btn-success pull-right submit">Submit</a>
</div>

@push('after-styles')
  <style>

  </style>
@endpush

@push('after-scripts')
  <script>
    $('[name="sign_on"], [name="sign_off"]').flatpickr({
        altInput: true,
        altFormat: 'F j, Y',
        dateFormat: 'Y-m-d',
        maxDate: moment().format('YYYY-MM-DD')
    });
  </script>
@endpush