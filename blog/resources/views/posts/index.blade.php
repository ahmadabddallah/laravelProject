@extends('layout.app')
@section ('title') Index @endsection

@section('content')

    <section id="home-page">
        <div class="container mt-5">
            <div class="text-center">
                <button type="button" class="btn btn-success">Create Post</button>
            </div>
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Posted By</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post )
                     <tr>
                    <th scope="row">{{$post['id']}}</th>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['Posted_By'] }}</td>
                    <td>{{ $post['created_at'] }}</td>
                    <td>
                        <a href="{{route('posts.show',[$post['id']])}}" class="btn btn-info">Show</a>

                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>

                </tr>


                @endforeach



            </tbody>
            </table>
        </div>

        </section>

        @endsection


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>
