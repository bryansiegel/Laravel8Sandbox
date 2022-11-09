<h2>

    <ul>
        @forelse ($repos as $repo)
            <li>{{ $repo['name'] }}</li>
        @empty
            <li>No repos found</li>
        @endforelse
    </ul>
</h2>