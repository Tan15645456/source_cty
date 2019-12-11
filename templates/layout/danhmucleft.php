<div class="danhmucsp">
	<div class="title_dm">
		Danh mục sản phẩm
	</div>
  <ul>
  <?php foreach ($list as $key => $value_l) { 
    ?>
        <li><a href="<?=$value_l['tenkhongdau']?>"><?=$value_l['ten']?></a>
        </li>
    <?php } ?>
    </ul>
</div>
<div class="hotro">
	<div class="title_dm">
		Hỗ trợ trực tuyến
	</div>
	<div class="imghotro">
		<img src="images/imghotro.png">
	</div>
	<div class="sohotline">
		<div class="sohotro"><?=$row_setting['dienthoai']?></div>
	</div>
	<div class="contentht">
		<?php for ($i=0; $i < count($hotro) ; $i++) { ?>
		<div class="hotrotructuyen">
			<p class="titleht">Hỗ trợ <?=$i+1?></p>
			<div class="zalo">
				<span>Zalo</span>
				<a href="https://zalo.me/<?=$row_setting['dienthoai']?>" target="_blank"><img src="images/iconzl.png"></a>
			</div>
			<div class="clearfix"></div>
			<p>Hotline: <span><?=$hotro[$i]['dienthoai']?></span></p>
			<p>Email: <?=$hotro[$i]['email']?></p>
		</div>
		<?php }?>
	</div>
</div>