<!-- Uuid Field -->
<div class="form-group">
    {!! Form::label('uuid', 'Uuid:') !!}
    <p>{{ $invoices->uuid }}</p>
</div>

<!-- Payload Field -->
<div class="form-group">
    {!! Form::label('payload', 'Payload:') !!}
    <p>{{ $invoices->payload }}</p>
</div>

<!-- Response Field -->
<div class="form-group">
    {!! Form::label('response', 'Response:') !!}
    <p>{{ $invoices->response }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $invoices->status }}</p>
</div>

