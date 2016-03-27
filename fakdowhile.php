<?php
	$n = isset($_POST['n']) ? $_POST['n'] : NULL;
	if(isset($_POST['submit']))
	{
		if($n!=NULL)
		{
			$bil = 1;
			$i=1;
			do
			{
				$bil = $bil*$i;
				$i++;
			}
			while($i<=$n);
		}
		else
		{
			$bil = 'Isikan Bilangan!';
		}
	}

	echo '<h2>Faktorial Do While Dengan PHP</h2>';

	echo '<h4>Masukkan Bilangan :</h4>';
	echo '<form action="" method="post">';
	echo '<input class="field" type="text" name="n" value="'.$n.'" placeholder="Masukkan Bilangan..."/>';
	echo '<input class="tombol" type="submit" name="submit" value="Hitung"/>';
	echo '</form>';
	if((isset($n))and($n!=NULL))
	{
		echo '<h4>Hasil Faktorial :</h4>';
		echo '=> ';
		$i=1;
		do
		{
			echo $i.'x';
			$i++;
		}
		while($i<$n);
		echo $n;
		echo '<br/>';
	}
	echo '<h4>Jumlah Faktorial :</h4>';
	echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
?>
