<!-- Fullname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fullname', 'Fullname:') !!}
    {!! Form::text('fullname', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Empstatus Field -->

<div class="form-group col-sm-6">
        <label for="emptype" class="col-md-4 col-form-label text-md-right">{{ __('Employment status') }}</label>

            <select name="empstatus" id="empstatus" class="form-control{{ $errors->has('empstatus') ? ' is-invalid' : '' }}" >
                <option>Employed</option>
                <option>Unemployed</option>
                <option>Self employed</option>
            </select>

</div>

<!-- Compaddress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('compaddress', 'Company address:') !!}
    {!! Form::text('compaddress', null, ['class' => 'form-control']) !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position', 'Position:') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount paid:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('balance', 'Balance:') !!}
    {!! Form::text('balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Apertment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apertment', 'Apertment allocated:') !!}
    {!! Form::text('apertment', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('customers.index') !!}" class="btn btn-default">Cancel</a>
</div>
