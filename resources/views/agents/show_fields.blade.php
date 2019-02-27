<div class="row">
<div class="col-sm-6">
   
    <!-- Fullname Field -->
    <div class="form-group">
        {!! Form::label('fullname', 'Fullname:') !!}
        <p>{!! $agent->fullname !!}</p>
    </div>

    <!-- Sex Field -->
    <div class="form-group">
        {!! Form::label('sex', 'Sex:') !!}
        <p>{!! $agent->sex !!}</p>
    </div>
     <!-- Email Field -->
     <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        <p>{!! $agent->email !!}</p>
    </div>
</div>

<div class="col-sm-6">
   
    <!-- Phone Field -->
    <div class="form-group">
        {!! Form::label('phone', 'Phone:') !!}
        <p>{!! $agent->phone !!}</p>
    </div>

    <!-- Address Field -->
    <div class="form-group">
        {!! Form::label('address', 'Address:') !!}
        <p>{!! $agent->address !!}</p>
    </div>

    <!-- Created At Field -->
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{!! $agent->created_at !!}</p>
    </div>

</div>
</div>



