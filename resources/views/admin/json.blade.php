<?php
//header('Content-Type: application/json');
//echo json_encode($reports['global']);

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
		
		
die;
?>