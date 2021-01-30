<?
    $pageName = 'about';
    include_once("./include/header.php")
?>
<div id="wrap" class="<?=$pageName?>">
    <section class="ci">
        <article class="logo">
            <h2 class="title">D&amp;D Company</h2>
            <div class="imageBox">
                <img src="./resources/images/about/aboutLogo.png" alt="" class="img-fluid">
            </div>
            <dl>
                <dt>자연스럽고 트렌디한 사용자 중심의 콘텐츠를 제작</dt>
                <dd>모든 기업의 제품과 서비스는 많은 사람들에게 보다 나은 삶을 선사하기 위한 것 입니다.
DORIM LIZARD는 트렌디한 콘텐츠 제작을 통해 보다 효과적으로 브랜드 이미지를 전달합니다.</dd>
            </dl>
        </article>
        <article class="symbol">
            <h2>연결고리를 상징하는 심벌 </h2>
            <div class="imageBox">
                <div class="left wow slideInRight" data-wow-duration="1s"><img src="./resources/images/about/symbolLeft.png" alt="" class="img-fluid"></div>
                <div class="center wow fadeIn" data-wow-delay="0.8s"><img src="./resources/images/about/symbolCenter.png" alt="" class="img-fluid"></div>
                <div class="right wow slideInLeft" data-wow-duration="1s"><img src="./resources/images/about/symbolRight.png" alt="" class="img-fluid"></div>
            </div>
            <p>기업에서 소비자까지 연결해주는 튼튼한 고리가 되자는
아이덴티티가 녹아져 있는 로고입니다.</p>
        </article>
    </section>
    <section class="identity">
        <div class="bgBox">
            <img src="./resources/images/about/identityBg2.png" alt="">
        </div>
        <article>
            <div class="title">
                <img src="./resources/images/about/identityLogo.png" alt="" class="img-fluid">
                <h3>D&amp;D의 3가지 연결고리 </h3>
            </div>
            <ul class="identityList">
                <li>
                    <img src="./resources/images/about/identityIcon.png" alt="" class="img-fluid">
                    <dl>
                        <dt>트렌드와 니즈</dt>
                        <dd>
                            빠르게 변하는 트렌드에 <br>
                            뒤쳐지지않고 고객의 니즈를 <br>
                            만족시키겠습니다.
                        </dd>
                    </dl>
                </li>
                <li>
                    <img src="./resources/images/about/identityIcon.png" alt="" class="img-fluid">
                    <dl>
                        <dt>D&amp;D와 클라이언트</dt>
                        <dd>
                            기획에서 제작까지 <br>
                            클라이언트 입장에서 <br>
                            생각하고 고민하겠습니다.
                        </dd>
                    </dl>
                </li>
                <li>
                    <img src="./resources/images/about/identityIcon.png" alt="" class="img-fluid">
                    <dl>
                        <dt>클라이언트와 소비자</dt>
                        <dd>
                            콘텐츠가 소비자에게 닿을때까지 <br>
                            기획 및 방송구성을 D&amp;D가 <br>
                            함께 하겠습니다.  
                        </dd>
                    </dl>
                </li>
            </ul>
        </article>
    </section>
</div>
<?
    include_once("./include/footer.php")
?>