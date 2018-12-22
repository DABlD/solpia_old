@extends('layouts.app')
@section('content')

  <section class="content">
    <div class="row">

      <section class="col-lg-12">
        <div class="box box-info">
          <div class="box-header">
            <i class="fa fa-envelope"></i>
            <h3 class="box-title">Quick Email</h3>
          </div>
          <div class="box-body">

            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
              <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
              <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            </ul>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <h3>HOME</h3>
                <p>Some content.</p>
              </div>
              <div id="menu1" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>Some content in menu 1.</p>
              </div>
              <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
              </div>
            </div>
            
          </div>
          <div class="box-footer clearfix">
            <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
              <i class="fa fa-arrow-circle-right"></i></button>
          </div>
        </div>
      </section>

    </div>
  </section>
@endsection
