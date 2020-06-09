<div class="table-responsive">
    <table class="table" id="admissions-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Class Id</th>
        <th>Roll No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Father Name</th>
        <th>Father Phone</th>
        <th>Mother Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Dob</th>
        <th>Phone</th>
        <th>Permanent Address</th>
        <th>Current Address</th>
        <th>Nationality</th>
        <th>Nic</th>
        <th>Status</th>
        <th>Date Registered</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($admissions as $admission)
            <tr>
                <td>{{ $admission->user_id }}</td>
            <td>{{ $admission->class_id }}</td>
            <td>{{ $admission->roll_no }}</td>
            <td>{{ $admission->first_name }}</td>
            <td>{{ $admission->last_name }}</td>
            <td>{{ $admission->father_name }}</td>
            <td>{{ $admission->father_phone }}</td>
            <td>{{ $admission->mother_name }}</td>
            <td>{{ $admission->gender }}</td>
            <td>{{ $admission->email }}</td>
            <td>{{ $admission->dob }}</td>
            <td>{{ $admission->phone }}</td>
            <td>{{ $admission->permanent_address }}</td>
            <td>{{ $admission->current_address }}</td>
            <td>{{ $admission->nationality }}</td>
            <td>{{ $admission->nic }}</td>
            <td>{{ $admission->status }}</td>
            <td>{{ $admission->date_registered }}</td>
            <td>{{ $admission->image }}</td>
                <td>
                    {!! Form::open(['route' => ['admissions.destroy', $admission->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admissions.show', [$admission->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admissions.edit', [$admission->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
