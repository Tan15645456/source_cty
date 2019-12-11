<?php  if(!defined('_source')) die("Error");
    $upload_file = _upload_hinhanh_l;
    $title_bar = $row_setting['title'];
    $keywords_bar = $row_setting['keywords'];
    $description_bar = $row_setting['description'];
    $row_detail['photo'] = $logo['photo_'.$lang];
    
    $d->reset();
    $d->query("select ten_vi,id,link,photo_vi as photo,thumb_vi as thumb from #_photo where hienthi=1 and type='slider' order by id asc");
    $slider = $d->result_array();

	$d->reset();
	$d->query("select ten_$lang,id,tenkhongdau,photo,giaban,giacu,soluong,mota_$lang as mota from #_product where type='dichvu' and noibat=1 and hienthi=1 order by stt,id desc limit 0,9");
	$dichvu_index = $d->result_array();

    $d->reset();
    $d->query("select ten_$lang,id,tenkhongdau,photo,giaban,giacu,soluong,mota_$lang as mota from #_product where type='congtrinh' and noibat=1 and hienthi=1 order by stt,id desc limit 0,8");
    $congtrinh_index = $d->result_array();


    $d->reset();
    $d->query("select id,ten_$lang as ten,photo,mota_$lang as mota,tenkhongdau,ngaytao from #_baiviet where type='tintuc' and noibat=1 and hienthi=1 order by stt asc,id desc");
    $news_scroll=$d->result_array();

    $d->reset();
    $d->query("select id,ten_$lang as ten,links from #_video where hienthi=1 and type='video' order by stt,id desc");
    $video = $d->result_array();

?>