@extends ('layout.console')

@section ('content')

<section>
    <!--Banner-->
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Manage Content Blocks</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-center w3-padding-32">
        <div class="w3-content w3-justify">
        <table class="w3-table w3-bordered w3-white">
            <tr>
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
                        <img src="{{$content_block->image}}" width="200">
                    @endif
                </td>
                <td>{{$content_block->name}}</td>
                <td>{{$content_block->description}}</td>
                <td>{{$content_block->type}}</td>
                <td>{{$content_block->created_at->format('M j, Y')}}</td>
                <td><a href="/console/content-blocks/image/{{$content_block->id}}" class="fake-button">Image</a></td>
                <td><a href="/console/content-blocks/edit/{{$content_block->id}}" class="fake-button">Edit</a></td>
                <td><a href="/console/content-blocks/delete/{{$content_block->id}}" class="fake-button">Delete</a></td>
            </tr>
        @endforeach
        </table>
        <div class="w3-center w3-padding-16">
            <a href="/console/content-blocks/add" class="w3-button button">New Content Block</a>
        </div>
    </div>
</section>

@endsection
