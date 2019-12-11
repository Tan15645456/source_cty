<div class="loaddichvu">
    <div class="inner">
        <div class="danhmucleft">
            <?php include_once _template.'layout/danhmucleft.php';?>
        </div>
        <div class="sanphamright">
            <?php include_once _template.'layout/sanphamright.php';?>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="sub_main clearfix" id="congtrinh">
    <div class="inner">
        <div class="title_main"><span>cÔNG TRÌNH THỰC HIỆN</span></div>
        <div  class="row_product">
            <?php foreach ($congtrinh_index as $key => $value) { ?>
                <div class="col_product col-md-3 col-sm-4 col-xs-6">
                    <div class="box_product">
                        <div class="img_product">
                            <a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten_vi']?>"><img data-src="thumb/280x230/1/<?=_upload_product_l.$value['photo']?>" alt="<?=$value['ten_'.$lang]?>" class="w100 lazy"></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div id="info_consult" class="clearfix">
    <div class="inner">
        <div class="col_tt">
            <div class="title_tt"><span>Tin tức nổi bật</span></div>
            <div class="slicktt">
                 <?php for ($i=0; $i <count($news_scroll) ; $i++) { ?>
                     <?php if($i%2==0){?>
                    <div class="box_tintuc">
                           
                            <div class="img_tt">
                            <a href="<?=$news_scroll[$i]['tenkhongdau']?>" title="<?=$news_scroll[$i]['ten']?>"><img data-src="thumb/150x107/1/<?=_upload_baiviet_l.$news_scroll[$i]['photo']?>" class="lazy" alt="<?=$news_scroll[$i]['ten']?>"></a>
                            </div>
                         
                            <div class="tenmota">
                                <h3 class="ten"><a href="<?=$news_scroll[$i]['tenkhongdau']?>" title="<?=$news_scroll[$i]['ten']?>"><?=$news_scroll[$i]['ten']?></a></h3>
                                <p class="mota"><?=catchuoi($news_scroll[$i]['mota'],210)?></p>
                                <p class="ngaythang"><span>Ngày đăng: <?=date('d/m/y',$news_scroll[$i]['ngaytao'])?></span><span>Đăng bởi: Admin</span></p>
                            </div>

                            <div class="clearfix"></div>
                    </div>
                     <?php } else {?>
                        <div class="box_tintuc">
                             <div class="img_tt2">
                            <a href="<?=$news_scroll[$i]['tenkhongdau']?>" title="<?=$news_scroll[$i]['ten']?>"><img data-src="thumb/150x107/1/<?=_upload_baiviet_l.$news_scroll[$i]['photo']?>" class="lazy" alt="<?=$news_scroll[$i]['ten']?>"></a>
                            </div>

                             <div class="tenmota" id="mota2">
                                <h3 class="ten"><a href="<?=$news_scroll[$i]['tenkhongdau']?>" title="<?=$news_scroll[$i]['ten']?>"><?=$news_scroll[$i]['ten']?></a></h3>
                                <p class="mota"><?=catchuoi($news_scroll[$i]['mota'],210)?></p>
                                <p class="ngaythang"><span>Ngày đăng: <?=date('d/m/y',$news_scroll[$i]['ngaytao'])?></span><span>Đăng bởi: Admin</span></p>
                            </div>
                        </div>
                     <?php }?>
                <?php } ?>
            </div>
        </div>
        <div class="col_video">
             <div class="title_tt"><span>Video clip</span></div>
             <div class="video_popup left_video">
                <iframe title="<?=$video[0]['ten']?>" width="100%" height="360px" src="http://www.youtube.com/embed/<?=getYoutubeIdFromUrl($video[0]['links'])?>" frameborder="0" allowfullscreen></iframe>
            </div>
                    
            <div class="select_video" id="slick_video">
                <?php for($i=0;$i<count($video);$i++){?>
                <a class="xem_video" href="<?=getYoutubeIdFromUrl($video[$i]['links'])?>" title="<?=$video[$i]['ten']?>">
                <img class="img_vd" data-id="<?=getYoutubeIdFromUrl($video[$i]['links'])?>" src="http://img.youtube.com/vi/<?=getYoutubeIdFromUrl($video[$i]['links'])?>/0.jpg" alt="<?=$video[$i]['ten']?>" title="<?=$video[$i]['ten']?>" />
                 </a>
                <?php } ?>
            </div>
            <div id="view_video"></div>
        </div>


    </div>
</div>