@extends("layout")

@section("content")
    <section class="col-lg-8">
        @yield("main")
    </section>
    <section class="col-lg-4">
        @include("includes/sidebar")
    </section>
@endsection