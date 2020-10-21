<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
    <div id="aside" class="disNo">
        <?php echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
        <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
    </div>
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- cf 시작 -->
<div id="cfWr">
  <p class="backG"></p>
  <div class="videoWr">
    <iframe src="//player.vimeo.com/video/371581771?quality=1080p&amp;autopause=0&amp;playsinline=1&amp;autoplay=1&amp;
    loop=1&amp;muted=1&amp;background=1"allow="autoplay" playsinline="" webkitallowfullscreen="" mozallowfullscreen=""
    allowfullscreen="" data-ready="true"  width="100%" height="100%" frameborder="0"></iframe>
  </div>
  <div class="videoText">
    <span>감성을 자극하는 </span><strong>#감성커피</strong>
    <a href="">CF보기</a>
  </div>
</div>
<!-- 하단 시작 { -->
<div id="ft">
  <div id="ftWr">
      <div class="ftLeft">
        <h3>감성커피</h3>
        <p>
          <img src="//www.감성커피.com/img/common/ft_tel.png" alt="">
          가맹문의 02.401.1966
        </p>
      </div>
      <div class="ftRigth">
        <div id="ft_link" class="ft_cnt">
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
            <a href="<?php echo get_device_change_url(); ?>">모바일버전</a>
        </div>
        <div id="ft_company" class="ft_cnt">
	        <p class="ftInfo">
    				사업자등록번호:123-45-67890  본사주소: 감성커피<br>
    				T.00-000-0000  F.00-0000-0000 E.b_ 이메일 주소
    			</p>
          <p id="ftCopy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</p>
    	  </div>
        <?php
        //공지사항
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        // echo latest('theme/notice', 'notice', 4, 13);
        ?>
		    <?php
        // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정
        // echo visit('theme/basic');
        ?>
	     </div>
        <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->

      </div>

    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>

    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
