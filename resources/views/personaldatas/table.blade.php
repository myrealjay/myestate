<table class="table table-responsive" id="personaldatas-table">
    <thead style="background-color:#5499C7; color:#fff;">
        <tr>
            <th>Residentialstatus</th>
        <th>Emptype</th>
        <th>Occupation</th>
        <th>Workstatus</th>
        <th>Employer</th>
        <th>Dateemployed</th>
        <th>Monthlysalary</th>
        <th>Annualsalary</th>
        <th>Propertytype</th>
        <th>Declaration</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody style="background-color:#E2E9ED;">
    @foreach($personaldatas as $personaldata)
        <tr>
            <td>{!! $personaldata->residentialstatus !!}</td>
            <td>{!! $personaldata->emptype !!}</td>
            <td>{!! $personaldata->occupation !!}</td>
            <td>{!! $personaldata->workstatus !!}</td>
            <td>{!! $personaldata->employer !!}</td>
            <td>{!! $personaldata->dateemployed !!}</td>
            <td>{!! $personaldata->monthlysalary !!}</td>
            <td>{!! $personaldata->annualsalary !!}</td>
            <td>{!! $personaldata->propertytype !!}</td>
            <td>{!! $personaldata->declaration !!}</td>
            <td>
                {!! Form::open(['route' => ['personaldatas.destroy', $personaldata->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personaldatas.show', [$personaldata->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personaldatas.edit', [$personaldata->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>