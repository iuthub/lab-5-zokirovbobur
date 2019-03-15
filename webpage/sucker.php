<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
        <?php
              if (!isset($_POST['name']) || !isset($_POST['Section']) || !isset($_POST['cardnumber']) || !isset($_POST['cardtype'])) {
        ?>
        <h1>Error</h1>

        <p>
        	... <a href="buyagrade.html">Try again?</a>
        </p>

        <?php
            }  else {
        ?>

		<h1>Thanks, sucker!</h1>

		<p>
			Your information has been recorded.
		</p>
		
		<dl>
			<dt>Name</dt>
			<dd>
				<?=$_POST['name']?>

			</dd>
			
			<dt>Section</dt>
			<dd>
				<?= $_POST['Section']?>
			</dd>
			
			<dt>Credit Card</dt>
			<dd>
				<?=$_POST['cardnumber']?> (<?=$_POST['cardtype']?>)
			</dd>
		</dl>
		
	    	<div>
                <?php
                    $data = $_POST['name'].";".$_POST['Section'].";".$_POST['cardnumber'].";".$_POST['cardtype']."\n";
                    file_put_contents("suckers.txt", $data, FILE_APPEND)
                ?>	
	    	</div>
		<pre>
<?=file_get_contents("suckers.txt")?>
		</pre>
		<?php
		  }
		?>
	</body>
</html>