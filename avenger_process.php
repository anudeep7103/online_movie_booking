<!DOCTYPE html>
<html>
<head><title>Configure</title></head>
<body>
	<div align="center">
<?php
include("connection.php");

session_start();
mysqli_select_db($con, 'movie');

if(isset($_POST['submit']))
{
	
	if(!empty($_POST['seat']))
	{
		$checked_count = count($_POST['seat']);
		echo "Number of seats selected: ";
		echo $checked_count;
		$_SESSION['abc'] = $checked_count;
		$b=$checked_count-1;
		echo "<br>";
		$a=$_POST['seat'];
		$str='UPDATE avengers SET status=1 WHERE seatno IN(';
		for($x=0;$x<$checked_count;$x++)
		{	
			$temp=$a[$x];
			if($x==$b)
			{
				$str=$str.'"'.$temp.'"'.')';
				break;
			}
			
			$str=$str.'"'.$temp.'"'.",";
		}
		#echo $str;
		mysqli_query($con,$str);
		
		$_SESSION['new'] = $a;
	
	}
	
}
?>
<script type="text/javascript">
			document.write("<br>");
    			var complex = <?php echo json_encode($a); ?>;
				for (let index = 0; index < complex.length; index++) {
					document.write("seat "+(index+1)+" is: ");
					document.write(complex[index]+"<br>");
				}
				
		</script>
				<h2 Style="color:green;">Your seat is reserved Thankyou</h2>
		<?php 
		
		#header('location:checkout.php');
		
		?>
		</div>
</body>
</html>