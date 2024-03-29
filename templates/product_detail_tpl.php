<div class="sub_main clearfix">
  <div class="title_main"><span><?=_chitietsanpham?></span></div>
  <div class="content_main">
    <div class="row">
      <div class="img_detail col-md-5 col-sm-6 col-xs-12">
        <div class="main_img_detail">
          <a id="Zoomer" href="<?=_upload_product_l.$row_detail['photo']?>" class="MagicZoomPlus" rel="zoom-width:300px; zoom-height:300px;selectors-effect-speed: 600; selectors-class: Active;">
            <img src="thumb/625x500/1/<?=_upload_product_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"/>
          </a>
        </div>
        <?php include_once "layout/module/sub_img_detail_h.php"; ?>
      </div>

      <div class="info_detail col-md-7 col-sm-6 col-xs-12">
        <div class="item_info_detail name_detail"><h1><?=$row_detail['ten_'.$lang]?></h1></div>
        <div class="item_info_detail"><b><?=_masanpham?> : </b><span><?=$row_detail['masp']?></span></div>
        <div class="item_info_detail clearfix">
          <span class="price_now"><?=($row_detail['giaban']==0)?'Liên hệ':number_format($row_detail['giaban'],0,',','.')."đ"?></span>
          <?php if($row_detail['giacu']>0){?><span class="price_old">(<?=number_format($row_detail['giacu'],0,',','.')."đ"?>)</span><?php } ?>
        </div>
        <div class="item_info_detail"><b><?=_mota?> : </b><?=$row_detail['mota_'.$lang]?></div>
        
        <div class="item_info_detail"><?php include_once _template.'layout/module/share.php'; ?></div>

      </div>
      <div class="clear"></div>
    </div>
    <div class="bottom_detail">
        <div class="contain_tab">
            <a href="#noidung_chitiet" class="item_tab active" ><?=_noidungchitiet?></a>
            <a href="#binhluan" class="item_tab" ><?=_binhluan?></a>
        </div><!--end contain tab-->
        <div class="clear"></div>
        <div class="contain_content_tab">
            <div id="noidung_chitiet" class="content_tab active ">
                <div class="text">
                    <?=check_ssl_content($row_detail['noidung_'.$lang])?>
                </div>
            </div>
            <div id="binhluan" class="content_tab">
              <div class="fb-comments" data-href="<?=getCurrentPageURL_CANO()?>" data-width="100%" data-numposts="5"></div>
            </div>
        </div>
    </div>
  </div>
</div>
<div class="sub_main clearfix">
    <div class="title_main"><span><?=$title_other?></span></div>
    <div class="content_main clearfix">
        <div class="row">
          <?php
              if(count($product)>0){
              foreach ($product as $key => $value) { ?>
                <div class="col_product col-md-3 col-sm-4 col-xs-6">
                  <div class="box_product">
                      <div class="img_product">
                          <a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten_vi']?>"><img src="thumb/280x260/1/<?=_upload_product_l.$value['photo']?>" alt="<?=$value['ten_'.$lang]?>" class="w100"></a>
                      </div>
                    <h3 class="name_product"><a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten_vi']?>"><?=$value['ten_'.$lang]?></a></h3>
                   <p class="dienthoai"><?=$row_setting['dienthoai']?></p>
                   <div class="mota"><?=catchuoi($value['mota'],150)?></div>
                  </div>
                </div>
            <?php } } ?>
        </div>
    </div>
</div>
