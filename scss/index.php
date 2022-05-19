<?php
  if(isset($_POST['form1_submit'])){  
      // 日本語をメールで送る場合のおまじない
      mb_language("ja");
      mb_internal_encoding("UTF-8");
    
      $name = $_POST['namae'];					
			$furikana = $_POST['namaekana'];
			$phone_number = $_POST['phone_number'];
			$mail = $_POST['e-mail'];
			//$post_number = $_POST['post_number'];
			//$address= $_POST['address'];
			$city = $_POST['select_city'];
			$consultant=$_POST['consultant_content'];
      $to = "info@fujitaka-kensou.co.jp";
      $subject = "火災保険LPフォーム問い合わせ完了通知";
      $message = "
        <html>
        <head>
        <title>火災保険LPフォーム問い合わせ完了通知</title>
        </head>
        <body>
        <p><b>お名前: </b>$name</p>
				<p><b>ふりがな: </b>$furikana</p>
				<p><b>電話番号: </b>$phone_number</p>
				<p><b>メールアドレス: </b>$mail</p>			
				<p><b>修理希望箇所: </b>$city</p>
				<p><b>ご相談内容: </b>$consultant</p> 
				<p>このメールは富士貴建装 火災保険LPフォーム（https://hoken01.fujitaka-kensou.jp）から送信されました。</p>
        </body>
        </html>
        ";			
			
      $reply_subject = "火災保険・助成金　無料診断を受け付けました。";
      $auto_message = "
        <html>
        <head>
        <title>火災保険・助成金　無料診断を受け付けました。</title>
        </head>
        <body>
				<p>
				この度はお問い合わせいただきまして、誠にありがとうございます。<br><br>

				頂いた内容につきましては、弊社担当が内容を確認のうえ、<br>
				3営業日以内に【048-225-6630】からお電話させていただきます。<br><br>

				何かご不明点等がございましたら、お気軽にお問い合わせください。<br>
				今回お問い合わせいただいた内容は以下の通りです。<br><br>

				================================
				</p>  
        <p><b>お名前: </b>$name</p>
				<p><b>ふりがな: </b>$furikana</p>
				<p><b>電話番号: </b>$phone_number</p>			
				<p><b>メールアドレス: </b>$mail</p>				
				<p><b>修理希望箇所: </b>$city</p>
				<p><b>ご相談内容: </b>$consultant</p> 
				<p>================================<br>
				富士貴建装 株式会社<br>
				〒332-0006　埼玉県川口市末広2丁目13番7号<br>
				TEL：　0800-919-1688（フリーダイヤル）<br>
				受付時間：　9:00〜17:00<br>
				定休日：　日曜・祝日<br>
				メール：　info@fujitaka-kensou.co.jp（24時間受付）<br>
				HP：　https://fujitaka-kensou.jp <br>
				</p>
        </body>
        </html>
        ";	
			

        //  Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
      $headers .= 'From:'.$mail. "\r\n";
			mail($mail, $reply_subject, $auto_message, $headers);
      $result = mail($to,$subject,$message,$headers);
      if($result){
          echo "<script type='text/javascript'>window.location.href='thanks'</script>";
      }
      else{
          echo "<h3>メッセージの送信中にエラーが発生しました。</h3>" ;
      } 
  }
?>

  <?php
  if(isset($_POST['form2_submit'])){   
      // 日本語をメールで送る場合のおまじない
      mb_language("ja");
      mb_internal_encoding("UTF-8");
    
      $name = $_POST['namae2'];					
			$furikana = $_POST['namaekana2'];
			$phone_number = $_POST['phone_number'];
			$mail = $_POST['e-mail'];
			//$post_number = $_POST['post_number'];
			//$address= $_POST['address'];
			$city = $_POST['select_city'];
			$consultant=$_POST['consultant_content'];
      $to = "info@fujitaka-kensou.co.jp";
      $subject = "火災保険LPフォーム問い合わせ完了通知";				 
      $message = "
        <html>
        <head>
        <title>火災保険LPフォーム問い合わせ完了通知</title>
        </head>
        <body> 
        <p><b>お名前: </b>$name</p>
				<p><b>ふりがな: </b>$furikana</p>
				<p><b>電話番号: </b>$phone_number</p>
				<p><b>メールアドレス: </b>$mail</p>				
				<p><b>修理希望箇所: </b>$city</p>
				<p><b>ご相談内容: </b>$consultant</p> 
				<p>このメールは富士貴建装 火災保険LPフォーム（https://hoken01.fujitaka-kensou.jp）から送信されました。</p>
        </body>
        </html>
        ";
    
      $reply_subject = "火災保険・助成金　無料診断を受け付けました。";
      $auto_message = "
        <html>
        <head>
        <title>火災保険・助成金　無料診断を受け付けました。</title>
        </head>
        <body>
				<p>
				この度はお問い合わせいただきまして、誠にありがとうございます。<br><br>

				頂いた内容につきましては、弊社担当が内容を確認のうえ、<br>
				3営業日以内に【048-225-6630】からお電話させていただきます。<br><br>

				何かご不明点等がございましたら、お気軽にお問い合わせください。<br>
				今回お問い合わせいただいた内容は以下の通りです。<br><br>

				================================
				</p>  
        <p><b>お名前: </b>$name</p>
				<p><b>ふりがな: </b>$furikana</p>
				<p><b>電話番号: </b>$phone_number</p>
				<p><b>メールアドレス: </b>$mail</p>			
				<p><b>修理希望箇所: </b>$city</p>
				<p><b>ご相談内容: </b>$consultant</p> 
				<p>================================<br>
				富士貴建装 株式会社<br>
				〒332-0006　埼玉県川口市末広2丁目13番7号<br>
				TEL：　0800-919-1688（フリーダイヤル）<br>
				受付時間：　9:00〜17:00<br>
				定休日：　日曜・祝日<br>
				メール：　info@fujitaka-kensou.co.jp（24時間受付）<br>
				HP：　https://fujitaka-kensou.jp <br>
				</p>
        </body>
        </html>
        ";
        //  Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
      $headers .= 'From:'.$mail. "\r\n";
			mail($mail, $reply_subject, $auto_message, $headers);
      $result = mail($to,$subject,$message,$headers);
      if($result){
        echo "<script type='text/javascript'>window.location.href='thanks'</script>";
      }
      else{
        echo "<h3>メッセージの送信中にエラーが発生しました。</h3>" ;
      } 
  }
?>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <title>富士貴建装 火災保険</title>
  <link rel="stylesheet" href="css/style.css">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TXMMLDM');</script>
