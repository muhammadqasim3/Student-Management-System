<!-- Student Id Field -->
<div class="form-group">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $transaction->student_id }}</p>
</div>

<!-- Fee Id Field -->
<div class="form-group">
    {!! Form::label('fee_id', 'Fee Id:') !!}
    <p>{{ $transaction->fee_id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $transaction->user_id }}</p>
</div>

<!-- Paid Field -->
<div class="form-group">
    {!! Form::label('paid', 'Paid:') !!}
    <p>{{ $transaction->paid }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $transaction->date }}</p>
</div>

<!-- Remarks Field -->
<div class="form-group">
    {!! Form::label('remarks', 'Remarks:') !!}
    <p>{{ $transaction->remarks }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $transaction->description }}</p>
</div>

