<!-- Uuid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uuid', 'Uuid:') !!}
    {!! Form::text('uuid', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Payload Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('payload', 'Payload:') !!}
    {!! Form::textarea('payload', null, ['class' => 'form-control']) !!}
</div>

<!-- Response Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('response', 'Response:') !!}
    {!! Form::textarea('response', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('invoices.index') }}" class="btn btn-secondary">Cancel</a>
</div>
