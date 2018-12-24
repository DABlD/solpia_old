@extends('layouts.app')
@section('content')

  <section class="content">
    <div class="row">

      <section class="col-lg-12">
        <div class="box box-info">
          <div class="box-header">
            <div class="pull-right">
              <a href="{{ route('applications.create') }}" class="btn btn-success" data-toggle="tooltip" title="Add Application" data-placement="left">
                <span class="fa fa-plus"></span>
              </a>
            </div>
          </div>
          <div class="box-body">
            <table id="applicationsTable">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Birthday</th>
                  <th>Gender</th>
                  <th>Nationality</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
                @foreach($applications as $application)
                  <tr>
                    <td>{{ $application->fname }}</td>
                    <td>{{ $application->lname }}</td>
                    <td>{{ $application->birthday->format('F j, Y') }}</td>
                    <td>{{ $application->gender }}</td>
                    <td>{{ $application->nationality }}</td>
                    <td>
                      <a class="btn btn-primary">
                        <span class="fa fa-search"></span>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </section>

    </div>
  </section>
@endsection

@push('after-styles')
  <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
@endpush

@push('after-scripts')
  <script src="{{ asset('js/datatables.js') }}"></script>

  <script>
    $('#applicationsTable').DataTable();
  </script>
@endpush
