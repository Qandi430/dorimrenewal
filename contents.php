<?
    $pageName = 'contents';
    include_once("./include/header.php")
?>
<div id="wrap" class="<?=$pageName?>">
    <section>
        <h2 class="title">Contents</h2>
        <ul class="porfolioNavigation">
            <li class="on"><a href="#">ALL</a></li>
            <li><a href="#">가전</a></li>
            <li><a href="#">유아</a></li>
            <li><a href="#">푸드</a></li>
            <li><a href="#">패션</a></li>
            <li><a href="#">기타</a></li>
        </ul>
        <ul class="portfolioList">
            <li>
                <img src="./resources/images/portfolio/yeongdeok/yeongdeok1.jpeg" alt="" class="img-fluid">
                <a href="#">영덕</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/ipkn/ipkn1.jpeg" alt="" class="img-fluid">
                <a href="#">입큰</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/seek/seek1.jpeg" alt="" class="img-fluid">
                <a href="#">SEEK</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/juno/juno1.jpeg" alt="" class="img-fluid">
                <a href="#">주노헤어</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/devine/devine1.jpeg" alt="" class="img-fluid">
                <a href="#">DEVINE</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/jinwoo/jinwoo1.jpeg" alt="" class="img-fluid">
                <a href="#">JINWOO</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/tsi/tsi1.jpeg" alt="" class="img-fluid">
                <a href="#">TSI</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/smartSwing/smartSwing1.jpeg" alt="" class="img-fluid">
                <a href="#">SMART SWING</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/yeongdeokYoutube/yeongdeokYoutube1.jpeg" alt="" class="img-fluid">
                <a href="#">영덕 유튜브</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/yeongdeok/yeongdeok1.jpeg" alt="" class="img-fluid">
                <a href="#">영덕</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/ipkn/ipkn1.jpeg" alt="" class="img-fluid">
                <a href="#">입큰</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/seek/seek1.jpeg" alt="" class="img-fluid">
                <a href="#">SEEK</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/juno/juno1.jpeg" alt="" class="img-fluid">
                <a href="#">주노헤어</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/devine/devine1.jpeg" alt="" class="img-fluid">
                <a href="#">DEVINE</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/jinwoo/jinwoo1.jpeg" alt="" class="img-fluid">
                <a href="#">JINWOO</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/tsi/tsi1.jpeg" alt="" class="img-fluid">
                <a href="#">TSI</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/smartSwing/smartSwing1.jpeg" alt="" class="img-fluid">
                <a href="#">SMART SWING</a>
            </li>
            <li>
                <img src="./resources/images/portfolio/yeongdeokYoutube/yeongdeokYoutube1.jpeg" alt="" class="img-fluid">
                <a href="#">영덕 유튜브</a>
            </li>
        </ul>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="portfolioModalLabel">Modal title</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <div style="position: relative; height:0; padding-bottom: 56.25%;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/T2MkuMdzAuw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="position: absolute; width:100%; height:100%;"></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".portfolioList li a").click(function(e){
            e.preventDefault();
            $("#portfolioModal").modal("show")
        })
    </script>
</div>
<?
    include_once("./include/footer.php")
?>