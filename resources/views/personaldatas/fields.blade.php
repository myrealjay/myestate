<!-- Residentialstatus Field -->
<div class="form-group col-sm-6">
<label for="residentialstatus" class="col-md-4 col-form-label text-md-right">{{ __('Residentialstatus') }}</label>

<select name="residentialstatus" id="residentialstatus" type="text" class="form-control{{ $errors->has('residentialstatus') ? ' is-invalid' : '' }}"  value="{{ old('residentialstatus') }}">
    <option>House Owner</option>
    <option>Tenant</option>
</select>

@if ($errors->has('residentialstatus'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('residentialstatus') }}</strong>
    </span>
@endif
</div>

<!-- Emptype Field -->
<div class="form-group col-sm-6">
        <label for="emptype" class="col-md-4 col-form-label text-md-right">{{ __('Emptype') }}</label>

            <select name="emptype" id="emptype" type="text" class="form-control{{ $errors->has('emptype') ? ' is-invalid' : '' }}"  value="{{ old('emptype') }}">
                <option>Paid Employment</option>
                <option>Self employed</option>
            </select>

            @if ($errors->has('emptype'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('emptype') }}</strong>
                </span>
            @endif
</div>

<!-- Workstatus Field -->
<div class="form-group col-sm-6">
<label for="workstatus" class="col-md-4 col-form-label text-md-right">{{ __('Workstatus') }}</label>

<select name="workstatus" id="workstatus" type="text" class="form-control{{ $errors->has('workstatus') ? ' is-invalid' : '' }}"  value="{{ old('workstatus') }}">
    <option>Full-time</option>
    <option>Part-time</option>
    <option>self employed</option>
    <option>Retired</option>
</select>

@if ($errors->has('workstatus'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('workstatus') }}</strong>
    </span>
@endif
</div>

<div class="form-group col-sm-6">
    {!! Form::label('occupation', 'Occupation:') !!}
    {!! Form::text('occupation', null, ['class' => 'form-control']) !!}
</div>

<!-- Employer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employer', 'Employer:') !!}
    {!! Form::text('employer', null, ['class' => 'form-control']) !!}
</div>

<!-- Dateemployed Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateemployed', 'Dateemployed:') !!}
    {!! Form::text('dateemployed', null, ['class' => 'form-control']) !!}
</div>

<!-- Monthlysalary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('monthlysalary', 'Monthlysalary:') !!}
    {!! Form::text('monthlysalary', null, ['class' => 'form-control']) !!}
</div>

<!-- Annualsalary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('annualsalary', 'Annualsalary:') !!}
    {!! Form::text('annualsalary', null, ['class' => 'form-control']) !!}
</div>

<!-- Propertytype Field -->
<div class="form-group col-sm-6">
<label for="propertytype" class="col-md-4 col-form-label text-md-right">{{ __('Property type') }}</label>

<select name="propertytype" id="propertytype" type="text" class="form-control{{ $errors->has('propertytype') ? ' is-invalid' : '' }}"  value="{{ old('propertytype') }}">
    <option>3 Bedroom Terrace with Maid's Room</option>
</select>

@if ($errors->has('propertytype'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('propertytype') }}</strong>
    </span>
@endif
</div>

<div class="form-group col-sm-6">
<label for="workstatus" class="col-md-4 col-form-label text-md-right">{{ __('Upload picture') }}</label>

<input type="file" name="pic" id="pic"  class="form-control{{ $errors->has('pic') ? ' is-invalid' : '' }}">

</div>

<!-- Declaration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('declaration', 'Declaration:') !!}
    {!! Form::text('declaration', null, ['class' => 'form-control']) !!}
    <span> by entering your name you declare that you are the withen named person and that the information provided herein are true to the best of your knowledge. You agree that the developer may reject your application at any stage id your details are found to be fraudulent and/or misleading. You confirm that this application form may be considered as your offer to purchase to the developer.</span>
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personaldatas.index') !!}" class="btn btn-default">Cancel</a>
</div>
