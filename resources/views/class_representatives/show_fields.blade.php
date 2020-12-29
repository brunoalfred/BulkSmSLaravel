<!-- First Name Field -->
<div class="form-group">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $classRepresentative->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $classRepresentative->last_name }}</p>
</div>

<!-- Registration Number Field -->
<div class="form-group">
    {!! Form::label('registration_number', 'Registration Number:') !!}
    <p>{{ $classRepresentative->registration_number }}</p>
</div>

<!-- Year Of Study Field -->
<div class="form-group">
    {!! Form::label('year_of_study', 'Year Of Study:') !!}
    <p>{{ $classRepresentative->year_of_study }}</p>
</div>

<!-- Programme Field -->
<div class="form-group">
    {!! Form::label('programme', 'Programme:') !!}
    <p>{{ $classRepresentative->programme }}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $classRepresentative->gender }}</p>
</div>

