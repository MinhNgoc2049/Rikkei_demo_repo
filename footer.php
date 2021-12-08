<style>
    /* Dropup Button */
.dropbtn {
  background-color: #014c85;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 8px;
    height: 50px;
    line-height: 45px;
    cursor: pointer;
    width: 95%;
}

/* The container <div> - needed to position the dropup content */
.dropup {
  position: relative;
  display: inline-block;
  width:25%;
}

/* Dropup content (Hidden by Default) */
.dropup-content {
  display: none;
  position: absolute;
  bottom: 50px;
  background-color: #014c85;
  /*độ rộng giữa các dòng*/
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 10000;
    /*width: 560px;*/
  height: auto;
  /*chiều cao giữa các dòng*/
  line-height:0;
}

/* Links inside the dropup */
.dropup-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropup links on hover */
.dropup-content a:hover {
  background-color: #ddd;
  border-radius:7px;
}

/* Show the dropup menu on hover */
.dropup:hover .dropup-content {
  display: block;
  border-radius:7px;

}

/* Change the background color of the dropup button when the dropup content is shown */
.dropup:hover .dropbtn {
  background-color: #2980B9;
  
}
.bottom{
    align-items: center;
    position: fixed;
    bottom: 0;
    width: 100%;
    display: flex;
    justify-content:center;
    z-index: 1000;
}



</style>
<div class="bottom">
        <div style="background-color: red;  border-radius:7px;padding:8px;margin-bottom:1%; width: 40%;
    display: flex;
    justify-content: flex-end;">
            <div class="dropup">
                <button class="dropbtn"> <img src="images/call.png" alt="" width="28px">
                    Gọi ngay</button>
                <div class="dropup-content" style="width: 220px;">
                  
                 <a href="tel:0943969695"><span>&nbsp;</span>Hotline : <b>0943 96 96 95</b></a>
                </div>
                
            </div>
            <div class="dropup">
                <button class="dropbtn"" onclick="location.href='#'"> <img src="images/facebook.png" alt="" width="28px">
                    Messenger</button>
     

            </div>
            <div class="dropup">
                <button class="dropbtn"><img src="images/zalo.png" alt="" width="28px">
                    Zalo</button>
                <div class="dropup-content">
                    <a href="https://zalo.me/0943969695">Tư vấn qua Zalo</a>
                   
                    
                </div>
            </div>
            <div class="dropup">
                <button class="dropbtn"> <img src="images/locate.png" alt="" width="20px">
                    Địa chỉ</button>
                <div class="dropup-content" style="width:575px">
                    <a target="_blank" href=""><span>&nbsp;</span> <b>Showroom 1:</b> 41 Thanh Nhàn - Quận Hai Bà Trưng - TP. Hà Nội </a>
                    <a target="_blank" href=""><span>&nbsp;</span> <b>Showroom 2:</b> 106 Thái Thịnh - Quận Đống Đa - TP. Hà Nội</a>
                    <a target="_blank" href=""><span>&nbsp;</span> <b>Showroom 3:</b> 302 Khâm Thiên - Quận Đống Đa - TP. Hà Nội</a>
                    <a target="_blank" href=""><span>&nbsp;</span> <b>Showroom 4:</b> 475 Điện Biên Phủ - Quận Thanh Khê - TP. Đà Nẵng</a>
                    <a target="_blank" href=""><span>&nbsp;</span> <b>Showroom 5:</b> 1411 Đường 3/2 - Quận 11 - TPHCM</a>
                    <a target="_blank" href=""><span>&nbsp;</span> <b>Showroom 6:</b> 591 Hoàng Văn Thụ - Quận Tân Bình - TP. HCM</a>
                    <a target="_blank" href=""><span>&nbsp;</span> <b>Showroom 7:</b> 877 Huỳnh Tấn Phát - quận 7 - TP HCM</a>
                    <a target="_blank" href=""><span>&nbsp;</span> <b>Showroom 8:</b> 127 Khánh Hội, Quận 4 - TP. HCM</a>
                    <a target="_blank" href=""><span>&nbsp;</span> <b>Showroom 9:</b> 580 Phan Văn Trị  - Quận Gò Vấp - TP HCM</a>
                    <a target="_blank" href=""><span>&nbsp;</span> <b>Showroom 10:</b> 293 Bạch Đằng - phường 15 - quận Bình Thạnh - TP HCM</a>
                    <a href="#"> 293 Bạch Đằng - phường 15 - quận Bình Thạnh - TP HCM</a>
                </div>
            </div>
        </div>
    </div>