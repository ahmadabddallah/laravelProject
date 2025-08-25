@extends('layout.app')

@section ('title') Show @endsection

@section ('content')


    <section id="home-page">
        <div class="container mt-5">
        <div class="card">
  <h5 class="card-header">Post info</h5>
  <div class="card-body">
    <h5 class="card-title">Title :{{$post[0]['id']}}</h5>
    <p class="card-text">Description:{{$post[0]['description']}}</p>
  </div>

</div>

  <div class="card mt-3">
  <h5 class="card-header">Post Creator info</h5>
  <div class="card-body">
    <h5 class="card-title">Name :Ahhmed</h5>
    <h5 class="card-title">Email:ahmad@gmail.com</h5>
    <p class="card-text">Created At:2023-1-1</p>
  </div>
</div>
</div>

    </section>
    @endsection



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>
