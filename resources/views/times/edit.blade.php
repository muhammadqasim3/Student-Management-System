@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Time
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($time, ['route' => ['times.update', $time->id], 'method' => 'patch']) !!}

                        @include('times.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection