@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Agent
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('agents.show_fields')
                </div>
                <div class="row table-responsive" style="padding:20px;">
                <h4 style="color:blue; font-weight:bold;">Customers <span style="color:red;">{{ $counter }}</span> remaining <span style="color:red;">{{ 23-$counter }}</span></h4>
                <table class="table table-striped"> 
                <thead style="background-color:blue; color:white;">
                    <th>NAME</th>
                    <th>ADDRESS</th>
                    <th>EMPLOYMENT STATUS</th>
                    <th>COMPANY ADDRESS</th>
                    <th>POSITION</th>
                    <th>PHONE</th>
                    <th>EMAIL</th>
                    <th>AMOUNT</th>
                    <th>BALANCE</th>
                    <th>APERTMENT</th>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr style="background-color:#C6DCDE; font-weight:bold;">
                            <td>{{ $customer->fullname }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->empstatus }}</td>
                            <td>{{ $customer->compaddress }}</td>
                            <td>{{ $customer->position }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->amount }}</td>
                            <td>{{ $customer->balance }}</td>
                            <td>{{ $customer->apertment }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{!! route('agents.index') !!}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
