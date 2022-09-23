
<!DOCTYPE html>
<html>
<head>
	<title>お問い合わせ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/doctor.css">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	/*box dialog*/
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 300px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
</style>


</head>
<body>
	<!-- header start -->
	<div class="header_top">
		<img src="../image/logo/logo_mihara.jpg">
		<a class="content_toptel" href="">
			<span><i class="fa fa-volume-control-phone" aria-hidden="true"></i>0974-62-3850</span>
		</a>
		<!-- <a class="content_toptel" >診療時間<span>9:00-17：30</span></a> -->
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
		<div class="logo"><img src="../image/logo/logo_mihara.jpg"></div>
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
				<a href="section.html">リハビリ</a>
				<input class="checkbox" type="checkbox" id="btn-1" >
				<ul>
					<li><a href="tuusyo.html">通所</a></li>
					<li><a href="houmon.html">訪問</a></li>
					<li><a href="daycare.html">デイケア</a></li>
				</ul>
			</li>
			<li><a href="medical2.html">内科</a></li>
			<li><a href="device.html">検査機器</a></li>
		</ul>
	</nav>
	<!-- navbar end -->
	<!-- button(mobile,tablet) start-->
	<div class="box_mobile" >
		<div class="dropdown">
			<button onclick="click_dropdown()" class="dropbtn">Home</button>
			<div id="myDropdown" class="dropdown-content">
				<a href="../index.html">健伸会</a>
				<a href="../carehome/index.html">ケアホーム五つの実</a>
				<a href="../careplan/index.html">ケアプランセンターみはら</a>
				<a href="access.html">アクセス</a>
				<a href="contact.php">お問い合わせ</a>
			</div>
		  </div>
	</div>
	<!-- button(mobile,tablet) end-->
	<div class="container">


 <div class="box_con">
 	<p><span>必須</span>は必須入力です。</p>
        <form method="post" >
        <table class="formTable">
          <tr>
            <th>ご用件</th>
            <td><select name="ご用件" name="title">
                <option value="">選択してください</option>
                <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
                <option value="リンクについて">リンクについて</option>
              </select></td>
          </tr>
          <tr>
            <th>お名前<span>必須</span></th>
            <td><input size="20" type="text" name="name" /></td>
          </tr>
           <tr>
            <th>ふりがな<span>必須</span></th>
            <td><input size="20" type="text" name="fname" /></td>
          </tr>
          <tr>
            <th>電話番号（半角）</th>
            <td><input size="30" type="text" name="tel" /></td>
          </tr>
          <tr>
            <th>Eメール（半角）<span>必須</span></th>
            <td><input size="30" type="email" name="email" /></td>
          </tr>
          <tr>
            <th>お問い合わせ内容<span>必須</span><br /></th>
            <td><textarea name="お問い合わせ内容" cols="50" rows="5" name="content"></textarea></td>
          </tr>
        </table>
      <div class="box_btn_contact">
           <input class="btn_contact"  type="submit" value="確認" />
        
</div>
      </form>
   <button id="myBtn">Open Modal</button>
  </div>
  <div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
      <form action="" method="POST">
      <input type="text" name="p_name">
      <input type="submit" name="">
      </form>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
	</div>

	<a id="back2Top" title="Back to top"　value="ページトップ" href="#">&#10148;</a>
	<section class="footer">
		<div class="container">
			<div class="row">
				<div class="column_50 ">
					<h2>みはらクリニック</h2>
					<div class="footer_box_content">
						<h3>住所</h3><p>〒870-0124
						大分県竹田市大字会々1257</p>

						<h3 id="tel">Tel</h3>
						<p>0974-62-3850</p>
					</div>
				</div>
				<div class="column_50"><iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1990.1984119463038!2d131.3903385745229!3d32.97472592737175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3546cee61c878e35%3A0x57b0de8770b53b30!2sMihara%20Clinic!5e0!3m2!1svi!2sjp!4v1643013058667!5m2!1svi!2sjp" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
			</div>
			<div class="row">
				<div class="column_50 ">
					<h2> ケアホーム五つの実。ケアプランセンターみはら</h2>
					<div class="footer_box_content">
						<h3>住所</h3><p>〒870-0124
							大分県竹田市大字会々2756-1
						</p>
						<h3 id="tel">Tel
						</h3>
						<p>0974-63-9611</p>
					</div>
				</div>
				<div class="column_50"><iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d836.7747269576932!2d131.3900957881265!3d32.97479222386762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3546cee8ae6d9521%3A0x598dca089f34621c!2s2756%20Aiai%2C%20Taketa%2C%20Oita%20878-0011!5e0!3m2!1svi!2sjp!4v1643013296333!5m2!1svi!2sjp" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
			</div>
			<div class="bottnav">
				<div class="row">
					<div class="column_25">
						<div id="menu">
							<ul>
								<a class="item" href="">健伸会</a>
							</ul> 
						</div>
					</div>
					
					<div class="column_25">
						<div id="menu">
							<a class="item" href="">みはらクリニックホームページ</a>
							<ul>
								<li><a href="#">医師紹介
								</a></li>
								<li><a href="#">診療科</a></li>
								<li><a href="#">検査機器紹介</a></li>

							</ul> 
						</div>
					</div>
					<div class="column_25">
						<div id="menu">
							<a class="item" href="">ケアホーム五つの実</a>
							<ul>
								<li><a href="#">サービス内容
								</a></li>
								<li><a href="#">施設紹介</a></li>
								<li><a href="#">介護認定とは</a></li>

							</ul> 
						</div>
					</div>
					<div class="column_25">
						<div id="menu">
							<a class="item" href="">ケアプランセンターみはら</a>
							<ul>
								<li><a href="#">指定居宅介護認定とは
								</a></li>
								<li><a href="#">アクセス</a></li>
							</ul> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<p class="content_copy">Copyright © 医療法人 健伸会 All Rights Reserved.</p>
	</section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src=
"https://code.jquery.com/jquery-3.3.1.min.js">
</script>
<script type="text/javascript" src="../js/style.js"></script>
<script type="text/javascript">
	/*<============ Box Dialog START ============>*/
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

/*<============ Box Dialog END ============>*/
</script>
</html>