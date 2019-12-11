<div class="top_dichvu">
	<div class="title_dv">
		<span>Dịch vụ tiêu biểu</span>
	</div>
	<div class="xemthem"><a href="dich-vu">Xem thêm >></a></div>
	<div class="clearfix"></div>
</div>
<div class="col_dichvu">
	<div class="row_dv">
	<?php foreach ($dichvu_index as $key => $value) {?>
		<div class="boxdv">
		 <div class="img_product">
            <a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten_vi']?>"><img data-src="thumb/280x220/1/<?=_upload_product_l.$value['photo']?>" alt="<?=$value['ten_'.$lang]?>" class="w100 lazy"></a>
          </div>
           <h3 class="name_product"><a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten_vi']?>"><?=$value['ten_'.$lang]?></a></h3>
           <p class="dienthoai"><?=$row_setting['dienthoai']?></p>
           <div class="mota"><?=catchuoi($value['mota'],150)?></div>
        </div>
	<?php }?>
	</div>
</div>