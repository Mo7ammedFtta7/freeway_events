<div class="table-responsive-sm">
    <table class="table table-striped" id="exams-table">
        <thead>
            <tr>
                <th>Category</th>
        <th>Title</th>
        <th>Image</th>
        <th>Short Desc</th>
        <th>Long Desc</th>
        <th>Active</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($exams as $exams)
            <tr>
                <td>{{ $exams->category }}</td>
            <td>{{ $exams->title }}</td>
            <td>{{ $exams->image }}</td>
            <td>{{ $exams->short_desc }}</td>
            <td>{{ $exams->long_desc }}</td>
            <td>{{ $exams->active }}</td>
                <td>
                    {!! Form::open(['route' => ['dashboard.exams.destroy', $exams->uuid], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dashboard.exams.show', [$exams->uuid]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('dashboard.exams.edit', [$exams->uuid]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>