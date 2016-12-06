<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	echo "
    
<style>
.row {
    margin: 0px;
}

#use-intro {
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    background-color: #fff;
    margin: 8px;
    padding: 8px;
    padding-left: 20px;
    margin-bottom: 40px;
}
.message{
    background-color:#20af42 !important;
    color:#fff;
}
.success{
    background-color:#20af42;
    color:#fff;
}

#typecho-nav-list{display:none;}
.typecho-head-nav {
    padding: 0 10px; 
    background: #20af42;
}
.typecho-head-nav .operate a{border:none;color: #fff;padding-top: 8px;padding-bottom: 8px;}
.typecho-head-nav .operate a:hover {
	background-color: rgba(0, 0, 0, 0.05);
    color: #fff;
}	
ul.typecho-option-tabs.fix-tabs.clearfix {
    background: #1a9c39;
}
.col-mb-12 {
    padding: 0px!important;
}
.typecho-page-title {
    margin:0;
	height: 70px;
	background: #20af42;
    background-size: cover;
    padding: 30px;
}
.typecho-page-title h2{
	margin: 0px;
    font-size: 3.28571em;
    color: #fff;
}
.typecho-option-tabs{
	padding: 0px;
	background: #fff;
}
.typecho-option-tabs a:hover{
    background-color: rgba(0, 0, 0, 0.05);
    color: rgba(255,255,255,.8);
}
.typecho-option-tabs a{
    border: none;
    height: auto;
    color: rgba(255,255,255,.6);
    padding: 15px;
}
li.current {
    background-color: #FFF;
    height: 4px;
    padding: 0 !important;
    bottom: 0px;
}
.typecho-option-tabs li.current a, .typecho-option-tabs li.active a{
    background:none;
}
.container{
	margin:0;
	padding:0;
}
.body.container {
    min-width: 100% !important;
    padding: 0px;
}
.typecho-option-tabs{
	margin:0;
}
.typecho-option-submit button {
    float: right;
    background: #00BCD4;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    color: #FFF;
}
.typecho-option-tabs li{
	margin-left:20px;
}
.typecho-option{
	border-radius: 3px;
    background: #fff;
    padding: 12px 16px;
}
.col-mb-12{
	padding-left: 0px!important;
}
.typecho-option-submit{
	background:none!important;
}
.typecho-option {
    float: left;
}
.typecho-option span {
    margin-right: 0;
}
.typecho-option label.typecho-label {
    font-weight: 500;
    margin-bottom: 20px;
    margin-top: 10px;
    font-size: 16px;
    padding-bottom: 5px;
    border-bottom: 1px solid rgba(0,0,0,0.2);
}
.typecho-page-main .typecho-option input.text {
    width: 100%;
}
input[type=text], textarea {
    border: none;
    border-bottom: 1px solid rgba(0,0,0,.60);
    outline: none;
    border-radius: 0;
}
.typecho-option-submit {
    position: fixed;
    right: 32px;
    bottom: 32px;
}
@media screen and (max-width: 480px){  
.typecho-option {
    width: 94% !important;
    margin-bottom: 20px !important;
}
}
#typecho-option-item-indexsetup-0 {
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    background-color: #fff;
    margin: 8px 1%;
    padding: 8px 2%;
    width: 29%;
}
#typecho-option-item-themetype-1 {
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    background-color: #fff;
    margin: 8px 1%;
    padding: 8px 2%;
    width: 59%;
}
#typecho-option-item-BGtype-2 {
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    background-color: #fff;
    margin: 8px 1%;
    padding: 8px 2%;
    width: 94%;
}

#typecho-option-item-bgcolor-3, #typecho-option-item-GradientType-4,#typecho-option-item-IndexName-5, #typecho-option-item-BlogName-6,#typecho-option-item-BlogPic-7,#typecho-option-item-BlogJob-8,#typecho-option-item-socialtwitter-10, #typecho-option-item-socialfacebook-11, #typecho-option-item-socialgooglepluse-12,#typecho-option-item-socialgithub-13 {
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    background-color: #fff;
    margin: 8px 1%;
    padding: 8px 2%;
    width: 44%;
    margin-bottom: 40px;
}

#typecho-option-item-Indexwords-9 {
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    background-color: #fff;
    margin: 8px 1%;
    padding: 8px 2%;
    width: 94%;
    margin-bottom: 40px;
}

#typecho-option-item-socialemail-14,#typecho-option-item-socialqq-15,#typecho-option-item-socialweibo-16,#typecho-option-item-socialmusic-17 {
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    background-color: #fff;
    margin: 8px 1%;
    padding: 8px 2%;
    width: 27.333%;
    margin-bottom: 40px;
}

