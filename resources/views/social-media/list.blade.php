@extends ('layout.console')

@section ('content')

<section>
    <!--Banner-->
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Manage Social Media</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-center w3-padding-32">
    <div class="w3-content w3-justify">
        <table class="w3-table w3-bordered w3-white">
            <tr>
                <th></th>
                <th>Name</th>
                <th>URL</th>
                <th>Type</th>
                <th>Created</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($social_medias as $social_media)
                <tr>
                    <td>
                        @if ($social_media->image)
                            <img src="{{$social_media->image}}" width="200">
                        @endif
                    </td>
                    <td>{{$social_media->name}}</td>
                    <td><a href="{{$social_media->url}}">Link</a></td>
                    <td>{{$social_media->type}}</td>
                    <td>{{$social_media->created_at->format('M j, Y')}}</td>
                    <td><a href="/console/social-media/image/{{$social_media->id}}" class="fake-button">Image</a></td>
                    <td><a href="/console/social-media/edit/{{$social_media->id}}" class="fake-button">Edit</a></td>
                    <td><a href="/console/social-media/delete/{{$social_media->id}}" class="fake-button">Delete</a></td>
                </tr>
            @endforeach
        </table>
        <div class="w3-center w3-padding-16">
            <a href="/console/social-media/add" class="w3-button button">New Social Media</a>
        </div>
    </div>
</section>

@endsection
