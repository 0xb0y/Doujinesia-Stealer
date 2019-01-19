<title>Doujin Stealer</title>

<?php
	include('crawler.php'); //Parser to get element in your link
	if(isset($_POST['submit'])){	
		$url=file_get_html($_POST['url']); 
	$image = $url->find("img"); 
	foreach($image as $img) 
	{
		$s=$img->src; 
		$img_name = 'C:\xampp\htdocs\onee/'.basename($s); //change it
		file_put_contents($img_name, file_get_contents($s)); 
	}
	}
	
	
?>
<center><img src='https://4.bp.blogspot.com/-ayMbYggKOUI/XDDElHM2YJI/AAAAAAAAIs8/cM3IrJLfZkkkcMQHHNz6Gq9nKfe9jnBsACLcBGAs/s1600/katousan.png' width='400' height='550'/>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="1" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td colspan="2"><label for="textfield"></label>
      <input style="width:100%;" type="text" name="url" id="textfield" />
      </td>
     
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle"><input type="submit" name="submit" id="button" value=" > " /></td>
    </tr>
  </table>
</form>
