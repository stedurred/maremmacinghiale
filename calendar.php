<?php

//session_start();
if(isset($_SESSION['user_squadra']))
{
 $squadra=$_SESSION['user_squadra'];
}


 
function draw_calendar($month,$year,$connection){

	/* draw table */
	$calendar= '<table cellpadding="0" cellspacing="0" class="table">';


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
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> ';
		/* Info table */
		$calendar.= '	<div class="well well-sm" ><span class="label label-success">Prenota con la <span class="glyphicon glyphicon-star"></span></span></div>';
		$calendar.= '</td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):



		/* add in the day name and number  */
		$now = time();
		$dateNow=date('Y-m-d', $now);
		$dayname=date('l',mktime(0,0,0,$month,$list_day,$year));
		$day = strftime ('%A',mktime(0,0,0,$month,$list_day,$year));

		$sdate = $year.'-'.$month.'-'.$list_day;
		$date = date_create_from_format('Y-m-d',$sdate);
		$sqlDate = date_format($date,'Y-m-d');

		if($_SESSION['user']=='stedurred'){
			/**QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !!    **/
			$sql = "SELECT  evento.id,evento.titolo,evento.data_evento,evento.descrizione,
                        evento.importo,evento.url_foto, squadra.url_foto as url_foto_squadra,
                        squadra.nome,squadra.numero,squadra.catture_cinghiali, atc.nome_atc,
                        atc.sigla_atc,province.nome_provincia,province.sigla_provincia,regioni.regione
                FROM evento
				INNER JOIN squadra on squadra.id = evento.id_squadra
				INNER JOIN atc on atc.id =squadra.id_atc
				INNER JOIN territorio on territorio.id=atc.id_territorio
                INNER JOIN province on province.id= territorio.id_provincia
                INNER JOIN regioni on regioni.id=province.id_regione
				WHERE DATE_FORMAT(evento.data_evento,'%Y-%m-%d')='".$sqlDate."'";
		}else{
			/**QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !!    **/
			$sql = "SELECT  evento.id,evento.titolo,evento.data_evento,evento.descrizione,
	                        evento.importo,evento.url_foto, squadra.url_foto as url_foto_squadra,
	                        squadra.nome,squadra.numero,squadra.catture_cinghiali, atc.nome_atc,
	                        atc.sigla_atc,province.nome_provincia,province.sigla_provincia,regioni.regione
	                FROM evento
					INNER JOIN squadra on squadra.id = evento.id_squadra
					INNER JOIN atc on atc.id =squadra.id_atc
					INNER JOIN territorio on territorio.id=atc.id_territorio
	                INNER JOIN province on province.id= territorio.id_provincia
	                INNER JOIN regioni on regioni.id=province.id_regione
					WHERE  evento.id_squadra = ".$_SESSION['user_id_squadra']."
					AND DATE_FORMAT(evento.data_evento,'%Y-%m-%d')='".$sqlDate."'";
		}

		$result=mysqli_query($connection,$sql);
		$num_eventi = $result->num_rows;
		//echo $num_eventi;

		$calendar.= '<td class="calendar-day';
		/* Today in danger  */
		$calendar.= $sqlDate==$dateNow ? ' danger">': '">';
		$calendar.= '<div class="panel-group" id="accordionDay'.$sdate.'" role="tablist" aria-multiselectable="true">';
		$calendar.= '  		<div class="panel panel-success">';
		$calendar.= '    		<div class="panel-heading" role="tab" id="heading">';
		$calendar.= '        		<a role="button" data-toggle="collapse" data-parent="#accordionDay'.$sdate.'" href="#collapseDay'.$sdate.'" aria-expanded="true" aria-controls="collapse">';
		$calendar.= '				<span class="glyphicon glyphicon-hand-down"><span class="badge">'.utf8_encode ($day).' '.$list_day.' ('.$num_eventi.')</span></span>';
		$calendar.= '        											</a>';
		$calendar.= '    		</div>';
		$calendar.= '    		<div id="collapseDay'.$sdate.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading">';
		$calendar.= '      			<div class="panel-body">';

		


		$i=0;
		$calendar.= '									<div class="panel-group" id="accordion'.$sdate.'" role="tablist" aria-multiselectable="true">';
		while ($evento=mysqli_fetch_assoc($result)) {
			$idEvento=$evento['id'];
			$dataSingoloEvento = $evento['data_evento'];
			$dataEvento= DateTime::createFromFormat('Y-m-d',$dataSingoloEvento);
			//echo $idEvento;
			$oraEvento= DateTime::createFromFormat('H:i:s',$dataSingoloEvento);
			//var_dump($evento['url_foto_squadra']);
			//var_dump($evento['url_foto']);
			//echo 'url:'.$evento['evento.url_foto'];
			//echo $evento['data_evento'];
			//var_dump($dataSingoloEvento);
			$dateFromSingoloEvento= DateTime::createFromFormat('Y-m-d H:i:s',$dataSingoloEvento);//date_create_from_format('Y-m-d#H:i:s',$dataSingoloEvento);
			//var_dump($dateFromSingoloEvento);
			//var_dump(DateTime::getLastErrors());
			//print_r(DateTime::getLastErrors());
			//print $dateFromSingoloEvento;
			
			$dateSingoloEvento = strftime ('%c', $dateFromSingoloEvento->getTimestamp());
			//echo $dateSingoloEvento;
			$dayNameSingoloEvento = strftime ('%A', $dateFromSingoloEvento->getTimestamp());
			//echo $dayNameSingoloEvento;
			$dayNumberSingoloEvento = strftime ('%d',$dateFromSingoloEvento->getTimestamp());
			//echo $dayNumberSingoloEvento;
			$monthNameSingoloEvento = strftime ('%B',$dateFromSingoloEvento->getTimestamp());
			//echo $monthNameSingoloEvento;
			$hourSingoloEvento = strftime ('%H',$dateFromSingoloEvento->getTimestamp());
			//echo $hourSingoloEvento;
			$minuteSingoloEvento = strftime ('%M',$dateFromSingoloEvento->getTimestamp());
			//echo $minuteSingoloEvento;
			$secondSingoloEvento = strftime ('%S',$dateFromSingoloEvento->getTimestamp());
			//echo $secondSingoloEvento;
			$i++;


			$calendar.= '  										<div class="panel panel-success">';
			$calendar.= '    						<div class="panel-heading" role="tab" id="heading">';
			$calendar.= '      											<h4 class="panel-title">';
			$calendar.= '        										    <a role="button" data-toggle="collapse" data-parent="#accordion'.$sdate.'" href="#collapse'.$sdate.'-'.$i.'" aria-expanded="true" aria-controls="collapse">';
			$calendar.= 'Evento: '.utf8_encode ($evento['titolo']);
			$calendar.= '        											<span class="glyphicon glyphicon-hand-down"></span></a>';
			$calendar.= '      											</h4>';
			$calendar.= '    										</div>';
			$calendar.= '    										<div id="collapse'.$sdate.'-'.$i.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading">';
			$calendar.= '      											<div class="panel-body">';
			$calendar.= '													<img src="'.$evento['url_foto'].'" style="max-width:150px;">';
			$calendar.= '													<p class="pad_top1 pad_bot1 color1">Descrizione:'.utf8_encode ($evento['descrizione']).'</p>';
			$calendar.= '									<p class="pad_top1 pad_bot1 color1"> Data-ora: '.utf8_encode ($evento['data_evento']).'</p>';
			$calendar.= '									<p class="pad_top1 pad_bot1 color1">Importo: '.utf8_encode ($evento['importo']).'&euro;</p>';
			$calendar.= '								                    <a href="admin_prenotazione.php?inserisci'
					.'&idEvento='.$idEvento
					.'&titolo='.utf8_encode ($evento['titolo'])
					.'&data='.utf8_encode ($dayNameSingoloEvento).' '.$dayNumberSingoloEvento.' '.utf8_encode ($monthNameSingoloEvento)
					.'&ora='.utf8_encode ($hourSingoloEvento.':'.$minuteSingoloEvento.':'.$secondSingoloEvento)
					.'&regione='.$evento['regione']
					.'&provincia='.$evento['nome_provincia']
					.'&atc='.$evento['nome_atc']
					.'&squadra='.$evento['nome']
					.'&descrizione='.utf8_encode ($evento['descrizione'])
					.'&fotoEvento='.$evento['url_foto']
					.'&importo='.utf8_encode ($evento['importo']).'">';
			$calendar.= '		<h2><span class="label label-default">Prenota evento <span class="glyphicon glyphicon-star"></span></span></h2></a>';
			//$calendar.= '		<h2><span class="label label-default">Prenota evento <span class="glyphicon glyphicon-star"></span></span></h2>';
			//$calendar.= '								    <a href="admin_prenotazione.php?inserisci"><h2><span class="label label-default">Prenota evento <span class="glyphicon glyphicon-star"></span></span></h2></a>';
			$calendar.= '      											</div>';
			$calendar.= '    										</div>';
			$calendar.= '  										</div>';

			//$calendar.= '<div class="day-name"><p class="pad_bot3">'.utf8_encode ($evento['titolo']).'</p></div>';
			//$calendar.= '<div class="day-name"><p class="pad_bot3">'.utf8_encode ($evento['descrizione']).'</p></div>';
			//$calendar.= '<div class="day-name"><p class="pad_bot3"><img src="'.$evento['url_foto'].'" style="max-width:50px;"></p></div>';
		}
		$calendar.= '							</div>';
		$calendar.= '      					</div>';
		$calendar.= '    				</div>';
		$calendar.= '  				</div>';
		$calendar.= '  			</div>';
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';

	/* all done, return result */
	return $calendar;
}



