@extends('layouts.dashboard')
@section('content')
    @push('css')
        <!-- Datatables css -->
        <link href="{{ asset('assets/css/vendor/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/vendor/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    @endpush


    {{-- <section class="content-header">
        <h1 class="pull-left">Class Representatives</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"
                href="{{ route('classRepresentatives.create') }}">Add New</a>
        </h1>
    </section> --}}
    <div class="tab-content">
        <div class="tab-pane show active" id="basic-datatable-preview">


            @include('flash::message')



            <div class="box-body">
                @include('class_representatives.table')
            </div>


        </div>
    </div>

    @push('scripts')

        <!-- Datatables js -->
        <script src="{{ asset('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/responsive.bootstrap4.min.js') }}"></script>

        <!-- Datatable Init js -->
        <script src="{{ asset('assets/js/pages/demo.datatable-init.js') }}"></script>
    @endpush
@endsection