#typecho-option-item-about-18 {
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    background-color: #fff;
    margin: 8px 1%;
    padding: 8px 2%;
    width: 60%;
}
#typecho-option-item-analysis-19 {
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    background-color: #fff;
    margin: 8px 1%;
    padding: 8px 2%;
    width: 94%;
}

#typecho-option-item-favicon-20, #typecho-option-item-titleintro-21 {
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
    background-color: #fff;
    margin: 0 1%;
    padding: 8px 2%;
    width: 44%;
}
</style>

	";
    echo '<p style="font-size:14px;" id="use-intro">
    <span style="display: block;
    margin-bottom: 10px;
    margin-top: 10px;
    font-size: 16px;">感谢您使用 handsome主题&emsp;<span style="color:#df3827;">版本：1.0.0</span> </span>
    <span style="margin-bottom:10px;display:block">点击这里 <a href="https://github.com/ihewro/typecho-theme-handsome" target="_blank" style="color:#3384da;font-weight:bold;text-decoration:underline">typecho-theme-handsome</a> 以获得
    <span style="color:#df3827;font-weight:bold;">最新版本支持</span>
    </span>
    <span style="margin-bottom:10px;display:block">
    <a href="//www.ihewro.com/archives/489/" >帮助&支持</a> &nbsp;
    <a href="https://github.com/ihewro/typecho-theme-handsome/issues" target="_blank">建议&反馈</a>
    </span>
    <span style="margin-bottom:10px;display:block"> 后台设置主题风格来自 material 主题</span>
    </p>';

    //设置开关
    $indexsetup = new Typecho_Widget_Helper_Form_Element_Checkbox('indexsetup', 
    array(
    'header-fix' => _t('固定头部'),
    'aside-fix' => _t('固定导航'),
    'aside-folded' => _t('折叠导航'),
    'aside-dock' => _t('置顶导航'),
    'container-box' => _t('盒子模型'),
    'atargetblank' => _t('文章和评论区链接以新标签页形式打开')
    ),
    array('header-fix', 'aside-fix','atargetblank'), _t('全站设置开关'));
    
    $form->addInput($indexsetup->multiMode());

    //主题色调选择
    $themetype = new Typecho_Widget_Helper_Form_Element_Radio('themetype',
        array(
            '0' => _t('black-white-black &emsp;&emsp;'),
            '1' => _t('dark-white-dark &emsp;&emsp;'),
            '2' => _t('white-white-black &emsp;&emsp;'),
            '3' => _t('primary-white-dark &emsp;&emsp;'),
            '4' => _t('info-white-black &emsp;&emsp;'),
            '5' => _t('success-white-dark &emsp;&emsp;'),
            '6' => _t('danger-white-dark &emsp;&emsp;'),
            '7' => _t('black-black-white &emsp;&emsp;'),
            '8' => _t('dark-dark-light &emsp;&emsp;'),                        
            '9' => _t('info-info-light &emsp;&emsp;'),
            '10' => _t('primary-primary-dark &emsp;&emsp;'),
            '11' => _t('info-info-black &emsp;&emsp;'),
            '12' => _t('success-success-dark &emsp;&emsp;'),
            '13' => _t('danger-danger-dark &emsp;&emsp;')
        ),

        //Default choose
        '1',_t('主题色调选择'),_t("选择背景方案.如默认的<b>dark-white-dark</b> 分别代表：左侧边栏和上导航栏的交集部分、上导航栏、左侧边栏的颜色。")
    );
    $form->addInput($themetype);
    //盒子模型中背景样式选择
   $BGtype = new Typecho_Widget_Helper_Form_Element_Radio('BGtype',
        array(
            '0' => _t('纯色背景 &emsp;'),
            '1' => _t('图片背景 &emsp;'),
            '2' => _t('渐变背景 &emsp;')
        ),

        //Default choose
        '0',_t('盒子模型中背景样式选择'),_t("<b>如果你没有选中“盒子模型”，请忽略该项。</b>选择背景方案, 对应填写下方的 '<b>背景颜色 / 图片</b>' 或选择 '<b>渐变样式</b>', 这里默认使用纯色背景.")
    );
    $form->addInput($BGtype);
    //盒子模型种背景颜色/图片填写
    $bgcolor = new Typecho_Widget_Helper_Form_Element_Text('bgcolor', NULL, NULL, _t('背景颜色 / 图片'), _t('<b>如果你没有选中“盒子模型”，请忽略该项。</b><br />背景设置如果选择纯色背景, 这里就填写颜色代码; <br />背景设置如果选择图片背景, 这里就填写图片地址;<br />
    不填写则默认显示 #F5F5F5 或主题文件夹下的 /img/bg.jpg'));
    $form->addInput($bgcolor);

    //盒子模型中渐变样式选择
    $GradientType = new Typecho_Widget_Helper_Form_Element_Radio('GradientType',
        array(
            '0' => _t('Aerinite &emsp;'),
            '1' => _t('Ethereal &emsp;'),
            '2' => _t('Patrichor <br />'),
            '3' => _t('Komorebi &emsp;'),
            '4' => _t('Crepuscular &emsp;'),
            '5' => _t('Autumn <br />'),
            '6' => _t('Shore &emsp;'),
            '7' => _t('Horizon &emsp;'),
            '8' => _t('Green Beach <br />'),
            '9' => _t('Virgin <br />'),
        ),

        '0', _t('渐变样式'), _t("<b>如果你没有选中“盒子模型”，请忽略该项。</b><br />如果选择渐变背景, 在这里选择想要的渐变样式.")
    );
    $form->addInput($GradientType);


    //首页名称
    $IndexName = new Typecho_Widget_Helper_Form_Element_Text('IndexName', NULL, '友人C', _t('首页的名称'), _t('输入你的首页显示的名称'));
    $form->addInput($IndexName);
    //博主名称：aside.php中会调用
    $BlogName = new Typecho_Widget_Helper_Form_Element_Text('BlogName', NULL, 'ihewro', _t('博主的名称'), _t('输入你的名称建议为英文，中文也可'));
    $form->addInput($BlogName);

    //博主头像：在本主题中首页index.php 和 aboutme.php中将会调用此头像
    $BlogPic = new Typecho_Widget_Helper_Form_Element_Text('BlogPic', NULL, 'http://www.gravatar.com/avatar/9e543b9d68c191fdc484c3bbe9f953a4?s=220&r=X&d=mm', _t('头像图片地址'), _t('logo头像地址，尺寸在200X200左右即可'));
    $form->addInput($BlogPic);

    //博主职业
    $BlogJob = new Typecho_Widget_Helper_Form_Element_Text('BlogJob', NULL, 'A student', _t('博主的介绍'), _t('输入你的简介，在侧边栏的名称下面和时光机页面显示'));
    $form->addInput($BlogJob);
    //首页文字：将会在首页博客名称下面和404.php页面调用此字段
    $Indexwords = new Typecho_Widget_Helper_Form_Element_Text('Indexwords', NULL, '迷失的人迷失了，相逢的人会再相逢', _t('首页一行文字介绍'), _t('输入你喜欢的一行文字吧，在首页博客名称下面显示'));
    $form->addInput($Indexwords);

    //twitter
    $socialtwitter = new Typecho_Widget_Helper_Form_Element_Text('socialtwitter', NULL,'#', _t('输入twitter链接'), _t('在这里输入twitter链接,带http://，在时光机页面显示,为空则不显示按钮'));
    $form->addInput($socialtwitter);
    //facebook
    $socialfacebook = new Typecho_Widget_Helper_Form_Element_Text('socialfacebook', NULL,'#', _t('输入facebook链接'), _t('在这里输入facebook链接,带http://，在时光机页面显示,为空则不显示按钮'));
    $form->addInput($socialfacebook);
    //google+
    $socialgooglepluse = new Typecho_Widget_Helper_Form_Element_Text('socialgooglepluse', NULL,'#', _t('输入google+链接'), _t('在这里输入google+链接,带http://，在时光机页面显示,为空则不显示按钮'));
    $form->addInput($socialgooglepluse);

    //github
    $socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL,'https://github.com/ihewro', _t('输入github链接'), _t('在这里输入github链接,带http://，在时光机页面显示,为空则不显示按钮'));
    $form->addInput($socialgithub);

    //email
    $socialemail = new Typecho_Widget_Helper_Form_Element_Text('socialemail', NULL,'ihewro@163.com', _t('输入email地址'), _t('在这里输入email地址，在时光机页面显示'));
    $form->addInput($socialemail);
    //QQ
    $socialqq = new Typecho_Widget_Helper_Form_Element_Text('socialqq', NULL,'535425690', _t('输入QQ号码'), _t('在这里输入QQ号码，在时光机页面显示'));
    $form->addInput($socialqq);
    //weibo
    $socialweibo = new Typecho_Widget_Helper_Form_Element_Text('socialweibo', NULL,'@超级男孩', _t('输入微博ID'), _t('在这里输入微博名称，在时光机页面显示'));
    $form->addInput($socialweibo);
    //网易云音乐
    $socialmusic = new Typecho_Widget_Helper_Form_Element_Text('socialmusic', NULL,'@许多年后我依然是我', _t('输入网易云音乐ID'), _t('在这里输入网易云音乐ID，在时光机页面显示'));
    $form->addInput($socialmusic);
    //时光机中关于我的内容
    $about = new Typecho_Widget_Helper_Form_Element_Textarea('about', NULL, '来自南部的一个小城市，个性不张扬，讨厌随波逐流。', _t('输入关于我的内容'), _t('输入关于我的内容，将会在时光机的关于我栏目中显示'));
    $form->addInput($about);

  /*  //gravatar镜像源
    $CDNURL = new Typecho_Widget_Helper_Form_Element_Text('gravatar镜像源地址', NULL, 'https://secure.gravatar.com', _t('CDN 地址'), _t("gravatar由于国内被墙，推荐使用国内镜像源替代。默认为https://secure.gravatar.com (默认不要加斜杠)"));
    $form->addInput($CDNURL);*/

    //网站统计代码
    $analysis = new Typecho_Widget_Helper_Form_Element_Textarea('analysis', NULL, NULL, _t('网站统计代码'), _t('填入如 CNZZ或者Google Analysis 的第三方统计代码'));
    $form->addInput($analysis);
    //favicon图标
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon 地址'), _t('填入博客 favicon 的地址, 不填则显示主机根目录下的favicon.ico文件'));
    $form->addInput($favicon);
    //首页标题后缀
    $titleintro = new Typecho_Widget_Helper_Form_Element_Text('titleintro', NULL, '相逢的人会再相逢', _t('首页标题后缀'), _t('你的博客标题栏博客名称后面的副标题'));
    $form->addInput($titleintro);
}

