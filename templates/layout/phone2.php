<style>
	body {padding-bottom:40px;}
	div.phone_mobi{background: #3399ff;width:100%;position:fixed;left:0;bottom:0;height:40px;line-height:40px;color:#fff;display: none;z-index: 9999}
    div.phone_mobi ul{list-style:none;padding:0px;}
    div.phone_mobi ul li{display:inline-block;vertical-align:top;width:32%;text-align:center;}
    div.phone_mobi ul li a{color:#fff;text-decoration:none;font-size:15px;}
    div.phone_mobi ul li a i{font-size:22px;margin-right:10px;margin-top:3px;}
    .blink_me {-webkit-animation-name: blinker;-webkit-animation-duration: 1s;-webkit-animation-timing-function: linear;-webkit-animation-iteration-count: infinite;-moz-animation-name: blinker;-moz-animation-duration: 1s;-moz-animation-timing-function: linear;-moz-animation-iteration-count: infinite;animation-name: blinker;
    animation-duration: 1s;animation-timing-function: linear;animation-iteration-count: infinite;}
    @-moz-keyframes blinker {  0% { opacity: 1.0; }50% { opacity: 0.0; }100% { opacity: 1.0; }}
    @-webkit-keyframes blinker {  0% { opacity: 1.0; }50% { opacity: 0.0; }100% { opacity: 1.0; }}	
    @keyframes blinker {0% { opacity: 1.0; }50% { opacity: 0.0; }100% { opacity: 1.0; }}
    </style>
    <div class="phone_mobi">
        <ul>
            <li><a class="blink_me" href="tel:<?=preg_replace('/[^0-9]/','',$row_setting['dienthoai']);?>"><i class="fa fa-phone" aria-hidden="true"></i>Gọi điện</a></li>
            <li><a href="sms:<?=preg_replace('/[^0-9]/','',$row_setting['dienthoai']);?>"><i class="fa fa-comments" aria-hidden="true"></i>Nhắn tin</a></li>
            <li><a href="lien-he"><i class="fa fa-map-marker" aria-hidden="true"></i>Chỉ đường</a></li>
        </ul>
    </div>