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
        <li><a href="#mid">Trang chủ</a></li>
        <li><a href="#model">Dự án</a></li>
        <li><a href="#service">Dịch vụ</a></li>
        <li><a href="#team">Giới thiệu</a></li>
        <li><a href="#blog">Liên hệ</a></li>
    </ul>
</div>


<div id ="mid">
    <div id="intro">
        <ul>
            <li class="intro1">
                <h3>LaH Team</h3>
                <h5>Đội ngũ chuyên gia hàng đầu Việt Nam về AI tạo sinh</h5>
                <div class="bt">
                    <a href="http://m.me/117688878006404" target="_blank"><button class="bt1" type="button" href="m.me/117688878006404">Kết nối ngay</button></a>
                    <a href="" style="text-decoration: none"><button class="bt2" type="button">Đăng kí tư vấn</button></a>
                </div>
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
        <li class="number">50M+</li>
        <li class="text1">IMG generated using our model</li>
        <li class="number">300K+</li>
        <li class="text1">Downloaded</li>
    </ul>
</div>

<div id="model">
    <ul class="modelText">
        <li class="modelText1">AI Models</li>
        <li class="modelText2">LaH Team là đội ngũ chuyên gia đầu ngành - những người có kinh nghiệm làm việc với Stable Diffusion nói riêng và AI tạo sinh hình ảnh nói chung, từ thời kỳ đầu AI tạo sinh có mặt trên thế giới.</li>
        <li>
            <button>Checkpoint</button>
            <button>LoRa</button>
            <button>Workflow</button>
        </li>
    </ul>
    <ul class="modelImg">
        <a href="https://civitai.com/models/118441/lah-mysterious-or-sdxl" target="_blank">
            <img class="mod1" src=".\img\model\Bot1\Bot1.png">
            <img class="ci1" src=".\img\model\top1.png">
            <div class="overlay"></div>
            <li class="ai1">SDXL</li>
            <li class="ai2">Mysterious</li>
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
    </ul>
</div>

<div id="service">
    <ul class="serText">
        <li class="serText1">Dịch vụ</li>
        <li class="serText2">Chúng tôi hướng đến phổ cập kiến thức về AI tạo sinh cho người Việt, và xây dựng những giải pháp ứng dụng AI trong doanh nghiệp tốt nhất.</li>
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
        <li class="teamText2">LaH Team tiền thân là LahIntheFutureland, thành lập tháng 7/2023 bởi Trần Đức Đạt (LaH) - một trong những người Việt Nam có mô hình Stable Diffusion được sử dụng nhiều nhất thế giới.</li>
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
</div>
<div id="blog">
    <li class="blogTit">Liên hệ</li>
    <img class="blogCuv" src=".\img\Vector 2.png">

    <ul class="lh">
        <ul class="lh1">
            <li>Liên hệ với chúng tôi</li>
            <div class="lhlah">Liên hệ LaH</div>
            <a href=https://mail.google.com/mail/ target="_blank">lah.team.ai@gmail.com</a>
            <div class="imglh1">
                <img src=".\img\connect\Facebook.png">
                <img src=".\img\connect\LinkedIn.png">
                <img src="img\connect\Call.png">
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
        <a href="#menu"><img src=".\img\arrow-top.svg.png"></a>
    </ul>
</div>
<a href="http://m.me/117688878006404" target="_blank">
<button class="mess" >
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
        <path d="M19.9996 0C8.73332 0 0 8.25283 0 19.3996C0 25.2305 2.38945 30.2684 6.28087 33.7493C6.44316 33.8929 6.5745 34.068 6.66691 34.264C6.75932 34.46 6.81085 34.6727 6.81836 34.8893L6.92736 38.4492C6.93541 38.7112 7.0077 38.9671 7.13785 39.1946C7.268 39.4221 7.45205 39.6141 7.6738 39.7538C7.89555 39.8935 8.14822 39.9766 8.4096 39.9957C8.67098 40.0149 8.93306 39.9695 9.17281 39.8637L13.1422 38.1137C13.4786 37.9655 13.8559 37.938 14.2102 38.0357C16.0971 38.5485 18.0443 38.8053 19.9996 38.7992C31.2659 38.7992 39.9992 30.5494 39.9992 19.3996C39.9992 8.24983 31.2659 0 19.9996 0ZM32.0093 14.9262L26.1345 24.2495C25.9135 24.6001 25.6222 24.9011 25.2791 25.1335C24.9359 25.3659 24.5483 25.5247 24.1408 25.5999C23.7332 25.675 23.3145 25.6649 22.911 25.5702C22.5076 25.4755 22.1281 25.2982 21.7966 25.0495L17.1241 21.5446C16.9155 21.3881 16.6615 21.3039 16.4007 21.3047C16.1398 21.3056 15.8864 21.3913 15.6787 21.5491L9.36781 26.3365C8.52582 26.9754 7.42635 25.9675 7.98984 25.073L13.8647 15.7522C14.0857 15.4016 14.377 15.1006 14.7201 14.8682C15.0633 14.6358 15.4508 14.477 15.8584 14.4018C16.266 14.3266 16.6847 14.3367 17.0882 14.4315C17.4916 14.5262 17.8711 14.7035 18.2026 14.9522L22.8755 18.4566C23.0842 18.6131 23.3382 18.6972 23.599 18.6964C23.8598 18.6956 24.1133 18.6099 24.321 18.4521L30.6314 13.6632C31.4739 13.0237 32.5733 14.0317 32.0093 14.9262Z" fill="white"/>
        </svg>
</button>
</a>


@stop

@section('scripts')

@stop
