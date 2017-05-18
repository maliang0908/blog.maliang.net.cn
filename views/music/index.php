<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/12
 * Time: 下午3:12
 */
$this->registerCssFile('/css/music.css');
$this->registerJsFile('/js/jquery-1.7.2.min.js', ['depends' => \app\assets\AppAsset::className()]);
$this->registerJsFile('/js/custom.min.js', ['depends' => \app\assets\AppAsset::className()]);
$this->registerJsFile('/js/music.js', ['depends' => \app\assets\AppAsset::className()]);
?>
<div class="panel panel-default">
    <div class="panel-body music-box" style="min-width: 620px">
        <div class="kePublic">
            <div id="background"></div>
            <div id="player">
                <div class="cover"></div>
                <div class="ctrl">
                    <div class="tag">
                        <strong>Title</strong>
                        <span class="artist">Artist</span>
                        <span class="album">Album</span>
                    </div>
                    <div class="control">
                        <div class="left">
                            <div class="rewind icon"></div>
                            <div class="playback icon"></div>
                            <div class="fastforward icon"></div>
                        </div>
                        <div class="volume right">
                            <div class="mute icon left"></div>
                            <div class="slider left">
                                <div class="pace"></div>
                            </div>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="slider">
                            <div class="loaded"></div>
                            <div class="pace"></div>
                        </div>
                        <div class="timer left">0:00</div>
                        <div class="right">
                            <div class="repeat icon"></div>
                            <div class="shuffle icon"></div>
                        </div>
                    </div>
                </div>
            </div>
            <ul id="playlist"></ul>
        </div>
    </div>
</div>
<?php
$js = <<<EOD
playlist = [
{
    title: '德国第一装甲师进行曲',
    artist: '德国',
    album: '德国第一装甲师进行曲.mp3',
    cover:'/images/music/1.jpg',
    mp3: '/files/mp3/deguo.mp3',
    ogg: ''
},
{
    title: '亡灵序曲',
    artist: '魔兽世界',
    album: '魔兽世界 - 亡灵序曲.mp3',
    cover: '/images/music/2.jpg',
    mp3: '/files/mp3/The Dawn.mp3',
    ogg: ''
},
{
    title: 'chenparty dj.mp3',
    artist: '德国童声',
    album: 'chenparty 超好听的德国童声 dj.mp3',
    cover: '/images/music/3.jpg',
    mp3: '/files/mp3/chenparty dj.mp3',
    ogg: ''
},
{
    title: '德国第一装甲师进行曲',
    artist: '德国',
    album: '德国第一装甲师进行曲.mp3',
    cover:'/images/music/1.jpg',
    mp3: '/files/mp3/deguo.mp3',
    ogg: ''
},
{
    title: '亡灵序曲',
    artist: '魔兽世界',
    album: '魔兽世界 - 亡灵序曲.mp3',
    cover: '/images/music/2.jpg',
    mp3: '/files/mp3/The Dawn.mp3',
    ogg: ''
},
{
    title: 'chenparty dj.mp3',
    artist: '德国童声',
    album: 'chenparty 超好听的德国童声 dj.mp3',
    cover: '/images/music/3.jpg',
    mp3: '/files/mp3/chenparty dj.mp3',
    ogg: ''
},
{
    title: '德国第一装甲师进行曲',
    artist: '德国',
    album: '德国第一装甲师进行曲.mp3',
    cover:'/images/music/1.jpg',
    mp3: '/files/mp3/deguo.mp3',
    ogg: ''
},
{
    title: '亡灵序曲',
    artist: '魔兽世界',
    album: '魔兽世界 - 亡灵序曲.mp3',
    cover: '/images/music/2.jpg',
    mp3: '/files/mp3/The Dawn.mp3',
    ogg: ''
}
];
EOD;
$this->registerJs($js, \yii\web\View::POS_HEAD);
$js = <<<EOD
$('.music-box').height($(window).height());
EOD;
$this->registerJs($js);
?>