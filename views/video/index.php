<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/12
 * Time: 下午3:12
 */
$this->registerCssFile('/css/video.min.css');
$this->registerJsFile('/js/video/video.min.js');
?>
<div class="panel panel-default">
    <div class="panel-body video-box">
        <video id="my-video" class="video-js " controls preload="auto" poster="/images/p1.jpg" style="width: 100%;height: 100%">
            <source src="/files/video/d0389kxx5sb.mp4" type='video/mp4' />
            <p class="vjs-no-js">查看这个视频请启用JavaScript,并考虑升级到一个web浏览器
                <a href="javascript:;" target="_blank">支持HTML5视频</a>
            </p>
        </video>
    </div>
</div>
<?php
$js = <<<EOD
    var myPlayer = videojs('my-video');
    $('.video-box').height($(window).height() - 100)
    myPlayer.play();
EOD;
$this->registerJs($js);
?>