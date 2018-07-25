<h1> Shoutout to: {{$text}} </h1>


@if($text=="gwapo")

<h1>Gwapo</h1>

@elseif($text=="gwapa")

<h1>Gwapa</h1>

@endif




<!-- @foreach($colors as $color => $description) 
	{{ $color }} - {{ $description }}
	<br>
@endforeach -->

@foreach($colors as $color) 
@if($color == "blue")
	{{ $color }} - it is the color of the sky
@else
	{{ $color }}
	@endif
	<br>
@endforeach 




{{ $color[0] }} <br> 
{{ $color[1] }} <br>
{{ $color[2] }} <br>