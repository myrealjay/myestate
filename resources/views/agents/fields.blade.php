<!-- Fullname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fullname', 'Full name:') !!}
    {!! Form::text('fullname', null, ['class' => 'form-control']) !!}
</div>

<!-- Sex Field -->
<div class="form-group col-sm-6">
<label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

<select name="sex" id="sex" type="text" class="form-control{{ $errors->has('sex') ? ' is-invalid' : '' }}"  value="{{ old('sex') }}">
    <option>Male</option>
    <option>Female</option>
</select>
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
<label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

<input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" >
   
</div>

<div class="form-group col-sm-6">
<label for="workstatus" class="col-md-4 col-form-label text-md-right">{{ __('Upload picture') }}</label>

<input type="file" name="pic" id="pic"  class="form-control{{ $errors->has('pic') ? ' is-invalid' : '' }}">

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('agents.index') !!}" class="btn btn-default">Cancel</a>
</div>


