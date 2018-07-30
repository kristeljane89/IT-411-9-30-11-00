<ul>
	<li>Operator:Division</li>
	<li>First Number:{{ $tex }}</li>
	<li>Second Nuymber:{{ $tox }}</li>
	<li>Answer Is:
	@if($tox!=0)
	{{ $tex/$tox }}
	@else
	not allowed
    @endif</li>
</ul>