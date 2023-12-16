<div>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>

    {{ $users->links("tt::pagination.live") }}
</div>
