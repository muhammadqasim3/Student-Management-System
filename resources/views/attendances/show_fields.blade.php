<!-- Student Id Field -->
<div class="form-group">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $attendance->student_id }}</p>
</div>

<!-- Class Id Field -->
<div class="form-group">
    {!! Form::label('class_id', 'Class Id:') !!}
    <p>{{ $attendance->class_id }}</p>
</div>

<!-- Subject Id Field -->
<div class="form-group">
    {!! Form::label('subject_id', 'Subject Id:') !!}
    <p>{{ $attendance->subject_id }}</p>
</div>

<!-- Teacher Id Field -->
<div class="form-group">
    {!! Form::label('teacher_id', 'Teacher Id:') !!}
    <p>{{ $attendance->teacher_id }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $attendance->status }}</p>
</div>

