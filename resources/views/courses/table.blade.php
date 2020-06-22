{{--@push('css')--}}
{{--    <style>--}}
{{--        .bold-fonts{--}}
{{--            font-weight: bold;--}}
{{--        }--}}
{{--    </style>--}}
{{--@endpush--}}
<div class="table-responsive" style="">
    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Code</th>
        <th>Description</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
            <td>{{ $course->code }}</td>
            <td>{{ $course->description }}</td>
{{--            <td>{{ \App\Models\Course::$CourseStatus[$course->status] }}</td>--}}
            @if($course->status == 1)
                    <td>{!! $course->course_status_css !!} </td>
                @elseif($course->status == 0)
                <td>{!! $course->course_status_css !!} </td>
                @endif
{{--                    <td>{{ $course->course_status_css }}</td>--}}
                <td>
                    {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                    <div class='btn-group' style="width: 70px;">
                        <a href="{{ route('courses.show', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('courses.edit', [$course->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
