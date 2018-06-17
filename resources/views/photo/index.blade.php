@extends('template')

@section('title')
  Photo list
@endsection

@section('content')

  @include('partials.categories')

<hr />

<div class="container slides">
    @include('partials.slides')
</div>

<hr />

<div class="container">
  <img src="images/canon_700D.jpg" class="" style="width:50%;" />
</div>
@endsection

@section('scripts')
@include('js.slideshow')
@include('js.ajaxQuery')
@endsection
