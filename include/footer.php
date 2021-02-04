    <footer>
        <div class="footerLeft"></div>
        <div class="footerRight">
            <p class="copyright">
                &copy; Copyright 2021 — All rights reserved —STUDIO x JOBS
            </p>
        </div>
    </footer>
    <div class="inquiryButton">
        상담하기
    </div>
    <!-- Modal -->
    <div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inquiryModalLabel">상담하기</h5>
                </div>
                <div class="modal-body">
                    <form action="" id="inquiryForm">
                        <div class="form-group">
                            <label for="inquiryName">이름(회사명)</label>
                            <input type="text" name="inquiryName" id="inquiryName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inquiryContact">연락처</label>
                            <input type="text" name="inquiryContact" id="inquiryContact" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inquiryMail">이메일</label>
                            <input type="text" name="inquiryMail" id="inquiryMail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inquiryService">서비스</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inquiryService" id="serviceVideo" value="video">
                                <label class="form-check-label" for="serviceVideo">영상 제작</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inquiryService" id="serviceCommerce" value="commerce">
                                <label class="form-check-label" for="serviceCommerce">라이브 커머스</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inquiryService" id="serviceContents" value="contents" disabled>
                                <label class="form-check-label" for="serviceContents">컨텐츠 기획</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="packageStarter">패키지</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inquiryPackage" id="packageStarter" value="starter">
                                <label class="form-check-label" for="packageStarter">Starter</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inquiryPackage" id="packageBusiness" value="business">
                                <label class="form-check-label" for="packageBusiness">Business</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inquiryPackage" id="packagePremium" value="premium" disabled>
                                <label class="form-check-label" for="packagePremium">Premium</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inquiryTitle">문의제목</label>
                            <input type="text" name="inquiryTitle" id="inquiryTitle" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inquiryContent">문의내용</label>
                            <textarea class="form-control" name="inquiryContent" id="inquiryContent" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">문의 등록</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>                
                </div>
            </div>
        </div>
    </div>
    <script>
        new WOW().init();
        $(document).ready(function(){
            $(".inquiryButton").click(function(){
                $("#inquiryModal").modal("show")
            })

            $('#inquiryModal').waitMe({
                effect : 'bounce',
                text : '',
                bg : rgba(255,255,255,0.7),
                color : #000,
                maxSize : '',
                waitTime : -1,
                textPos : 'vertical',
                fontSize : '',
                source : '',
            });
        })
    </script>
</body>
</html>