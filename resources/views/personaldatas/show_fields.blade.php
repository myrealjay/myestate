<div class="row">

<div class="col-sm-6">

<!--user details-->

<div class="form-group">
    {!! Form::label('surname', 'Surname:') !!}
    <span style="color:blue; font-weight:bold;">{!! $user->surname !!}</span>
</div>

<div class="form-group">
    {!! Form::label('firstname', 'Firstname:') !!}
    <span style="color:blue; font-weight:bold;">{!! $user->firstname !!}</span>
</div>

<div class="form-group">
    {!! Form::label('middlename', 'Middlename:') !!}
    <span style="color:blue; font-weight:bold;">{!! $user->middlename !!}</span>
</div>

<div class="form-group">
    {!! Form::label('gender', 'Gender:') !!}
    <span style="color:blue; font-weight:bold;">{!! $user->gender !!}</span>
</div>

<div class="form-group">
    {!! Form::label('dob', 'Date of Birth:') !!}
    <span style="color:blue; font-weight:bold;">{!! $user->dob !!}</span>
</div>

<!--end of user details right-->

<!-- Residentialstatus Field -->
<div class="form-group">
    {!! Form::label('residentialstatus', 'Residentialstatus:') !!}
    <span style="color:blue; font-weight:bold;">{!! $personaldata->residentialstatus !!}</span>
</div>

<!-- Emptype Field -->
<div class="form-group">
    {!! Form::label('emptype', 'Emptype:') !!}
    <span style="color:blue; font-weight:bold;">{!! $personaldata->emptype !!}</span>
</div>

<!-- Occupation Field -->
<div class="form-group">
    {!! Form::label('occupation', 'Occupation:') !!}
    <span style="color:blue; font-weight:bold;">{!! $personaldata->occupation !!}</span>
</div>

<!-- Workstatus Field -->
<div class="form-group">
    {!! Form::label('workstatus', 'Workstatus:') !!}
    <span style="color:blue; font-weight:bold;">{!! $personaldata->workstatus !!}</span>
</div>

<!-- Employer Field -->
<div class="form-group">
    {!! Form::label('employer', 'Employer:') !!}
    <span style="color:blue; font-weight:bold;">{!! $personaldata->employer !!}</span>
</div>

<!-- Dateemployed Field -->
<div class="form-group">
    {!! Form::label('dateemployed', 'Dateemployed:') !!}
    <span style="color:blue; font-weight:bold;">{!! $personaldata->dateemployed !!}</span>
</div>

</div>



<!--Right part -->

<div class="form-group">
    {!! Form::label('pob', 'Place of birth:') !!}
    <span style="color:blue; font-weight:bold;">{!! $user->pob !!}</span>
</div>

<div class="form-group">
    {!! Form::label('status', 'Marital status:') !!}
    <span style="color:blue; font-weight:bold;">{!! $user->status !!}</span>
</div>

<div class="col-sm-6">

<div class="form-group">
    {!! Form::label('nationality', 'Nationality:') !!}
    <span style="color:blue; font-weight:bold;">{!! $user->nationality !!}</span>
</div>

<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <span style="color:blue; font-weight:bold;">{!! $user->address !!}</span>
</div>

<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <span style="color:blue; font-weight:bold;">{!! $user->phone !!}</span>
</div>

<!-- Monthlysalary Field -->
<div class="form-group">
    {!! Form::label('monthlysalary', 'Monthlysalary:') !!}
    <span style="color:blue; font-weight:bold;">{!! $personaldata->monthlysalary !!}</span>
</div>

<!-- Annualsalary Field -->
<div class="form-group">
    {!! Form::label('annualsalary', 'Annualsalary:') !!}
    <span style="color:blue; font-weight:bold;">{!! $personaldata->annualsalary !!}</span>
</div>

<!-- Propertytype Field -->
<div class="form-group">
    {!! Form::label('propertytype', 'Propertytype:') !!}
    <span style="color:blue; font-weight:bold;">{!! $personaldata->propertytype !!}</span>
</div>

<!-- Declaration Field -->
<div class="form-group">
    {!! Form::label('declaration', 'Declaration:') !!}
    <span style="color:blue; font-weight:bold;">{!! $personaldata->declaration !!}</span>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <span style="color:blue; font-weight:bold;">{!! $personaldata->created_at !!}</span>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <span style="color:blue; font-weight:bold;">{!! $personaldata->updated_at !!}</span>
</div>

</div>
</div>

