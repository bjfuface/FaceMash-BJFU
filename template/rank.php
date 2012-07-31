<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="IE=8" http-equiv="X-UA-Compatible"/>
<title><?php p('北京林业大学 Facemash');?></title>
<meta charset="utf-8" />
<meta name="description" content="知山知水，树木树人，故人虽去，以此为家。北京林业大学 Facemash，等你回家！" />
<?php css('main');?>
<?php js('jquery.min');?>
</head>
<body style="background-image:url(<?php p(webhost)?>img/bjfu<?php if($gend==1){p(2);}?>.jpg);">
<?php include("header.php")?>
<div class="rankbox">
	<ul>
		<?php $i=1; foreach($top as $user){?>
		<li class="f12">
			<div class="rank b"><?php p($i)?></div>
			<div class="class"><?php p($user['grade'])?>级 <?php p($user['class'])?>班</div>
			<div class="name"><?php p($user['name'])?></div>
			<div class="photo"><img src="<?php p($webinfo["webhost"].'include/plugin/getFace.php?str='.$user['uid'].'&grade='.$user['grade']);?>"></div>
		</li>
		<?php $i++;}?>
	</ul>
</div>
<?php include("footer.php")?>
</body>