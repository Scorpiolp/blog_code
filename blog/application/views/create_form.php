<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<br />
<div>
	<table class="am-table am-table-bordered am-table-striped am-table-hover">
		<form action="publish" method="post" class="am-form">
		<tr>
		<td>Passage Name</td>
		<td> <input type="text" name="PassageName" class="am-form-field am-radius" placeholder="Passage name" value="<?php echo set_value('PassageName')?>"/>
		<?php echo form_error('PassageName','<span>','</span>'); ?>
		</td>
		</tr>
		<tr>
		<td>Author Name</td>
		<td> <input type="text" name="AuthorName" class="am-form-field am-radius" placeholder="Author Name" value="<?php echo set_value('AuthorName')?>"/>
		<?php echo form_error('AuthorName','<span>','</span>'); ?>
		</td>
		</tr>
		<tr>
		<td>Text</td>
		<td> <textarea name="Text" id="" cols="80" class="am-form-field am-radius" placeholder="Text" rows="20"><?php echo set_value('Text')?></textarea>
		<?php echo form_error('Text','<span>','</span>'); ?>
		</td>
		</tr>
		<tr>
		<td><input type="submit" class="am-btn am-btn-primary am-round" name="submit" value="submit"/></td>
		<td><input type="reset" class="am-btn am-btn-danger am-round" name="reset" value="reset"/></td>
		</tr>		
		</form>
	</table>
	</div>
</body>
</html>