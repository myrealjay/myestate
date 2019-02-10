@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Personaldata
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px; padding-top:20px; padding-bottom:30px;">
                    <div style="padding-bottom:20px;">
                        
                    <img src="{{$pic}}" width="200">
                        
                    </div>
                    <div>
                        @include('personaldatas.show_fields')
                        <a href="{!! route('personaldatas.index') !!}" class="btn btn-primary">Back</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
