@extends('layouts.app')

@section('content')
<section class="content-header">
        <h1>
            Agents performance
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body" id="print_content">
                <table class="table table-striped"> 
                    <thead style="background-color:#2A44A9; color:white;">
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>SEX</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>APARTMENTS SOLD</th>
                    </thead>
                   <tbody>
                    @foreach($agents as $agent)
                        <tr style="background-color:#DFE2EF;">
                            <td>{{ $agent->fullname }}</td>
                            <td>{{ $agent->address }}</td>
                            <td>{{ $agent->sex }}</td>
                            <td>{{ $agent->phone }}</td>
                            <td>{{ $agent->email}}</td>
                            <td style="color:red;">{{ count($agent->customers) }}</td>
                        </tr>
                    @endforeach
                   </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection