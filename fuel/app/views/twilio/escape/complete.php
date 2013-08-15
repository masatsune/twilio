<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scale=yes, initial-scale=1.0, maximum-scale=5.0" />
    <link rel="apple-touch-icon-precomposed" href="/assets/img/twilio.gif" />
	<title>脱出ヘルパー</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'>           </script>
    <script type="text/javascript">
		  $(function(){
          $("#sleep").load("/twilio/escape/call/<?php echo $time; ?>/<?php echo $type; ?>");
		  })
    </script>
</head>
<body>
<h2>脱出ヘルパー</h2>

<p>登録が完了しました。</p>
<div id="sleep">
    <p><?php echo $time; ?>分後に通知します。</p>
</div>
</body>
</html>