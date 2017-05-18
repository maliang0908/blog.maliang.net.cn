<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/12
 * Time: 下午3:12
 */
use yii\helpers\Html;
use yii\bootstrap\Nav;
$this->params['breadcrumbs'] = [
    ['label' => '文章', 'url' => ['article/index']],
    'yii2.0表单小部件使用'
];
?>
<div class="row">
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-body">
                <!-- 标题 -->
                <div class="page-header">
                    <h1>
                        yii2.0表单小部件使用
                        <small>[ PHP技术 ]</small>
                    </h1>
                </div>
                <div class="action">
                    <!-- 作者 -->
                    <span>
                        <a href="/user/42068">
                            <i class="fa fa-user"></i>
                            海海丫
                        </a>
                    </span>
                    <!-- 时间 -->
                    <span>
                        <i class="fa fa-clock-o"></i>
                        2017-05-12 11:29:58
                    </span>
                    <!-- 浏览次数 -->
                    <span>
                        <i class="fa fa-eye"></i>
                        73次浏览
                    </span>
                    <!-- 评论次数 -->
                    <span>
                        <a href="#comments">
                            <i class="fa fa-comments-o"></i>
                            0条评论
                        </a>
                    </span>
                    <!-- 收藏次数 -->
                    <span>
                        <a class="favorite" href="javascript:void(0);" title="" data-type="post" data-id="1265" data-toggle="tooltip" data-original-title="收藏">
                            <i class="fa fa-star-o"></i>
                            0
                        </a>
                    </span>
                    <span class="pull-right">
                        <!-- 顶次数 -->
                        <a class="vote up" href="javascript:void(0);" title="" data-type="post" data-id="1265" data-toggle="tooltip" data-original-title="顶">
                            <i class="fa fa-thumbs-o-up"></i>
                            0
                        </a>
                        <!-- 踩次数 -->
                        <a class="vote down" href="javascript:void(0);" title="" data-type="post" data-id="1265" data-toggle="tooltip" data-original-title="踩">
                            <i class="fa fa-thumbs-o-down"></i>
                            0
                        </a>
                    </span>
                </div>
                <!-- 文章内容 -->
                <h2>邮件配置 <a id="email-config"></a></h2>
                <p>接下来的文档将详细介绍如何设置 Ghost 邮件，Ghost 使用的是 <a href="https://github.com/andris9/Nodemailer">Nodemailer</a>，在他们的文档中能找到更多的示例。</p>
                <h3>马上开始</h3>
                <p>如果你对 PHP 比较熟悉，那么你可能很习惯让你的邮件很神奇地运行在自己的主机平台上。而 Node 会有一些不同，它很新很吸引人，而且依然不是一个很成熟的平台。</p>
                <p>不过不用怕，设置你的邮件是一次性的，我们来一起搞定它。</p>
                <h3>为什么需要设置邮件</h3>
                <p>目前，Ghost 使用邮件只是为了在你忘记密码的时候，发送一个新密码到你的邮箱。它的功能的确不多，但是不要低估它的重要性，我猜你曾经一定在某个时候特别需要它。</p>
                <p>将来，Ghost 还将支持基于邮件系统的博客订阅。以及通过电子邮件发送新用户的详细信息和其它一些基于邮件系统的小功能。</p>
                <h2>如何设置？ <a id="how-to"></a></h2>
                <p>首先，需要你有一个邮件发送服务器的帐号。我们强烈推荐 Mailgun。他们能提供很好的免费入门账户，允许你发送更多的邮件，并且能管理更多的基于邮件订阅的博客。当然你也可以用 Gmail 或者 Amazon SES。</p>
                <p>一旦你选择了你想要电子邮件服务，你需要将你的设置添加到 Ghost 的配置文件当中。不管你的 Ghost 安装在哪个目录，你应该能在 <code class="path">index.js</code> 所在的目录中找到一个名叫 <code class="path">config.js</code> 的文件，如果没有，可以复制 <code class="path">config.example.js</code> 然后重命名。</p>
                <h3>Mailgun <a id="mailgun"></a></h3>
                <p>前往 <a href="http://www.mailgun.com/">mailgun.com</a> 注册一个账户。你需要手头上有一个电子邮件地址，并会被要求提供一个域名或者想出一个子域名。这个选项以后可以修改，所以现在我们先注册一个与博客名称类似的字域名。</p>
                <p>验证你的邮件地址，然后你将可以访问 Mailgun 可爱的控制面板。你需要通过在右边点击你的域名来找到 Mailgun 提供给你的信的邮件服务用户名和密码（而不是刚刚注册的那个）。下面的小视频可以帮你找到这些东西。</p>
                <p><img src="/images/a1.jpg" alt="Mailgun details" width="100%">   </p>
                <p>好了，万事俱备，只欠东风，是时候打开配置文件了。用你喜欢的文本编辑器打开 <code class="path">config.js</code>。找到你想设置邮件的地方，像下面这样修改邮件设置：</p>
                <div class="highlight">
                    <pre>
                        <code class="text language-text" data-lang="text">
                            mail: {
                            transport: 'SMTP',
                            options: {
                            service: 'Mailgun',
                            auth: {
                            user: '',
                            pass: ''
                            }
                            }
                            }
                        </code>
                    </pre>
                </div>
                <p>把你 Mailgun 的登录名填入  'user' 后面的引号里面，再把你的 Mailgun 密码填入 'pass' 后面的引号里。如果我用 'tryghosttest' 账户设置我的 Mailgun，它应该看起来像这样：</p>
                <div class="highlight">
                    <pre>
                        <code class="text language-text" data-lang="text">
                            mail: {
                            transport: 'SMTP',
                            options: {
                            service: 'Mailgun',
                            auth: {
                            user: 'postmaster@tryghosttest.mailgun.org',
                            pass: '25ip4bzyjwo1'
                            }
                            }
                            }
                        </code>
                    </pre>
                </div>
                <p>留意所有的冒号、引号和大括号。放错任意一个，等待你的都将是一个莫名其妙的错误结果。</p>
                <p>如果有条件，你可以为你的开发和生产环境使用重复的设置。</p>
                <h3>Amazon SES <a id="ses"></a></h3>
                <p>你可以在 <a href="http://aws.amazon.com/ses/">http://aws.amazon.com/ses/</a> 注册一个 Amazon Simple Email Service 账户。一旦你完成注册，你将得到一个访问密钥和“秘密”（secret）。</p>
                <p>使用你喜欢的编辑器打开 Ghost 的 <code class="path">config.js</code> 文件，找到你想设置邮件的地方，添加你的 Amazon 证书，如下所示：</p>
                <div class="highlight">
                    <pre>
                        <code class="text language-text" data-lang="text">
                            mail: {
                            transport: 'SES',
                            options: {
                            AWSAccessKeyID: "AWSACCESSKEY",
                            AWSSecretKey: "/AWS/SECRET"
                            }
                            }
                        </code>
                    </pre>
                </div>
                <h3>Gmail <a id="gmail"></a></h3>
                <p>也可以使用 Gmail 从 Ghost 发送电子邮件。如果你算使用 Gmail，我们建议你 <a href="https://accounts.google.com/SignUp">创建一个新的账户</a> ，而不是使用任何已有的个人账户。</p>
                <p>当你的新账户创建完成，你可以在 Ghost 的 <code class="path">config.js</code> 文件中修改配置。用你喜欢的文本编辑器打开文件，找到你想设置邮件的地方，像下面这样更改你的邮件设置：</p>
                <div class="highlight">
                    <pre>
                        <code class="text language-text" data-lang="text">
                            mail: {
                            transport: 'SMTP',
                            options: {
                            auth: {
                            user: 'youremail@gmail.com',
                            pass: 'yourpassword'
                            }
                            }
                            }
                        </code>
                    </pre>
                </div>
                <h3>发件地址 <a id="from"></a></h3>
                <p>默认情况下，从 Ghost 发出的邮件发间地址为你在通用设置（settings - general）页面所填写的地址。如果你想使用不同的地址，你也可以在 <code class="path">config.js</code> 文件中修改它。</p>
                <div class="highlight">
                    <pre>
                        <code class="text language-text" data-lang="text">
                            mail: {
                            fromaddress: 'myemail@address.com',
                            }
                        </code>
                    </pre>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div id="comments">
                    <div class="page-header">
                        <?= Html::tag('h2','共 <em>2</em> 条评论'); ?>
                        <?=
                        Nav::widget([
                            'options' => ['class' => 'nav nav-tabs nav-sub'],
                            'items' => [
                                ['label' => '默认排序' ,'url' => '/sort', 'link', 'active' => true],
                                ['label' => '最后评论' ,'url' => '/desc', 'active' => false],
                            ]
                        ]);
                        ?>
                    </div>
                    <ul id="w1" class="media-list">
                        <li class="media" data-key="5512">
                            <div class="media-left">
                                <a href="/user/38329" rel="author">
                                    <img class="media-object" src="/images/a2.jpg" alt="wushshsha">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="/user/38329" rel="author">wushshsha</a>
                                    评论于 2017-05-12 10:01
                                    <span class="pull-right">
                                    <a class="report" data-type="comment" data-id="5512" href="javascript:void(0);">
                                        <i class="fa fa-flag-checkered"></i>
                                        举报
                                    </a>
                                    </span>
                                </div>
                                <div class="media-content">
                                    <p>mark，以后会用到</p>
                                    <div class="hint">
                                        共
                                        <em>2</em>
                                        条回复
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="/user/32493" rel="author">
                                                <img class="media-object" src="/images/a7.jpg" alt="iceluo">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="/user/32493" rel="author">iceluo</a>
                                                评论于 2015-08-24 14:02