function draw_calendar_ricerca_eventi($nome,$data_evento,$ora_evento,$regione,$provincia,$atc,$squadra,$month,$year, $connection){
    file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
        ."#####____FACEBOOK____index.php v2.9___#####".
        "INIT____FACEBOOK APP MAREMMACINGHIALE____calendari.php->:draw_calendar_ricerca_eventi".PHP_EOL, FILE_APPEND);
	setlocale(LC_MONETARY, 'it_IT');

    $mounthNameNow =strftime ('%B');
    $yearNow=date('Y');
	/* draw table */
    $calendar= '';//'<table cellpadding="0" cellspacing="0" class="table">';

    $calendar.= '<div class="row">';

    $calendar.= '    <div class="col-md-12 col-xs-12">';

/*    $calendar.= '			<div class="col-md-6 col-xs-6">
    									<!--Petizione Change.org -->
                                        <script src="https://d18kwxxua7ik1y.cloudfront.net/product/embeds/v1/change-embeds.js" type="text/javascript"></script>
                                        <div class="change-embed-petition" data-petition-id="3457733"></div>
                                        <!--Petizione Change.org -->
    		
    							<h2 class="pad_bot1"><span class="label label-success">Parametri ricerca </span></h2>
									<span class="label label-success">Data ricerca evento '.$data_evento.' '.$ora_evento.'</span>
									<span class="label label-success">Regione ricerca evento '.$regione.'</span>
									<span class="label label-success">Provincia ricerca evento '.$provincia.'</span>
									<span class="label label-success">Data ricerca evento '.$data_evento.' '.$ora_evento.'</span>
									<span class="label label-success">Data ricerca evento '.$data_evento.' '.$ora_evento.'</span>
							</div>';*/

	$calendar.= '			<div class="col-md-6 col-xs-6">';






	/* table headings */
	//$headings = array('Domenica','Lunedi','Martedi','Mercoledi','Giovedi','Venerdi','Sabato');
	//$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';
    //$date = date_create_from_format('Y-m-d',$data_evento);
	$date = date_create_from_format('d/m/Y',$data_evento);
	var_dump($date);
	file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
	    ."#####____FACEBOOK____index.php v2.9___#####".
	    "INIT____FACEBOOK APP MAREMMACINGHIALE____calendari.php->:draw_calendar_ricerca_eventi:data_evento:".$data_evento.PHP_EOL, FILE_APPEND);
	//var_dump($data_evento);
	//var_dump($ora_evento);
	$time = date_create_from_format('d/m/Y',$ora_evento);
	var_dump($time);
	file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
	    ."#####____FACEBOOK____index.php v2.9___#####".
	    "INIT____FACEBOOK APP MAREMMACINGHIALE____calendari.php->:draw_calendar_ricerca_eventi:ora_evento:".$time.PHP_EOL, FILE_APPEND);
    $sqlDay = date_format($date,'d');
    $sqlMonth = date_format($date,'m');
    $sqlmounthName =strftime ('%B',$date->getTimestamp());
    $sqlYear = date_format($date,'Y');
    $sqlHour = date_format($time,'H');
    $sqlMinute = date_format($time,'i');
    $sqlSecond = date_format($time,'s');
	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$tm = date('e',mktime(0,0,0,$month,1,$year));
	//echo $tm;
    //echo $sqlDay."-".$sqlMonth."-".$sqlYear." ".$sqlHour.":".$sqlMinute.":".$sqlSecond;
    //echo $date->format('Y-m-d H:i:s');
    //$sqlYear = date_format($data_evento,'Y');
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
    //Numero di giorni nel dato mese 't'
    $days_in_range = date('t',mktime(0,0,0,$sqlMonth,$sqlDay,$sqlYear));
	//echo $days_in_range;
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	//$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		//$calendar.= '<td class="calendar-day-np"> ';
		/* Info table */
		//$calendar.= '	<div class="well well-sm" ><span class="label label-success">Prenota con la <span class="glyphicon glyphicon-star"></span></span></div>';
		//$calendar.= '</td>';
		$days_in_this_week++;
	endfor;

	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_range; $list_day++):

		/* add in the day name and number  */
		$now = time();
		$dateNow=date('Y-m-d', $now);
		$dayname=date('l',mktime(0,0,0,$sqlMonth,$list_day,$sqlYear));
		$day = strftime ('%A',mktime(0,0,0,$sqlMonth,$list_day,$sqlYear));

		$sdate = $sqlYear.'-'.$sqlMonth.'-'.$list_day;
		$date = date_create_from_format('Y-m-d',$sdate);
		$sqlDate = date_format($date,'Y-m-d');
        //echo $sdate;

        /**QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !!    **/

