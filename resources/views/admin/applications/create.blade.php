@extends('layouts.app')
@section('content')

  <section class="content">
    <div class="row">

      <section class="col-lg-12">
        <div class="box box-info">
          <div class="box-header">
            <i class="fa fa-envelope"></i>
            <h3 class="box-title">Quick Email</h3>

            <div class="pull-right">
              <a class="btn btn-success" data-toggle="tooltip" title="Add Application" data-placement="left">
                <span class="fa fa-plus"></span>
              </a>
            </div>
          </div>

          <form>
            <div class="box-body">
              <ul class="nav nav-tabs">
                <li class="no-pointer active"><a data-toggle="tab" href="#step1">Step 1</a></li>
                <li class="no-pointer"><a data-toggle="tab" href="#step2">Step 2</a></li>
                <li class="no-pointer"><a data-toggle="tab" href="#step3">Step 3</a></li>
              </ul>

              <div class="tab-content">
                <div id="step1" class="tab-pane fade in active">
                  <h3><b>Personal information</b></h3>
                  @include('admin.applications.forms.personal_info')
                </div>
                <div id="step2" class="tab-pane fade">
                  <h3>Menu 1</h3>
                  <p>Some content in menu 1.</p>
                </div>
                <div id="step3" class="tab-pane fade">
                  <h3>Menu 2</h3>
                  <p>Some content in menu 2.</p>
                </div>
              </div>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </form>

        </div>
      </section>

    </div>
  </section>
@endsection

@push('after-styles')
  <style>
    .no-pointer{
      pointer-events: none;
    }

    .tab-content{
      margin-left: 3%;
      margin-right: 3%;
    }
  </style>
@endpush

@push('after-scripts')
  <script src="{{ asset('js/flatpickr.js') }}"></script>
@endpush