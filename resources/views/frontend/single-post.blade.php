@extends('frontend.include.layouts')

@section('title')
    Single | Blog
@endsection

@section('content')
    <!-- Single blog post-->
    <div class="card mb-4">
        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
        <div class="card-body">
            <div class="small text-muted">January 1, 2021</div>
            <h2 class="card-title">Single Post title</h2>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias nesciunt sed repudiandae similique nostrum dolores, esse aspernatur est nihil veniam natus commodi exercitationem corporis quae atque quibusdam cumque quod ipsum. Et rerum veniam illo placeat, consequatur dolore dolores quasi animi tenetur voluptates quaerat reprehenderit sit sint, sed dolor! Quaerat quia sint, aspernatur ipsa, obcaecati dolor exercitationem doloribus ad odio odit maxime sit labore quam enim doloremque recusandae nihil repellendus, ab modi tempore dolorum illum repellat? Commodi dolorum distinctio laboriosam</p>
            <a class="btn btn-primary" href="#!">Read more →</a>
        </div>
    </div>
@endsection
