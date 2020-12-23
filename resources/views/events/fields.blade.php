<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Short Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_desc', 'Short Desc:') !!}
    {!! Form::textarea('short_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Long Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('long_desc', 'Long Desc:') !!}
    {!! Form::textarea('long_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Event Start Datetime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_start_datetime', 'Event Start Datetime:') !!}
    {!! Form::text('event_start_datetime', null, ['class' => 'form-control','id'=>'event_start_datetime']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#event_start_datetime').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Event End Datetime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('event_end_datetime', 'Event End Datetime:') !!}
    {!! Form::text('event_end_datetime', null, ['class' => 'form-control','id'=>'event_end_datetime']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#event_end_datetime').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Tickets Start Datetime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tickets_start_datetime', 'Tickets Start Datetime:') !!}
    {!! Form::text('tickets_start_datetime', null, ['class' => 'form-control','id'=>'tickets_start_datetime']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#tickets_start_datetime').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Tickets End Datetime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tickets_end_datetime', 'Tickets End Datetime:') !!}
    {!! Form::text('tickets_end_datetime', null, ['class' => 'form-control','id'=>'tickets_end_datetime']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#tickets_end_datetime').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Ticket Purchase Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_purchase_price', 'Ticket Purchase Price:') !!}
    {!! Form::number('ticket_purchase_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Ticket Selling Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_selling_price', 'Ticket Selling Price:') !!}
    {!! Form::number('ticket_selling_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('events.index') }}" class="btn btn-secondary">Cancel</a>
</div>
