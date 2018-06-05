<?php
session_start();
include_once 'php/dbconnect.php';
date_default_timezone_set('Europe/Rome');
//echo date_default_timezone_get();


$month= $_POST['month'];

setlocale(LC_TIME,'Italian_Standard', 'it_IT.UTF-8','ita.1252', 'it_IT.1252', 'Italian_Italy.1252');
$monthNameLocale  =  strftime('%B',mktime(0,0,0,$month,1,$year));
//echo 'month:'.$month;
$year=$_POST['year'];
//echo 'year:'.$year;

	/* draw table */
	//$calendar= '<table cellpadding="0" cellspacing="0" class="table">';


	$calendar= '<ol class="breadcrumb">';
	$calendar.= '	<li><a href="index.php">Torna alla ricerca</a></p></li>';
  	$calendar.= '	<li><a href="index.php">'.$year.'</a></p></li>';
  	$calendar.= '	<li class="active">'.$monthNameLocale.'</li>';
	$calendar.= '</ol>';

	/* table headings */
	//$headings = array('Domenica','Lunedi','Martedi','Mercoledi','Giovedi','Venerdi','Sabato');
	//$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$tm = date('e',mktime(0,0,0,$month,1,$year));
	//echo $tm;
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	//echo $days_in_month;
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	//$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		//$calendar.= '<td class="calendar-day-np" align="center" style="display: inline-block;"> ';
		/* Info table */
		//$calendar.= '	<div class="well well-sm" ><span class="label label-success">Eventi di caccia</span></div>';
		//$calendar.= '</td>';
		$days_in_this_week++;
	endfor;
//    $calendar.= '<div class="dropdown">';
//    $calendar.= '    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownEventi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">';
//    $calendar.= '	     <div class="well well-sm" ><span class="label label-success">Eventi di caccia</span></div>';
//    $calendar.= '        <span class="caret"></span>';
//    $calendar.= '   </button>';
//    $calendar.= '    <ul class="dropdown-menu" aria-labelledby="dropdownEventi">';
//	  $calendar.= '        <li>';
	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		
			/* add in the day name and number  */
			$now = time();
			$dateNow=date('Y-m-d', $now);
			$dayname=date('l',mktime(0,0,0,$month,$list_day,$year));
            $monthName=date('M',mktime(0,0,0,$month,$list_day,$year));
			$day = strftime ('%A',mktime(0,0,0,$month,$list_day,$year));

			$sdate = $year.'-'.$month.'-'.$list_day;
		    $dateView  = utf8_encode($day).' '.$list_day.' '.$monthNameLocale.' '.$year;

			$date = date_create_from_format('Y-m-d',$sdate);
            $mounthNameNow =strftime('%B');
			$sqlDate = date_format($date,'Y-m-d');


			/**QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !!    **/
			$sql = "SELECT * FROM evento 

				WHERE DATE_FORMAT(evento.data_evento,'%Y-%m-%d')='" .$sqlDate. "'";
				/*	AND MONTH(evento.data_evento)='$month' 
				AND YEAR(evento.data_evento)='$year'"*/                    
			
				$result=mysqli_query($connection,$sql);

			$i=0;

			 while ($evento=mysqli_fetch_assoc($result)) {
			 $i++;


                 if($i==1){
                     //$calendar.= '<div class="panel-group" id="accordionDay'.$sdate.$i.'" role="tablist" aria-multiselectable="true">';
                     //$calendar.= '  	<div class="panel panel-success">';
                     //$calendar.= '    		<div class="panel-heading" role="tab" id="heading">';
                     //$calendar.= '        		<a role="button" data-toggle="collapse" data-parent="#accordionDay'.$sdate.$i.'" href="#collapseDay'.$sdate.$i.'" aria-expanded="true" aria-controls="collapse">';
                     //$calendar.= '				<span class="glyphicon glyphicon-hand-down"><span class="badge">'.utf8_encode ($day).' '.$list_day.'</span></span>';
                     //$calendar.= '        											</a>';
                     //$calendar.= '    		</div>';
                     ////////$calendar.= '    		<div id="collapseDay'.$sdate.$i.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading">';
                     //$calendar.= '      			<div class="panel-body">';
                     $calendar.= '								<div class="panel-group" id="accordion'.$sdate.$i.'" role="tablist" aria-multiselectable="true">';
                     $calendar.= '				                    <h2>'.$dateView.' <span class="label label-success"><span class="glyphicon glyphicon-calendar"></span></span></h2>';


                 }
                 $calendar.= '  									<div class="panel panel-success">';
				 $calendar.= '    						                <div class="panel-heading" role="tab" id="heading">';
                 $calendar.= '      											<h4 class="panel-title">';
                $calendar.= '        										    <a role="button" data-toggle="collapse" data-parent="#accordion'.$sdate.'1" href="#collapse'.$sdate.'-'.$i.'" aria-expanded="true" aria-controls="collapse">';
                $calendar.= 'Evento: '.utf8_encode ($evento['titolo']);
                $calendar.= '        											<span class="glyphicon glyphicon-hand-down"></span></a>';
                $calendar.= '      											</h4>';
                $calendar.= '    										</div>';
                $calendar.= '    										<div id="collapse'.$sdate.'-'.$i.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading">';
                $calendar.= '      											<div class="panel-body">';
				 $calendar.= '													<div class="row">';
				 $calendar.= '                 										<div class="col-md-2 col-xs-2"></div>';
                  $calendar.= '                  									<div class="col-md-8 col-xs-8">';
                $calendar.= '															<img src="'.$evento['url_foto'].'" style="max-width:150px;">';
                $calendar.= '															<p class="pad_top1 pad_bot1 color1">Descrizione:'.utf8_encode ($evento['descrizione']).'</p>';
                 $calendar.= '									                		<p class="pad_top1 pad_bot1 color1"> Data-ora: '.utf8_encode ($evento['data_evento']).'</p>';
                 $calendar.= '									                		<p class="pad_top1 pad_bot1 color1">Importo: '.utf8_encode ($evento['importo']).'&euro;</p>';
				 $calendar.= '								                    		<a href="admin_prenotazione.php?inserisci"><h2><span class="label label-default">Prenota evento <span class="glyphicon glyphicon-star"></span></span></h2></a>';
				 $calendar.= '         												</div>';
				 $calendar.= '                   									<div class="col-md-2 col-xs-2"></div>';
				 $calendar.= '      											</div>';
                $calendar.= '    										</div>';
                $calendar.= '  										</div>';


                 $calendar.= '      			                </div>';
                 if(i==1){

                     //$calendar.= '				</div>';
                     //$calendar.= '    		</div>';
                     //$calendar.= '  	</div>';
                     $calendar.= '  </div>';

                 }

				//$calendar.= '<div class="day-name"><p class="pad_bot3">'.utf8_encode ($evento['titolo']).'</p></div>';
				//$calendar.= '<div class="day-name"><p class="pad_bot3">'.utf8_encode ($evento['descrizione']).'</p></div>';
				//$calendar.= '<div class="day-name"><p class="pad_bot3"><img src="'.$evento['url_foto'].'" style="max-width:50px;"></p></div>';
			 }

		//$calendar.= '</td>';
//        $calendar.='        </li>';
//        $calendar.= '    </ul>';
//        $calendar.= '  </div>';

		if($running_day == 6):
			//$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				//$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			//$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	//$calendar.= '</tr>';

	/* end the table */
	//$calendar.= '</table>';
	
	/* all done, return result */
	echo $calendar;

?>