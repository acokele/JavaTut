<?php

function generateCode($code, $text, $highlight)
{
	$markup = 
		"<div style='font-size: 13px; width: 90%; border-radius: 5px; border: 1px solid #d8d8d8; margin: 0 auto; overflow: hidden;'>
			<div style='width: 100%; height: 25px; background: #f7f7f7; border-bottom: 1px solid #d8d8d8'> </div>
			<div style='width: 50%; float: left; border-right: 2px solid #d8d8d8'>
				<pre class='line-numbers' data-line='$highlight'><code class='language-java'>$code</code></pre>
			</div>
			<div style='float: left; padding: 2px;'>
				$text
			</div>
			<div style='clear:both'></div>
		</div>";

	 echo $markup;
}


$code = <<<'CODE'
public FlowPane napraviDole()
{
	FlowPane dole = new FlowPane();
	for(int i = 0; i < 26; ++i)
	{
		Button dugme = new Button();
		
		String text = String.valueOf( (char)('A' + i) );

		dugme.setOnMouseClicked(this);
		dugme.setText(text);
		dugme.setPrefSize(50,  50);
		dole.getChildren().add(dugme);
	}
	
	dole.setPadding(new Insets(10, 10, 10, 30));
	dole.setVgap(5);
	dole.setHgap(8);
	
	return dole;
}
CODE;

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JavaTuts</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="prism.css">
    <link rel="stylesheet" href="main.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <?php generateCode($code, "Text", "1, 3, 5 ,7, 8,10-12, 14-20"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="prism.js"></script>
  </body>
</html>
