<h1>Basic arithmetic</h1>
 <h3> 

<br>
<br>
@if($tax=="add")
  

  
		Operation:{{ $tax }}
		<br>
		<br>
		First Number:{{ $tex }} 
				<br>
		Second number: {{ $tox }}
		<br>
		Answer is: {{  $ans = $tex + $tox}}

		
		

@elseif($tax=="mul")

		Operation:{{ $tax }}
		<br><br>
		First Number:{{ $tex }}
		<br>
		Second Number: {{ $tox }}
		<br>
		Answer is: {{ $ans = $tex * $tox }}

	

@elseif($tax=="sub")

		Operation:{{ $tax }}
		<br><br>
		First Number:{{ $tex }}
		<br>
		Second Number: {{ $tox }}
		<br>
		Answer is: {{ $ans = $tex - $tox }}

	

@elseif($tax=="div")


		Operation:{{ $tax }}
		<br><br>
		First Number:{{ $tex }}
		<br>
		Second Number: {{ $tox }}
		<br>
		Answer is: {{ $ans = $tex / $tox }}

		
@endif