/*        $sql = "SELECT  evento.id,evento.titolo,evento.data_evento,evento.descrizione,
                        evento.importo,evento.url_foto, squadra.url_foto as url_foto_squadra,
                        squadra.nome,squadra.numero,squadra.catture_cinghiali, atc.nome_atc,
                        atc.sigla_atc,province.nome_provincia,province.sigla_provincia,regioni.regione
                FROM evento
				INNER JOIN squadra on squadra.id = evento.id_squadra
				INNER JOIN users on users.id_squadra = squadra.id
				INNER JOIN atc on atc.id =squadra.id_atc
				INNER JOIN territorio on territorio.id=atc.id_territorio
                INNER JOIN province on province.id= territorio.id_provincia
                INNER JOIN regioni on regioni.id=province.id_regione ";*/

        $sql = "SELECT  evento.id,evento.titolo,evento.data_evento,evento.descrizione,
                        evento.importo,evento.url_foto, squadra.url_foto as url_foto_squadra,
                        squadra.nome,squadra.numero,squadra.catture_cinghiali, atc.nome_atc,
                        atc.sigla_atc,province.nome_provincia,province.sigla_provincia,regioni.regione
                FROM evento
				INNER JOIN squadra on squadra.id = evento.id_squadra
				INNER JOIN atc on atc.id =squadra.id_atc
				INNER JOIN territorio on territorio.id=atc.id_territorio
                INNER JOIN province on province.id= territorio.id_provincia
                INNER JOIN regioni on regioni.id=province.id_regione ";

