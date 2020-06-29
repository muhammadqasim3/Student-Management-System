<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $semester->name }}</p>
</div>

<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Code:') !!}
    <p>{{ $semester->code }}</p>
</div>

<!-- Duration Field -->
<div class="form-group">
    {!! Form::label('duration', 'Duration:') !!}
    <p>{{ $semester->duration }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $semester->description }}</p>
</div>

