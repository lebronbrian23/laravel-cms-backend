@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <ul id="dashboard">
        <li><a href="/console/projects/list"><i class="fa-solid fa-list-check"></i> Manage Projects</a></li>
        <li><a href="/console/types/list">Manage Types</a></li>
        <li><a href="/console/social-media/list"><i class="fa-solid fa-hashtag"></i> Manage Social Media</a></li>
        <li><a href="/console/users/list"><i class="fa-solid fa-users"></i> Manage Users</a></li>
        <li><a href="/console/content-blocks/list"><i class="fa-solid fa-folder-open"></i> Manage Content Blocks</a></li>
        <li><a href="/console/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</a></li>
    </ul>

</section>

@endsection
