@extends('template')

@section('title')
  Photo list
@endsection

@section('content')

  @include('partials.categories')

<hr class="separator" />

<div class="container-fluid photoViewer">
  <div class="gridRow">
    @include('partials.grid')
  </div>
</div>
@include('partials.modal')

<!-- Footer image "what I use";
<hr />

<div class="container-fluid">
  <img src="images/canon_700D.jpg" class="" style="width:100%;" />
</div>-->
@endsection

@section('scripts')
@include('js.photo')
@include('js.modal')
@include('js.ajaxQuery')
<script src="{{ asset('js/category/category.js') }}"></script>
@endsection
