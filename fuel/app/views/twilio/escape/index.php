<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scale=yes, initial-scale=1.0, maximum-scale=5.0" />
    <link rel="apple-touch-icon-precomposed" href="/assets/img/twilio.gif" />
	<title>脱出ヘルパー</title>
	<?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
<h2>　脱出ヘルパー　</h2>
  
<?php echo Form::open( '/twilio/escape/complete'); ?>

<!--    <p>
電話番号：<?php echo Form::Input('tell',  Input::post('tell') ) ?>
    </p>
 --> 
 
<p>時間：
    <?php
	echo Form::select('time', Input::post('time'), array(
		'1' => '1分後に通知',
    	'5' => '5分後に通知',
   		'10' => '10分後に通知',
	));
	?>
</p>
  
<p>用途：
    <?php
	echo Form::select('type', Input::post('type'), array(
        'default' => '一般用',
		'job' => '仕事用',
    	'party' => '飲み会用',
	));
	?>
</p>
  
<p>
　<?php echo Form::submit('submit', '　　送信　　'); ?>
　<?php echo Form::reset	('reset', '　リセット　'); ?>
</p>
  
<?php echo Form::close(); ?>
  
</body>
</html>