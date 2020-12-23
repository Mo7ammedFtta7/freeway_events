<div class="table-responsive-sm">
    <table class="table table-striped" id="invoices-table">
        <thead>
            <tr>
                <th>Uuid</th>
        <th>Payload</th>
        <th>Response</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($invoices as $invoices)
            <tr>
                <td>{{ $invoices->uuid }}</td>
            <td>{{ $invoices->payload }}</td>
            <td>{{ $invoices->response }}</td>
            <td>{{ $invoices->status }}</td>
                <td>
                    {!! Form::open(['route' => ['invoices.destroy', $invoices->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('invoices.show', [$invoices->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('invoices.edit', [$invoices->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>