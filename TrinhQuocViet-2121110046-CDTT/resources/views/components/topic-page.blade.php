@foreach ($topics as $topic)
    <div class="row">
        <div class="col-md-4">
            <ul>{{ $topic->name }}</ul>

        </div>
        <div class="col-md-4">
            <ul>{{ $topic->name }}</ul>

        </div>
        <div class="col-md-4">
            <ul>{{ $topic->name }}</ul>

        </div>


    </div>
@endforeach