<span class="pull-right">
<a class="reply" href="javascript:void(0);">
    <i class="fa fa-reply"></i>
    回复
</a>
</span>
                                            </div>
                                            <div class="media-content">
                                                <p>foreach</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="/user/32674" rel="author">
                                                <img class="media-object" src="/images/a8.jpg" alt="晦涩de咚">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="/user/32674" rel="author" data-original-title="" title="">晦涩de咚</a>
                                                评论于 2015-11-26 10:12
<span class="pull-right">
<a class="reply" href="javascript:void(0);">
    <i class="fa fa-reply"></i>
    回复
</a>
</span>
                                            </div>
                                            <div class="media-content">
                                                <p>
                                                    <a href="/user/32493" rel="author" data-original-title="" title="">@iceluo</a>
                                                    确实不错
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-action">
                                    <a class="reply" href="javascript:void(0);">
                                        <i class="fa fa-reply"></i>
                                        回复
                                    </a>
                                    <span class="pull-right">
                                        <a class="vote up" href="javascript:void(0);" title="" data-type="comment" data-id="5512" data-toggle="tooltip" data-original-title="顶">
                                            <i class="fa fa-thumbs-o-up"></i>
                                            0
                                        </a>
                                        <a class="vote down" href="javascript:void(0);" title="" data-type="comment" data-id="5512" data-toggle="tooltip" data-original-title="踩">
                                            <i class="fa fa-thumbs-o-down"></i>
                                            0
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="media" data-key="5516">
                            <div class="media-left">
                                <a href="/user/28426" rel="author">
                                    <img class="media-object" src="/images/a3.jpg" alt="qc100f">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="/user/28426" rel="author">qc100f</a>
                                    评论于 2017-05-12 17:08
                                    <span class="pull-right">
                                    <a class="report" data-type="comment" data-id="5516" href="javascript:void(0);">
                                        <i class="fa fa-flag-checkered"></i>
                                        举报
                                    </a>
                                    </span>
                                </div>
                                <div class="media-content">
                                    <p>挺好，以后会用到</p>
                                </div>
                                <div class="media-action">
                                    <a class="reply" href="javascript:void(0);">
                                        <i class="fa fa-reply"></i>
                                        回复
                                    </a>
                                    <span class="pull-right">
                                        <a class="vote up" href="javascript:void(0);" title="" data-type="comment" data-id="5516" data-toggle="tooltip" data-original-title="顶">
                                            <i class="fa fa-thumbs-o-up"></i>
                                            0
                                        </a>
                                        <a class="vote down" href="javascript:void(0);" title="" data-type="comment" data-id="5516" data-toggle="tooltip" data-original-title="踩">
                                            <i class="fa fa-thumbs-o-down"></i>
                                            0
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <!-- 评论区 -->
                <div id="comment">
                    <div class="page-header">
                        <h2>发表评论</h2>
                    </div>
                    <div class="well danger">
                        您需要登录后才可以评论。
                        <a href="/login">登录</a>
                        |
                        <a href="/signup">立即注册</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->render('right-content'); ?>
</div>