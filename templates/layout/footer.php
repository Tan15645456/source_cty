<div id="footer" class="clearfix lazy" data-bg="url(thumb/1366x648/1/<?=_upload_hinhanh_l.$bgfooter['photo_vi']?>)">

	<div class="content_footer_full">
		<div class="inner">
			<div class="row">
				<div class="item_footer col-md-5 col-sm-12 col-xs-12">
					<div class="name_company"><?=$row_setting['ten_'.$lang]?></div>
					<div class="noidung_ft">
						<p><img src="images/icondcft.png"><?=$footer['diachi']?></p>
						<p><img src="images/iconcalft.png"><?=$footer['dienthoai']?></p>
						<p><img src="images/iconemailft.png"><?=$footer['email']?></p>
						<p><img src="images/iconwebft.png"><?=$footer['web']?></p>
						
					</div>
					<div class="social">
						<?php foreach ($mxh as $key => $value) { ?>
							<a href="<?=$value['url']?>" title="<?=$value['ten']?>" target="_blank"><img src="thumb/40x40/1/<?=_upload_hinhanh_l.$value['photo']?>" alt="<?=$value['ten']?>"></a>
						<?php } ?>
					</div>
				</div>
				<div class="item_footer col-md-3 col-sm-6 col-xs-12">
					<div class="title_footer">Chính sách công ty</div>
					<ul>
						<?php foreach ($chinhsach as $key => $value) { ?>
							<li><h3><a href="<?=$value['tenkhongdau']?>"><?=$value['ten']?></a></h3></li>
						<?php } ?>
					</ul>
					<?php if($bct){ ?>
						<a href="<?=$bct['link']?>"><img src="thumb/141x53/1/<?=_upload_hinhanh_l.$bct['photo_vi']?>" alt="Đã đăng ký bộ công thương"></a>
					<?php } ?>
				</div>
				<div class="item_footer col-md-4 col-sm-6 col-xs-12">
					<div class="title_footer">Fanpage</div>
					<div class="fb-page" data-href="<?=$row_setting['facebook']?>" data-tabs="timeline" data-width="500" data-height="210" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?=$row_setting['facebook']?>" class="fb-xfbml-parse-ignore"><a href="<?=$row_setting['facebook']?>">Facebook</a></blockquote></div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>

</div>
<div id="bottom" class="clearfix">
	<div class="inner">
		<div class="copyright">Copyright &copy 2019 <?=$row_setting['ten_'.$lang]?>. Web design by Nina.vn</div>
		<div class="counter">
			<span>Online: <?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span>
			<span>Ngày: <?=$today_visitors?></span>
			<span>Tuần: <?=$week_visitors?></span>
			<span>Tháng <?=$month_visitors?></span>
			<span>Tổng truy cập: <?=$all_visitors?></span>
		</div>
	</div>
</div>
<?php 
	include_once _template.'layout/menu_mobile.php'; 
?>