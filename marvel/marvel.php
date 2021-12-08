<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCU Fanclub Vietnam</title>
    <style>
        :root{
            --maincolor: rgb(32, 32, 32);
            --navmenuheight:52px;
        }
        *{
            padding:0;
            margin: 0;
            box-sizing: border-box;
        }
        html{
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 16px;
            background:#e2e2e2;
        }
        body{
            width: 1182px;
            
            background: white;
            margin: 0 auto;
            padding: 0 8px;
        }
       
        #navbar{
            height: var(--navmenuheight);
            background: var(--maincolor);
           
        }
        
        #navbar .navuser{
            height: 100%;
            margin-left: 35px;
            float: left;
            
        }
        #navbar .navuser span{
            color: white;
            font-size: 1rem;
            float: left;
            margin-top:15px;
            
        }
        #navbar .navuser>a{
            float: left;
            height: 100%;
            line-height: var(--navmenuheight);
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.75rem;
            margin-left: 20px;
            margin-right: 20px;
            color: white;
            text-decoration: none;
        }
        #navbar .navuser:hover>a{
            color: rgb(233,26,33);
        }
        #navbar .navuser:hover>span{
            color: rgb(233,26,33);
        }
       #navbar .navlogo{
            height: var(--navmenuheight);
            display: block;
            margin-left: 295px;
            margin-right: 170px;
            
            width: 130px;
            float: left;
       }
       #navbar .navlogo img{
           height: 100%;
           width: 100%;
         
       }
        #navbar .search{
            float: left;
            width: 250px;
            height: 26px;
            margin-top: 13px;

            margin-right: 30px;
            background: rgb(58, 58, 58);;

            border-radius: 13px;
        }
        #navbar .search input{
            font-weight: bold;
           
            background: none;
            margin-left: 8px;
            margin-top:4px;
            border: none;
            color:white;
            float:left;
            width:85%;
            display:block;
        }
        #navbar .search input:focus{
            outline:none;
        }
        #navbar .search span{
            color: white;
            font-size: 1.1rem;
            display: block;
            float: left;
            margin-top: 4px;
        }
        #navbar .lang{
            
            float: left;
            margin-top: 12px;
            height:26px;
            width: 26px;
            
        }
        #navbar .lang img{
            height: 100%;
            width: 100%;
        }
       
        #banner{
            height: 380px;
            width: 100%;
            
        }
        #banner img{
            height: 100%;
            width: 100%;
        }
        
        #mainmenu{
            height: 45px;
            background: var(--maincolor);
         
        }
        #mainmenu>ul{
            height: 100%;
            list-style-type: none;
            margin-left: 210px;
            width: fit-content;
        }
        #mainmenu>ul>li{
            height: 100%;
            float: left;
            text-align: center;
            line-height: 43px;
            text-transform: uppercase;
            font-weight: bold;
            color: rgb(255, 255, 255);
            position: relative;
            padding: 0 20px;
            font-size: 0.7rem;
            border-bottom: solid var(--maincolor);
        }
        #mainmenu>ul>li>a{
            color: white;
            text-decoration: none;
            font-size: 13px;
        }
        #mainmenu>ul>li:hover{
            color:rgb(233,26,33);
            border-bottom: 2px solid rgb(233,26,33);
        }
        #mainmenu>ul>li:hover>a{
            color: rgb(233,26,33);
            font-size: 15px;
        }
        #mainmenu>ul>li>ul{
            list-style-type:none;
            width: 230px;
            position: absolute;
            z-index: 1;
            left: 0;
            display: none;
            background: var(--maincolor);
        }
        
        
        #mainmenu>ul>li:hover>ul{
            display: block;
            padding: 8px 0;
        }
        #mainmenu>ul>li>ul>li{
            font-size: 0.9rem;
            text-transform: none;
            font-weight: normal;
            height: 35px;
            line-height: 35px;
            background: var(--maincolor);
            color: white;
            text-align: left;
            padding: 0 10px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            position: relative;
        }
        #mainmenu>ul>li>ul>li:hover{
            color: rgb(233,26,33);
            background: rgb(58, 58, 58);
            animation: slide 1s;
        }
        #mainmenu>ul>li>ul>li>a{
            color: white;
            text-decoration: none;
        }
        #mainmenu>ul>li>ul>li:hover>a{
            color: rgb(233,26,33);
        }
        @keyframes slide { 
            0%{left:6px;}
            20%{left:-4.5px;}
            40%{left:3px;}
            60%{left:-1.5px;}
            80%{left:0.5px;}
            100%{left:0px;}
        }
       
        
        #newsfeed{
            height:35px;
            margin:10px 0;
            background: white;
        }
        #newsfeed .headlines{
            height: 100%;
            width: 85px;
            color: white;
            background: var(--maincolor);
            font-weight: bold;
            text-transform: uppercase;
            line-height: 35px;
            font-size: 0.85rem;
            text-align: center;
            float: left;
            
        }
        #newsfeed .headlines a{
            color:white;
            text-decoration: none;
        }

        #newsfeed .arrow{
            width: 10px;
            height: 10px;
            border-top: 17.5px solid transparent;
            border-bottom: 17.5px solid transparent;
            border-left: 17.5px solid var(--maincolor);
            background: rgba(255, 255, 255, 0);
            float: left;
        }
        #newsfeed .running-text{
            width: 1008px;
            height: 35px;
            background: white;
            float: left;
            overflow: hidden;
           
        }
        #newsfeed .running-text>ul{
            height: 100%;
            list-style-type: none;
            animation: runnings 100s infinite;
            animation-timing-function: linear;
            position: relative;
            white-space: nowrap;
            line-height: 35px;
        }
        #newsfeed .running-text>ul:hover{
            animation-play-state: paused;
        }
        @keyframes runnings{
            0%{left:100%;}
            100%{left:-10000px;}   
        }
        #newsfeed .running-text>ul>li{
            display: inline-block;
            margin-left: 20px;
            font-weight: bold;
        }
        #newsfeed .running-text>ul>li::after{
            content: " |";
            color: rgb(233,26,33);
        }
        #newsfeed .running-text>ul>li>a{
            color: rgb(233,26,33);
        }
        #maincontent{
            height:4700px;
        }
        #maincontent .noibat{
            width:100%;
            height: fit-content;
            color: white;
            letter-spacing: 0.5px;
            line-height: 20.8px;
           padding: 10px 32px 0px;
            
        }
        .noibatcontainer{
            float: left;
        }
        .listnoibat ul{
            float: left;
            width: 1100px;
            height: 100%;
            display:grid;
            gap:normal 10px;
            grid-template-columns:175px 175px 175px 175px 175px 175px;
            letter-spacing:0.5px;
            line-height:0.8px;
            list-style-type: none;
        }
        .listnoibat>ul img{
            width: 175px;
            height: 259px;
            box-shadow: rgba(58, 58, 58, 0.514) 0px 10px 10px;
        }
        .tieu-de-noi-bat{
            position: relative;
            color: black;
            width: fit-content;
        }
        
        .listnoibat>ul a{
            text-decoration: none;
            color: black;
        }
        .listnoibat>ul a:hover h5{
            color:rgb(233,26,33);
        }
        .listnoibat>ul h5{
            margin-bottom: 5px;
        }
        .listnoibat>ul h6{
            margin-top: 5px;
            font-size: 0.7rem;
            color:rgb(146, 146, 146);
        }
        #maincontent .tintucmoinhat{
            width:100%;
            height: fit-content;
            color: white;
            letter-spacing: 0.5px;
            line-height: 20.8px;
            padding: 10px 32px 0px;
        }
        .tintucmoinhatcontainer{
            float: left;
        }
        .listmoinhat ul{
            float: left;
            width: 1100px;
            height: 100%;
            display:grid;
            gap:normal 10px;
            grid-template-columns:267px 267px 267px 267px;
            letter-spacing:0.5px;
            line-height:0.8px;
            list-style-type: none;
        }
        .listmoinhat ul img{
            width: 100%;
            height: 100%;
            box-shadow: rgba(58, 58, 58, 0.514) 0px 10px 10px; 
        }
        .tieu-de-tin-tuc{
            position: relative;
            color: black;
            width: fit-content;
        }
        .listmoinhat ul a{
            text-decoration: none;
            color: black;
        }
        .listmoinhat ul a:hover h5{
            color: rgb(233,26,33);
        }
        #maincontent .sap-ra-mat{
            width:100%;
            height: fit-content;
            color: white;
            letter-spacing: 0.5px;
            line-height: 20.8px;
            padding: 10px 32px 0px;
        }
        .sap-ra-mat-container{
            float: left;

        }
        .list-sap-ra-mat ul{
            float: left;
            width: 1100px;
            height: 100%;
            display:grid;
            gap:normal 10px;
            grid-template-columns:175px 175px 175px 175px 175px 175px;
            letter-spacing:0.5px;
            line-height:0.8px;
            list-style-type: none;
        }
        .list-sap-ra-mat>ul img{
            width: 175px;
            height: 259px;
            box-shadow: rgba(58, 58, 58, 0.514) 0px 10px 10px;
        }
        .sap-ra-mat-title{
            position: relative;
            color: black;
            width: fit-content;
        }
        .list-sap-ra-mat>ul a{
            text-decoration: none;
            color: black;
        }
        .list-sap-ra-mat>ul a:hover h5{
            color: rgb(233,26,33);
        }
        .list-sap-ra-mat>ul h5{
            margin-bottom: 5px;
        }
        .list-sap-ra-mat>ul h6{
            margin-top: 5px;
            font-size: 0.7rem;
            color:rgb(146, 146, 146);
        }
        #maincontent .da-ra-mat{
            width:100%;
            height: fit-content;
            color: white;
            letter-spacing: 0.5px;
            line-height: 20.8px;
            padding: 10px 32px 0px;
        }
        .da-ra-mat-container{
            float: left;
        }
        .list-da-ra-mat ul{
            float: left;
            width: 1100px;
            height: 100%;
            display:grid;
            gap:normal 10px;
            grid-template-columns:175px 175px 175px 175px 175px 175px;
            letter-spacing:0.5px;
            line-height:0.8px;
            list-style-type: none;
        }
        .list-da-ra-mat>ul img{
            width: 175px;
            height: 259px;
            box-shadow: rgba(58, 58, 58, 0.514) 0px 10px 10px;
        }
        .da-ra-mat-title{
            position: relative;
            color: black;
            width: fit-content;
        }
        .list-da-ra-mat>ul a{
            text-decoration: none;
            color: black;
        }
        .list-da-ra-mat>ul a:hover h5{
            color: rgb(233,26,33);
        }
        .list-da-ra-mat>ul h5{
            margin-bottom: 5px;
        }
        .list-da-ra-mat>ul h6{
            margin-top: 5px;
            font-size: 0.7rem;
            color:rgb(146, 146, 146);
        }
        #maincontent .series{
            width:100%;
            height: fit-content;
            color: white;
            letter-spacing: 0.5px;
            line-height: 20.8px;
            padding: 10px 32px 0px;
        }
        .series-container{
            float: left;

        }
        .list-series ul{
            float: left;
            width: 1100px;
            height: 100%;
            display:grid;
            gap:normal 10px;
            grid-template-columns:175px 175px 175px 175px 175px 175px;
            letter-spacing:0.5px;
            line-height:0.8px;
            list-style-type: none;
        }
        .list-series>ul img{
            width: 175px;
            height: 259px;
            box-shadow: rgba(58, 58, 58, 0.514) 0px 10px 10px;
        }
        .series-title{
            position: relative;
            color: black;
            width: fit-content;
        }
        .list-series>ul a{
            text-decoration: none;
            color: black;
        }
        .list-series>ul a:hover h5{
            color: rgb(233,26,33);
        }
        .list-series>ul  h5{
            margin-bottom: 5px;
        }
        .list-series>ul  h6{
            margin-top: 5px;
            font-size: 0.7rem;
            color:rgb(146, 146, 146);
        }
        #footer{
            width: 100%;
            height: 450px;
            background-image:url("footerimg.jpeg"),linear-gradient(rgba(0, 0, 0, 0.664),rgba(0,0,0,0.664)) ;
            background-blend-mode: overlay;
            background-size:cover;
            margin-top: 320px;
        }
        
        #footer .leftfooter{
            float: left;
            margin-top: 45px;
            color: white;
            margin-left: 32px;
            margin-top: 50px;
            width: 50%;
        }
        #footer .rightfooter{
            margin-top: 50px;
            margin-left: 167px;
            float: left;

        }
        #footer .rightfooter h4{
            width: 249px;
            color: white;
            text-align: justify;
        }
        .rightfooter img{
            height: 100px;
        }
        .rightfooter>ul{
            list-style-type: none;
            width: fit-content;
            align-items: center;
        }
        .rightfooter>ul>li{
            display: inline-block;
            padding: 0 30px;
        }

        .rightfooter>ul>li svg{
            height:20px;
            width: 20px;
            fill: white;
        }
        .rightfooter>ul>li svg:hover{
            fill: rgb(233,26,33);
        }
    </style>
