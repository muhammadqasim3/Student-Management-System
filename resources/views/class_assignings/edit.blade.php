@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Class Assigning
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classAssigning, ['route' => ['classAssignings.update', $classAssigning->id], 'method' => 'patch']) !!}

                        @include('class_assignings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection