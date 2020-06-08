<div class="table-responsive">
    <table class="table" id="attendances-table">
        <thead>
            <tr>
                <th>Student Id</th>
        <th>Class Id</th>
        <th>Subject Id</th>
        <th>Teacher Id</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($attendances as $attendance)
            <tr>
                <td>{{ $attendance->student_id }}</td>
            <td>{{ $attendance->class_id }}</td>
            <td>{{ $attendance->subject_id }}</td>
            <td>{{ $attendance->teacher_id }}</td>
            <td>{{ $attendance->status }}</td>
                <td>
                    {!! Form::open(['route' => ['attendances.destroy', $attendance->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('attendances.show', [$attendance->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('attendances.edit', [$attendance->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