</head>

<body>
    <div id="navbar">
        <div class="navuser">
            <span class="glyphicon glyphicon-user"></span>
            <a href="">Đăng nhập/Đăng ký</a>
        </div>
        <div class="navlogo">
            
            <a href=""><img src="Marvel_Logo.png"></a>

        </div>
        <div class="search">
            <input type="text" placeholder="Tìm kiếm...">
            <span class="glyphicon glyphicon-search"></span>
        </div>
        <div class="lang">
             <a href=""><img src="usa flag vector template_4146689.png"alt=""></a>
        </div>
    </div>
    <div id="mainmenu">
        <ul>
        <?php
            require './admin/connectdb.php';
            $query='SELECT * FROM menu';
            $result=mysqli_query($conn, $query);
            while ($row=mysqli_fetch_assoc($result)){
                echo '<li><a href="">'.$row['ten_menu'].'</a></li>';
            }
        ?>
            <!--<li><a href="">Giới thiệu</a>
                <ul>
                    <li><a href="https://vi.wikipedia.org/wiki/Vũ_trụ_Điện_ảnh_Marvel">Về Marvel Cinematic Universe</a></li>
                    <li><a href="">Về MCU Fanclub</a>
                    </li>
                </ul>
            </li>
            <li><a href="">Nhân vật</a>
                <ul>
                    <li><a href="">Iron Man (Người Sắt)</a></li>
                    <li><a href="">Hulk (Người Khổng Lồ Xanh)</a></li>
                    <li><a href="">Thor (Thần Sấm)</a></li>
                    <li><a href="">Captain America (Đội trưởng Mỹ)</a></li>
                    <li><a href="">Hawkeye (Ưng nhãn)</a></li>
                    <li><a href="">Black Widow (Goá Phụ Đen)</a></li>
                    <li><a href="">Các nhân vật khác...</a></li>
                </ul>
            </li>
            <li><a href="">Phim điện ảnh</a>
                <ul>
                    <li><a href="">Phase 1</a></li>
                    <li><a href="">Phase 2</a></li>
                    <li><a href="">Phase 3</a></li>
                    <li><a href="">Phase 4</a></li>
                </ul>
            </li>
            <li>
                <a href="">TV Series</a>
                <ul>
                    <li><a href="">Netflix</a></li>
                    <li><a href="">Disney+</a></li>
                </ul>
            </li>
            <li><a href="">Phân tích & Review</a></li>
            <li><a href="">Tin tức</a></li>-->
        
        </ul>
    </div>
    <div id="banner">
        <a href=""><img src="bannerimg.jpeg" alt=""></a>
    </div>
    
    <div id="newsfeed">
        <div class="headlines"><a href="">Tin mới</a></div>
        <div class="arrow"></div>
        <div class="running-text">
            <ul>
                <li><a href="">Trailer mới nhất của Spider-Man: No Way Home</a></li>
                <li><a href="">Review Shang-Chi and The Legend of The Ten Rings</a></li>
                <li><a href="">What If...? được xác nhận sẽ có mùa 2</a></li>
                <li><a href="">Phân tích trailer mới nhất của Hawkeye</a></li>
                <li><a href="">Chuyện gì đã xảy ra với Loki?</a></li>
                <li><a href="">Will Poulter trở thành Adam Warlock của MCU</a></li>
                <li><a href="">Những điều cần biết trước khi xem Eternals</a></li>
            </ul>
        </div>
    </div>
    <div id="maincontent">
        <div class="noibat">
            <div class="noibatcontainer">
            <div class="tieu-de-noi-bat">
                <h4>PHIM NỔI BẬT</h4>
            </div>
            <div class="listnoibat">
                <ul>
                    <a href=""><li class="eternals">
                        <img src="eternals_lob_crd_03_0.jpeg" alt="">
                        <h5>Eternals</h5>
                        <h6>5/11/2021</h6>
                    </li>
                    </a>
                    
                    <a href=""><li class="shangchi">
                        <img src="shangchi_lob_crd_07.jpeg" alt="">
                        <h5>Shang-Chi and The Legend of The Ten Rings</h5>
                        <h6>2021</h6>
                    </li>
                    </a>
                    <a href=""><li class="blackwidow">
                        <img src="blackwidow_lob_crd_06.jpeg" alt="">
                        <h5>Black Widow</h5>
                        <h6>2021</h6>
                    </li>
                    </a>
                    <a href=""><li class="spiderman2">
                        <img src="spider-manfarfromhome_lob_crd_04_3.jpeg" alt="">
                        <h5>Spider-Man: Far From Home</h5>
                        <h6>2019</h6>
                    </li>
                    </a>
                    <a href=""><li class="endgame">
                        <img src="avengersendgame_lob_crd_05_2.jpeg" alt="">
                        <h5>Avengers: Endgame</h5>
                        <h6>2019</h6>
                    </li>
                    </a>
                    <a href=""><li class="captainmarvel">
                        <img src="captainmarvel_lob_crd_06.jpeg" alt="">
                        <h5>Captain Marvel</h5>
                        <h6>2019</h6>
                    </li>
                    </a>
                </ul>
            </div>
            </div>
        </div>
        <div class="tintucmoinhat">
            <div class="tintucmoinhatcontainer">
                <div class="tieu-de-tin-tuc">
                    <h4>TIN TỨC MỚI NHẤT </h4>
                </div>
                <div class="listmoinhat">
                    <ul>
                        <a href=""><li class="spiderman">
                            <img src="spidey_card_23.jpeg" alt="">
                            <h5>Trailer mới nhất của Spider-Man: No Way Home</h5>
                            
                        </li>
                        </a>
                        
                        <a href=""><li class="shangchi">
                            <img src="shang-chi_posters.jpeg" alt="">
                            <h5>Review Shang-Chi and The Legend of The Ten Rings</h5>
                            
                        </li>
                        </a>
                        <a href=""><li class="whatif">
                            <img src="whatif_card.jpeg" alt="">
                            <h5>What If...? được xác nhận sẽ có mùa 2</h5>
                            
                        </li>
                        </a>
                        <a href=""><li class="hawkeye">
                            <img src="hawkeye_changeplansthumb_16x9.jpeg" alt="">
                            <h5>Phân tích trailer mới nhất của Hawkeye</h5>
                            
                        </li>
                        </a>
                        </li>
                        </a>
                    </ul>
                </div>
                </div>
        </div>
        <div class="sap-ra-mat">
            <div class="sap-ra-mat-container">
            <div class="sap-ra-mat-title">
                <h4>PHIM SẮP RA MẮT</h4>
            </div>
            <div class="list-sap-ra-mat">
                <ul>
                    <a href=""><li class="fantastic4">
                        <img src="fantasticfour_lob_crd_01.jpeg" alt="">
                        <h5>Fantastic Four</h5>
                        
                    </li>
                    </a>
                    
                    <a href=""><li class="antman3">
                        <img src="antman_lob_crd_01.jpeg" alt="">
                        <h5>Ant-Man and The Wasp: Quantumania</h5>
                        <h6>28/7/2021</h6>
                    </li>
                    </a>
                    <a href=""><li class="blade">
                        <img src="blade_lob_crd_01.jpeg" alt="">
                        <h5>Blade</h5>
                        <h6>2021</h6>
                    </li>
                    </a>
                    <a href=""><li class="marvels">
                        <img src="themarvels_lob_crd_01.jpeg" alt="">
                        <h5>The Marvels</h5>
                        <h6>17/2/2023</h6>
                    </li>
                    </a>
                    <a href=""><li class="wakanda">
                        <img src="blackpanther2_lob_crd_02.jpeg" alt="">
                        <h5>Black Panther: Wakanda Forever</h5>
                        <h6>11/11/2022</h6>
                    </li>
                    </a>
                    <a href=""><li class="thor4">
                        <img src="thorloveandthunder_lob_crd_02.jpeg" alt="">
                        <h5>Thor: Love and Thunder</h5>
                        <h6>8/7/2022</h6>
                    </li>
                    </a>
                    <a href=""><li class="strange2">
                        <img src="ds2_card_1.jpeg" alt="">
                        <h5>Doctor Strange in the Multiverse of Madness</h5>
                        <h6>8/7/2022</h6>
                    </li>
                    </a>
                    <a href=""><li class="spiderman3">
                        <img src="sn_lob_crd_01.jpeg" alt="">
                        <h5>Spider-Man: No Way Home</h5>
                        <h6>17/12/2021</h6>
                    </li>
                    </a>
                    <a href=""><li class="eternals">
                        <img src="eternals_lob_crd_03_0.jpeg" alt="">
                        <h5>Eternals</h5>
                        <h6>5/11/2021</h6>
                    </li>
                    </a>
                </ul>
            </div>
            </div>
        </div>
        <div class="da-ra-mat">
            <div class="da-ra-mat-container">
                <div class="da-ra-mat-title">
                    <h4>PHIM ĐÃ RA MẮT</h4>
                </div>
                <div class="list-da-ra-mat">
                    <ul>
                        <a href=""><li class="shangchi">
                            <img src="shangchi_lob_crd_07.jpeg" alt="">
                            <h5>Shang-Chi and The Legend of The Ten Rings</h5>
                            <h6>2021</h6>
                        </li>
                        </a>
                        <a href=""><li class="blackwidow">
                            <img src="blackwidow_lob_crd_06.jpeg" alt="">
                            <h5>Black Widow</h5>
                            <h6>2021</h6>
                        </li>
                        </a>
                        <a href=""><li class="spiderman2">
                            <img src="spider-manfarfromhome_lob_crd_04_3.jpeg" alt="">
                            <h5>Spider-Man: Far From Home</h5>
                            <h6>2019</h6>
                        </li>
                        </a>
                        <a href=""><li class="endgame">
                            <img src="avengersendgame_lob_crd_05_2.jpeg" alt="">
                            <h5>Avengers: Endgame</h5>
                            <h6>2019</h6>
                        </li>
                        </a>
                        <a href=""><li class="captainmarvel">
                            <img src="captainmarvel_lob_crd_06.jpeg" alt="">
                            <h5>Captain Marvel</h5>
                            <h6>2019</h6>
                        </li>
                        </a>
                        <a href=""><li class="antman2">
                            <img src="ant-manthewasp_lob_crd_01.jpeg" alt="">
                            <h5>Ant-Man and The Wasp</h5>
                            <h6>2018</h6>
                        </li>
                        </a>
                        <a href=""><li class="infinity war">
                            <img src="avengersinfinitywar_lob_crd_02_1.jpeg" alt="">
                            <h5>Avengers: Infinity War</h5>
                            <h6>2018</h6>
                        </li>
                        </a>
                        <a href=""><li class="blackpanther">
                            <img src="blackpanther_lob_crd_01_4.jpeg" alt="">
                            <h5>Black Panther</h5>
                            <h6>2018</h6>
                        </li>
                        </a>
                        <a href=""><li class="thor3">
                            <img src="thorragnarok_lob_crd_03.jpeg" alt="">
                            <h5>Thor: Ragnarok</h5>
                            <h6>2017</h6>
                        </li>
                        </a>
                        <a href=""><li class="spiderman">
                            <img src="spider-manhomecoming_lob_crd_01_3.jpeg" alt="">
                            <h5>Spider-Man: Homecoming</h5>
                            <h6>2017</h6>
                        </li>
                        </a>
                        <a href=""><li class="guardians2">
                            <img src="guardiansofthegalaxyvol.2_lob_crd_01.jpg" alt="">
                            <h5>Guardians of the Galaxy Vol. 2</h5>
                            <h6>2017</h6>
                        </li>
                        </a>
                        <a href=""><li class="strange">
                            <img src="doctorstrange_lob_crd_01_6.jpeg" alt="">
                            <h5>Doctor Strange</h5>
                            <h6>2016</h6>
                        </li>
                        </a>
                        <a href=""><li class="cap3">
                            <img src="captainamericacivilwar_lob_crd_01_9.jpeg" alt="">
                            <h5>Captain America: Civil War</h5>
                            <h6>2016</h6>
                        </li>
                        </a>
                        <a href=""><li class="antman">
                            <img src="ant-man_lob_crd_01_8.jpeg" alt="">
                            <h5>Ant-Man</h5>
                            <h6>2015</h6>
                        </li>
                        </a>
                        <a href=""><li class="ultron">
                            <img src="avengersageofultron_lob_crd_03.jpeg" alt="">
                            <h5>Avengers: Age of Ultron</h5>
                            <h6>2015</h6>
                        </li>
                        </a>
                        <a href=""><li class="guardians">
                            <img src="guardiansofthegalaxy_lob_crd_03.jpeg" alt="">
                            <h5>Guardians of the Galaxy</h5>
                            <h6>2014</h6>
                        </li>
                        </a>
                        <a href=""><li class="cap2">
                            <img src="captainamericathewintersoldier_lob_crd_01_1.jpeg" alt="">
                            <h5>Captain America: The Winter Soldier</h5>
                            <h6>2014</h6>
                        </li>
                        </a>
                        <a href=""><li class="thor2">
                            <img src="thorthedarkworld_lob_crd_02_1.jpeg" alt="">
                            <h5>Thor: The Dark World</h5>
                            <h6>2013</h6>
                        </li>
                        </a>
                        <a href=""><li class="ironman3">
                            <img src="ironman3_lob_crd_01_10.jpeg" alt="">
                            <h5>Iron Man 3</h5>
                            <h6>2013</h6>
                        </li>
                        </a>
                        <a href=""><li class="avengers">
                            <img src="theavengers_lob_crd_03.jpeg" alt="">
                            <h5>The Avengers</h5>
                            <h6>2012</h6>
                        </li>
                        </a>
                        <a href=""><li class="cap">
                            <img src="captainamerica_lob_crd_01.jpeg" alt="">
                            <h5>Captain America: The First Avenger</h5>
                            <h6>2011</h6>
                        </li>
                        </a>
                        <a href=""><li class="thor">
                            <img src="thor_lob_crd_01.jpeg" alt="">
                            <h5>Thor</h5>
                            <h6>2011</h6>
                        </li>
                        </a>
                        <a href=""><li class="ironman2">
                            <img src="ironman2_lob_crd_01_3.jpeg" alt="">
                            <h5>Iron Man 2</h5>
                            <h6>2010</h6>
                        </li>
                        </a>
                        <a href=""><li class="hulk">
                            <img src="theincrediblehulk_lob_crd_01_2.jpeg" alt="">
                            <h5>The Incredible Hulk</h5>
                            <h6>2008</h6>
                        </li>
                        </a>
                        <a href=""><li class="ironman">
                            <img src="ironman_lob_crd_01_3.jpeg" alt="">
                            <h5>Iron Man</h5>
                            <h6>2008</h6>
                        </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="series">
            <div class="series-container">
                <div class="series-title">
                    <h4>TV Series</h4>
                </div>
            <div class="list-series">
                <ul>
                    <a href=""><li class="wandavision">
                        <img src="wandavision_lob_crd_06.jpeg" alt="">
                        <h5>WandaVision</h5>
                        <h6>2021</h6>
                    </li>
                    </a>
                    <a href=""><li class="falcon">
                        <img src="falcws_lob_crd_03.jpeg" alt="">
                        <h5>The Falcon and The Winter Soldier</h5>
                        <h6>2021</h6>
                    </li>
                    </a>
                    <a href=""><li class="loki">
                        <img src="loki_lob_crd_04.jpeg" alt="">
                        <h5>Loki</h5>
                        <h6>2021</h6>
                    </li>
                    </a>
                    <a href=""><li class="whatif">
                        <img src="whatif_lob_crd_01.jpeg" alt="">
                        <h5>What If...?</h5>
                        <h6>2021</h6>
                    </li>
                    </a>
                    <a href=""><li class="hawkeye">
                        <img src="hawkeye_lob_crd_02.jpeg" alt="">
                        <h5>Hawkeye</h5>
                        <h6>24/11/2021</h6>
                    </li>
                    </a>
                    <a href=""><li class="msmarvel">
                        <img src="msmarvel_lob_crd_02.jpeg" alt="">
                        <h5>Ms. Marvel</h5>
                        <h6>2021</h6>
                    </li>
                    </a>
                    <a href=""><li class="shehulk">
                        <img src="shehulk_lob_crd_01.jpeg" alt="">
                        <h5>She-Hulk</h5>
                     
                    </li>
                    </a>
                    <a href=""><li class="moonknight">
                        <img src="moonknight_lob_crd_02.jpeg" alt="">
                        <h5>Moon Knight</h5>
                    </li>
                    </a>
                    <a href=""><li class="secretinvasion">
                        <img src="secretinvasion_lob_crd_01_1.jpeg" alt="">
                        <h5>Secret Invasion</h5>
                    </li>
                    </a>
                    <a href=""><li class="ironheart">
                        <img src="ironheart_lob_crd_01.jpeg" alt="">
                        <h5>Ironheart</h5>
                    </li>
                    </a>
                    <a href=""><li class="armorwars">
                        <img src="armorwars_lob_crd_01.jpeg" alt="">
                        <h5>Armor Wars</h5>
                    </li>
                    </a>
                    <a href=""><li class="holiday">
                        <img src="gotg-holiday_lob_crd_01.jpeg" alt="">
                        <h5>The Guardians of the Galaxy Holiday Special</h5>
                        <h6>2022</h6>
                    </li>
                    </a>
                    <a href=""><li class="runaways">
                        <img src="runaways_s3_lob_crd_03.jpeg" alt="">
                        <h5>Marvel's Runaways | Season 3</h5>
                        <h6>2019</h6>
                    </li>
                    </a>
                    <a href=""><li class="carter">
                        <img src="agentcarter_lob_crd_02.jpeg" alt="">
                        <h5>Marvel's Agent Carter | Season 2</h5>
                        <h6>2016</h6>
                    </li>
                    </a>
                    <a href=""><li class="cloak">
                        <img src="cloakanddagger_lob_crd_02_1.jpeg" alt="">
                        <h5>Marvel's Cloak & Dagger | Season 2</h5>
                        <h6>2019</h6>
                    </li>
                    </a>
                    <a href=""><li class="shield">
                        <img src="agentsofshield_lob_crd_03.jpeg" alt="">
                        <h5>Marvel's Agents of S.H.I.E.L.D | Season 7</h5>
                        <h6>2020</h6>
                    </li>
                    </a>
                    <a href=""><li class="daredevil">
                        <img src="daredevils3_lob_crd_01.jpeg" alt="">
                        <h5>Marvel's Daredevil | Season 3</h5>
                        <h6>2018</h6>
                    </li>
                    </a>
                    <a href=""><li class="defenders">
                        <img src="defenders_lob_crd_02.jpeg" alt="">
                        <h5>Marvel's The Defenders</h5>
                        <h6>2017</h6>
                    </li>
                    </a>
                    <a href=""><li class="gifted">
                        <img src="thegifteds2_lob_crd_01.jpeg" alt="">
                        <h5>The Giftted | Season 2</h5>
                        <h6>2018</h6>
                    </li>
                    </a>
                    <a href=""><li class="inhuman">
                        <img src="inhumans_lob_crd_01.jpeg" alt="">
                        <h5>Marvel's Inhuman</h5>
                        <h6>2017</h6>
                    </li>
                    </a>
                    <a href=""><li class="ironfist">
                        <img src="ironfist_lob_crd_01_6.jpeg" alt="">
                        <h5>Marvel's Iron Fist | Season 2</h5>
                        <h6>2018</h6>
                    </li>
                    </a>
                    <a href=""><li class="jessica">
                        <img src="jessicajones_lob_crd_03_4.jpeg" alt="">
                        <h5>Marvel's Jessica Jones | Season 3</h5>
                        <h6>2019</h6>
                    </li>
                    </a>
                    <a href=""><li class="legion">
                        <img src="legion_lob_crd_04.jpeg" alt="">
                        <h5>Legion | Season 3</h5>
                        <h6>2019</h6>
                    </li>
                    </a>
                    <a href=""><li class="lukecage">
                        <img src="lukecage_lob_crd_02.jpeg" alt="">
                        <h5>Marvel's Luke Cage | Season 2</h5>
                        <h6>2018</h6>
                    </li>
                    </a>
                    <a href=""><li class="punisher">
                        <img src="thepunisher_lob_crd_03.jpeg" alt="">
                        <h5>Marvel's The Punisher | Season 2</h5>
                        <h6>2019</h6>
                    </li>
                    </a>
                </ul>
            </div>
            </div>
        </div>
    </div>
    <div id="footer">
        
        <div class="leftfooter">
            <p>Copyright © 2021 - MCU Fanclub Vietnam. All Rights Reserved</p>
            <div class="line2">
                <p>Designed and Developed by HieuNQB</p>
            </div>
        </div>
        <div class="rightfooter">
            <a href=""><img src="Marvel_Logo.png" alt=""></a>
            <h4>Follow MCU Fanclub Vietnam</h4>
            <ul class="social">
                <li><a href=""><span class="icon--svg icon--svg--gray-fill icon--facebook " aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9.426 17.647H.974A.974.974 0 0 1 0 16.673V.974C0 .436.436 0 .974 0h15.7c.537 0 .973.436.973.974v15.699a.974.974 0 0 1-.974.974h-4.497v-6.834h2.294l.343-2.663h-2.637v-1.7c0-.772.214-1.297 1.32-1.297h1.41V2.77a18.853 18.853 0 0 0-2.055-.105c-2.033 0-3.425 1.241-3.425 3.52V8.15h-2.3v2.663h2.3v6.834z"></path></svg></span></a></li>
                <li><a href=""><span class="icon--svg icon--svg--gray-fill" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M15.441 15.993H2.206a.552.552 0 0 1-.552-.552V7.17H3.86c-.287.414-.384 1.185-.384 1.675 0 2.953 2.408 5.356 5.368 5.356 2.96 0 5.368-2.403 5.368-5.356 0-.49-.069-1.25-.425-1.675h2.206v8.272a.552.552 0 0 1-.552.552M8.844 5.458a3.39 3.39 0 0 1 3.394 3.386 3.39 3.39 0 0 1-3.394 3.386A3.39 3.39 0 0 1 5.45 8.844a3.39 3.39 0 0 1 3.393-3.386m4.391-3.252h1.655c.304 0 .551.247.551.551v1.655a.552.552 0 0 1-.551.551h-1.655a.552.552 0 0 1-.551-.551V2.757c0-.304.247-.551.551-.551M15.55 0H2.098A2.095 2.095 0 0 0 0 2.093v13.461c0 1.156.94 2.093 2.098 2.093h13.451a2.095 2.095 0 0 0 2.098-2.093V2.093C17.647.937 16.707 0 15.549 0"></path></svg></span></a></li>
                <li><a href=""><span class="icon--svg icon--svg--gray-fill" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.109 9.73l-.001-5.679 5.522 2.85-5.521 2.83zm12.124-6.663s-.2-1.393-.812-2.006c-.778-.806-1.649-.81-2.048-.856C14.513 0 10.223 0 10.223 0h-.009s-4.29 0-7.15.205c-.4.046-1.27.05-2.048.856-.612.613-.812 2.006-.812 2.006S0 4.703 0 6.338v1.534c0 1.636.204 3.272.204 3.272s.2 1.392.812 2.006c.778.805 1.8.78 2.254.864 1.635.155 6.949.203 6.949.203s4.294-.006 7.154-.21c.4-.048 1.27-.052 2.048-.857.612-.614.812-2.006.812-2.006s.204-1.636.204-3.272V6.338c0-1.635-.204-3.271-.204-3.271z"></path></svg></span></a></li>
            </ul>
        </div>
    </div>
</body>
</html>