@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Class Scheduling
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'classSchedulings.store']) !!}

                        @include('class_schedulings.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
