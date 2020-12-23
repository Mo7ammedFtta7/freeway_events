<!-- Category Field -->
<div class="form-group">
    {!! Form::label('category', 'Category:') !!}
    <p>{{ $exams->category }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $exams->title }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $exams->image }}</p>
</div>

<!-- Short Desc Field -->
<div class="form-group">
    {!! Form::label('short_desc', 'Short Desc:') !!}
    <p>{{ $exams->short_desc }}</p>
</div>

<!-- Long Desc Field -->
<div class="form-group">
    {!! Form::label('long_desc', 'Long Desc:') !!}
    <p>{{ $exams->long_desc }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $exams->active }}</p>
</div>

