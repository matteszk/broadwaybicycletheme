<?php
	$times = do_shortcode('[op-overview set_id="4304" show_closed_days="1"  short="0" include_io="1" include_holidays="1"]');
	$times = str_replace(':00', '', $times);
	$times = str_replace(' - ', ' – ', $times);

	$trs = explode('<tr', $times );

	$endash = '–';

	$rows = [];
	for ($i = 0; $i < count($trs); $i++) {
		$day = get_string_between($trs[$i], 'row">', '</th>');
		$hours = get_string_between($trs[$i], '<span ', 'span>');
		$hours = get_string_between($hours, '>', '</');

		if (end($rows) && $hours == end($rows)[1]) {
			$prev = array_pop($rows);
			$ex = explode($endash , $prev[0])[0];

			$prev[0] = $ex . $endash . $day;
				array_push($rows, $prev);
		}
		else {
			array_push($rows, [$day, $hours]);
		}
	}

	for ($i = 0; $i < count($rows); $i++) {
		echo '<tr><td>' . $rows[$i][0] . '</td><td>' . $rows[$i][1] . '</td></tr>';
	}
?>
