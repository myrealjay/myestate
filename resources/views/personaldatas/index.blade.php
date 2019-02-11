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
        @if(Auth::user()->role==2)
            <div style="padding-left:50px; padding-top:10px;">
                <form class="form-inline md-form mr-auto mb-4" method="post" action="search">
                {!! csrf_field() !!}
                <input name="search" class="form-control mr-sm-2" type="text" placeholder="phone or email" aria-label="Search">
                <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
                </form>
            </div>
        @endif
            


            <div class="box-body">
            
                    @include('personaldatas.table')
            </div>
            <div style="padding:20px;">
            @if($pic && Auth::user()->role!=2 )
                <img src="{{ $pic}}" width="200">
            @endif
            </div>
            
        </div>
        <div class="text-center">
        
        </div>

       
    </div>
@endsection

