<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>오설록</title>
    <!-- 파비콘 -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/icon">
    <!-- 스와이퍼(swiper) css를 sdn으로 연결 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!-- 외부css -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- 제이쿼리 라이브러리 -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- easing 플러그인 -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- 스와이퍼(swiper) js를 cdn으로 연결 -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- 외부 js -->
    <script src="js/main.js"></script>
</head>
<body>
    <div class="wrap">
        <!-- header -->
        <? include "header.html"; ?>
        <!-- section -->
        <section class="visual">
            <!-- swiper플러그인 -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide s1">
                    <a href="#">
                        <p>일상에 생기를 더해줄 블랜딩 티</p>
                        <h1>오설록</h1>
                        <span>우러나는 찻잎을 보고 마음을 다독여봐요.</span>
                        <a href="#" class="jBtn">자세히보기</a>
                    </a>
                  </div>
                  <div class="swiper-slide s2">
                      <div class="slide2 left">
                          <a href="#">
                            <p>티 테라피 키트 30%할인</p>
                            <h1>잎차로 시작하는</h1>
                          </a>
                      </div>
                      <div class="slide2 right">
                        <a href="#">
                          <a href="#" class="jBtn">자세히보기</a>
                          <h1>나만의 티 테라피</h1>
                        </a>
                    </div>
                  </div>
                  <div class="swiper-slide s3">
                    <a href="#">
                        <div>
                            <h1>다다일상 홈카페<br>1회 체험권 증정</h1>
                            <p>VIP·VVIP 상반기 멤버십 혜택</p>
                            <button class="jBtn">자세히보기</button>
                        </div>
                    </a>
                  </div>
                  <div class="swiper-slide s4">
                    <a href="#">
                        <span>제주섬에서 느끼는 낭만과 휴식의 달콤함</span>
                        <h1>제주섬 아이스티 시리즈, 영귤섬</h1>
                        <p>여름날 제주섬에서 느끼는 휴양지의 달콤함을 차 한 잔에 담았습니다.<br>
                            덥고 지쳐가는 여름에 즐기기 좋은 향긋한 아이스 블렌디드 티로,<br>
                            시원하고 청량한 기분까지 함께 즐겨보세요</p>
                        <button class="jBtn">자세히보기</button>
                    </a>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
        </section>
        <section class="tab">
            <div class="tab_container">
                <h1>오설록 TeaV</h1>
                <div class="tab_in">
                    <div class="tab_btn">
                        <ul>
                            <li><a href="#" class="active">FROM FARM TO TABLE</a></li>
                            <li><a href="#" >SCENE OF JEJU</a></li>
                            <li><a href="#" >INNERFIT 월터플러스</a></li>
                            <li><a href="#" >오설록 VLOG</a></li>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <div class="tab_list">
                            <div class="tab_img">
                                <iframe width="660" height="388" src="https://www.youtube.com/embed/W6f9vwJt4sI?autoplay=1&mute=1&loop1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="tab_des">
                                <h3>FROM FARM TO TABLE<br>OSULLOC</h3>
                                <p>녹차밭의 찻잎이<br>한잔의 차가 되기까지의<br>여정에 귀기울여보세요!</p>
                            </div>
                        </div>
                        <div class="tab_list">
                            <div class="tab_img">
                                <iframe width="660" height="388" src="https://www.youtube.com/embed/BvvXh8AP1Dg?autoplay=1&mute=1&loop1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="tab_des">
                                <h3>[비하인드]Scene of JEJU<br>@Jeju, 2021</h3>
                                <p>본 영상은 제주의<br>비하인드 씬을 담았습니다.<br>아름다운 제주를 느껴보세요.</p>
                            </div>
                        </div>
                  
                        <div class="tab_list">
                            <div class="tab_img">
                                <iframe width="660" height="388" src="https://www.youtube.com/embed/_xNR2F-ylNY?autoplay=1&mute=1&loop1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="tab_des">
                                <h3>[NEW]이너핏 워터플러스<br>너의 핏은 어떤가요?</h3>
                                <p>국내 최초로 녹차의 카테킨과<br>콜라겐을 담아 체지방 감소와<br>피부보습에 도움을 주는<br>이중기능성 제품입니다.</p>
                            </div>
                        </div>
                   
                        <div class="tab_list">
                            <div class="tab_img">
                                <iframe width="660" height="388" src="https://www.youtube.com/embed/OOC6iwoXuzw?autoplay=1&mute=1&loop1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="tab_des">
                                <h3>Be snowgreen day</h3>
                                <p>아모레성수에서 눈호강하고<br>젤리왁스로 디퓨져 캔들만드는 하루<br>Be snowgreen day 오설록 VLOG</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="collection">
            <h1>오설록 Tea Shop</h1>
            <div class="tab_slide">
                <div class="tab_title">
                    <a href="#" class="new active">BEST</a>
                    <a href="#" class="best">Tea FOOD</a>
                </div>
                <div class="tab_slide_con">
                    <div class="tab_slide_list t1 active">
                        <!-- 신제품 슬라이드 -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide new1">
                                  <img src="img/deco1.png" alt="#">
                                  <h2>과일 블렌딩 티 박스</h2>
                                  <h4>Tea Shop > 세트<br>26,500원</h4>
                                  <a href="#"><span></span><i>VIEW</i></a>
                                  <p>제주만의 특별함을 담아내어 블렌딩한 프리미엄<br>
                                    티백 라인입니다. 새콤달콤한 여러 과실향의<br>
                                    제품을 다양하게 즐길 수 있는 세트입니다.</p>
                              </div>
                              <div class="swiper-slide new2">
                                <img src="img/deco2.png" alt="#">
                                <h2>프리미엄 녹차와플</h2>
                                <h4>Tea Shop > 초콜릿/잼<br>5,000원</h4>
                                <a href="#"><span></span><i>VIEW</i></a>
                                <p>진한 말차와 향긋한 버터 풍미가 어우러진<br>
                                    부드러운 식감의 녹차와플<br>
                                    > 복사페이스북, 카카오톡으로 공유하기좋아요.
                                    </p>
                              </div>
                              <div class="swiper-slide new3">
                                <img src="img/deco3.png" alt="#">
                                <h2>삼다 꿀배 티 20입</h2>
                                <h4>Tea Shop > 블렌디드<br>8,550원</h4>
                                <a href="#"><span></span><i>VIEW</i></a>
                                <p>제주 밤바다처럼 그윽하고, 달큰한 배향이<br>
                                    환상적인 블렌디드티입니다.<br>
                                    제주 차밭의 맛과 향을 가벼운 가격으로 즐겨보세요.</p>
                              </div>
                            </div>
                            <!-- swiper 왼,오른 버튼 -->
                            <div class="swiper-button-next myNext2"></div>
                            <div class="swiper-button-prev myPrev2"></div>
                            <!-- 스와이퍼 스크롤바 -->
                            <div class="swiper-scrollbar bar1"></div>
                        </div>
                    </div>
                    <div class="tab_slide_list t2">
                        <!-- 추천제품 슬라이드 -->
                        <div class="swiper mySwiper3">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide best1">
                                <img src="img/deco4.png" alt="#">
                                <h2>과일 블렌딩 티 박스</h2>
                                <h4>Tea Shop > 세트<br>26,500원</h4>
                                <a href="#"><span></span><i>VIEW</i></a>
                                <p>제주만의 특별함을 담아내어 블렌딩한 프리미엄<br>
                                  티백 라인입니다. 새콤달콤한 여러 과실향의<br>
                                  제품을 다양하게 즐길 수 있는 세트입니다.</p>
                              </div>
                              <div class="swiper-slide best2">
                                <img src="img/deco5.png" alt="#">
                                <h2>과일 블렌딩 티 박스</h2>
                                <h4>Tea Shop > 세트<br>26,500원</h4>
                                <a href="#"><span></span><i>VIEW</i></a>
                                <p>제주만의 특별함을 담아내어 블렌딩한 프리미엄<br>
                                  티백 라인입니다. 새콤달콤한 여러 과실향의<br>
                                  제품을 다양하게 즐길 수 있는 세트입니다.</p>
                              </div>
                              <div class="swiper-slide best3">
                                <img src="img/deco6.png" alt="#">
                                <h2>과일 블렌딩 티 박스</h2>
                                <h4>Tea Shop > 세트<br>26,500원</h4>
                                <a href="#"><span></span><i>VIEW</i></a>
                                <p>제주만의 특별함을 담아내어 블렌딩한 프리미엄<br>
                                  티백 라인입니다. 새콤달콤한 여러 과실향의<br>
                                  제품을 다양하게 즐길 수 있는 세트입니다.</p>
                              </div>
                            </div>
                            <!-- swiper 왼,오른 버튼 -->
                            <div class="swiper-button-next myNext3"></div>
                            <div class="swiper-button-prev myPrev3"></div>
                            <!-- swiper 스크롤바 -->
                            <div class="swiper-scrollbar bar2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner">
            <div class="banner_in">
                <h1>오설록 News</h1>
                <div class="banner_box">
                    <div class="banner_title">
                        2022년 오설록<br>두 가지 매력으로 즐기는 티
                    </div>
                    <div class="banner_img">
                        <ul>
                            <li class="event1"><a href="#">
                                <h1>따뜻하게 시원하게<br>
                                    두가지 매력으로 즐기는 티 </h1>
                                <p>따뜻하게 마셔도 좋지만<br>
                                    냉침하면 특히 맛있는 티를 추천해 드릴게요.</p>
                            </a></li>
                            <li class="event2"><a href="#">
                                <span>2022</span>
                                <h1>4월의 출석체크</h1>
                                <p>하루 1번 출석하고,<br>
                                    풍성한 혜택을 만나보세요.</p>
                                <button>이달의 상품추천</button>
                            </a></li>
                            <li class="event3"><a href="#">
                                <h1>오설록 티하우스 북촌점</h1>
                                <p>오설록의 새로운 티하우스가 오픈합니다.</p>
                            </a></li>
                        </ul>
                    </div>
                    <div class="banner_btn">
                        <a href="#" class="active">
                            <span>Event</span>
                            <p>언제 어디서나 편하게 마시는 냉침 달빛걷기</p>
                        </a>
                        <a href="#">
                            <span>Event</span>
                            <p>출석하고 풍성한 혜택을 만나보세요</p>
                        </a>
                        <a href="#">
                            <span>News</span>
                            <p>오설록의 새로운 티하우스 오픈</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="sns">
            <div class="sns_in">
                <h1>Now Sns</h1>
                <div class="sns_list">
                    <ul>
                        <li><a href="#">
                            <div class="sns_img">
                                <img src="img/sns1.png" alt="sns">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="sns_img">
                                <img src="img/sns2.png" alt="sns">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="sns_img">
                                <img src="img/sns3.png" alt="sns">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="sns_img">
                                <img src="img/sns4.png" alt="sns">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="sns_img">
                                <img src="img/sns5.png" alt="sns">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="sns_img">
                                <img src="img/sns6.png" alt="sns">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="sns_img">
                                <img src="img/sns7.png" alt="sns">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="sns_img">
                                <img src="img/sns8.png" alt="sns">
                            </div>
                        </a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- 구글 지도 연결 -->
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101189.91153045144!2d126.91429715820308!3d37.5742674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2c291fffa07%3A0x6dc7c05f067d6ce!2z7Jik7ISk66GdIO2LsO2VmOyasOyKpCDsnbjsgqzrj5nsoJA!5e0!3m2!1sko!2skr!4v1650940156754!5m2!1sko!2skr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="a_box">
                <ul>
                    <li><a href="#"><span><img src="img/check.png" alt="리스트"></span><p>제품 메뉴얼</p></a></li>
                    <li><a href="#"><span><img src="img/tools.png" alt="설정"></span><p>A/S 및 상당</p></a></li>
                    <li class="box3"><a href="#"><span><img src="img/question.png" alt="질문"></span><p>자주 묻는 질문</p></a></li>
                </ul>
            </div>
        </section>
        <section class="app">
            <div class="app_1">
                <ul>
                    <li><span>고객센터</span>
                        <a href="#">1599-7121</a>
                        <p>(9:30~18:30, 토요일&공휴일 휴무)</p>
                    </li>
                    <li><span>A/S 문의</span>
                        <a href="#">080-735-7123</a>
                        <p>(9:30~18:30, 토요일&공휴일 휴무)</p>
                    </li>
                </ul>
            </div>
            <div class="app_2">
                <h3>언제 어디서든 오설록의<br>오설록 티를 AR APP에서 만나보세요!</h3>
                <ul>
                    <li><a href="#">APP STORE</a></li>
                    <li><a href="#">GOOGLE PLAY</a></li>
                </ul>
            </div>
        </section>
        <!-- footer -->
        <? include "footer.html"; ?>
        <!-- top버튼 -->
        <div class="top">TOP</div>
    </div>
    <!-- 사이트맵 -->
    <? include "site.html"; ?>
</body>
</html>