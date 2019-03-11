<table class="table table-responsive" id="agents-table">
    <thead style="background-color:#5499C7;color:white;">
        <tr>
            <th>Fullname</th>
        <th>Sex</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody style="background-color:#E2E9ED;">
    @foreach($agents as $agent)
        <tr>
            <td>{!! $agent->fullname !!}</td>
            <td>{!! $agent->sex !!}</td>
            <td>{!! $agent->email !!}</td>
            <td>{!! $agent->phone !!}</td>
            <td>{!! $agent->address !!}</td>
            <td>
                {!! Form::open(['route' => ['agents.destroy', $agent->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('agents.show', [$agent->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('agents.edit', [$agent->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>