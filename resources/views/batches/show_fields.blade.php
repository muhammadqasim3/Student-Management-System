<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $batch->name }}</p>
</div>
<!-- Date Field -->
<div class="form-group">
    {!! Form::label('year', 'Year:') !!}
    <p>{{ date('Y', strtotime($batch->year)) }}</p>
</div>

