<div class="row">
<div class="col-sm-6">
    <!-- Fullname Field -->
    <div class="form-group">
        {!! Form::label('fullname', 'Fullname:') !!}
        {!! $customer->fullname !!}
    </div>

    <!-- Address Field -->
    <div class="form-group">
        {!! Form::label('address', 'Address:') !!}
        {!! $customer->address !!}
    </div>

    <!-- Empstatus Field -->
    <div class="form-group">
        {!! Form::label('empstatus', 'Empstatus:') !!}
        {!! $customer->empstatus !!}
    </div>

    <!-- Compaddress Field -->
    <div class="form-group">
        {!! Form::label('compaddress', 'Compaddress:') !!}
        {!! $customer->compaddress !!}
    </div>

    <!-- Position Field -->
    <div class="form-group">
        {!! Form::label('position', 'Position:') !!}
        {!! $customer->position !!}
    </div>

    <!-- Phone Field -->
    <div class="form-group">
        {!! Form::label('phone', 'Phone:') !!}
        {!! $customer->phone !!}
    </div>

</div>

<div class="col-sm-6">
 <!-- Email Field -->
 <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! $customer->email !!}
    </div>
    <!-- Amount Field -->
    <div class="form-group">
        {!! Form::label('amount', 'Amount:') !!}
        {!! $customer->amount !!}
    </div>

    <!-- Balance Field -->
    <div class="form-group">
        {!! Form::label('balance', 'Balance:') !!}
        {!! $customer->balance !!}
    </div>

    <!-- Apertment Field -->
    <div class="form-group">
        {!! Form::label('apertment', 'Apertment:') !!}
        {!! $customer->apertment !!}
    </div>

    <!-- Agent Field -->
    <div class="form-group">
        {!! Form::label('agent', 'Agent:') !!}
        {!! $customer->agent !!}
    </div>

    <!-- Created At Field -->
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:') !!}
        {!! $customer->created_at !!}
    </div>


</div>
</div>
