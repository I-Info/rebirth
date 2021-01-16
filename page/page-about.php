<?php
/*
	template name: 关于
 */

get_header();

?>
<section class="main-hero">

    <style type="text/css" id="responsive-header-img-css" class="responsive-header-img-css">
        .responsive-header-img {
            background-image: url('https://www.i-info.xyz/wp-content/uploads/2020/02/未命名-1-scaled.jpg');
        }

        @media (max-width: 1000px) {
            .responsive-header-img {
                background-image: url('https://www.i-info.xyz/wp-content/uploads/2020/02/未命名-1-scaled.jpg');
                background-image: -webkit-image-set(url('https://www.i-info.xyz/wp-content/uploads/2020/02/未命名-1-scaled.jpg') 1x,
                url('https://www.i-info.xyz/wp-content/uploads/2020/02/未命名-1-scaled.jpg') 2x);
                background-image: image-set(url('https://www.i-info.xyz/wp-content/uploads/2020/02/未命名-1-scaled.jpg') 1x,
                url('https://www.i-info.xyz/wp-content/uploads/2020/02/未命名-1-scaled.jpg') 2x);
            }
        }

        @media (max-width: 600px) {
            .responsive-header-img {
                background-image: url('https://www.i-info.xyz/wp-content/uploads/2020/02/未命名-1-scaled.jpg');
                background-image: -webkit-image-set(url('https://www.i-info.xyz/wp-content/uploads/2020/02/未命名-1-scaled.jpg') 1x,
                url('https://www.i-info.xyz/wp-content/uploads/2020/02/未命名-1-scaled.jpg') 2x);
                background-image: image-set(url('https://www.i-info.xyz/wp-content/uploads/2020/02/未命名-1-scaled.jpg') 1x,
                url('https://www.i-info.xyz/wp-content/uploads/2020/02/未命名-1-scaled.jpg') 2x);
            }
        }
    </style>
    <div class="main-hero-bg responsive-header-img"></div>
	<?php get_template_part( 'tpl/site/site', 'wave' ); ?>
    <div class="d-flex flex-column align-content-center justify-content-center main-hero-content">
        <div class="text-center main-hero-content-title">关于本站</div>
        <div class="text-center main-hero-content-description">
            I-Info / <time datetime="2018-10-06">2020-02-09</time> /
        </div>
    </div>
</section>
<main class="main-content custom-about-template">
    <div class="container-sm">
        <div class="row">
            <article class="post page borderbox post-content">
                <h2 id="h2--i_info"><a name="关于I_Info" class="reference-link"></a><span class="header-link octicon octicon-link">
		</span>关于I_Info</h2>
		<p>I_Info,一个不知名的b站up主。</p>
		<p>感谢你能在茫茫互联网世界关注到我。😀️</p>
		<p>目前博客正常更新！</p>
		<h2 id="h2-u5173u4E8Eu672Cu7AD9"><a name="关于本站" class="reference-link"></a><span class="header-link octicon octicon-link"></span>关于本站</h2><p>这个网站就是我的一个博客，拿来挂一些干货和一些小小的研究成果，技术不到位的地方肯定会有很多，欢迎在评论区指出🙃️</p>
		<p>服务器:hostinger超便宜空间。拿来挂一个小博客刚刚好。</p>
		<p>域名:hostinger,namesilo,dnspod</p>
		<p>CDN: cloudflare （free）。</p>
                <h3 id="--3">联系</h3>
                <p><a>info@i-int.com</a></p>
                <p>不一定看见，但是看见了就一定回</p>
                <h3 id="--4">声明</h3>
                <p>本博客所有内容采用<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/">知识共享署名-非商业性使用-相同方式共享4.0 国际许可协议进行许可</a>。</p>
            </article>
        </div>
    </div>
</main>
<?php get_footer(); ?>
