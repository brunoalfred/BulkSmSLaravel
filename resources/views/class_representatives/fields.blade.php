<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Year Of Study Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year_of_study', 'Year Of Study:') !!}
    {!! Form::number('year_of_study', null, ['class' => 'form-control']) !!}
</div>

<!-- Programme Field -->
<div class="form-group col-sm-6">
    {!! Form::label('programme', 'Programme:') !!}
    {!! Form::text('programme', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('classRepresentatives.index') }}" class="btn btn-default">Cancel</a>
</div>
