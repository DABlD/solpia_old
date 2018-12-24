<hr>

<div class="row">
  <div class="form-group col-md-4">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
  </div>
  <div class="form-group col-md-4">
    <label for="mname">Middle Name</label>
    <input type="text" class="form-control" id="mname" placeholder="Enter Middle Name">
  </div>
  <div class="form-group col-md-4">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
  </div>
</div>

<div class="row">
  <div class="form-group col-md-6">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email">
  </div>
</div>

<div class="row">

  <div class="form-group col-md-4">
    <label for="birthday">Birthday</label>
    <input type="email" class="form-control" id="birthday" placeholder="Select Birthday">
  </div>

  <div class="form-group col-md-2">
    <label for="gender">Gender</label>

    <br>
    <label class="radio-inline">
      <input type="radio" name="gender" value="Male"> Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender" value="Female"> Female
    </label>
  </div>
</div>

@push('after-scripts')

@endpush