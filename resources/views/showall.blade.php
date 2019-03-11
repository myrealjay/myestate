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
                    <thead style="background-color:#5499C7; color:white;">
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>SEX</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>APARTMENTS SOLD</th>
                    </thead>
                   <tbody style="background-color:#E2E9ED;">
                    @foreach($agents as $agent)
                        <tr >
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