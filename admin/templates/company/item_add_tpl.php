
<script type="text/javascript">		
	$(document).ready(function() {
		$('.chonngonngu li a').click(function(event) {
			var lang = $(this).attr('href');
			$('.chonngonngu li a').removeClass('active');
			$(this).addClass('active');
			$('.lang_hidden').removeClass('active');
			$('.lang_'+lang).addClass('active');
			return false;
		});
	});
</script>

<form name="supplier" id="validate" class="form" action="index.php?com=company&act=save<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" method="post" enctype="multipart/form-data">

	<div class="control_frm" style="margin-top:25px;">
	    <div class="bc">
	        <ul id="breadcrumbs" class="breadcrumbs">
	        	<li><a href="index.php?com=company&act=capnhat<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span>Cập nhật <?=$title_main?></span></a></li>
	        </ul>
	        <div class="clear"></div>
	    </div>
	</div>

	<div class="widget">
<?php
 if(count($config['lang'])>1) {?>
	<div class="title chonngonngu">
		<ul>
		<?php foreach ($config['lang'] as $key => $value) { ?>
			<li><a href="<?=$key?>" class="<?=$key==$config['lang_active']?'active':''?> tipS validate[required]" title="Chọn <?=$value?>"><?=$value?></a></li>
		<?php } ?>
		</ul>
	</div>
<?php } ?>
       

<?php foreach ($config['lang'] as $key => $value) { ?>
<div class="contain_lang_<?=$key?> contain_lang <?=$key==$config['lang_active']?'active':''?>">
	<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
		<h6>Nội dung <?=$value?></h6>
	</div>
	<?php if($config_noidung=='true'){?>
	<div class="formRow">
		<label>Nội Dung <?=$key!=$config['lang_active']?'('.$key.')':''?></label>
		<div class="ck_editor">
            <textarea id="noidung_<?=$key?>" name="data[noidung_<?=$key?>]"><?=@$item['noidung_'.$key]?></textarea>
		</div>
		<div class="clear"></div>
	</div>
	<?php }?>
</div><!--lang-->
<?php } ?>

	<?php if($config_thongtin=='true'){?>
 		<div class="formRow">
			<label>Địa chỉ</label>
			<div class="formRight">
                <input type="text" name="diachi" title="Nhập địa chỉ" id="diachi" class="tipS" value="<?=@$item['diachi']?>" />
			</div>
			<div class="clear"></div>
		</div>
		<div class="formRow">
			<label>Điện thoại</label>
			<div class="formRight">
                <input type="text" name="dienthoai" title="Nhập điện thoại" id="dienthoai" class="tipS" value="<?=@$item['dienthoai']?>" />
			</div>
			<div class="clear"></div>
		</div>
		<div class="formRow">
			<label>Email</label>
			<div class="formRight">
                <input type="text" name="email" title="Nhập email" id="email" class="tipS" value="<?=@$item['email']?>" />
			</div>
			<div class="clear"></div>
		</div>
		<div class="formRow">
			<label>Website</label>
			<div class="formRight">
                <input type="text" name="web" title="Nhập website" id="web" class="tipS" value="<?=@$item['web']?>" />
			</div>
			<div class="clear"></div>
		</div>
	<?php }?>
	
		<div class="formRow">
            	<input type="submit" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Cập nhật" />
			<div class="clear"></div>
		</div>
	</form>   