
<div class="table-responsive">
    <table class="table" id="classes-table">
        <thead>
            <tr>
                <th>Name</th>
                <th class="text-center">Code</th>
                <th class="pull-right" style="margin-right: 15px">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classes as $classes)
            <tr>
                <td>{{ $classes->name }}</td>
            <td class="text-center">{{ $classes->code }}</td>
                <td>
                    {!! Form::open(['route' => ['classes.destroy', $classes->id], 'method' => 'delete']) !!}
                    <div class='btn-group pull-right'>
                        <a href="{{ route('classes.show', [$classes->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('classes.edit', [$classes->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
