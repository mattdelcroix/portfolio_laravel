@foreach($photos as $key => $photo)
<div class="mySlides">
  <div class="numbertext">{{ $key + 1}} / {{ sizeof($photos) }}</div>
  <img src="images/{{ $photo->name }}" alt="image : {{ $key + 1 }} / {{ sizeof($photos) }}">
</div>
@endforeach
