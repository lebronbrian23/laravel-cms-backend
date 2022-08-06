@extends ('layout.console')

@section ('content')

<section>
    <!--Banner-->
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Manage Skills</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-center w3-padding-32">
    <div class="w3-content w3-justify">
      <table class="w3-table w3-bordered w3-white">
        <tr>
            <th></th>
            <th>Name</th>
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
                <td><a href="/console/skill/image/{{$skill->id}}" class="fake-button">Image</a></td>
                <td><a href="/console/skill/edit/{{$skill->id}}" class="fake-button">Edit</a></td>
                <td><a href="/console/skill/delete/{{$skill->id}}" class="fake-button">Delete</a></td>
            </tr>
        @endforeach
    </table>
        <div class="w3-center w3-padding-16">
            <a href="/console/skill/add" class="w3-button button">New Skill</a>
        </div>
    </div>
</section>

@endsection