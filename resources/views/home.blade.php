{{-- /resources/views/home.blade.php --}}

<?php
	
	$Gx = 10;
	$Gy = 10;
	
	$grid=array(array('1','1','1','1','1','1','1','1','1','1'),
	
				array('1','1','0','0','0','0','1','1','1','1'),
				
				array('1','1','0','1','1','1','1','1','1','1'),
				
				array('1','1','0','0','0','1','1','1','1','1'),
				
				array('1','1','0','1','1','1','1','1','1','1'),
				
				array('1','1','0','1','0','1','1','0','1','1'),
				
				array('1','1','1','1','0','1','1','0','1','1'),
				
				array('1','1','1','1','0','1','1','0','1','1'),
				
				array('1','1','1','1','1','0','0','1','1','1'),
				
				array('1','1','1','1','1','1','1','1','1','1'),
				);
	
?>

@extends('layouts.engine')

@section('title', 'Clash of Raja')

@section('csslinks')
	<input type="hidden" value="home" id="smartHead">
@endsection

@section('content')
		<div id="Grid">
			<div id="GridIn">
				<?php for($i=1;$i<= $Gx;$i++){ ?>
					<div id="GridRow">
						<?php for($j=1;$j<= $Gy;$j++){ ?>
							<span id="tile" class="object<?php echo $grid[$i-1][$j-1]; ?>">
							
							
							</span>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
@endsection
