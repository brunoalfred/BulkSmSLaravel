<div class="table-responsive">
    <table class="table" id="classRepresentatives-table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Year Of Study</th>
                <th>Programme</th>
                <th>Gender</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classRepresentatives as $classRepresentative)
                <tr>
                    <td>{{ $classRepresentative->first_name }}</td>
                    <td>{{ $classRepresentative->last_name }}</td>
                    <td>{{ $classRepresentative->year_of_study }}</td>
                    <td>{{ $classRepresentative->programme }}</td>
                    <td>{{ $classRepresentative->gender }}</td>
                    <td>
                        {!! Form::open(['route' => ['classRepresentatives.destroy', $classRepresentative->id], 'method'
                        => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('classRepresentatives.show', [$classRepresentative->id]) }}"
                                class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('classRepresentatives.edit', [$classRepresentative->id]) }}"
                                class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class'
                            => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