// 首页文章缩略图

function showThumbnail($widget)
{ 
    // 当文章无图片时的默认缩略图
    $rand = rand(1,3); // 随机 1-3 张缩略图

    $random = $widget->widget('Widget_Options')->themeUrl . '/img/sj/' . $rand . '.jpg'; // 随机缩略图路径
    //正则匹配 主题目录下的/images/sj/的图片（以数字按顺序命名）

$cai = '';
if (!empty($attachments)){
    $attach = $widget->attachments(1)->attachment;
}
else{
    $attach='';
}
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i'; 
  $patternMD = '/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|png))/i';
    $patternMDfoot = '/\[.*?\]:\s*(http(s)?:\/\/.*?(jpg|png))/i';

if ($attach && $attach->isImage) {

$ctu = $attach->url.$cai;
    } 
//调用第一个图片附件
else 

//下面是调用文章第一个图片
if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }

//如果是内联式markdown格式的图片
  else   if (preg_match_all($patternMD, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }
    //如果是脚注式markdown格式的图片
    else if (preg_match_all($patternMDfoot, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }
//以上都不符合，即随机输出图片
else {
$ctu = $random;
}
return $ctu;
}

//文章页面侧边栏缩略图
function showThumbnail2($widget)
{ 
    // 当文章无图片时的默认缩略图
    $rand = rand(1,15); // 随机 1-15 张缩略图

    $random = $widget->widget('Widget_Options')->themeUrl . '/img/sj2/' . $rand . '.jpg'; // 随机缩略图路径
    //正则匹配 主题目录下的/images/sj/的图片（以数字按顺序命名）

return $random;
}


/*文章阅读次数含cookie 代码来自“youdu”主题*/
function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
 $views = Typecho_Cookie::get('extend_contents_views');
        if(empty($views)){
            $views = array();
        }else{
            $views = explode(',', $views);
        }
if(!in_array($cid,$views)){
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
        }
    }
    echo $row['views'];
}


/**
* 显示上一篇
*
* @access public
* @param string $default 如果没有上一篇,显示的默认文字
* @return void
*/
function theNext($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created > ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_ASC)
->limit(1);
$content = $db->fetchRow($sql);

if ($content) {
$content = $widget->filter($content);
$link = '<li class="previous"> <a href="' . $content['permalink'] . '" title="' . $content['title'] . '" data-toggle="tooltip"> 上一篇 </a></li>
';
echo $link;
} else {
$link = '';
echo $link;
}
}
 
/**
* 显示下一篇
*
* @access public
* @param string $default 如果没有下一篇,显示的默认文字
* @return void
*/
function thePrev($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created < ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_DESC)
->limit(1);
$content = $db->fetchRow($sql);
 
if ($content) {
$content = $widget->filter($content);
$link = '<li class="next"> <a href="' . $content['permalink'] . '" title="' . $content['title'] . '" data-toggle="tooltip"> 下一篇 </a></li>';
echo $link;
} else {
$link = '';
echo $link;
}
}

