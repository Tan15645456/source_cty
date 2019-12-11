<nav id="menu_bootstrap">
  	<ul>
  		<li <?=$_GET['com']=='' ? 'class="menu_active"':''?>><a href="" class="transitionAll">Trang Chủ</a></li>
  		  <li <?=$_GET['com']=='gioi-thieu' ? 'class="menu_active"':''?>><a href="gioi-thieu" class="transitionAll">Giới thiệu</a></li>
       <li <?=$_GET['com']=='dich-vu'?'class="menu_active"':''?>><a href="dich-vu" class="transitionAll">Dịch Vụ</a>
                <ul>
              <?php foreach ($list as $key => $value_l) { 
                    $d->reset();
                    $d->query("select ten_vi as ten,tenkhongdau,id from #_product_cat where id_list='".$value_l['id']."' and type='dichvu' and hienthi=1 order by stt,id desc");
                    $catm = $d->result_array();
                ?>
                    <li><a href="<?=$value_l['tenkhongdau']?>"><?=$value_l['ten']?></a>
                        <?php if($catm){ ?>
                            <ul>
                                <?php foreach ($catm as $key => $value_c) {?>
                                    <li><a href="<?=$value_c['tenkhongdau']?>"><?=$value_c['ten']?></a></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>
                <?php } ?>
                </ul>
            </li>
          <li <?=$_GET['com']=='cong-trinh'?'class="menu_active"':''?>><a href="cong-trinh" class="transitionAll">Công trình</a></li>

            <li <?=$_GET['com']=='coc-be-tong'?'class="menu_active"':''?>><a href="coc-be-tong" class="transitionAll">Sản xuất cọc bê tông</a></li>

            <li <?=$_GET['com']=='tin-tuc'?'class="menu_active"':''?>><a href="tin-tuc" class="transitionAll"><?=_tintuc?></a></li>
            <li <?=$_GET['com']=='lien-he'?'class="menu_active"':''?>><a href="lien-he" class="transitionAll"><?=_lienhe?></a></li>
  	</ul>
</nav>

