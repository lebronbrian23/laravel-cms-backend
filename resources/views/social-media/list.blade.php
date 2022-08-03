@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Social Media</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
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
                        <img src="{{asset('/storage/'.$social_media->image)}}" width="200">
                    @endif
                </td>
                <td>{{$social_media->name}}</td>
                <td>{{$social_media->url}}</td>
                <td>{{$social_media->type}}</td>
                <td>{{$social_media->created_at->format('M j, Y')}}</td>
                <td><a href="/console/social-media/image/{{$social_media->id}}">Image</a></td>
                <td><a href="/console/social-media/edit/{{$social_media->id}}">Edit</a></td>
                <td><a href="/console/social-media/delete/{{$social_media->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/social-media/add" class="w3-button w3-green">New Social Media</a>

</section>

@endsection
