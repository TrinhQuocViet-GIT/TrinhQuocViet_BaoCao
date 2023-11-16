@foreach ($posts as $post)
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('images/post/' . $post->image) }}" class="img-fluid" alt="loading...">
        </div>
        <div class="col-md-8">
            <p class="fs-14 m-0 p-0">{{ $post->title }}</p>
            <h6 class="font-size:12px;">Ngày đăng {{ $post->created_at }}
            </h6>
        </div>
    </div>
@endforeach
