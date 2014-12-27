<html>
<head>
	<link href="prism.css" rel="stylesheet" />
	<script src="prism.js"></script>
</head>

<body>


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
public class PubnubPublishTest {

    String channel = "pubnub_java_api";
    String channel_enc = "pubnub_java_api_enc";

    Pubnub _pubnub;
    Pubnub _pubnub_enc;

    Object[] messages;

    public PubnubPublishTest() {
        _pubnub = new Pubnub("demo", "demo", false);
        _pubnub_enc = new Pubnub("demo", "demo", "demo", "demo", false);
        messages = new Object[3];
        messages[0] = "This is a string message";
        JSONArray jsarr = new JSONArray();
        jsarr.put("This is json array");
        jsarr.put("One more entry in json array");
        messages[1] = jsarr;
        JSONObject jsobj = new JSONObject();
        try {
            jsobj.put("msg1", "Hi");
            jsobj.put("msg2", "Java");
        } catch (JSONException e) {
            e.printStackTrace();
        }
        messages[2] = jsobj;
    }

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

/*echo "<table style='font-size: 12px;'>";
echo "<tr>";

echo "<td>";
	echo "<pre class='line-numbers' data-line='1, 3, 13-20'><code class='language-java'>$code</code></pre>";
echo "</td>";

echo "<td>";
	echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
	dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
	ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
	fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
echo "</td>";

echo "</tr>";
echo "</table>";*/


generateCode($code, "Text", "1, 3, 5 ,7, 8,10-12, 14-20, 30, 40, 50, 60, 93");

//generateCode($code, "Drugi text", "3, 5, 7");
?>

</body>
</html>