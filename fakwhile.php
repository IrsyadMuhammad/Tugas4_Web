<?php
	$n = isset($_POST['n']) ? $_POST['n'] : NULL;
	if(isset($_POST['submit']))
	{
		if($n!=NULL)
		{
			$bil = 1;
			$i=0;
			while($i<$n)
			{
				$i++;
				$bil = $bil*$i;
			}
		}else
			{
				$bil = 'Isikan Bilangan!';
			}
	}

	echo '<h2>Faktorial While Dengan PHP</h2>';

	echo '<h4>Masukkan Bilangan :</h4>';
	echo '<form action="" method="post">';
	echo '<input class="field" type="text" name="n" value="'.$n.'" placeholder="Masukkan Bilangan..."/>';
	echo '<input class="tombol" type="submit" name="submit" value="Hitung"/>';
	
	if((isset($n))and($n!=NULL))
	{
		echo '<h4>Hasil Faktorial :</h4>';
		echo '=> ';
		$i=0;
		while($i<$n-1)
		{
			$i++;
			echo $i.'x';
		}
		echo $n;
		echo '<br/>';
	}
	echo '<h4>Jumlah Faktorial :</h4>';
	echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
?>
