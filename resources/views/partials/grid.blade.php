@foreach($photos as $key => $photo)
  <div class="column">
    <div class="content">
      <img src="images/{{ $photo->name }}" alt="image : {{ $key + 1 }} / {{ sizeof($photos) }}" style="width:100%">
      <!--<h3>My Work</h3>
      <p>Lorem ipsum..</p>-->
    </div>
  </div>
@endforeach
