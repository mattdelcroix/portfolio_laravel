@extends('template')

@section('title')
  Photo list
@endsection

@section('content')

  @include('partials.categories')

<hr />

<!--<div class="container slides">-->
<div class="gridRow">
    @include('partials.grid')
</div>
@include('partials.modal')

<hr />

<div class="container-fluid">
  <img src="images/canon_700D.jpg" class="" style="width:100%;" />
</div>
@endsection

@section('scripts')
@include('js.photo')
@include('js.modal')
@include('js.ajaxQuery')
<script src="{{ asset('js/category/category.js') }}"></script>
@endsection
