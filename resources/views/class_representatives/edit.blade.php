@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Class Representative
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classRepresentative, ['route' => ['classRepresentatives.update', $classRepresentative->id], 'method' => 'patch']) !!}

                        @include('class_representatives.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
