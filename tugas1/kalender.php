<?php

	$year  ;
	$freeDay = array(array(1,1,"New Year's Day"), array(2,5,"Chinese Bew Year"), array(3,7,"Bali Hindu New Year"), array(4,3,"Isra Mi'raj"),array(4,19,"Good friday"), array(5,1,"Labour Day"), array(5,19,"Waisak Day"), array(5,30,"Ascension Day Of Jesus Chirst"), array(6,1,"Pancasila Day"), array(6,3,"First Join Holiday Before Idul Fitri"), array(6,4,"Second Joint Holiday Before Idul FItri"), array(6,5,"Idul Fitri Day 1"), array(6,6,"Idul Fitri Day 2"), array(6,7,"Join Holiday After Idul Fitri"), array(8,11,"Idul Adha"), array(8,17,"Independence Day"), array(9,1,"Islamic New Year"), array(11,9,"Prophet Muhammad's Birthday"), array(12,24,"Christmas Holiday"), array(12,25,"Christmas"));

	function display_month($month, $year){
		$free = True;
		global $freeDay;
		// menentukan tanggal yang akan dieksekusi
		$first_day_of_month = mktime(0, 0, 0, $month, 1, $year);
		// tanggal pertma pada hari
		$first_day_of_week = date('w', $first_day_of_month); 
		// mencari jumlah hari dalam sebulan
		$days_in_month = date('t', $first_day_of_month); 
		// nama lengkap bulan
		$month_name = date('F', $first_day_of_month); 
		echo "<h3 class=\"h3\">$month_name</h3>";
		$kolom = $first_day_of_week;
		$jumat;
		$warna;
		if($first_day_of_week <= 5){
			$jumat = 5;
		}
		else{
			$jumat = 12;
		}
		echo "<table class=\"table\">";
		echo "<tr class=\"tr\">";
		echo "<th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>";
		echo "</tr>";
		echo "<tr class=\"tr\">";
		if($first_day_of_week > 0){
			echo "<td class=\"td\" colspan=\"$first_day_of_week\">&nbsp;</td>"; 
		}
		for ($day_of_month=1; $day_of_month <= $days_in_month;$day_of_month++){
			// kondisi untuk warna background pada tiap tanggal
			if($day_of_month == date('d') && $month == date('m') && ($year%2000) == date('y')){
				$warna = "yellow";
				if($kolom%$jumat == 0 && $kolom > 0){
					$jumat += 7;

				}
			}
			else{
				if($kolom%$jumat == 0 && $kolom > 0){
					$warna = "red";
					$jumat += 7;

				}
				else{
					foreach ($freeDay as $key) {
						if($key[0] == $month && $key[1] == $day_of_month){
							$warna = "red";
							break;
						}
						else{
							$warna = "white";
						}
					}
				}
			}
			// kondisi untuk penentuan posisi tanggal
			if(($kolom+1)%7 == 0){
				echo "<td class=\"td\" style=\"background-color: $warna;width:40px;height:40px;text-align:center;font-family:century;\">$day_of_month</td>";
				if($days_in_month!=$day_of_month){
					echo "</tr>";
					echo "<tr class=\"tr\">";
				}
			}
			else{
				echo "<td class=\"td\" style=\"background-color: $warna;width:40px;height:40px;text-align:center;font-family:century;\">$day_of_month</td>";
			}
			$kolom++;	
		}
		$kol=($days_in_month+$first_day_of_week)%7;
		if($kol == 0){
			echo "</tr></table>";
		}
		else{
			$k=7-$kol;
			echo "<td class=\"td\" colspan=\"$k\"></td>";
			echo "</tr></table>";
		}
	}
	function holiday(){
		global $freeDay;
		global $year;
		foreach ($freeDay as $key) {
			echo "<tr>";
			echo "<td style=\"width:auto;\">",$year,"-",$key[0],"-",$key[1],"</td><td style=\"width:30px;\">&nbsp;&nbsp;&nbsp;:</td><td style=\"width:300px;\">",$key[2],"</td>";
			echo "</tr>";	
		}
	}
?>