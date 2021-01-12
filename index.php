<?
    $pageName = 'main';
    include_once("./include/header.php")
?>
<div id="wrap" class="<?=$pageName?>">
    <section class="contents mainVisual">
        <div class="bgBox">
            <img src="/resources/images/main/mainBg.png" alt="">
        </div>
        <div class="titleSlide">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="titleWrap">
                        <h1 class="title">
                            <img src="/resources/images/main/mainTitle01.png" alt="" class="img-fluid">
                        </h1>
                        <h5 class="subTitle">
                            <img src="/resources/images/main/mainSubTitle01.png" alt="" class="img-fluid">
                        </h5>
                    </div>
                </div>
                <div class="item">
                    <div class="titleWrap">
                        <h1 class="title">
                            <img src="/resources/images/main/mainTitle01.png" alt="" class="img-fluid">
                        </h1>
                        <h5 class="subTitle">
                            <img src="/resources/images/main/mainSubTitle01.png" alt="" class="img-fluid">
                        </h5>
                    </div>
                </div>
                <div class="item">
                    <div class="titleWrap">
                        <h1 class="title">
                            <img src="/resources/images/main/mainTitle01.png" alt="" class="img-fluid">
                        </h1>
                        <h5 class="subTitle">
                            <img src="/resources/images/main/mainSubTitle01.png" alt="" class="img-fluid">
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="imageSlide">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="/resources/images/main/mainImage01.png" alt="" class="img-fluid">
                </div>
                <div class="item">
                    <img src="/resources/images/main/mainImage01.png" alt="" class="img-fluid">
                </div>
                <div class="item">
                    <img src="/resources/images/main/mainImage01.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="contents about">
        <div class="aboutLogo">
            <img src="/resources/images/main/aboutLogo.png" alt="" class="img-fluid">
        </div>
        <div class="aboutItem">
            <div class="item item01">
                <div class="icon">
                    <img src="/resources/images/main/aboutIcon.png" alt="" class="img-fluid">
                </div>
                <dl>
                    <dt>트렌드와 니즈</dt>
                    <dd>
                        Development of the process and/or information flow of the system (i.e. for phone tree systems, this would be an option tree flowchart.
                    </dd>
                </dl>
            </div>
            <div class="item item02">
                <div class="icon">
                    <img src="/resources/images/main/aboutIcon.png" alt="" class="img-fluid">
                </div>
                <dl>
                    <dt>D&amp;D와 클라이언트</dt>
                    <dd>
                        Development of the process and/or information flow of the system (i.e. for phone tree systems, this would be an option tree flowchart.
                    </dd>
                </dl>
            </div>
            <div class="item item03">
                <div class="icon">
                    <img src="/resources/images/main/aboutIcon.png" alt="" class="img-fluid">
                </div>
                <dl>
                    <dt>클라이언트와 소비자</dt>
                    <dd>
                        Development of the process and/or information flow of the system (i.e. for phone tree systems, this would be an option tree flowchart.
                    </dd>
                </dl>
            </div>
        </div>
    </section>
    <section class="contents liveCommerce">
        <h1 class="title">언텍트시대에 라이브 커머스로 온텍트 하세요.</h1>
        <div class="imageBox">
            <div class="liveOn"><img src="/resources/images/main/liveCommerceOn.gif" alt="" class="img-fluid"></div>
            <div class="mockup"><img src="/resources/images/main/phoneMockup.png" alt="" class="img-fluid"></div>
        </div>
    </section>
    <section class="contents untact">
        <div class="imageBox">
            <img src="/resources/images/main/untactImage.png" alt="" class="img-fluid">
        </div>
        <div class="textBox">
            <h1 class="title">
                <img src="/resources/images/main/untactTitle.png" alt="" class="img-fluid">
            </h1>
            <h5 class="subTitle">
                <img src="/resources/images/main/untactSubTitle.png" alt="" class="img-fluid">
            </h5>
            <a href="#">MORE</a>
        </div>
    </section>
    <section class="contents work">
        <h5 class="subTitle"></h5>
        <h1 class="title"></h1>
    </section>
</div>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    nav:false,
    items : 1
})
</script>
<?
    include_once("./include/footer.php")
?>