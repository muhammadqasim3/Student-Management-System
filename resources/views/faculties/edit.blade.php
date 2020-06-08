@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Faculty
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($faculty, ['route' => ['faculties.update', $faculty->id], 'method' => 'patch']) !!}

                        @include('faculties.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection