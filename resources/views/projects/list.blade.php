@extends ('layout.console')

@section ('content')

<section>
    <!--Banner-->
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Manage Projects</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-center w3-padding-32">
        <div class="w3-content w3-justify">
          <table class="w3-table w3-bordered w3-white">
            <tr>
                <th></th>
                <th>Title</th>
                <th>Slug</th>
                <th>Type</th>
                <th>Created</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($projects as $project)
                <tr>
                    <td>
                        @if ($project->image)
                            <img src="{{$project->image}}" width="50">
                        @endif
                    </td>
                    <td>{{$project->title}}</td>
                    <td>
                        <a href="/project/{{$project->slug}}">
                            {{$project->slug}}
                        </a>
                    </td>
                    <td>{{$project->type->title}}</td>
                    <td>{{$project->created_at->format('M j, Y')}}</td>
                    <td><a href="/console/projects/image/{{$project->id}}" class="fake-button">Image</a></td>
                    <td><a href="/console/projects/edit/{{$project->id}}" class="fake-button">Edit</a></td>
                    <td><a href="/console/projects/delete/{{$project->id}}" class="fake-button">Delete</a></td>
                </tr>
            @endforeach
            </table>
            <div class="w3-center w3-padding-16">
                <a href="/console/projects/add" class="w3-button button">New Project</a>
            </div>
        </div>
    </div>
</section>

@endsection
