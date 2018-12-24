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

          <form method="post" action="{{ route('applications.store') }}" id="applicationForm">
            @csrf
            <div class="box-body">
              <ul class="nav nav-tabs">
                <li class='no-pointer active' data-step="1"><a data-toggle="tab" href="#step1">Step 1</a></li>
                <li class='no-pointer' data-step="2"><a data-toggle="tab" href="#step2">Step 2</a></li>
                <li class='no-pointer' data-step="3"><a data-toggle="tab" href="#step3">Step 3</a></li>
              </ul>

              <div class="tab-content">
                <div id="step1" class="tab-pane fade in active">
                  <h3><b>Personal information</b></h3>
                  @include('admin.applications.forms.personal_info')
                </div>
                <div id="step2" class="tab-pane fade">
                  <h3>Documents</h3>
                  @include('admin.applications.forms.documents')
                </div>
                <div id="step3" class="tab-pane fade">
                  <h3>Experiences</h3>
                  @include('admin.applications.forms.experiences')
                </div>
              </div>
            </div>
          </form>

        </div>
      </section>

    </div>
  </section>
@endsection

@push('after-styles')
  <link rel="stylesheet" href="{{ asset('css/flatpickr.css') }}">
  <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
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

@push('before-scripts')
  <script src="{{ asset('js/flatpickr.js') }}"></script>
  <script src="{{ asset('js/numeral.js') }}"></script>
  <script src="{{ asset('js/moment.js') }}"></script>
  <script src="{{ asset('js/select2.min.js') }}"></script>

  <script>
    $('.next').on('click', () => {
      let activeTab = $('.no-pointer.active');
      activeTab.toggleClass('active');
      $('[data-step=' + (activeTab.data('step') + 1) + '] a').click();
    });

    $('.prev').on('click', () => {
      let activeTab = $('.no-pointer.active');
      activeTab.toggleClass('active');
      $('[data-step=' + (activeTab.data('step') - 1) + '] a').click();
    });

    $('[data-step=3] a').on('click', () => {
      if(!$('[name="with_experience"]').is(':checked')){
      
      }
    })

    $('.submit').on('click', () => {
      $('#applicationForm').submit();
    });
  </script>
@endpush