@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Skill</h2>

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
        @foreach ($skills as $skill)
            <tr>
                <td>
                    @if ($skill->image)
                        <img src="{{asset('/storage/'.$skill->image)}}" width="200">
                    @endif
                </td>
                <td>{{$skill->name}}</td>
                <td>{{$skill->created_at->format('M j, Y')}}</td>
                <td><a href="/console/skill/image/{{$skill->id}}">Image</a></td>
                <td><a href="/console/skill/edit/{{$skill->id}}">Edit</a></td>
                <td><a href="/console/skill/delete/{{$skill->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/skill/add" class="w3-button w3-green">New Skill</a>

</section>

@endsection
