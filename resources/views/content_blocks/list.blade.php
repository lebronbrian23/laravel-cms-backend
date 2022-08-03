@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Content Blocks</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Name</th>
            <th>Description</th>
            <th>Type</th>
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($content_blocks as $content_block)
            <tr>
                <td>
                    @if ($content_block->image)
                        <img src="{{asset('/storage/'.$content_block->image)}}" width="200">
                    @endif
                </td>
                <td>{{$content_block->name}}</td>
                <td>{{$content_block->description}}</td>
                <td>{{$content_block->type}}</td>
                <td>{{$content_block->created_at->format('M j, Y')}}</td>
                <td><a href="/console/content-blocks/image/{{$content_block->id}}">Image</a></td>
                <td><a href="/console/content-blocks/edit/{{$content_block->id}}">Edit</a></td>
                <td><a href="/console/content-blocks/delete/{{$content_block->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/content-blocks/add" class="w3-button w3-green">New Content Block</a>

</section>

@endsection
