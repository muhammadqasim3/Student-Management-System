<!-- Academic Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('academic_year', 'Academic Year:') !!}
    {!! Form::text('academic_year', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('academics.index') }}" class="btn btn-default">Cancel</a>
</div>
