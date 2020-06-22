<!-- Academic Year Field -->
<div class="form-group">
    {!! Form::label('academic_year', 'Academic Year:') !!}
    <p>{{ date('Y', strtotime($academic->academic_year)) }}</p>
</div>

