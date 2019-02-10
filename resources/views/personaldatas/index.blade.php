@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Personaldatas</h1>
        <h1 class="pull-right">
        @if(Auth::user()->role==1 && $lenn==0)
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('personaldatas.create') !!}">Add New</a>
        @endif
        @if(Auth::user()->role==2)
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('personaldatas.create') !!}">Add New</a>
        @endif
           
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('personaldatas.table')
            </div>
            <div style="padding:20px;">
            @if($pic)
                <img src="{{ $pic}}" width="200">
            @endif
            </div>
            
        </div>
        <div class="text-center">
        
        </div>

       
    </div>
@endsection

