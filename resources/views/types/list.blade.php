@extends ('layout.console')

@section ('content')

<section>
    <!--Banner-->
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Manage Project Types</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-center w3-padding-32">
    <div class="w3-content w3-justify" >
      <table class="w3-table w3-bordered w3-white">
        <tr>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($types as $type)
            <tr>
                <td>{{$type->title}}</td>
                <td><a href="/console/types/edit/{{$type->id}}" class="fake-button">Edit</a></td>
                <td><a href="/console/types/delete/{{$type->id}}" class="fake-button">Delete</a></td>
            </tr>
        @endforeach
        </table>
        <div class="w3-center w3-padding-16">
        <a href="/console/types/add" class="w3-button button">New Type</a>
        </div>
    </div>
    </div>
</section>

@endsection
