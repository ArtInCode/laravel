@extends('layouts.admin')


@section('title', 'Dashboard')
@section('content')

<div class="col-md-8">

	<ul class="nav nav-tabs main-statistics-tabs">
	  <li class="active"><a data-toggle="tab" href="#browser" class="tab-head" data-aim="1">Browser</a></li>
	  <li><a data-toggle="tab" href="#os" class="tab-head"  data-aim="2">Operation System</a></li>
	  <li><a data-toggle="tab" href="#geo" class="tab-head"  data-aim="3">Geo Location</a></li>
	  <li><a data-toggle="tab" href="#referrer" class="tab-head"  data-aim="4">Referrer</a></li>
	</ul>

	<div class="tab-content main-statistics">
	  <div id="browser" class="tab-pane fade in active">
	    <?php
	    $html = "";
			foreach ($reports['global'] as $key => $v) {
				$html .= "<div class='report-item col-md-12'>
								<div class='col-md-3'>".$v->TypeName ."</div> <div class='col-md-9'>".$v->TypeCount."</div>
						</div>";
			}
		echo $html;
		?>
		<h3>Hits</h3>
		<?php
		 $html = "";
			foreach ($reports['current'] as $key => $v) {
				$html .= "<div class='report-item col-md-12'>
								<div class='col-md-3'>".$v->TypeName ."</div> <div class='col-md-9'>".$v->TypeCount."</div>
						</div>";
			}
		echo $html;
		?>
		<h3>IP</h3>
		<?php
		$html = "";
			foreach ($reports['IP'] as $key => $v) {
				$html .= "<div class='report-item col-md-12'>
								<div class='col-md-3'>".$v->TypeName ."</div> <div class='col-md-9'>".$v->TypeCount."</div>
						</div>";
			}
		echo $html;
		?>
		<h3>Coocie</h3>
		<?php
		$html = "";
			foreach ($reports['coocie'] as $key => $v) {
				$html .= "<div class='report-item col-md-12'>
								<div class='col-md-3'>".$v->TypeName ."</div> <div class='col-md-9'>".$v->TypeCount."</div>
						</div>";
			}
		echo $html;
		
		?>
	  </div>
	  <div id="os" class="tab-pane fade">
	    
	  </div>
	  <div id="geo" class="tab-pane fade">
	    
	  </div>
	  <div id="referrer" class="tab-pane fade">
	    
	  </div>
	</div>

</div>
<div class="col-md-4"></div>

@stop

