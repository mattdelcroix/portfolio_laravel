@extends('template')

@section('title')
Photo list
@endsection

@section('content')

<div class="container" id="create_form">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <fieldset>
        <legend>Upload a new photo</legend>

        {!! @Form::open(['route' => 'photo.store', 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group">
          {!! Form::select('category', $categories, null, ['placeholder' => 'Select category', 'class' => 'form-control js-example-basic-single']) !!}
          {!! $errors->first("category", "<small class='help-block text-danger'>:message</small>") !!}
        </div>

        <div class="form-group">
          <!--<div class="input-group mb-3">
            <div class="custom-file">
              <input class="custom-file-input" id="image" type="file">
              <label class="custom-file-label" for="image">Choose photo</label>
            </div>
          </div>-->
          {!! Form::label('image', 'Upload: ')!!}
          {!! Form::file('image')!!}
          {!! $errors->first("image", "<small class='help-block text-danger'>:message</small>") !!}
        </div>

        {!! Form::submit('Upload!', ['class' => 'btn btn-primary btn-lg btn-block'])!!}
        {!! Form::close() !!}

      </fieldset>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script>
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
  });
</script>
@endsection
