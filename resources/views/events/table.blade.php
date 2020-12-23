<div class="table-responsive-sm">
    <table class="table table-striped" id="events-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Location</th>
        <th>Short Desc</th>
        <th>Long Desc</th>
        <th>Event Start Datetime</th>
        <th>Event End Datetime</th>
        <th>Tickets Start Datetime</th>
        <th>Tickets End Datetime</th>
        <th>Image</th>
        <th>Ticket Purchase Price</th>
        <th>Ticket Selling Price</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
            <tr>
                <td>{{ $event->name }}</td>
            <td>{{ $event->location }}</td>
            <td>{{ $event->short_desc }}</td>
            <td>{{ $event->long_desc }}</td>
            <td>{{ $event->event_start_datetime }}</td>
            <td>{{ $event->event_end_datetime }}</td>
            <td>{{ $event->tickets_start_datetime }}</td>
            <td>{{ $event->tickets_end_datetime }}</td>
            <td>{{ $event->image }}</td>
            <td>{{ $event->ticket_purchase_price }}</td>
            <td>{{ $event->ticket_selling_price }}</td>
                <td>
                    {!! Form::open(['route' => ['events.destroy', $event->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('events.show', [$event->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('events.edit', [$event->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>