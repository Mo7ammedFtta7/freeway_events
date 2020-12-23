<div class="table-responsive-sm">
    <table class="table table-striped" id="faqs-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Answer</th>
        <th>Active</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faqs as $faqs)
            <tr>
                <td>{{ $faqs->title }}</td>
            <td>{{ $faqs->answer }}</td>
            <td>{{ $faqs->active }}</td>
                <td>
                    {!! Form::open(['route' => ['faqs.destroy', $faqs->uuid], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faqs.show', [$faqs->uuid]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('faqs.edit', [$faqs->uuid]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>