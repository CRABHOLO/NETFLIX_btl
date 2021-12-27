<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup_Netflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style_signup.css">
</head>
 
<body class="bg__wrap">
    <nav class="main_nav">
        <a href="#" class="navbar-brand">
            <img src="assets/images/logo.jpg" alt="net/logo" class="img-fluid">
        </a>
        <button class="btn_login">
        <a href="login.php" class="text_login" >Login</a>
        </button>
        
    </nav>
    <div class="container">
        <div class="col-lg-4 col-md-8 col-sm-10 col-12 mx-lg-auto mx-md-auto mx-5m-auto mx-auto">
            <div class="form__data">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mx-lg-auto mx-md-auto mx-5m-auto mx-auto">
                    <div class="form_title">
                        <h1>Tạo tài khoản để bắt đầu xem Netflix</h1>
                    </div>
                    <form action="signup.php" method="post">
                            <div class="mb-3">
                              <div class="form-text">Họ</div>
                              <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp" placeholder="Email hoặc số điện thoại">
                            </div>
                            <div class="mb-3">
                               <div class="form-text">Tên</div>
                              <input type="text" class="form-control" name="lastName" placeholder="Mật khẩu">
                            </div>
                            <div class="mb-3">
                              <div id="email" class="form-text">Email</div>
                              <input type="email" class="form-control" name="email"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email hoặc số điện thoại">
                            </div>
                            <div class="mb-3">
                               <div id="password" class="form-text">Mật khẩu</div>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
                            </div>
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Ghi nhớ tôi</label>
                            </div>

                            <button type="submit" class="btn" name="btnSubmit" >Đăng ký</button>
                            
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
      <div class="footer-head">
        <a href="#" class="footer-head-text">Bạn có câu hỏi? Liên hệ với chúng tôi.</a>
      </div>
      <ul class="footer-links structural">
        <li class="footer-link-item" placeholder="footer_responsive_link_faq_item">
          <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/support/412" placeholder="footer_responsive_link_faq">
            <span id="" data-uia="data-uia-footer-label">Câu hỏi thường gặp</span>
          </a>
        </li>
            
        <li class="footer-link-item" placeholder="footer_responsive_link_help_item">
          <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com" placeholder="footer_responsive_link_help">    
            <span id="" data-uia="data-uia-footer-label">Trung tâm trợ giúp</span>
          </a>
        </li>
      
        <li class="footer-link-item" placeholder="footer_responsive_link_terms_item">
          <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/termsofuse" placeholder="footer_responsive_link_terms">   
            <span id="" data-uia="data-uia-footer-label">Điều khoản sử dụng</span>  
          </a>  
        </li>
      </ul>
      <ul class="footer-links structural">
        <li class="footer-link-item" placeholder="footer_responsive_link_privacy_separate_link_item">
          <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/privacy" placeholder="footer_responsive_link_privacy_separate_link">
            <span id="" data-uia="data-uia-footer-label">Quyền riêng tư</span>
          </a>
        </li>
      
        <li class="footer-link-item" placeholder="footer_responsive_link_cookies_separate_link_item">
          <a class="footer-link" data-uia="footer-link" href="#" placeholder="footer_responsive_link_cookies_separate_link">
            <span id="" data-uia="data-uia-footer-label">Tùy chọn cookie</span>
          </a>
        </li>
      
        <li class="footer-link-item" placeholder="footer_responsive_link_corporate_information_item">
          <a class="footer-link" data-uia="footer-link" href="https://help.netflix.com/legal/corpinfo" placeholder="footer_responsive_link_corporate_information">
            <span id="" data-uia="data-uia-footer-label">Thông tin doanh nghiệp</span>
          </a>
        </li>
      </ul>
    </div>  

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstName 	= $('#firstName').val();
			var lastName	= $('#lastName').val();
			var email 		= $('#email').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process-sigup.php',
					data: {firstName: firstName,lastName: lastName,email: email,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
  </body>
</html>


