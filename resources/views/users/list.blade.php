@extends ('layout.console')

@section ('content')

<section>
    <!--Banner-->
    <div class="w3-center w3-padding-24 page-banner">
        <h3>Manage Users</h3>
    </div>
    <!--Content-->
    <div class="w3-container w3-center w3-padding-32">
    <div class="w3-content w3-justify">
      <table class="w3-table w3-bordered w3-white">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Created</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->first}} {{$user->last}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->format('M j, Y')}}</td>
                <td><a href="/console/users/edit/{{$user->id}}" class="fake-button">Edit</a></td>
                <td><a href="/console/users/delete/{{$user->id}}" class="fake-button">Delete</a></td>
            </tr>
         @endforeach
        </table>
        <div class="w3-center w3-padding-16">
        <a href="/console/users/add" class="w3-button button">New User</a>
        </div>
    </div>
    </div>
</section>

@endsection
