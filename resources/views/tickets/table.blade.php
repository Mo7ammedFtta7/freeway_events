<div class="table-responsive-sm">
    <table class="table table-striped" id="tickets-table">
        <thead>
            <tr>
                <th>Uuid</th>
        <th>Event Id</th>
        <th>Fullname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Identity Type</th>
        <th>Identity Number</th>
        <th>Invoice Uuid</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tickets as $tickets)
            <tr>
                <td>{{ $tickets->uuid }}</td>
            <td>{{ $tickets->event_id }}</td>
            <td>{{ $tickets->fullname }}</td>
            <td>{{ $tickets->email }}</td>
            <td>{{ $tickets->phone }}</td>
            <td>{{ $tickets->Identity_type }}</td>
            <td>{{ $tickets->Identity_number }}</td>
            <td>{{ $tickets->invoice_uuid }}</td>
                <td>
                    {!! Form::open(['route' => ['tickets.destroy', $tickets->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tickets.show', [$tickets->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('tickets.edit', [$tickets->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>