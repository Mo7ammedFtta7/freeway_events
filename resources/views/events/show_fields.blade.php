<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $event->name }}</p>
</div>

<!-- Location Field -->
<div class="form-group">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $event->location }}</p>
</div>

<!-- Short Desc Field -->
<div class="form-group">
    {!! Form::label('short_desc', 'Short Desc:') !!}
    <p>{{ $event->short_desc }}</p>
</div>

<!-- Long Desc Field -->
<div class="form-group">
    {!! Form::label('long_desc', 'Long Desc:') !!}
    <p>{{ $event->long_desc }}</p>
</div>

<!-- Event Start Datetime Field -->
<div class="form-group">
    {!! Form::label('event_start_datetime', 'Event Start Datetime:') !!}
    <p>{{ $event->event_start_datetime }}</p>
</div>

<!-- Event End Datetime Field -->
<div class="form-group">
    {!! Form::label('event_end_datetime', 'Event End Datetime:') !!}
    <p>{{ $event->event_end_datetime }}</p>
</div>

<!-- Tickets Start Datetime Field -->
<div class="form-group">
    {!! Form::label('tickets_start_datetime', 'Tickets Start Datetime:') !!}
    <p>{{ $event->tickets_start_datetime }}</p>
</div>

<!-- Tickets End Datetime Field -->
<div class="form-group">
    {!! Form::label('tickets_end_datetime', 'Tickets End Datetime:') !!}
    <p>{{ $event->tickets_end_datetime }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $event->image }}</p>
</div>

<!-- Ticket Purchase Price Field -->
<div class="form-group">
    {!! Form::label('ticket_purchase_price', 'Ticket Purchase Price:') !!}
    <p>{{ $event->ticket_purchase_price }}</p>
</div>

<!-- Ticket Selling Price Field -->
<div class="form-group">
    {!! Form::label('ticket_selling_price', 'Ticket Selling Price:') !!}
    <p>{{ $event->ticket_selling_price }}</p>
</div>

