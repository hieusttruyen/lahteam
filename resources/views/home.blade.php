@extends('layouts.master')

@section('title', 'LahTeam')

@section('style-libraries')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop


@section('content')


    <div id="menu">
        <input type="checkbox" name="open" id="open">
        <label for="open" class="open">
            <i class="fas fa-bars"></i>
        </label>
        <ul id ="none"></ul>
        <ul id="menu_tit">
            <li><a href="#home">Trang chủ</a></li>
            <li><a href="#model">Dự án</a></li>
            <li><a href="#dichvu">Dịch vụ</a></li>
            <li><a href="#team">Giới thiệu</a></li>
            <li><a href="#contact">Liên hệ</a></li>
        </ul>
    </div>


    <div id ="mid">
        <ul id="home"></ul>
        <div id="intro">
            <ul>
                <li class="intro1">
                    <h3>LaH Team</h3>
                    <h5 id="texth5"></h5>
                    <ul class="bt">
                        <a href="http://m.me/117688878006404" target="_blank"><button class="bt1" type="button">Kết nối
                                ngay</button></a>
                        <a href="" style="text-decoration: none"><button class="bt2" type="button">Đăng kí tư
                                vấn</button></a>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="imgz">
            <ul>
                <li class="img1"><img src="./img/rectangle/Rectangle 39270.png"></li>
                <li class="img2"><img src="./img/rectangle/Rectangle 39274.png"></li>
                <li class="img3"><img src="./img/rectangle/Rectangle 39276.png"></li>
                <li class="img4"><img src="./img/rectangle/Rectangle 39271.png"></li>
                <li class="img5"><img src="./img/rectangle/Rectangle 39275.png"></li>
                <li class="img6"><img src="./img/rectangle/Rectangle 39273 .png"></li>
                <li class="img7"><img src="./img/rectangle/Rectangle 39272.png"></li>
            </ul>
        </div>
    </div>
    <div id="imgM">
        <div id="imgMob">
            <ul>
                <li class="img8"><img src="./img/mobile/Rectangle m1.png"></li>
                <li class="img9"><img src="./img/mobile/Rectangle m2.png"></li>
            </ul>
            <ul>
                <li class="img10"><img src="./img/mobile/Rectangle m3.png"></li>
            </ul>
        </div>
    </div>
    <div id="trust">

        <h2>Trusted By</h2>

        <ul class="logo">
            <li><img src="./img/trusted/image 70.png"></li>
            <li><img src="./img/trusted/image 71.png"></li>
            <li><img src="./img/trusted/image 72.png"></li>
            <li><img src="./img/trusted/image 73.png"></li>
            <li><img src="./img/trusted/image 74.png"></li>
            <li><img src="./img/trusted/image 75.png"></li>
        </ul>
        <ul class="text">
            <li class="number">
                50M+</li>
            <li class="text1">IMG generated using our model</li>
            <li class="number">300K+</li>
            <li class="text1">Downloaded</li>
        </ul>
    </div>

    <div id="model">
        <ul class="modelText">
            <li class="modelText1">AI Models</li>
            <li class="modelText2">LaH Team là đội ngũ chuyên gia đầu ngành - những người có kinh nghiệm làm việc với Stable
                Diffusion nói riêng và AI tạo sinh hình ảnh nói chung, từ thời kỳ đầu AI tạo sinh có mặt trên thế giới.</li>
            <li>
                <button>Checkpoint</button>
                <button>LoRa</button>
                <button>Workflow</button>
            </li>
        </ul>
        <ul class="modelImg" id="modelImg">
            <a href="https://civitai.com/models/118441/lah-mysterious-or-sdxl" target="_blank">
                <div class="overlay">
                    <img class="mod1" src=".\img\model\Bot1\Bot1.png">
                    <img class="ci1" src=".\img\model\top1.png">

                    <li class="ai1">SDXL</li>
                    <li class="ai2">Mysterious</li>
                </div>
            </a>
            <a href="https://civitai.com/models/125036/lah-t-shirt-design-concept" target="_blank">
                <img class="mod1" src=".\img\model\Bot1\Bot2.png">
                <img class="ci1" src=".\img\model\top2.png">
                <li class="ai1">LoRA</li>
                <li class="ai2">T-shirt</li>
            </a>
            <a href="https://civitai.com/models/132578/lah-cute-social-or-sdxl-and-sd15" target="_blank">
                <img class="mod1" src=".\img\model\Bot1\Bot3.png">
                <img class="ci1" src=".\img\model\top3.png">
                <li class="ai1">LoRA</li>
                <li class="ai2">Cute Social</li>
            </a>
            <a href="https://civitai.com/models/118756/duchaiten-aiart-sdxl" target="_blank">
                <img class="mod1" src=".\img\model\Bot1\Bot4.png">
                <img class="ci1" src=".\img\model\top4.png">
                <li class="ai1">SDXL</li>
                <li class="ai2">Alart</li>
            </a>
            <a href="https://tensor.art/models/627910827237783431" target="_blank">
                <img class="mod1" src=".\img\model\Bot1\bot5.png">
                <img class="ci1" src=".\img\model\top5.png">
                <li class="ai1">SDXL</li>
                <li class="ai2">T-shirt Design</li>
            </a>
            <a href="https://civitai.com/models/20261/duchaitenjourney" target="_blank">
                <img class="mod1" src=".\img\model\Bot1\bot6.png">
                <img class="ci1" src=".\img\model\top6.png">
                <li class="ai1">Checkpoint</li>
                <li class="ai2">Journey</li>
            </a>
            <a href="https://civitai.com/models/5426/duchaitendarkside" target="_blank">
                <img class="mod1" src=".\img\model\Bot1\Bot7.png">
                <img class="ci1" src=".\img\model\top7.png">
                <li class="ai1">Checkpoint</li>
                <li class="ai2">Darkside</li>
            </a>
            <a href="https://tensor.art/models/642619312110286942" target="_blank">
                <img class="mod1" src=".\img\model\Bot1\bot8.png">
                <img class="ci1" src=".\img\model\top8.png">
                <li class="ai1">Checkpoint</li>
                <li class="ai2">CuteGirlMix</li>
            </a>
            <a href="https://civitai.com/models/17754/dreamful" target="_blank">
                <img class="mod1" src=".\img\model\Bot1\bot9.png">
                <img class="ci1" src=".\img\model\top9.png">
                <li class="ai1">Checkpoint</li>
                <li class="ai2">DreamFul</li>
            </a>
            <button type="button" id="btPre">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37"
                    fill="none">
                    <path
                        d="M23.2998 29.2838C23.4043 29.3883 23.4872 29.5124 23.5438 29.649C23.6003 29.7855 23.6294 29.9319 23.6294 30.0797C23.6294 30.2275 23.6003 30.3739 23.5438 30.5105C23.4872 30.6471 23.4043 30.7711 23.2998 30.8757C23.1952 30.9802 23.0711 31.0631 22.9346 31.1197C22.798 31.1762 22.6516 31.2054 22.5038 31.2054C22.356 31.2054 22.2096 31.1762 22.0731 31.1197C21.9365 31.0631 21.8124 30.9802 21.7079 30.8757L10.4579 19.6257C10.3533 19.5212 10.2703 19.3971 10.2137 19.2605C10.1571 19.124 10.1279 18.9776 10.1279 18.8297C10.1279 18.6819 10.1571 18.5355 10.2137 18.3989C10.2703 18.2623 10.3533 18.1383 10.4579 18.0338L21.7079 6.78379C21.919 6.57269 22.2053 6.4541 22.5038 6.4541C22.8023 6.4541 23.0887 6.57269 23.2998 6.78379C23.5108 6.99489 23.6294 7.28119 23.6294 7.57973C23.6294 7.87826 23.5108 8.16457 23.2998 8.37566L12.8443 18.8297L23.2998 29.2838Z"
                        fill="white" />
                </svg>
            </button>
            <button type="button" id="btNext">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37"
                    fill="none">
                    <path
                        d="M25.55 19.6257L14.3 30.8757C14.1955 30.9802 14.0714 31.0631 13.9348 31.1197C13.7982 31.1762 13.6519 31.2054 13.504 31.2054C13.3562 31.2054 13.2099 31.1762 13.0733 31.1197C12.9367 31.0631 12.8126 30.9802 12.7081 30.8757C12.6036 30.7711 12.5207 30.6471 12.4641 30.5105C12.4075 30.3739 12.3784 30.2275 12.3784 30.0797C12.3784 29.9319 12.4075 29.7855 12.4641 29.649C12.5207 29.5124 12.6036 29.3883 12.7081 29.2838L23.1636 18.8297L12.7081 8.37566C12.497 8.16457 12.3784 7.87826 12.3784 7.57973C12.3784 7.28119 12.497 6.99489 12.7081 6.78379C12.9192 6.57269 13.2055 6.4541 13.504 6.4541C13.8026 6.4541 14.0889 6.57269 14.3 6.78379L25.55 18.0338C25.6546 18.1383 25.7376 18.2623 25.7942 18.3989C25.8508 18.5355 25.8799 18.6819 25.8799 18.8297C25.8799 18.9776 25.8508 19.124 25.7942 19.2605C25.7376 19.3971 25.6546 19.5212 25.55 19.6257Z"
                        fill="white" />
                </svg>
            </button>
        </ul>
        <ul id="dichvu"></ul>
    </div>

    <div id="service">
        <ul class="serText">
            <li class="serText1">Dịch vụ</li>
            <li class="serText2">Chúng tôi hướng đến phổ cập kiến thức về AI tạo sinh cho người Việt, và xây dựng những
                giải pháp ứng dụng AI trong doanh nghiệp tốt nhất.</li>
            <button>Coming soon</button>
        </ul>
        <ul class="serBox">
            <ul class="col1">
                <ul class="serBox1">
                    <img src="./img/service/setting 1.png"">
                    <li>Đào tạo cá nhân</li>
                </ul>
                <ul class="serBox2">
                    <img src="./img/service/thunder 1.png"">
                    <li>Tư vấn giải pháp ứng dụng AI tạo sinh trong doanh nghiệp</li>
                </ul>
            </ul>
            <ul class="col2">
                <ul class="serBox3">
                    <img src="./img/service/brain 1.png"">
                    <li>Đào tạo nhân sự doanh nghiệp</li>
                </ul>
                <ul class="serBox4">
                    <img src="./img/service/circuit-board 1.png"">
                    <li>Thiết kế Model/ Workflow/Node</li>
                </ul>
            </ul>
        </ul>
    </div>

    <div id="team">
        <ul class="teamText">
            <li class="teamText1">Lah Team</li>
            <li class="teamText2">LaH Team tiền thân là LahIntheFutureland, thành lập tháng 7/2023 bởi Trần Đức Đạt (LaH) -
                một trong những người Việt Nam có mô hình Stable Diffusion được sử dụng nhiều nhất thế giới.</li>
        </ul>
        <ul class="about">
            <ul class="big">
                <img src=".\img\about\image 76 (1).png">
                <ul>
                    <li class="nick">LaH</li>
                    <li class="name">Trần Đức Đạt</li>
                    <li class="job">Founder</li>
                </ul>
            </ul>
            <ul class="big">
                <img src=".\img\about\image 76 (2).png">
                <ul>
                    <li class="nick">Rực</li>
                    <li class="name">Đào Anh Dũng</li>
                    <li class="job">IT Specialist</li>
                </ul>
            </ul>
            <ul class="big">
                <img src=".\img\about\image 76 (3).png">
                <ul>
                    <li class="nick">Duchaiten</li>
                    <li class="name">Nguyễn Minh Đức</li>
                    <li class="job">Model Creator</li>
                </ul>
            </ul>
            <ul class="big">
                <img src=".\img\about\image 76 (4).png">
                <ul>
                    <li class="nick">ChungAx</li>
                    <li class="name">Phạm Đăng Chung</li>
                    <li class="job">Automation Specialist</li>
                </ul>
            </ul>
        </ul>
        <ul id="contact"></ul>
    </div>
    <div id="blog">
        <li class="blogTit">Liên hệ</li>
        <img class="blogCuv" src=".\img\Vector 2.png">

        <ul class="lh">
            <ul class="lh1">
                <li>Liên hệ với chúng tôi</li>
                <div class="lhlah">Liên hệ LaH</div>
                <a class="lhMail" href=https://mail.google.com/mail/ target="_blank">
                    lah.team.ai@gmail.com
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M20.7806 12.5306L14.0306 19.2806C13.8899 19.4213 13.699 19.5003 13.5 19.5003C13.301 19.5003 13.1101 19.4213 12.9694 19.2806C12.8286 19.1398 12.7496 18.949 12.7496 18.7499C12.7496 18.5509 12.8286 18.36 12.9694 18.2193L18.4397 12.7499H3.75C3.55109 12.7499 3.36032 12.6709 3.21967 12.5303C3.07902 12.3896 3 12.1988 3 11.9999C3 11.801 3.07902 11.6103 3.21967 11.4696C3.36032 11.3289 3.55109 11.2499 3.75 11.2499H18.4397L12.9694 5.78055C12.8286 5.63982 12.7496 5.44895 12.7496 5.24993C12.7496 5.05091 12.8286 4.86003 12.9694 4.7193C13.1101 4.57857 13.301 4.49951 13.5 4.49951C13.699 4.49951 13.8899 4.57857 14.0306 4.7193L20.7806 11.4693C20.8504 11.539 20.9057 11.6217 20.9434 11.7127C20.9812 11.8038 21.0006 11.9014 21.0006 11.9999C21.0006 12.0985 20.9812 12.1961 20.9434 12.2871C20.9057 12.3782 20.8504 12.4609 20.7806 12.5306Z"
                            fill="url(#paint0_linear_2417_1188)" />
                        <defs>
                            <linearGradient id="paint0_linear_2417_1188" x1="3" y1="11.9999" x2="21.0006"
                                y2="11.9999" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#66DBFF" />
                                <stop offset="1" stop-color="#B73FFF" />
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
                <div class="imglh1">
                    <a target='_blank' href="https://www.facebook.com/lah.futureland">
                        <img src=".\img\connect\Facebook.png">
                        <img src=".\img\connect\LinkedIn.png">
                        <img src="img\connect\Call.png">
                    </a>
                </div>
            </ul>
            <ul class="lh2">
                <img src=".\img\connect\IMG.png">
            </ul>
        </ul>
    </div>

    <div id="end">
        <ul class="end1">
            <li class="endText1">LaH Team</li>
            <li class="endText2">Join us on a journey around the world and
                let's explore what artificial intelligence can do!</li>
        </ul>
        <ul class="end2">
            <ul>
                <li class="endText3">Follow us</li>
                <li>Facebook</li>
                <li>Instagram</li>
                <li>Twitter</li>
                <li>Linkedin</li>
            </ul>
            <a href="#home"><img src=".\img\arrow-top.svg.png"></a>
        </ul>
    </div>
    <a href="http://m.me/117688878006404" target="_blank">
        <button class="mess">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                <path
                    d="M19.9996 0C8.73332 0 0 8.25283 0 19.3996C0 25.2305 2.38945 30.2684 6.28087 33.7493C6.44316 33.8929 6.5745 34.068 6.66691 34.264C6.75932 34.46 6.81085 34.6727 6.81836 34.8893L6.92736 38.4492C6.93541 38.7112 7.0077 38.9671 7.13785 39.1946C7.268 39.4221 7.45205 39.6141 7.6738 39.7538C7.89555 39.8935 8.14822 39.9766 8.4096 39.9957C8.67098 40.0149 8.93306 39.9695 9.17281 39.8637L13.1422 38.1137C13.4786 37.9655 13.8559 37.938 14.2102 38.0357C16.0971 38.5485 18.0443 38.8053 19.9996 38.7992C31.2659 38.7992 39.9992 30.5494 39.9992 19.3996C39.9992 8.24983 31.2659 0 19.9996 0ZM32.0093 14.9262L26.1345 24.2495C25.9135 24.6001 25.6222 24.9011 25.2791 25.1335C24.9359 25.3659 24.5483 25.5247 24.1408 25.5999C23.7332 25.675 23.3145 25.6649 22.911 25.5702C22.5076 25.4755 22.1281 25.2982 21.7966 25.0495L17.1241 21.5446C16.9155 21.3881 16.6615 21.3039 16.4007 21.3047C16.1398 21.3056 15.8864 21.3913 15.6787 21.5491L9.36781 26.3365C8.52582 26.9754 7.42635 25.9675 7.98984 25.073L13.8647 15.7522C14.0857 15.4016 14.377 15.1006 14.7201 14.8682C15.0633 14.6358 15.4508 14.477 15.8584 14.4018C16.266 14.3266 16.6847 14.3367 17.0882 14.4315C17.4916 14.5262 17.8711 14.7035 18.2026 14.9522L22.8755 18.4566C23.0842 18.6131 23.3382 18.6972 23.599 18.6964C23.8598 18.6956 24.1133 18.6099 24.321 18.4521L30.6314 13.6632C31.4739 13.0237 32.5733 14.0317 32.0093 14.9262Z"
                    fill="white" />
            </svg>
        </button>
    </a>


@stop

@section('scripts')
    <script src="./js/homeJs.js"></script>
@stop
