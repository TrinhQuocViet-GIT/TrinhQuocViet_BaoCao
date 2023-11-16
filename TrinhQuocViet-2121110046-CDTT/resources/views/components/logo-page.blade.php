<a class="navbar-brand" href="#">
    @foreach ($slide as $sl)
        <img src="{{ asset('image/logo/' . $sl->link) }}" alt="Logo" width="150">
    @endforeach
</a>
