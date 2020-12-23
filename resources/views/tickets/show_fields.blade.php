<!-- Uuid Field -->
<div class="form-group">
    {!! Form::label('uuid', 'Uuid:') !!}
    <p>{{ $tickets->uuid }}</p>
</div>

<!-- Event Id Field -->
<div class="form-group">
    {!! Form::label('event_id', 'Event Id:') !!}
    <p>{{ $tickets->event_id }}</p>
</div>

<!-- Fullname Field -->
<div class="form-group">
    {!! Form::label('fullname', 'Fullname:') !!}
    <p>{{ $tickets->fullname }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $tickets->email }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $tickets->phone }}</p>
</div>

<!-- Identity Type Field -->
<div class="form-group">
    {!! Form::label('Identity_type', 'Identity Type:') !!}
    <p>{{ $tickets->Identity_type }}</p>
</div>

<!-- Identity Number Field -->
<div class="form-group">
    {!! Form::label('Identity_number', 'Identity Number:') !!}
    <p>{{ $tickets->Identity_number }}</p>
</div>

<!-- Invoice Uuid Field -->
<div class="form-group">
    {!! Form::label('invoice_uuid', 'Invoice Uuid:') !!}
    <p>{{ $tickets->invoice_uuid }}</p>
</div>

