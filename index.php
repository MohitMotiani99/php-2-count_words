<?php
	$eval=false;
	//echo "In PHP";
	function count_words($str){
			//echo $str;
			$lower=[];
			$split = explode(" ",$str);
			//print_r($split);
			foreach($split as $k=>$v){
				$low=strtolower($v);
				if(array_key_exists($low,$lower)){
						$lower[$low]=$lower[$low]+1;
				}
				else{

					$lower+=[$low=>1];
				}
			}
			
			//print_r($lower);
			return $lower;
			
	}

	if (isset($_GET['submit'])){
		$str=$_GET['sen'];
		//echo $str;
	    $lower=count_words($str);
		//echo "In Submit";
		arsort($lower);
	     
		//echo "In Table";?>
		<table>
		  <thead>
		    <tr>
		      <th>Word</th>
		      <th>Count</th>
		    </tr>
		  </thead>
		  <tbody>
		<?php foreach ($lower as $k=>$v){ ?>
		    <tr>
		      <td><?php echo $k ?></td>
		      <td><?php echo $v ?></td>
		    </tr>
		<?php } ?>
		  </tbody>
		</table>
		<?php } ?>
	

<form action="<?php echo $PHP_SELF;?>" method="get">
    Sentence: 
    <input type="text" name="sen" id="sen"></input>
    <br>
    <br>
    <input type="submit" name="submit" value="submit"></input>
</form>


