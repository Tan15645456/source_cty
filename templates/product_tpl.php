<div class="sub_main">
  <div class="title_main"><span><?=$title_detail?></span></div>
  <div class="content_main clearfix">
      <div class="row_product">
          <?php
            if(count($product)>0){
            foreach ($product as $key => $value) { ?>
            <div class="col_product col-md-3 col-sm-4 col-xs-6">
              <div class="box_product">
                  <div class="img_product">
                      <a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten_vi']?>"><img src="thumb/280x220/1/<?=_upload_product_l.$value['photo']?>" alt="<?=$value['ten_'.$lang]?>" class="w100"></a>
                  </div>
                   <h3 class="name_product"><a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten_vi']?>"><?=$value['ten_'.$lang]?></a></h3>
                   <p class="dienthoai"><?=$row_setting['dienthoai']?></p>
                   <div class="mota"><?=catchuoi($value['mota'],150)?></div>
              </div>
            </div>
          <?php } } ?>
      </div>
  </div><!--content main-->
  <div class="wrap"><div class="auto"><?=$paging?></div></div>
</div><!--end sub main-->