<!-- End Google Tag Manager -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="lib/jquery.autoKana.js"></script>
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
  <script src="js/style.js"></script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TXMMLDM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div class="l-lp-wrap">
    <div class="l-header p-mv u-pc-only">
      <img src="img/kv_pc.png" alt="mainvisual_image" data-animation="flipInY" data-animation-delay=".2s">
    </div>
    <div class="u-sp-only">
      <img src="img/img_kv-sp.jpg" alt="mainvisual_image">
    </div>
    <main class="l-content">
      <section class="l-section p-paid-question u-pc-only">
        <div class="p-title" data-animation="slideInDown" data-animation-delay=".3s">
          あなたが受け取れる <span class="e-text">火災保険・助成金の給付金</span> はいくら？
        </div>
        <div class="p-content" data-animation="slideInDown" data-animation-delay=".7s">
          <div class="e-img">
            <img src="img/text_catch01.png" alt="30second_image">
          </div>
          <div class="e-text">でいくら給付されるかわかる！</div>
        </div>
      </section>
      <section class="l-section p-contact-section1 c-contact-section">
        <div class="c-content">
          <div class="c-text" data-animation="slideInRight" data-animation-delay=".3s">
            <img src="img/text_cta-green.png" alt="contact_text_image">
          </div>
          <div class="c-img" data-animation="zoomIn" data-animation-delay=".6s">
            <img src="img/illust_woman.png" alt="woman_image">
          </div>
        </div>
        <div class="c-button-section" data-animation="slideInUp" data-animation-delay=".7s">
          <div class="c-button u-hover-opacity u-hover-up">
            <a href="tel:0800-919-1688"><img src="img/btn_tel.png" alt="tel_button_image"></a>
          </div>
          <div class="c-button u-hover-opacity u-hover-up">
            <a href="#a-form1"><img src="img/btn_form.png" alt="form_button_image"></a>
          </div>
        </div>
      </section>
      <section class="l-section p-contact-form-section1 c-contact-form-section">
        <form class="c-contact-form h-adr form1" action="" id="form1" method="POST" onsubmit="return false;" novalidate>
          <div class="c-input-form-section" id="a-form1" data-animation="slideInUp" data-animation-delay=".3s">
            <dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">お名前</label>
								<span class="c-validation-text">必須</span>
          		</dt>
              <dd class="c-right-column">
                <input type="text" name="namae" placeholder="富士貴　太郎">
                <span class="c-error-msg u-hide">※お名前を入力してください。</span>
              </dd>
            </dl>
            <dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">ふりがな</label>
								<span class="c-validation-text">必須</span>
							</dt>
              <dd class="c-right-column">
                <input type="text" name="namaekana" placeholder="ふじたか　たろう">
                <span class="c-error-msg u-hide">※ふりがなを入力してください。</span>
              </dd>
            </dl>
            <dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">電話番号</label>
								<span class="c-validation-text">必須</span>
							</dt>
              <dd class="c-right-column">
                <input type="text" name="phone_number" placeholder="090-1234-5678">
                <span class="c-error-msg u-hide">※電話番号を入力してください。</span>
              </dd>
            </dl>
            <dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">メールアドレス</label>
								<span class="c-validation-text">必須</span>
							</dt>
              <dd class="c-right-column">
                <input type="text" name="e-mail" placeholder="info@fujitakakenso.co.jp">
                <span class="c-error-msg u-hide">※メールアドレスを入力してください。</span>
              </dd>
            </dl>
            <!--<dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">住所</label>
								<span class="c-validation-text">必須</span>
							</dt>
              <dd class="c-right-column">
                <span class="p-country-name" style="display:none;">Japan</span>
                <label for="" class="e-text">〒</label>
                <input class="c-post-address p-postal-code" name="post_number" type="text" size="8" maxlength="8" placeholder="3320006">
                <span class="c-error-msg u-hide">※郵便番号を入力してください。</span>
                <div class="e-comment-text">※郵便番号を入力すると市区町村まで自動入力されます</div>
                <input type="text" name="address" class="p-region p-locality p-street-address p-extended-address" placeholder="埼玉県川口市末広2-13-7">
              </dd>
            </dl>-->
            <dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">修理希望箇所</label>
								<span class="c-validation-text c-select-text">任意</span>
							</dt>
              <dd class="c-right-column">
                <select id="select-city" class="c-city_selection" name="select_city" required>
									<option value="" disabled selected>選択してください</option>
									<option value="雨どい">雨どい</option>
									<option value="屋根瓦">屋根瓦</option>
									<option value="屋根全般">屋根全般</option>
									<option value="雨漏り">雨漏り</option>
									<option value="外壁">外壁</option>
									<option value="カーポート">カーポート</option>
									<option value="その他">その他</option>
								</select>
                <span class="c-error-msg u-hide">※修理希望箇所を選択してください。</span>
              </dd>
            </dl>
            <dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">ご相談内容</label>
								<span class="c-validation-text c-select-text">任意</span>
							</dt>
              <dd class="c-right-column">
                <textarea name="consultant_content" rows="4" placeholder="事前にご相談事項がありましたら、自由にご入力ください。"></textarea>
                <span class="c-error-msg u-hide">※ご相談内容を入力してください。</span>
              </dd>
            </dl>
          </div>
          <button type="button" class="c-validation-button u-hover-opacity u-hover-up" value="入力内容を確認する" data-animation="slideInUp" data-animation-delay=".3s">入力内容を確認する</button>
          <div class="c-confirm-page-button u-hide">
            <button type="button" class="c-fix-button u-hover-opacity u-hover-up" value="入力内容を確認する">修正</button>
            <button type="submit" class="c-submit-button u-hover-opacity u-hover-up" value="入力内容を確認する" name="form1_submit">送信する</button>
          </div>
          <div class="c-form-description" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-low">
              <div class="c-img">
                <img src="img/icon_check.png" alt="icon_check_image">
              </div>
              <div class="c-text">
                安心のプロ対応で95％以上の給付率です
              </div>
            </div>
            <div class="c-low">
              <div class="c-img">
                <img src="img/icon_check.png" alt="icon_check_image">
              </div>
              <div class="c-text">
                小さな被害でも保険金を受け取れます
              </div>
            </div>
            <div class="c-low">
              <div class="c-img">
                <img src="img/icon_check.png" alt="icon_check_image">
              </div>
              <div class="c-text">
                火災保険は何度でも使うことができます
              </div>
            </div>
            <div class="c-low">
              <div class="c-img">
                <img src="img/icon_check.png" alt="icon_check_image">
              </div>
              <div class="c-text">
                しつこい営業・勧誘はいっさい行いません
              </div>
            </div>
          </div>
        </form>
      </section>
      <section class="l-section p-before-after-section">
        <div class="p-ba-header">
          <div class="e-img u-pc-only" data-animation="flipInY" data-animation-delay=".3s">
            <img src="img/illust_case.png" alt="inllust_case_image">
          </div>
          <div class="e-title" data-animation="zoomReverseIn" data-animation-delay=".6s">
            <div class="e-question">
              <h2>あきらめていませんか？</h2>
            </div>
            <div class="e-answer">
              <h3>修繕・リフォーム・塗装の費⽤を<br class="u-br__tabPc"><span class="e-bottom-text"><span class="c-box-shadow"><span class="c-top-point">ま</span><span class="c-top-point">る</span><span class="c-top-point">ま</span><span class="c-top-point">る</span>給付してもらえる</span>可能性があります</span>
              </h3>
            </div>
          </div>
        </div>
        <div class="p-ba-content" data-animation="slideInUp" data-animation-delay=".6s">
          <div class="l-row">
            <div class="l-row2">
              <div class="c-ba-example">
                <div class="c-header">
                  <span class="c-title">事例１</span>築40年 U様 ⼾建ての場合
                </div>
                <div class="c-content">
                  <div class="c-text">
                    <div class="c-before-yen">
                      ⾒積り⾦額 2,046,000円
                    </div>
                    <div class="c-after-yen">
                      受給⾦額 <span class="js-number1" data-count="1860900">1,860,900</span>円
                    </div>
                  </div>
                  <div class="c-img-section">
                    <div class="c-column">
                      <div class="c-img">
                        <img src="img/img_case01-01.jpg" alt="before_image">
                      </div>
                      <div class="c-text">
                        雨どいの破損
                      </div>
                    </div>
                    <div class="c-column">
                      <div class="c-img">
                        <img src="img/img_case01-02.jpg" alt="before_image">
                      </div>
                      <div class="c-text">
                        雨漏り
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="l-row2">
              <div class="c-ba-example">
                <div class="c-header">
                  <span class="c-title">事例2</span>築20年 S様 アパートの場合
                </div>
                <div class="c-content">
                  <div class="c-text">
                    <div class="c-before-yen">
                      ⾒積り⾦額 1,894,000円
                    </div>
                    <div class="c-after-yen">
                      受給⾦額 <span class="js-number1" data-count="1649840">1,649,840</span>円
                    </div>
                  </div>
                  <div class="c-img-section">
                    <div class="c-column">
                      <div class="c-img">
                        <img src="img/img_case02-01.jpg" alt="before_image">
                      </div>
                      <div class="c-text">
                        雨どいの破損
                      </div>
                    </div>
                    <div class="c-column">
                      <div class="c-img">
                        <img src="img/img_case02-02.jpg" alt="before_image">
                      </div>
                      <div class="c-text">
                        雨どいの破損
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="l-row">
            <div class="l-row2">
              <div class="c-ba-example">
                <div class="c-header">
                  <span class="c-title">事例3</span>築35年 R・A(株)様 ⼯場の場合
                </div>
                <div class="c-content">
                  <div class="c-text">
                    <div class="c-before-yen">
                      ⾒積り⾦額 5,488,900円
                    </div>
                    <div class="c-after-yen">
                      受給⾦額 <span class="js-number1" data-count="4986880">4,986,880</span>円
                    </div>
                  </div>
                  <div class="c-img-section">
                    <div class="c-column">
                      <div class="c-img">
                        <img src="img/img_case03-01.jpg" alt="before_image">
                      </div>
                      <div class="c-text">
                        雨どいの破損
                      </div>
                    </div>
                    <div class="c-column">
                      <div class="c-img">
                        <img src="img/img_case03-02.jpg" alt="before_image">
                      </div>
                      <div class="c-text">
                        屋根の剥がれ
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="l-row2">
              <div class="c-ba-example">
                <div class="c-header">
                  <span class="c-title">事例4</span>築42年 K様 ⼾建ての場合
                </div>
                <div class="c-content">
                  <div class="c-text">
                    <div class="c-before-yen">
                      ⾒積り⾦額 1,286,000円
                    </div>
                    <div class="c-after-yen">
                      受給⾦額 <span class="js-number1" data-count="1018000">1,018,000</span>円
                    </div>
                  </div>
                  <div class="c-img-section">
                    <div class="c-column">
                      <div class="c-img">
                        <img src="img/img_case04-01.jpg" alt="before_image">
                      </div>
                      <div class="c-text">
                        雨漏り
                      </div>
                    </div>
                    <div class="c-column">
                      <div class="c-img">
                        <img src="img/img_case04-02.jpg" alt="before_image">
                      </div>
                      <div class="c-text">
                        柱の破損
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="l-section p-contact-section2 c-contact-section">
        <div class="c-content">
          <div class="c-text" data-animation="slideInRight" data-animation-delay=".3s">
            <img src="img/text_cta-white.png" alt="contact_text_image">
          </div>
          <div class="c-img" data-animation="zoomIn" data-animation-delay=".6s">
            <img src="img/illust_woman.png" alt="woman_image">
          </div>
        </div>
        <div class="c-button-section" data-animation="slideInUp" data-animation-delay=".7s">
          <div class="c-button u-hover-opacity u-hover-up">
            <a href="tel:0800-919-1688"><img src="img/btn_tel.png" alt="tel_button_image"></a>
          </div>
          <div class="c-button u-hover-opacity u-hover-up">
            <a href="#a-form2"><img src="img/btn_form.png" alt="form_button_image"></a>
          </div>
        </div>
      </section>
      <section class="p-insurance-3-points-section">
        <div class="p-inner">
          <div class="p-title u-text-center" data-animation="fadeIn" data-animation-delay=".4s">
            <h2>火災保険の<span class="e-text"><span class="e-number">3</span>つ</span>のポイント</h2>
          </div>
          <div class="p-point1">
            <div class="p-title-section">
              <div class="e-img" data-animation="flipInY" data-animation-delay=".3s">
                <img src="img/icon_point01.png" alt="point1_image">
              </div>
              <div class="e-text" data-animation="slideInRight" data-animation-delay=".4s">
                ⽕災以外の被害でも<br><span class="e-mtext">⾃然災害など<span class="c-box-shadow">幅広く<span class="c-top-point">給</span>
                <span class="c-top-point">付</span>
                <span class="c-top-point">⾦</span>を受け取れる！</span>
                </span>
              </div>
            </div>
            <div class="p-content u-pc-only" data-animation="zoomReverseIn" data-animation-delay=".7s">
              <div class="p-column">
                <div class="e-img">
                  <img src="img/illust_point01-01.png" alt="icon_image">
                </div>
                <div class="e-text">台風</div>
              </div>
              <div class="p-column">
                <div class="e-img">
                  <img src="img/illust_point01-02.png" alt="icon_image">
                </div>
                <div class="e-text">地震</div>
              </div>
              <div class="p-column">
                <div class="e-img">
                  <img src="img/illust_point01-03.png" alt="icon_image">
                </div>
                <div class="e-text">大雪</div>
              </div>
              <div class="p-column">
                <div class="e-img">
                  <img src="img/illust_point01-04.png" alt="icon_image">
                </div>
                <div class="e-text">水漏れ</div>
              </div>
              <div class="p-column">
                <div class="e-img">
                  <img src="img/illust_point01-05.png" alt="icon_image">
                </div>
                <div class="e-text">ガス漏れ</div>
              </div>
              <div class="p-column">
                <div class="e-img">
                  <img src="img/illust_point01-06.png" alt="icon_image">
                </div>
                <div class="e-text">落雷</div>
              </div>
            </div>
            <div class="u-sp-only" data-animation="zoomReverseIn" data-animation-delay=".7s">
              <div class="p-row">
                <div class="p-column">
                  <div class="e-img">
                    <img src="img/illust_point01-01.png" alt="icon_image">
                  </div>
                  <div class="e-text">台風</div>
                </div>
                <div class="p-column">
                  <div class="e-img">
                    <img src="img/illust_point01-02.png" alt="icon_image">
                  </div>
                  <div class="e-text">地震</div>
                </div>
                <div class="p-column">
                  <div class="e-img">
                    <img src="img/illust_point01-03.png" alt="icon_image">
                  </div>
                  <div class="e-text">大雪</div>
                </div>
              </div>
              <div class="p-row">
                <div class="p-column">
                  <div class="e-img">
                    <img src="img/illust_point01-04.png" alt="icon_image">
                  </div>
                  <div class="e-text">水漏れ</div>
                </div>
                <div class="p-column">
                  <div class="e-img">
                    <img src="img/illust_point01-05.png" alt="icon_image">
                  </div>
                  <div class="e-text">ガス漏れ</div>
                </div>
                <div class="p-column">
                  <div class="e-img">
                    <img src="img/illust_point01-06.png" alt="icon_image">
                  </div>
                  <div class="e-text">落雷</div>
                </div>
              </div>
            </div>
          </div>
          <div class="p-point2">
            <div class="p-title-section">
              <div class="e-img" data-animation="flipInY" data-animation-delay=".3s">
                <img src="img/icon_point02.png" alt="icon_image">
              </div>
              <div class="e-text" data-animation="slideInRight" data-animation-delay=".4s">
                <span class="c-top-point">何</span>
                <span class="c-top-point">回</span>
                <span class="c-top-point">使</span>
                <span class="c-top-point">っ</span>
                <span class="c-top-point">て</span>
                <span class="c-top-point">も</span>
                <span class="c-box-shadow">保険料が上がる⼼配なし！</span>
              </div>
            </div>
            <div class="p-img u-text-center" data-animation="zoomReverseIn" data-animation-delay=".7s">
              <img src="img/illust_point02.png" alt="potint02_image">
            </div>
            <div class="p-text" data-animation="slideInUp" data-animation-delay=".7s">
              ⽕災保険は⾃動⾞保険などと違って、使っても保険料が上がりません。<br> しかも、被害に遭うたびに何回でも使うことができます。
            </div>
          </div>
          <div class="p-point3">
            <div class="p-title-section">
              <div class="e-img" data-animation="flipInY" data-animation-delay=".3s">
                <img src="img/icon_point03.png" alt="icon_image">
              </div>
              <div class="e-text" data-animation="slideInRight" data-animation-delay=".4s">
                <span class="c-box-shadow">過去に<span class="c-top-point">さ</span>
                <span class="c-top-point">か</span>
                <span class="c-top-point">の</span>
                <span class="c-top-point">ぼ</span>
                <span class="c-top-point">っ</span>
                <span class="c-top-point">て</span></span>保険⾦を請求できる！
              </div>
            </div>
            <div class="p-img u-text-center" data-animation="zoomReverseIn" data-animation-delay=".7s">
              <div class="e-img">
                <img src="img/illust_point03-01.png" alt="potint02_image">
              </div>
              <div class="e-img">
                <img src="img/illust_point03-02.png" alt="potint02_image">
              </div>
            </div>
            <div class="p-text" data-animation="slideInUp" data-animation-delay=".7s">
              「去年は忙しくて、家の修理に⼿が回らなかった、、、」そんな⼼配もなく、さかのぼって請求することができます。しかし、早く請求する⽅が給付が認められやすいので、出来るだけ早く専⾨家に依頼しましょう。
            </div>
          </div>
        </div>
      </section>
      <section class="l-section p-qa-section">
        <div class="p-qa-inner">
          <div class="p-qa-title">
            <div class="p-img" data-animation="flipInY" data-animation-delay=".3s">
              <img src="img/illust_question.png" alt="question_image">
            </div>
            <div class="p-text" data-animation="slideInUp" data-animation-delay=".6s">
              A:実は⼤半の⽅が壊れていることに気がつきません。<br> しかし、<span class="c-box-shadow">プロの無料調査</span>で被害に気づくことが多くあり、
              <br> <span class="c-box-shadow">⼩さな被害でも保険⾦を受け取れます。</span>
              <br>
            </div>
          </div>
          <div class="p-qa-content">
            <div class="p-img" data-animation="slideInDown" data-animation-delay=".3s">
              <img src="img/arrow_down.png" alt="arrow-down_image">
            </div>
            <div class="p-qa-example" data-animation="slideInUp" data-animation-delay=".6s">
              <div class="c-qa-example l-row3">
                <div class="c-header">
                  <span class="c-title">事例１</span>築35年 M様 ⼾建ての場合
                </div>
                <div class="c-content">
                  <div class="c-text">
                    <div class="c-before-yen">
                      ⾒積り⾦額 466,100円
                    </div>
                    <div class="c-after-yen">
                      受給⾦額 <span class="js-number2" data-count="368100">368,100</span>円
                    </div>
                  </div>
                  <div class="c-img-section">
                    <div class="c-column">
                      <div class="c-img">
                        <img src="img/img_small-case01.jpg" alt="before_image">
                      </div>
                      <div class="c-text">
                        雨樋の歪み
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-qa-example l-row3">
                <div class="c-header">
                  <span class="c-title">事例2</span>築16年 S様 戸建ての場合
                </div>
                <div class="c-content">
                  <div class="c-text">
                    <div class="c-before-yen">
                      ⾒積り⾦額 320,000円
                    </div>
                    <div class="c-after-yen">
                      受給⾦額 <span class="js-number2" data-count="288000">288,000</span>円
                    </div>
                  </div>
                  <div class="c-img-section">
                    <div class="c-column">
                      <div class="c-img">
                        <img src="img/img_small-case02.jpg" alt="before_image">
                      </div>
                      <div class="c-text">
                        カーポートの歪み
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-qa-example l-row3">
                <div class="c-header">
                  <span class="c-title">事例3</span>築20年 A様 戸建ての場合
                </div>
                <div class="c-content">
                  <div class="c-text">
                    <div class="c-before-yen">
                      ⾒積り⾦額 614,000円
                    </div>
                    <div class="c-after-yen">
                      受給⾦額 <span class="js-number2" data-count="419200">419,200</span>円
                    </div>
                  </div>
                  <div class="c-img-section">
                    <div class="c-column">
                      <div class="c-img">
                        <img src="img/img_small-case03.jpg" alt="before_image">
                      </div>
                      <div class="c-text">
                        外壁のヒビ
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="p-qa-bottom">
            <div class="p-title" data-animation="zoomIn" data-animation-delay=".3s">
              <div class="e-img">
                <img src="img/text_other-case.png" alt="other_case_title_img">
              </div>
            </div>
            <div class="p-content" data-animation="slideInUp" data-animation-delay=".3s">
              <div class=" p-row">
                <div class="e-img l-row3">
                  <img src="img/img_other-case01.gif" alt="other_caser_image">
                </div>
                <div class="e-img l-row3">
                  <img src="img/img_other-case02.gif" alt="other_caser_image">
                </div>
                <div class="e-img l-row3">
                  <img src="img/img_other-case03.gif" alt="other_caser_image">
                </div>
              </div>
              <div class="p-row">
                <div class="e-img l-row3">
                  <img src="img/img_other-case04.gif" alt="other_caser_image">
                </div>
                <div class="e-img l-row3">
                  <img src="img/img_other-case05.gif" alt="other_caser_image">
                </div>
                <div class="e-img l-row3">
                  <img src="img/img_other-case06.gif" alt="other_caser_image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="l-section p-contact-section2 c-contact-section">
        <div class="c-content">
          <div class="c-text" data-animation="slideInRight" data-animation-delay=".3s">
            <img src="img/text_cta-white.png" alt="contact_text_image">
          </div>
          <div class="c-img" data-animation="zoomIn" data-animation-delay=".6s">
            <img src="img/illust_woman.png" alt="woman_image">
          </div>
        </div>
        <div class="c-button-section" data-animation="slideInUp" data-animation-delay=".7s">
          <div class="c-button u-hover-opacity u-hover-up">
            <a href="tel:0800-919-1688"><img src="img/btn_tel.png" alt="tel_button_image"></a>
          </div>
          <div class="c-button u-hover-opacity u-hover-up">
            <a href="#a-form2"><img src="img/btn_form.png" alt="form_button_image"></a>
          </div>
        </div>
      </section>
      <section class="l-section p-plus-case-section">
        <div class="p-plus-case-inner">
          <div class="p-title-section">
            <div class="p-title">
              <div class="e-img" data-animation="flipInY" data-animation-delay=".3s">
                <img src="img/icon_plus.png" alt="icon_plus_image">
              </div>
              <div class="e-text" data-animation="slideInLeft" data-animation-delay=".3s">
                ⾃治体によっては<span class="e-red-text"><span class="c-top-point">助</span>
                <span class="c-top-point">成</span>
                <span class="c-top-point">⾦</span>
                <span class="c-top-point">も</span>
                <span class="c-top-point">プ</span>
                <span class="c-top-point">ラ</span>
                <span class="c-top-point">ス</span>
                <span class="c-top-point">で</span></span>受け取れます！
              </div>
            </div>
            <div class="p-content">
              <div class="e-text" data-animation="slideInUp" data-animation-delay=".6s">
                家屋の損傷について適⽤されるのは⽕災保険だけではありません。<br> 助成⾦が⽀給される⾃治体もあります。
                <br> 物件調査時に
                <span class="c-box-shadow">お住まいの地域で適⽤される助成⾦があるのかも同時に調査</span>します。
              </div>
            </div>
          </div>
          <div class="p-content-section">
            <div class="p-content" data-animation="slideInUp" data-animation-delay=".3s">
              <div class="e-img e-worry-img01">
                <img src="img/illust_worry01.png" alt="worry_imgae">
              </div>
              <div class="e-text">
                給付⾦、<br> 本当にもらっても⼤丈夫なの・・・？
              </div>
            </div>
            <div class="p-content" data-animation="slideInUp" data-animation-delay=".3s">
              <div class="e-text">
                ⽕災保険の給付⾦は<span class="u-underline-text">加⼊者の当然の権利</span>です。 ⾃動⾞が壊れたら⾃動⾞保険を使うように、 家屋の損傷は⽕災保険の出番となります。 助成⾦もコロナの持続化補助⾦のように、 <span class="u-underline-text">平等に誰もが受け取れる、</span>国が助成している給付⾦です。
              </div>
              <div class="e-img e-worry-img02">
                <img src="img/illust_worry02.png" alt="worry_imgae">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="l-section p-insurance-flow">
        <div class="p-flow-inner">
          <div class="p-title-section">
            <div class="p-title" data-animation="flipInY" data-animation-delay=".3s">
              火災保険給付の流れ
            </div>
            <div class="p-sub-title" data-animation="slideInUp" data-animation-delay=".4s">
              <span class="e-ybg-text">給付⾦・助成⾦</span>を受け取るために必要な書類作成は<br>
              <span class="e-yellow-text">すべて無料で当社が⾏います</span><br> お客様は弊社が作った<span class="e-yellow-text">申請書</span>を <span class="e-yellow-text">保険会社に送るだけ！</span>
            </div>
          </div>
          <div class="p-content" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-step-section l-row4">
              <div class="c-header">
                <div class="c-step-text">STEP<span class="c-number">1</span></div>
                <div class="c-text">無料調査依頼</div>
              </div>
              <div class="c-content">
                <div class="c-img">
                  <img src="img/illust_step01.png" alt="step_image">
                </div>
                <div class="c-text">
                  お電話またはWebフォームよりお問い合わせください。 弊社から折り返しご連絡し、<br><span class="u-underline-text">ご不明な点やご⼼配な点にも丁寧にご対応いたします。</span>
                </div>
              </div>
            </div>
            <div class="c-step-section l-row4">
              <div class="c-header">
                <div class="c-step-text">STEP<span class="c-number">2</span></div>
                <div class="c-text">調査・費⽤のお⾒積り</div>
              </div>
              <div class="c-content">
                <div class="c-img">
                  <img src="img/illust_step02.png" alt="step_image">
                </div>
                <div class="c-text">
                  お客さまの物件を細かいとこ ろまで調査いたします。<br><span class="u-underline-text">気付きにくい部分も専⾨家がしっかり調査させていただきます。</span>
                </div>
              </div>
            </div>
            <div class="c-step-section l-row4">
              <div class="c-header">
                <div class="c-step-text">STEP<span class="c-number">3</span></div>
                <div class="c-text">申請書類作成・審査</div>
              </div>
              <div class="c-content">
                <div class="c-img">
                  <img src="img/illust_step03.png" alt="step_image">
                </div>
                <div class="c-text">
                  給付に必要な書類は全て当社が作成するので、無駄な⼿間はかかりません。<br><span class="u-underline-text">お客様は弊社が作成した申請書を送るのみです。</span>
                </div>
              </div>
            </div>
            <div class="c-step-section l-row4">
              <div class="c-header">
                <div class="c-step-text">STEP<span class="c-number">4</span></div>
                <div class="c-text">保険⾦・助成⾦の⼊⾦</div>
              </div>
              <div class="c-content">
                <div class="c-img">
                  <img src="img/illust_step04.png" alt="step_image">
                </div>
                <div class="c-text">
                  <span class="u-underline-text">調査から数週間から1ヶ⽉程で保険⾦・助成⾦が給付されます。</span><br> 給付⾦が⼊⾦され次第、⼯事を実施させていただきます。
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="l-section p-contact-section2 c-contact-section">
        <div class="c-content">
          <div class="c-text" data-animation="slideInRight" data-animation-delay=".3s">
            <img src="img/text_cta-white.png" alt="contact_text_image">
          </div>
          <div class="c-img" data-animation="zoomIn" data-animation-delay=".6s">
            <img src="img/illust_woman.png" alt="woman_image">
          </div>
        </div>
        <div class="c-button-section" data-animation="slideInUp" data-animation-delay=".7s">
          <div class="c-button u-hover-opacity u-hover-up">
            <a href="tel:0800-919-1688"><img src="img/btn_tel.png" alt="tel_button_image"></a>
          </div>
          <div class="c-button u-hover-opacity u-hover-up">
            <a href="#a-form2"><img src="img/btn_form.png" alt="form_button_image"></a>
          </div>
        </div>
      </section>
      <section class="l-section p-caution-section">
        <div class="p-caution-inner">
          <div class="p-header" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="e-img">
              <img src="img/text_caution.png" alt="caution_image">
            </div>
          </div>
          <div class="p-content" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="e-text">
              <img src="img/illust_caution.png" alt="caution_man_image"> ⽕災保険の受け取りを謳って、
              <span class="u-underline-text">無理やり保険の契約やリフォーム⼯事を強要する業者</span>も残念ながら存在します。そのよう な代⾏業者は安く修理を⾏えば利益が増やせるため、最低限 の⼯事しか下請けに施⼯をさせません。
              <br><br> 更に⾔えば、保険申請の時には隅々まで完璧で⾼額な⾒積も り書を作成しますが、<span class="u-underline-text">実際の施⼯依頼は適当だったり、その 場しのぎ</span>で済ませてしまうということです。本当に⾏うべき施⼯ができないので、良い⼯事などできるはずがありません。 ですからそのような代⾏業者に頼むよりも、<span class="u-underline-text">信頼のできるリフォーム業者</span>に直接リフォームをご依頼いただく⽅が確実です。
            </div>
          </div>
        </div>
      </section>
      <section class="l-section p-3-reason-section">
        <div class="p-3-reason-inner">
          <div class="p-title" data-animation="flipInY" data-animation-delay=".3s">
            富士貴建装が選ばれる<span class="p-green-text"><span class="p-number">３</span>つ</span>の理由
          </div>
          <div class="c-selected-reason" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-header">
              <div class="c-img">
                <img src="img/icon_reason01.png" alt="Reaon_icon_image">
              </div>
              <div class="c-text">給付⾦や助成⾦を<span class="c-yello-text"><span class="c-top-point">減</span><span class="c-top-point">額</span><span class="c-top-point">さ</span>
                <span class="c-top-point">せ</span>
                <span class="c-top-point">な</span>
                <span class="c-top-point">い</span>
                </span>ノウハウ</div>
            </div>
            <div class="c-content">
              <div class="c-img">
                <img src="img/illust_reason01.png" alt="Reason_image">
              </div>
              <div class="c-text">
                富士貴建装は他社では実現できない⽕災保険など活⽤したリフォームを提供することで、<span class="c-bold-text">埼玉県知事より経営⾰新計画承認された実績</span>もあります。<br><br><span class="c-bold-text">保険代理店との強固な連携</span>により、保険⾦を減額させずしっかりお客様に還元できるノウハウが当社にはあります。
              </div>
            </div>
          </div>
          <div class="c-selected-reason" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-header">
              <div class="c-img">
                <img src="img/icon_reason02.png" alt="Reaon_icon_image">
              </div>
              <div class="c-text">調査から⼯事まで<span class="c-yello-text">全て当社で<span class="c-top-point">ワ</span>
                <span class="c-top-point">ン</span>
                <span class="c-top-point">ス</span>
                <span class="c-top-point">ト</span>
                <span class="c-top-point">ッ</span>
                <span class="c-top-point">プ</span>
                </span>
              </div>
            </div>
            <div class="c-content">
              <div class="c-img">
                <img src="img/illust_reason02.png" alt="Reason_image">
              </div>
              <div class="c-text">
                <span class="c-bold-text">最初から最後まで当社が全て⾏う</span>ため、給付のためにたらい回しにされる⼼配がありません。お客様は、当社が作成した書類を保険会社へ送付していただくのみです。<br> そのため、<span class="c-bold-text">保険に関する知識が無くても、安心安全</span>に保険金の申請をしたうえで、修繕・塗装・リフォームを行うことができます。 繕・塗装・リフォームを⾏うことができます。
              </div>
            </div>
          </div>
          <div class="c-selected-reason" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-header">
              <div class="c-img">
                <img src="img/icon_reason03.png" alt="Reaon_icon_image">
              </div>
              <div class="c-text">市町村への<span class="c-yello-text">助成⾦の<span class="c-top-point">申</span>
                <span class="c-top-point">請</span>
                <span class="c-top-point">も</span>
                <span class="c-top-point">サ</span>
                <span class="c-top-point">ポ</span>
                <span class="c-top-point">ー</span>
                <span class="c-top-point">ト</span>
                </span>
              </div>
            </div>
            <div class="c-content">
              <div class="c-img">
                <img src="img/illust_reason03.png" alt="Reason_image">
              </div>
              <div class="c-text">
                弊社がサポートするのは保険の給付金申請だけではありません。お住まいの<span class="c-bold-text">市町村への助成金の申請もサポート</span>しております<br><br> コロナの助成金と同じように、自治体によって条件が揃えばどなたでも、<span class="c-bold-text">火災保険の給付金とあわせて</span>受け取ることができます。
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="l-section p-contact-section2 c-contact-section">
        <div class="c-content">
          <div class="c-text" data-animation="slideInRight" data-animation-delay=".3s">
            <img src="img/text_cta-white.png" alt="contact_text_image">
          </div>
          <div class="c-img" data-animation="zoomIn" data-animation-delay=".6s">
            <img src="img/illust_woman.png" alt="woman_image">
          </div>
        </div>
        <div class="c-button-section" data-animation="slideInUp" data-animation-delay=".7s">
          <div class="c-button u-hover-opacity u-hover-up">
            <a href="tel:0800-919-1688"><img src="img/btn_tel.png" alt="tel_button_image"></a>
          </div>
          <div class="c-button u-hover-opacity u-hover-up">
            <a href="#a-form2"><img src="img/btn_form.png" alt="form_button_image"></a>
          </div>
        </div>
      </section>
      <section class="l-section p-client-voice-section">
        <div class="p-client-voice-inner">
          <div class="p-header" data-animation="flipInY" data-animation-delay=".3s">
            <h2>お客様の声</h2>
          </div>
          <div class="c-client-voice" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-header">
              <div class="c-text">
                ここになら安⼼して任せられる<span class="c-name">川⼝市 N様</span>
              </div>
            </div>
            <div class="c-content">
              <div class="c-img">
                <img src="img/img_voice01.jpg" alt="voice_image">
              </div>
              <div class="c-text">
                この間の台⾵が原因なのか⾬漏りするようになってしまったので、早く業者さんに⾒て欲しいと思い、近所だった富士貴建装さんに問い合わせしました。 問い合わせた後、<b>すぐ屋根の状況を⾒に来て</b>くださって、屋根に上り屋根の剥がれてしまった箇所、台⾵で劣化が悪化してしまった箇所を、<b>写真で撮って丁寧に説明</b>していただきました。 台⾵や地震などが原因の被害に対して<b>⽕災保険を使⽤しお得に屋根修理</b>ができるとは知らず、⼤変驚きました。
                <br><br> 保険についても丁寧に説明していただき、<b>ここになら安⼼して任せられる</b>と思いお願いすることに決めました。職⼈さんも⼯事の間も朝の挨拶から帰りの挨拶までしっかりしていて、礼儀正しい⽅ばかりでした。 ⼯事が終わった後、⾬漏りしなくなったのはもちろん、それに加えてやっていただいた外壁の塗装もとても素晴らしく、<b>お仕事の丁寧さに職⼈魂</b>を感じました。 また何かありましたらお願いいたします。
              </div>
            </div>
          </div>
          <div class="c-client-voice" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-header">
              <div class="c-text">
                リフォームをしたいという人がいたら自信を持って紹介したい<span class="c-name">さいたま市 S様</span>
              </div>
            </div>
            <div class="c-content">
              <div class="c-img">
                <img src="img/img_voice02.jpg" alt="voice_image">
              </div>
              <div class="c-text">
                外観の汚れが気になり、色もくすんで見えてきたのでそろそろ塗装をするべきじゃないかと考えていました。その時に富士貴建装さんのホームページを見て「損をさせない」という見出しに惹かれ、価格や費用の面でもそうですが、浅草寺の屋根を施工しているなどの実績もあり信頼を持てると思いご連絡しました。
                <br><br>他の業者さんも見積もりに来たのですが、<b>一番見積もりが分かりやすく丁寧</b>だったので富士貴建装さんに決めました。また、赤外線のカメラで屋根裏などのいつもは気にしない細かいところまで診断をしっかり行って下さり、劣化している箇所の説明が具体的で、素人の私たちでも分かりやすかったので安心できました。<br>
                実際の工事の時も、<b>職人さんが本当に几帳面な方</b>で助かりました。それに、作業に入る時に声を掛けてくれるなど気配りを忘れず、<b>仕事へは真面目な態度で打ち込んでいる様子</b>を見て安心して任せられました。
                <br><br>今のところ不具合はありませんし、あったとしても<b>保証期間内なら無償で対応</b>してくれるとの事なので、これから先も安心です。ほぼ任せきりでも素敵に仕上げて下さり、本当に感謝しています。もし近所などで<b>リフォームをしたいという人がいたら自信を持って紹介したい</b>と思います。ありがとうございました。
              </div>
            </div>
          </div>
          <div class="c-client-voice" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-header">
              <div class="c-text">
                出来栄えも完璧かつこの金額であれば文句なしです<span class="c-name">I様</span>
              </div>
            </div>
            <div class="c-content">
              <div class="c-img">
                <img src="img/img_voice03.jpg" alt="voice_image">
              </div>
              <div class="c-text">
                長年雨風にさらされた外壁の汚れや劣化が気になりだし、そろそろ外壁を綺麗にしたいと思っていた時に、友人の紹介で富士貴建装さんを知りました。LINEからの問い合わせができると知り、外壁塗装を業者の方にお願いするのは初めてで分からないことだらけでしたので、まずは工事をしたらどのくらいお金がかかるのか、工事の期間はどのくらいなのか、など疑問点を解消すべく問い合わせいたしました。
                <br><br>いざ問い合わせしてみると<b>丁寧に対応</b>してくださり、先にLINEから外壁の気になる箇所を写真で送っていたので、それを踏まえて今回は我が家の外壁の状態を実際に見たいただくことになりました。診断は、資格を持っているプロの方が行ってくれて、しかも写真で診断結果を見せてくださったり大変わかりやすいものでした。その結果を踏まえて見積もりを細かく出して、<b>疑問点はその場ですぐに説明</b>してくださった点にも安心できました。
                <br><br><b>問い合わせの時から診断結果の報告までとても丁寧で、出来栄えも完璧かつこの金額であれば文句なし</b>です。また何かあった時は、地元の会社さんですので是非よろしくお願いしたいと思っています。
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="l-section p-question-section">
        <div class="p-question-inner">
          <div class="p-header" data-animation="slideInUp" data-animation-delay=".3s">
            よくあるご質問
          </div>
          <div class="c-question-section" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-row">
              <div class="c-img">
                <img src="img/icon_question.gif" alt="question_icon_image">
              </div>
              <div class="c-text">どれくらいの期間で保険⾦が受け取れ、リフォームをスタートできますか？</div>
            </div>
            <div class="c-row">
              <div class="c-img">
                <img src="img/icon_answer.gif" alt="answer_icon_image">
              </div>
              <div class="c-text">
                数週間、およそ1ヶ⽉ほどで給付⾦がおります。<br> 給付されたらリフォーム作業を開始させていただきます。
              </div>
            </div>
          </div>
          <div class="c-question-section" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-row">
              <div class="c-img">
                <img src="img/icon_question.gif" alt="question_icon_image">
              </div>
              <div class="c-text">本当に保険⾦を受け取って⼤丈夫なのでしょうか？</div>
            </div>
            <div class="c-row">
              <div class="c-img">
                <img src="img/icon_answer.gif" alt="answer_icon_image">
              </div>
              <div class="c-text">
                はい、保険⾦の受け取りは正当な権利です。⾃動⾞が壊れたら⾃動⾞保険を使うように、⾃宅に被害が出たら⽕災保険が使えます。しかも、⽕災保険は何回給付⾦を受け取っても保険料が上がる⼼配はありません。
              </div>
            </div>
          </div>
          <div class="c-question-section" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-row">
              <div class="c-img">
                <img src="img/icon_question.gif" alt="question_icon_image">
              </div>
              <div class="c-text">ほとんど気づかないくらいの損傷なのですが、それでも給付⾦が受け取れますか？</div>
            </div>
            <div class="c-row">
              <div class="c-img">
                <img src="img/icon_answer.gif" alt="answer_icon_image">
              </div>
              <div class="c-text">
                はい、⼩さい損傷であっても給付の対象になります。当社の専⾨スタッフがしっかり調査いたします。お客様が気付いていなかった損傷を調査員が⾒つけて給付の対象になることもよくあります。 ⽕災保険が使えます。しかも、⽕災保険は何回給付⾦を受け取っても保険料が上がる⼼配はありません。
              </div>
            </div>
          </div>
          <div class="c-question-section" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-row">
              <div class="c-img">
                <img src="img/icon_question.gif" alt="question_icon_image">
              </div>
              <div class="c-text">⽕災で損傷したわけではないですが給付の対象になりますか？</div>
            </div>
            <div class="c-row">
              <div class="c-img">
                <img src="img/icon_answer.gif" alt="answer_icon_image">
              </div>
              <div class="c-text">
                保険内容にもよりますが、⼀般に⽕災以外の災害も対象になります。台⾵、地震、⾵⽔害、ガス漏れ、突発的な事故、⼤雪、⽔漏れなども対象になります。 が気付いていなかった損傷を調査員が⾒つけて給付の対象になることもよくあります。 ⽕災保険が使えます。しかも、⽕災保険は何回給付⾦を受け取っても保険料が上がる⼼配はありません。
              </div>
            </div>
          </div>
          <div class="c-question-section" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-row">
              <div class="c-img">
                <img src="img/icon_question.gif" alt="question_icon_image">
              </div>
              <div class="c-text">保険を使ってしまうと、保険料が上がりますか？</div>
            </div>
            <div class="c-row">
              <div class="c-img">
                <img src="img/icon_answer.gif" alt="answer_icon_image">
              </div>
              <div class="c-text">
                保険料は上がりません。ご安⼼ください。
              </div>
            </div>
          </div>
          <div class="c-question-section" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-row">
              <div class="c-img">
                <img src="img/icon_question.gif" alt="question_icon_image">
              </div>
              <div class="c-text">⼀度保険を使ってしまうと、⼆度と使えなくなったりしますか？</div>
            </div>
            <div class="c-row">
              <div class="c-img">
                <img src="img/icon_answer.gif" alt="answer_icon_image">
              </div>
              <div class="c-text">
                被害に遭ったら何度でもその都度使うことができます。ご安⼼ください。
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="l-section p-contact-form-section2 c-contact-form-section">
        <form class="c-contact-form h-adr form2" action="" method="POST" id="form2" onsubmit="return false;" novalidate>
          <div class="c-input-form-section" id="a-form2" data-animation="slideInUp" data-animation-delay=".3s">
            <dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">お名前</label>
								<span class="c-validation-text">必須</span>
          		</dt>
              <dd class="c-right-column">
                <input type="text" name="namae2" placeholder="富士貴　太郎">
                <span class="c-error-msg u-hide">※お名前を入力してください。</span>
              </dd>
            </dl>
            <dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">ふりがな</label>
								<span class="c-validation-text">必須</span>
							</dt>
              <dd class="c-right-column">
                <input type="text" name="namaekana2" placeholder="ふじたか　たろう">
                <span class="c-error-msg u-hide">※ふりがなを入力してください。</span>
              </dd>
            </dl>
            <dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">電話番号</label>
								<span class="c-validation-text">必須</span>
							</dt>
              <dd class="c-right-column">
                <input type="text" name="phone_number" placeholder="090-1234-5678">
                <span class="c-error-msg u-hide">※電話番号を入力してください。</span>
              </dd>
            </dl>
            <dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">メールアドレス</label>
								<span class="c-validation-text">必須</span>
							</dt>
              <dd class="c-right-column">
                <input type="text" name="e-mail" placeholder="info@fujitakakenso.co.jp">
                <span class="c-error-msg u-hide">※メールアドレスを入力してください。</span>
              </dd>
            </dl>
            <!--<dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">住所</label>
								<span class="c-validation-text">必須</span>
							</dt>
              <dd class="c-right-column">
                <span class="p-country-name" style="display:none;">Japan</span>
                <label for="" class="e-text">〒</label>
                <input class="c-post-address p-postal-code" name="post_number" type="text" size="8" maxlength="8" placeholder="3320006">
                <span class="c-error-msg u-hide">※郵便番号を入力してください。</span>
                <div class="e-comment-text">※郵便番号を入力すると市区町村まで自動入力されます</div>
                <input type="text" name="address" class="p-region p-locality p-street-address p-extended-address" placeholder="埼玉県川口市末広2-13-7">
              </dd>
            </dl>-->
            <dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">修理希望箇所</label>
								<span class="c-validation-text c-select-text">任意</span>
							</dt>
              <dd class="c-right-column">
                <select id="select-city" class="c-city_selection" name="select_city" required>
									<option value="" disabled selected>選択してください</option>
									<option value="雨どい">雨どい</option>
									<option value="屋根瓦">屋根瓦</option>
									<option value="屋根全般">屋根全般</option>
									<option value="雨漏り">雨漏り</option>
									<option value="外壁">外壁</option>
									<option value="カーポート">カーポート</option>
									<option value="その他">その他</option>
								</select>
                <span class="c-error-msg u-hide">※修理希望箇所を選択してください。</span>
              </dd>
            </dl>
            <dl class="c-low">
              <dt class="c-left-column">
								<label for="" class="c-text">ご相談内容</label>
								<span class="c-validation-text c-select-text">任意</span>
							</dt>
              <dd class="c-right-column">
                <textarea name="consultant_content" rows="4" placeholder="事前にご相談事項がありましたら、自由にご入力ください。"></textarea>
                <span class="c-error-msg u-hide">※ご相談内容を入力してください。</span>
              </dd>
            </dl>
          </div>
          <button type="button" class="c-validation-button u-hover-opacity u-hover-up" value="入力内容を確認する" data-animation="slideInUp" data-animation-delay=".3s">入力内容を確認する</button>
          <div class="c-confirm-page-button u-hide">
            <button type="button" class="c-fix-button u-hover-opacity u-hover-up" value="入力内容を確認する">修正</button>
            <button type="submit" class="c-submit-button u-hover-opacity u-hover-up" name="form2_submit" value="入力内容を確認する">送信する</button>
          </div>
          <div class="c-form-description" data-animation="slideInUp" data-animation-delay=".3s">
            <div class="c-low">
              <div class="c-img">
                <img src="img/icon_check.png" alt="icon_check_image">
              </div>
              <div class="c-text">
                安心のプロ対応で95％以上の給付率です
              </div>
            </div>
            <div class="c-low">
              <div class="c-img">
                <img src="img/icon_check.png" alt="icon_check_image">
              </div>
              <div class="c-text">
                小さな被害でも保険金を受け取れます
              </div>
            </div>
            <div class="c-low">
              <div class="c-img">
                <img src="img/icon_check.png" alt="icon_check_image">
              </div>
              <div class="c-text">
                火災保険は何度でも使うことができます
              </div>
            </div>
            <div class="c-low">
              <div class="c-img">
                <img src="img/icon_check.png" alt="icon_check_image">
              </div>
              <div class="c-text">
                しつこい営業・勧誘はいっさい行いません
              </div>
            </div>
          </div>
        </form>
      </section>
      <section class="l-section p-company-info-section" data-animation="slideInUp" data-animation-delay=".3s">
        <div class="p-company-inner">
          <div class="e-text">
            富士貴建装株式会社（設立1994年）<br>代表取締役　 深山正康<br> 許可番号：埼玉県知事　許可（般-30）第62618号
            <br>〒332-0006 埼玉県川口市末広2丁目13-7<br>TEL：048-225-6630
            <br>メール：info@fujitaka-kensou.co.jp
          </div>
        </div>
      </section>
    </main>
    <div class="l-footer p-footer">
      <div class="a-privacy">
        <a href="https://fujitaka-kensou.jp/privacy" target="_blank">プライバシーポリシー</a>
      </div>
      <div class="p-copyright">
        Copyright © 2021 富士貴建装 All Rights Reserved.
      </div>
    </div>
  </div>
  <script>
    const AnimateOnScroll = function({
      offset
    } = {
      offset: 10
    }) {
      // Define a dobra superior, inferior e laterais da tela
      const windowTop = (offset * window.innerHeight) / 100;

      const windowBottom = window.innerHeight - windowTop;
      const windowLeft = 0;
      const windowRight = window.innerWidth;
      console.log(windowRight);
      this.start = (element) => {
        window.requestAnimationFrame(() => {
          // Seta os atributos customizados
          element.style.animationDelay = element.dataset.animationDelay;
          element.style.animationDuration = element.dataset.animationDuration;

          // Inicia a animacao setando a classe para animar
          element.classList.add(element.dataset.animation);

          // Seta o elemento como animado
          element.dataset.animated = "true";
        });
      };

      this.inViewport = (element) => {
        // Obtem o boundingbox do elemento
        const elementRect = element.getBoundingClientRect();
        const elementTop =
          elementRect.top + parseInt(element.dataset.animationOffset) ||
          elementRect.top;
        const elementBottom =
          elementRect.bottom - parseInt(element.dataset.animationOffset) ||
          elementRect.bottom;
        const elementLeft = elementRect.left;
        const elementRight = elementRect.right;

        // Verifica se o elemento esta na tela
        return (
          elementTop <= windowBottom &&
          elementBottom >= windowTop &&
          elementLeft <= windowRight &&
          elementRight >= windowLeft
        );
      };

      // Percorre o array de elementos, verifica se o elemento está na tela e inicia animação
      this.verifyElementsInViewport = (els = elements) => {
        for (let i = 0, len = els.length; i < len; i++) {
          // Passa para o proximo laço se o elemento ja estiver animado
          if (els[i].dataset.animated) continue;

          this.inViewport(els[i]) && this.start(els[i]);
        }
      };

      // Obtem todos os elementos a serem animados
      this.getElements = () =>
        document.querySelectorAll("[data-animation]:not([data-animated])");

      // Atualiza a lista de elementos a serem animados
      this.update = () => {
        elements = this.getElements();
        elements && this.verifyElementsInViewport(elements);
      };

      // Inicia os eventos
      window.addEventListener("load", this.update, false);
      window.addEventListener(
        "scroll",
        () => this.verifyElementsInViewport(elements), {
          passive: true
        }
      );
      window.addEventListener(
        "resize",
        () => this.verifyElementsInViewport(elements), {
          passive: true
        }
      );
    };

    // Initialize
    const options = {
      offset: 15 // percentage of the window
    };

    const animation = new AnimateOnScroll(options);
  </script>
</body>

</html>