<?php
ini_set('display_errors', 0);
/*変数初期化する*/
$title_err = $name_err = $fname_err = $tel_err = $mail_err = $content_err = "";
$title = $name = $fname = $tel = $mail = $content = "";
$msg_Success = $msg_err = "";

//ブランクチェックする。
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["name"] == "") {
		$name_err = "*名前を未入力です。";
	}else{
		$name = $_POST["name"];
	}
	if ( $_POST["fname"] == "") {
		$fname_err = "*ふりがなを未入力です。";
	}else{
		$fname = $_POST["fname"];
	}
	if ($_POST["tel"] == "") {
		$tel_err = "*電話番号を未入力です。";
	}else{
		$tel = $_POST["tel"];
	}
	if ($_POST["email"] == "") {
		$mail_err = "*Eメールを未入力です。";
	}else{
		$mail = $_POST["email"];
	}
	if ($_POST["title"] == "") {
		$title_err = "*用件を未入力です。";
	}else{
		$title = $_POST["title"];
	}
	if ($_POST["content"] == "") {
		$content_err = "*お問い合わせ内容を未入力です。";
	}else{
		$content = $_POST["content"];
	}

	if ($name != null && $fname != null &&  $mail != null && $title != null && $content != null) {
	
//   $title = $_POST["title"]; //メールの件名
//   $content = $_POST["content"];
  $to = ""; //送信先メールアドレス
  $from = "From: $mail\r\n";  //送信元として表示されるメールアドレス
  $from.="Return-Path: $mail";
//メール本文の作成
  $cont = '';
  $cont.= "【名前】\n";
  $cont.= $name."\n";
  $cont.= "【ふりがな】\n";
  $cont.= $fname."\n";
  $cont.= "【電話番号】\n";
  $cont.= $tel."\n";
  $cont.= "【メールアドレス】\n";
  $cont.= $mail."\n";
  $cont.= "【お問い合わせ内容】\n";
  $cont.= $content."\n";
//日本語を設定。
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");
  if(mb_send_mail($to, $title, $cont, $from))
  {
  	$msg_Success = "お問い合わせありがとうございました。";
  }
  else
  {
  	$msg_err = "メール送信失敗です";
  }
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>お問い合わせ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/mihara_main.css">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index,follow,noarchive" />
	<meta name="keywords" content="みはら整形外科クリニック,竹田,整形外科,大分,糖尿病,生活習慣病,骨粗しょう症" />
	<meta name="description" content="みはら整形外科クリニックは大分県の竹田市に位置し、変形性膝関節症・リウマチ・骨粗しょう症・骨折・腰痛・肩関節周囲炎の治療・リハビリテーションと、糖尿病などの生活習慣病にも力を入れています。" />
	<link href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="../image/logo/favicon.ico">


</head>
<body>
	<!-- header start -->
	<div class="header_top">
		<a href="index.html"><img src="../image/logo/logo_mihara.jpg"></a>
		<a class="content_toptel" href="tel:81974-62-3850"><span><i class="fa fa-volume-control-phone" aria-hidden="true"></i>0974-62-3850</span></a>
		<nav class="nav_top">
			<ul >
				<li class="nav_item"><a href="../index.html">健伸会</a></li>
				<li class="nav_item"><a href="../carehome/index.html">ケアホーム五つの実</a></li>
				<li class="nav_item"><a href="../careplan/index.html">ケアプランセンターみはら</a></li>
				<li class="nav_item"><a href="access.html">アクセス</a></li>
				<li class="nav_item"><a href="contact.php">お問い合わせ</a></li>
				
			</ul>
		</nav>
	</div>
	<!-- header end -->
	<!-- wave start -->
<div class="header-content-right">
		<div class="row">
<div class="col_30">
	<div class="box_table_time">
		<div class="box_table_time_content">
	<table class="table_time">
		<tr><th>診療時間</th>
			<td>月</td>
			<td>火</td>
			<td>水</td>
			<td>木</td>
			<td>金</td>
			<td>土</td>
			<td>日</td>
		</tr>
		<tr><th>9:00~12:30</th>
			<td>●</td>
			<td>●</td>
			<td>●</td>
			<td>●</td>
			<td>●</td>
			<td>●</td>
			<td>×</td>
		</tr>
		<tr><th>14:00~17:30</th>
			<td>●</td>
			<td>●</td>
			<td>●</td>
			<td>×</td>
			<td>●</td>
			<td>●</td>
			<td>×</td>
		</tr>
	</table>
	<div class="contact">
		<p>受付時間　8:30 - 17:30</p>
		<p>※土曜日午後　14:00 - 16:30</p>
		<p>休 診 日 <span style="margin-left: 15px;">木曜午後・日祝日・お盆・年末年始</span></p>
	</div>
	</div>
	</div>
</div>

<div class="col_70">
	<div class="box_img_header_homepage">
	<img src="../image/mihara_home.JPG">
	</div>
</div>
		</div>
	</div>


	<!-- wave end -->
	<!-- navbar start -->
	<nav class="nav_menu" id="navbar">
		<div class="logo"><a href="index.html"><img src="../image/logo/logo_mihara.jpg"></a></div>
		<label for="btn" class="icon">
			<div class="menu_icon" onclick="menu_icon(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
				<div>Menu</div>
			</div>
		</label>
		<input class="checkbox" type="checkbox" id="btn" name="">
		<ul>
			<li><a href="index.html">トップページ</a></li>
			<li><a href="doctor.html">医師紹介</a></li>
			<li></p>
				<label for="btn-1"class="show">リハビリ+</label>
				<a href="">リハビリ</a>
				<input class="checkbox" type="checkbox" id="btn-1" >
				<ul>
					<li><a href="tuusyo.html">通所</a></li>
					<li><a href="houmon.html">訪問</a></li>
					<li><a href="daycare.html">デイケア</a></li>
					<li><a href="rehabilitation.html">リハビリテーション</a></li>
				</ul>
			</li>
			<li><a href="medical2.html">内科</a></li>
			<li><a href="device.html">検査機器</a></li>
		</ul>
	</nav>
<!-- bottom memu bar(mobile,tablet) end-->
	  <div class="bottom-navbar" id="bottom-menu">
		<a class="bottom-navbar-tel" href="tel:81974-62-3850"><i class="fa fa-phone" aria-hidden="true"></i></a>
		<a href="../index.html">健伸会</a>
		<a href="../carehome/index.html">ケアホーム五つの実</a>
		<a href="../careplan/index.html">ケアプランセンターみはら</a>
		<a href="access.html">アクセス</a>
		<a href="contact.php">お問い合わせ</a>
		<a href="javascript:void(0);" class="bottom-icon" onclick="bottom_menu()"><i class="fa fa-home" aria-hidden="true"></i></a>
		<a class="bottom-navbar-bar"></a>
		
	  </div>
	<!-- bottom memu bar(mobile,tablet) end-->
	<!-- main start -->
	<div class="container">
		<h3 class="title2"><span>お問い合わせ</span></h3>
		<div class="box_con">
			<?php if($msg_Success){?>
				<div class="alert" id="myDIV" style="display:block;">
					<a   href="contact.php" ><span class="closebtn"  onclick="this.parentElement.style.display='none';">&times;</span></a>
					<?= $msg_Success?>
				</div>
			<?php }elseif ($msg_err) {?>
				<div class="alert">
					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
					<?= $msg_err ?>
				</div>
			<?php } ?>
			<p><span>必須</span>は必須入力です。</p>
		
			
			<form action="contact.php" method="post">
				<table class="formTable">
					<tr>
						<th>ご用件<span>必須</span></th>
						<td>
							<input size="20" type="text" name="title" value="<?php echo $title; ?>">
							<span class="err"><?php echo $title_err; ?></span></td>
						</tr>
						<tr>
							<th>お名前<span>必須</span></th>
							<td><input size="20" type="text" name="name" value="<?php echo $name; ?>"/><span class="err"><?php echo $name_err; ?></span></td>
						</tr>
						<tr>
							<th>ふりがな<span>必須</span></th>
							<td><input size="20" type="text" name="fname"  value="<?php echo $fname; ?>" /><span class="err"><?php echo $fname_err; ?></span></td>
						</tr>
						<tr>
							<th>電話番号</th>
							<td><input size="30" type="number" pattern="[0-9]"  onKeyPress="if(this.value.length==12) return false;" oninput="this.value = this.value.replace(/(\..*?)\..*/g, '$1');" name="tel"  value="<?php echo $tel; ?>" /></td>
						</tr>
						<tr>
							<th>Eメール<span>必須</span></th>
							<td><input size="30" type="email" name="email"  value="<?php echo $mail; ?>" /><span class="err"><?php echo $mail_err; ?></span></td>
						</tr>
						<tr>
							<th>お問い合わせ内容<span>必須</span><br /></th>
							<td><textarea name="content" cols="50" rows="5"  ><?php echo $content; ?></textarea><span class="err"><?php echo $content_err; ?></span></td>
						</tr>
					</table>
					<div class="box_btn_contact">
						<input class="btn_contact" type="submit" name="sub" value="送信する" />

					</div>
				</form>
			</div>
		</div>
		<!-- main end -->
		<a id="back2Top" title="Back to top"　value="ページトップ" href="#">&#10148;</a>
		<!-- footer start -->
		<section class="footer">
			<div class="container">
				<div class="row">
					<div class="column_50 ">
						<h2>みはらクリニック</h2>
					<div class="footer_box_content">
									<h3 class="address">住所</h3><p>〒878-0011  大分県竹田市大字会々  1257</p>
									<h3 id="tel">Tel</h3>
									<p>0974-62-3850</p>
								</div>
					</div>
					<div class="column_50"><iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.0968514503206!2d131.38929131556367!3d32.974846481178304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3546cee61c878e35%3A0x57b0de8770b53b30!2z44G_44Gv44KJ44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1644888978322!5m2!1sja!2sjp" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
				</div>
				<div class="row">
					<div class="column_50 ">
						<h2> 『ケアホーム五つの実』『ケアプランセンターみはら』</h2>
						<div class="footer_box_content">
							<h3 class="address">住所</h3><p>〒870-0124  大分県竹田市大字会々2756-1
							</p>
							<h3 id="tel">Tel
							</h3>
							<p>0974-63-9611</p>
						</div>
					</div>
					<div class="column_50"><iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d966.8198286274283!2d131.386144190316!3d32.97023507923751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3546cef1f207afa1%3A0x1d9e233a0e06f782!2z44Kx44Ki44Ob44O844Og5LqU44Gk44Gu5a6f!5e0!3m2!1sja!2sjp!4v1644995663168!5m2!1sja!2sjp" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
				</div>
				<div class="bottnav">
					<div class="row">
						<div class="column_25">
							<div id="menu">
								<ul>
									<a class="item action" href="../index.html">健伸会</a>
								</ul> 
							</div>
						</div>
						<div class="column_25">
							<div id="menu">
								<a class="item" href="index.html">みはらクリニックホームページ</a>
								<ul>
									<li><a href="doctor.html">医師紹介
									</a></li>
									<li><a href="section.html">診療科</a></li>
									<li><a href="device.html">検査機器紹介</a></li>
								</ul> 
							</div>
						</div>
						<div class="column_25">
							<div id="menu">
								<a class="item" href="../carehome/index.html">ケアホーム五つの実</a>
								<ul>
									<li><a href="../carehome/index.html">サービス内容
									</a></li>
									<li><a href="../careplan/kaigo_nintei.html">介護認定とは</a></li>
									<li><a href="../carehome/access.html">交通アクセス</a></li>
								</ul> 
							</div>
						</div>
						<div class="column_25">
							<div id="menu">
								<a class="item" href=../careplan/index.html>ケアプランセンターみはら</a>
								<ul>
									<li><a href="../careplan/care_support.html">指定居宅介護認定とは
									</a></li>
									<li><a href="../careplan/access.html">交通アクセス</a></li>
								</ul> 
							</div>
						</div>
					</div>
				</div>
			</div>
			<p class="content_copy">Copyright © みはらクリニック All Rights Reserved.</p>
		</section>
		<!-- footer end -->
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/style.js"></script>
	</html>