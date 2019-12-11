<div id="header" class="clearfix lazy" data-bg="url(thumb/1366x120/1/<?=_upload_hinhanh_l.$bgbanner['photo_'.$lang]?>)">
  <div id="banner">
    <div class="inner">
      <?php if(!$_GET['id']){ ?><h1><?=$title_bar?></h1><?php } ?>
      <div class="logo">
        <a href=""><img src="thumb/192x91/1/<?=_upload_hinhanh_l.$logo['photo_'.$lang]?>" alt="<?=$row_setting['ten_'.$lang]?>" class="mw100"/></a>
      </div>
      <div class="company"><img src="thumb/700x105/1/<?=_upload_hinhanh_l.$banner['photo_'.$lang]?>" alt="<?=$row_setting['ten_'.$lang]?>" class="mw100"/></div>
      <div class="tophdright">
          <p class="tophotline">Hotline hỗ trợ:</p>
          <p><?=$row_setting['dienthoai']?></p>
          <p><?=$row_setting['hotline']?></p>
      </div>
    </div>
  </div>
</div>