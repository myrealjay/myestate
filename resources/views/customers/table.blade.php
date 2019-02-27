<table class="table table-responsive" id="customers-table">
    <thead>
        <tr>
            <th>Fullname</th>
        <th>Address</th>
        <th>Empstatus</th>
        <th>Compaddress</th>
        <th>Position</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Amount</th>
        <th>Balance</th>
        <th>Apertment</th>
       
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>{!! $customer->fullname !!}</td>
            <td>{!! $customer->address !!}</td>
            <td>{!! $customer->empstatus !!}</td>
            <td>{!! $customer->compaddress !!}</td>
            <td>{!! $customer->position !!}</td>
            <td>{!! $customer->phone !!}</td>
            <td>{!! $customer->email !!}</td>
            <td>{!! $customer->amount !!}</td>
            <td>{!! $customer->balance !!}</td>
            <td>{!! $customer->apertment !!}</td>
           
            <td>
                {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('customers.show', [$customer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('customers.edit', [$customer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>