</article>
</section>
  </main>

  <!--백그라운드는 100%이고 컨텐츠만 중앙정렬 해주기 위해 f_inner을 주었다.-->
  <!-- 하단 푸터영역 -->
  <footer>
    <div class="f_inner">
      <nav>
        <dl>
          <dt><a href="#" title="">미에로</a></dt>
          <dd><a href="#" title="브랜드 스토리">브랜드 스토리</a></dd>
          <dd><a href="#" title="식이섬유 스토리">식이섬유 스토리</a></dd>
        </dl>
        <dl>
          <dt><a href="#" title="제품소개">제품소개</a></dt>
          <dd><a href="#" title="미에로화이버">미에로화이버</a></dd>
          <dd><a href="#" title="미에로화이버">미에로화이버 SPARKING ZERO</a></dd>
          <dd><a href="#" title="헬씨올리고">헬씨올리고</a></dd>
        </dl>
        <dl>
          <dt><a href="#" title="스토리">미에로 스토리</a></dt>
          <dd><a href="#" title="TV광고">TV광고</a></dd>
          <dd><a href="#" title="인쇄광고">인쇄광고</a></dd>
          <dd><a href="#" title="프로모션">프로모션</a></dd>
        </dl>
        <dl>
          <dt><a href="https://kokoroko.dothome.co.kr/bbs/bbs/board.php?bo_table=mi_event" title="이벤트">미에로 이벤트</a></dt>
          <dd><a href="https://kokoroko.dothome.co.kr/bbs/bbs/board.php?bo_table=mi_event" title="진행중인 이벤트">진행중인 이벤트</a></dd>
          <dd><a href="https://id.dothome.co.kr/bbs/bbs/border.php?bo_table=event" title="당첨자 발표">당첨자 발표</a></dd>
        </dl>
        <dl>
          <dt><a href="https://kokoroko.dothome.co.kr/bbs/bbs/board.php?bo_table=mi_notice" title="공지사항">공지사항</a></dt>
          <dd><a href="https://kokoroko.dothome.co.kr/bbs/bbs/board.php?bo_table=mi_notice" title="공지사항">New&Notice</a></dd>
        </dl>
        <dl>
          <dt><a href="#" title="현대약품">현대약품</a></dt>
          <dd>&nbsp;</dd>
        </dl>
        <dl>
          <dt>Connect width us</dt>
          <dd>
            <a href="#" title="페이스북"> <i class="fab fa-facebook-f"></i></a>
            <a href="#" title="인스타그램"> <i class="fab fa-instagram"></i></a>
            <a href="#" title="유튜브"> <i class="fab fa-youtube"></i></a>
          </dd>
        </dl>
      </nav>
    </div>
    <a href="#" title="위로 바로가기" class="top_btn"><img src="http://kokoroko.dothome.co.kr/0311/images/top_up.png" alt="위로 바로가기"></a>
    <address>
      <h2><a href="https://kokoroko.dothome.co.kr/0311" title="메인페이지로 바로가기">
          <img src="https://kokoroko.dothome.co.kr/0311/images/logo2.png" alt="하단로고"></a></h2>
      <p>copyright&copy; 2025 MIERO FIBER. All Rights Reserved.</p>
    </address>
  </footer>

  <!-- 제이쿼리 라이브러리 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>
    $(document).ready(function () {

      //1. 변수 
      //메인메뉴
      let mnu = $('nav.gnb > ul > li > a');

      //2.메인메뉴 클릭시 서브메뉴 보이게/보일때 클릭하면 숨기게
      mnu.click(function () {
        //$('.sub').hide(); //보이는 서브메뉴는 모두 숨기고
        //$(this).next('.sub').toggle(); //선택한 메인메뉴의 다음 요소 sub가 보이거나 숨기게한다.

        //선택한 a요소의 다음요소인 .sub를 나오거나 숨기게하고 부모요소의 형제요소인 li태그의 자손 .sub를 숨긴다. .siblings=형제들. 둘째,셋째
        $(this).next().toggle().parent().siblings().find('.sub').hide();
      });

      //main을 꼭대기까지 올라오게 구조를 짰으므로 main을 클릭하면 .sub가 보이지않게 만들면 된다.
      //main을 클릭하면 .sub를 숨긴다
      $('main').click(function () {
        $('.sub').hide();
      });

    });
  </script>

</body>

</html>


<!-- 실제 미에로 화이바 사이트로 똑같은 주소 구조이다. 미에로 화이바도 그누보드를 써서 양식만 바꾼 것. https://www.miero.co.kr/bbs/board.php?bo_table=notice -->
<!-- 상단헤더와 하단 푸터를 바꿔볼 것 -->
<!-- 실제 홈페이지 만들때는 상단 헤더와 하단 푸터를 분리시킨다. -->
<!-- 미에로 화이바는 반응형이기 때문에 pc버전을 먼저 만들고 태블릿과 모바일을 만든다. -->

<!-- 미에로화이바 사이트는 서브메뉴가 자기자신을 클릭하거나 다른 곳을 클릭했을 때 없어진다. 특이한 경우이다.  -->
 