/*        $sqlGruopBy=" GROUP BY evento.id ";

        $sql=$sql.$sqlGruopBy;*/

		$sqlWhere=" WHERE 1=1 ";
        if($nome!="")
            $sqlWhere.=" AND evento.titolo LIKE '%".$nome."%'";
        if($regione!="")
            $sqlWhere.=" AND regioni.id = $regione";
        if($provincia!="")
            $sqlWhere.=" AND province.id = $provincia";
        if($atc!="")
            $sqlWhere.=" AND atc.id =  $atc";
        if($squadra!="")
            $sqlWhere.=" AND evento.id_squadra = $squadra";
        if($sqlDate!="")
            $sqlWhere.=" AND DATE_FORMAT(evento.data_evento,'%Y-%m-%d')='".$sqlDate."'";
        /*	AND MONTH(evento.data_evento)='$month'
        AND YEAR(evento.data_evento)='$year'"
        --AND e.titolo LIKE '%".nome."%'
        --AND e.id_squadra = $squadra

        */

        $sql=$sql.$sqlWhere;

        //echo $sql;
        $result=mysqli_query($connection,$sql);


        $eventi=mysqli_num_rows($result);
        //echo "eventi:".$eventi;
        if($eventi!=0){
            $calendar.= '<div class="calendar-day';//$sql.
            /* Today in danger  */
            $calendar.= $sqlDate==$dateNow ? ' danger">': '">';
            $calendar.= '<div class="panel-group" id="accordionDay'.$sdate.'" role="tablist" aria-multiselectable="true">';
            $calendar.= '  		<div class="panel panel-success">';
            $calendar.= '    		<div class="panel-heading" role="tab" id="heading">';
            $calendar.= '        		<a role="button" data-toggle="collapse" data-parent="#accordionDay'.$sdate.'" href="#collapseDay'.$sdate.'" aria-expanded="true" aria-controls="collapse">';
            $calendar.= '				<span class="glyphicon glyphicon-hand-down"><span class="badge">'.utf8_encode ($day).' '.$list_day.' '.$sqlmounthName.'</span><span class="label label-primary">Eventi: '.$eventi.'</span></span>';
            $calendar.= '        		</a>';
            $calendar.= '    		</div>';
            $calendar.= '    		<div id="collapseDay'.$sdate.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading">';
            $calendar.= '      			<div class="panel-body">';




            $i=0;
            $calendar.= '					<div class="panel-group" id="accordion'.$sdate.'" role="tablist" aria-multiselectable="true">';



            while ($evento=mysqli_fetch_assoc($result)) {
				$idEvento=$evento['id'];
                $dataSingoloEvento = $evento['data_evento'];
                $dataEvento= DateTime::createFromFormat('Y-m-d',$dataSingoloEvento);
                //echo $idEvento;
                $oraEvento= DateTime::createFromFormat('H:i:s',$dataSingoloEvento);
                //var_dump($evento['url_foto_squadra']);
                //var_dump($evento['url_foto']);
				//echo 'url:'.$evento['evento.url_foto'];
                //echo $evento['data_evento'];
                //var_dump($dataSingoloEvento);
                $dateFromSingoloEvento= DateTime::createFromFormat('Y-m-d H:i:s',$dataSingoloEvento);//date_create_from_format('Y-m-d#H:i:s',$dataSingoloEvento);
                //var_dump($dateFromSingoloEvento);
                //var_dump(DateTime::getLastErrors());
                //print_r(DateTime::getLastErrors());
                //print $dateFromSingoloEvento;

                $dateSingoloEvento = strftime ('%c', $dateFromSingoloEvento->getTimestamp());
                //echo $dateSingoloEvento;
                $dayNameSingoloEvento = strftime ('%A', $dateFromSingoloEvento->getTimestamp());
				//echo $dayNameSingoloEvento;
                $dayNumberSingoloEvento = strftime ('%d',$dateFromSingoloEvento->getTimestamp());
                //echo $dayNumberSingoloEvento;
                $monthNameSingoloEvento = strftime ('%B',$dateFromSingoloEvento->getTimestamp());
                //echo $monthNameSingoloEvento;
                $hourSingoloEvento = strftime ('%H',$dateFromSingoloEvento->getTimestamp());
                //echo $hourSingoloEvento;
                $minuteSingoloEvento = strftime ('%M',$dateFromSingoloEvento->getTimestamp());
                //echo $minuteSingoloEvento;
                $secondSingoloEvento = strftime ('%S',$dateFromSingoloEvento->getTimestamp());
                //echo $secondSingoloEvento;
                $i++;


                $calendar.= '  										<div class="panel panel-success">';
                $calendar.= '    										<div class="panel-heading" role="tab" id="heading">';
                $calendar.= '      											<h4 class="panel-title">';
                $calendar.= '        										    <a role="button" data-toggle="collapse" data-parent="#accordion'.$sdate.'" href="#collapse'.$sdate.'-'.$i.'" aria-expanded="true" aria-controls="collapse">';
                $calendar.= '														Evento: '.utf8_encode ($evento['titolo']);
                $calendar.= '        											<span class="glyphicon glyphicon-hand-down"></span></a>';
                $calendar.= '      											</h4>';
                $calendar.= '    										</div>';
                $calendar.= '    										<div id="collapse'.$sdate.'-'.$i.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading">';
                $calendar.= '      											<div class="panel-body">';
                $calendar.= '													<img src="'.$evento['url_foto'].'" style="max-width:150px;">';
                $calendar.= '													<p class="pad_top1 pad_bot1 color1">Regione:'.utf8_encode ($evento['regione']).'</p>';
                $calendar.= '													<p class="pad_top1 pad_bot1 color1">Provincia:'.utf8_encode ($evento['nome_provincia']).'</p>';
                $calendar.= '													<p class="pad_top1 pad_bot1 color1">ATC:'.utf8_encode ($evento['nome_atc']).'</p>';
                $calendar.= '													<img src="'.$evento['url_foto_squadra'].'" style="max-width:150px;">';
                $calendar.= '													<p class="pad_top1 pad_bot1 color1">Squadra:'.utf8_encode ($evento['nome']).'</p>';
                $calendar.= '													<p class="pad_top1 pad_bot1 color1">Descrizione:'.utf8_encode ($evento['descrizione']).'</p>';
                $calendar.= '									                <p class="pad_top1 pad_bot1 color1">Data: '.utf8_encode ($dayNameSingoloEvento).' '.$dayNumberSingoloEvento.' '.utf8_encode ($monthNameSingoloEvento).'</p>';
                $calendar.= '									                <p class="pad_top1 pad_bot1 color1">Ora: '.$hourSingoloEvento.':'.$minuteSingoloEvento.':'.$secondSingoloEvento.'</p>';
                
                $calendar.= '									                <p class="pad_top1 pad_bot1 color1">Importo: '.utf8_encode ($evento['importo']).'&euro;</p>';
                $calendar.= '								                    <a href="admin_prenotazione.php?inserisci'
                                                                                .'&idEvento='.$idEvento
                																.'&titolo='.utf8_encode ($evento['titolo'])
                																.'&data='.utf8_encode ($dayNameSingoloEvento).' '.$dayNumberSingoloEvento.' '.utf8_encode ($monthNameSingoloEvento)
                																.'&ora='.utf8_encode ($hourSingoloEvento.':'.$minuteSingoloEvento.':'.$secondSingoloEvento)
                																.'&regione='.$evento['regione']
                																.'&provincia='.$evento['nome_provincia']
                																.'&atc='.$evento['nome_atc']
                																.'&squadra='.$evento['nome']
                																.'&descrizione='.utf8_encode ($evento['descrizione'])
                																.'&fotoEvento='.$evento['url_foto']
                																.'&importo='.utf8_encode ($evento['importo']).'"><h2><span class="label label-default">Prenota evento <span class="glyphicon glyphicon-star"></span></span></h2></a>';
                $calendar.= '      											</div>';//panel-body
                $calendar.= '  											</div>';//panel-collapse collapse
                $calendar.= '										</div>';//panel panel-success

                //$calendar.= '<div class="day-name"><p class="pad_bot3">'.utf8_encode ($evento['titolo']).'</p></div>';
                //$calendar.= '<div class="day-name"><p class="pad_bot3">'.utf8_encode ($evento['descrizione']).'</p></div>';
                //$calendar.= '<div class="day-name"><p class="pad_bot3"><img src="'.$evento['url_foto'].'" style="max-width:50px;"></p></div>';
            }

            $calendar.= '							</div>';//panel-group
            $calendar.= '      					</div>';//panel-body
            $calendar.= '    				</div>';//panel-collapse collapse
            $calendar.= '  				</div>';//panel panel-success
            $calendar.= '  			</div>';//panel-group
            $calendar.= '  		</div>';//col-md-6 col-xs-6
           //$calendar.= '</td>';
        }
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

	/* end the table row*/
	//$calendar.= '</table>';
    $calendar.= '	</div>';//col-md-12 col-xs-12

    $calendar.= '</div>';//row
	/* all done, return result */
	return $calendar;
}
?>