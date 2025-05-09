<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja" style="margin : 0px;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<title>Wagner Society Orchestra Music Library</title>
<style type="text/css">
<!--

body {
  font-family: "メイリオ", Meiryo, "ＭＳ Ｐゴシック", Osaka, "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro";
  color : #000000;
  background-color : #ffffff;
}

img {
  border-style : none;
}
#menu {
  max-width : 100%;
  height : 30px;

  padding-left : 100px;
  background-color : #f7f7f7;

  border-style : none none solid none;
  border-width : 1px; 
  border-color : #777777;

}


#menu ul {
list-style : none;
margin : 0px;
padding : 0px;

}


#menu li {
margin : 0px;
padding : 0px;
float : left;
}

#menu a {
  color : #000000;
  margin-top : 0px;
  padding-top : 5px;

  display : block;
  width : 125px;
  height : 25px;

  text-align : center;
  text-decoration : none;

  border-style : none none solid none;
  border-width : 1px;
  border-color : #777777;
}

#menu a:hover {
  color : #999900;
  border-width : 1px;
  border-color : #555555;
  background-color : #eeeeee;
}


.rslt table {
  border-collapse : collapse;
  border-style : none;
  border-width : 0px;
  font-size : 0.9em;
}
.rslt td {
  border-style : none none solid none;
  border-width : 0px 0px 1px 0px;
  border-color : #cccccc;

  padding-top : 0.7em;

  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.rslt td div {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.rslt_eng {
  font-size : 0.8em;
  padding-left : 1em;
}

.srch_form table {
  border-style : none;
}
.srch_form td {
  border-style : none;
}

.view_comp {
  padding-left : 1.5em;
  margin : 20px 0em 0em 0em;
  font-size : 0.8em;
  border-bottom-style : solid;
  border-width : 1px;
  border-color : #cccccc;
  width : 25em;
}

.view_title {
  padding-left : 1.5em;
  margin : 0.3em 0em 0em 0em;
  font-size : 1.2em;
  border-bottom-style : solid;
  border-width : 1px;
  border-color : #252D39;
  width : 35em;

  position : relative;
}

.view_eng {
  font-size : 0.9em;
  padding-left : 1em;
}
.view table {
  margin : 2em 0px 0px 3em;
  border-collapse : collapse;
  border-style : none;
  border-width : 0px;
}
.view_mod_img {
  margin-left : 1em;
  width : 16px;
  height : 21px;

  position : absolute;
  right : 20px;
}

.view td {
  border-style : none none solid none;
  border-width : 0px 0px 1px 0px;
  border-color : #cccccc;
}

.tab_navi {
  margin : 0px; padding : 0px;
}

.tab_navi li {
  display : inline;
  padding : 5px 10px;
  border-style : solid;
  border-width : 1px;
  float : left;
  z-index : 1;
  position : relative;
  border-color : #cccccc;
  background-color : #fdfdfd;
}
.tab_cont {
  position : relative;
  top : -1px;

  padding : 20px 30px 50px 30px;
  width : 400px;
  border-style : solid;
  border-width : 1px;
  clear : left;
  z-index : 0;
  border-color : #cccccc;
  background-color : #fdfdfd;
}

#w_wrap {

  z-index : 10;
  width : 100%;
  height : 100%;
  position : fixed;
  left : 0px;
  top : 0px;
  background-image : url("win_back.png");


}

#win {
  width : 250px;
  padding : 20px;
  background-color : #ffffff;
  border-style : none;
  border-width : 1px;
  border-color : #252d39;
  margin-left : auto;
  margin-right : auto;
  margin-top : 20%;
  position : relative;
}

.cont {
  padding-left : 40px;
}

.cont_title {
  border-bottom-style : solid;
  border-width : 1px;
  border-color : #252D39;
  width : 600px;
  padding : 0px 40px 0px 20px;
  margin-bottom : 2em;
}

.cont_title img {
  margin-right : 20px;
}
-->
</style>
<script type="text/javascript">
<!--

function post_lnk(data, pf) {
  var form = document.createElement("form");
  form.setAttribute("action", "./");
  form.setAttribute("method", "post");
  form.style.display = "none";
  document.body.appendChild(form);

  for (var name in data) {
    var input = document.createElement('input');
    input.setAttribute('type', 'hidden');
    input.setAttribute('name', name);
    input.setAttribute('value', data[name]);
    form.appendChild(input);
  }

  form.submit();
}

function hover(obj, col, crsr) {
  obj.style.color = col;
  obj.style.cursor = crsr;
}

function form_mem(fname) {
  var form = document.getElementById(fname);
  var il = form.elements.length;

  for (i = 0; i < il; i++) {
    f_m[form.elements[i].name] = form.elements[i].value
  }
}

function form_recov(fname) {
  var form = document.getElementById(fname);
  var il = form.elements.length;

  for (i = 0; i < il; i++) {
    if ((f_m[form.elements[i].name] != undefined) && (form.elements[i].name != "")) {
      form.elements[i].value = f_m[form.elements[i].name];
    }
  }
}

function form_chk() {
  
}

function admin_win(data) {
  
  var win_wrap = document.createElement("div");
  win_wrap.setAttribute('id', 'w_wrap');
  document.body.appendChild(win_wrap);


  var win = document.createElement("div");
  win.setAttribute('id', 'win');
  win_wrap.appendChild(win);


//フォームの生成

  var form = document.createElement("form");
  form.setAttribute("action", "./");
  form.setAttribute("method", "post");
  form.style.margin = "0px";
  form.style.padding = "0px";
  win.appendChild(form);


//パスワード入力欄
  var msg = document.createElement("p");
  msg.innerText = "パスワードを入力してください"
  msg.style.margin = "0px 0px 1em 0px";
  form.appendChild(msg);

  var pwd = document.createElement("input");
  pwd.setAttribute("type", "password");
  pwd.setAttribute("name", "pwd");
  pwd.style.width = "190px";
  pwd.style.margin = "0px";
  form.appendChild(pwd);

  var admin = document.createElement("input");
  admin.setAttribute("type", "submit");
  admin.setAttribute("value", "認証");
  admin.style.width = "50px";
  admin.style.margin = "0px";
  form.appendChild(admin);

// 「閉じる」ボタン
  var close = document.createElement("img");
  close.src = "close.png";
  close.style.position = "absolute";
  close.style.right = "5px";
  close.style.top = "5px";
  close.setAttribute("onclick", "close_win();");
  close.setAttribute("onmouseover", "hover(this, 'inherit', 'pointer');");
  close.setAttribute("onmouseout", "hover(this, 'inherit', 'pointer');");
  win.appendChild(close);

//フォームデータの追加
  for (var name in data) {
    var input = document.createElement('input');
    input.setAttribute('type', 'hidden');
    input.setAttribute('name', name);
    input.setAttribute('value', data[name]);
    form.appendChild(input);
  }



}

function close_win() {
  document.body.removeChild(document.getElementById("w_wrap"));
}

// -->
</script>
</head>
<body style="margin : 0px;">
<p style="margin : 0px; background-color : #252D39; padding : 10px 10px 10px 100px; border-style : none none solid none; border-width : 1px; border-color : #777777;"><a href="./"><img src="logo.png" alt="Wagner Society Orchestra Music Library"></a></p>

<div id="menu">

<ul>

<li><a href="./">Top</a></li>
<li><a href="javascript:void(0);" onclick="post_lnk({ 'mode': 'search', 'form': 'F.O.' }); return false;">管弦楽</a></li>
<li><a href="javascript:void(0);" onclick="post_lnk({ 'mode': 'search', 'form': 'Brass' }); return false;">金管</a></li>
<li><a href="javascript:void(0);" onclick="admin_win({ 'mode': 'admin' });">管理</a></li>
</ul>

</div>
<div style="margin : 100px 200px; auto 200px;">

<?php


// データベースファイルの指定
$fodb = 'database.tsv';
$brsdb = 'brass.tsv';

$mode = $_POST["mode"];

if ($mode == "result") { result(); }
if ($mode == "write") { tsv_write(); }
if ($mode == "view") { view(); }
if ($mode == "download") { download(); }
if ($mode == "modify") { modify(); }
if ($mode == "add") { add(); }
if ($mode == "search") { search(); }
if ($mode == "admin") { admin(); }
if ($mode == "") { top(); }

function top() {

?>
<p class="cont_title"><img src="sub.png">Wagner Society Orchestra Music Libraryへようこそ！
<p class="cont">ここでは慶應義塾 Wagner Society Orchestraに保管されている楽譜の検索を行うことが出来ます。<br>
レンタル等は目的としていないため、パスワード制にさせていただいております。

<?php

}

function search() {

print "<p class=\"cont_title\"><img src=\"sub.png\">\n";

if ($_POST["form"] == "F.O.") {

?>
管弦楽</p>
<div class="cont">
<p>作曲者・曲名を入力してお探しの楽譜を検索してください。
<?php

} else if ($_POST["form"] == "Brass") {

?>
金管</p>
<div class="cont">
<p>作曲者・曲名又は編成よりお探しの楽譜を検索してください。
<?php

}

?>


<form method="post" action="./">
<input type="hidden" name="mode" value="result">
<?php
print "<input type=\"hidden\" name=\"form\" value=\"" . $_POST["form"] . "\">\n";

if ($_POST["form"] == "Brass") {

?>
<input type="hidden" name="eb_srch" value="c_t">
<ul class="tab_navi">
<li id="tab1" onclick="tab_cng(1);" onMouseOver="hover(this, 'inherit', 'pointer');" onMouseOut="hover(this, 'inherit', 'default');">作曲者/曲名</li>
<li id="tab2" onclick="tab_cng(2);" onMouseOver="hover(this, 'inherit', 'pointer');" onMouseOut="hover(this, 'inherit', 'default');">編成</li>
</ul>
<div id="tab_cont1" class="tab_cont">
<?php

}

?>
<div class="srch_form">
<table>
<tr>
<td>作曲者</td>
<td><input type="text" name="comp"></td>
</tr>
<tr>
<td>曲名</td>
<td><input type="text" name="title"></td>
</tr>
</table>
</div>

<?php

if ($_POST["form"] == "Brass") {

?>
</div>


<div id="tab_cont2" class="tab_cont">
<select name="eb_inst">

<option value="EB">金管</option>
<option value="HR">ホルン</option>
<option value="TP">トランペット</option>
<option value="TB">トロンボーン</option>
<option value="MX">混合</option>

</select>
<select name="eb_prts">

<option value="2">2重奏</option>
<option value="3">3重奏</option>
<option value="4">4重奏</option>
<option value="5" selected>5重奏</option>
<option value="6">6重奏</option>
<option value="7">7重奏</option>
<option value="8">8重奏</option>
<option value="9">9重奏</option>
<option value="10">10重奏</option>
<option value="12">12重奏</option>
<option value="12">13重奏</option>
<option value="16">16重奏</option>
<option value="S">合奏</option>
<option value="">全て</option>

</select>


</div>
<?php

}

?>

<p style="padding-left : 4em;"><input type="image" src="search.png" alt="検索"></p>

</form>
</div>

<script type="text/javascript">
<!--

brdr_cl = "#cccccc";
bg_cl = "#fdfdfd";

document.getElementById("tab1").style.borderColor = brdr_cl + " " + brdr_cl + " " + bg_cl + " " + brdr_cl;
document.getElementById("tab2").style.borderStyle = "solid solid solid none";
document.getElementById("tab_cont2").style.display = "none";
document.getElementsByName("eb_srch")[0].value = "c_t";

tn = 2; // タブの個数

function tab_cng(no) {
  if (no == 1) {
    document.getElementById("tab2").style.borderColor = brdr_cl;
    document.getElementById("tab1").style.borderColor = brdr_cl + " " + brdr_cl + " " + bg_cl + " " + brdr_cl;

    document.getElementById("tab_cont2").style.display = "none";
    document.getElementById("tab_cont1").style.display = "block";

    document.getElementsByName("eb_srch")[0].value = "c_t";
  } else if (no == 2) {
    document.getElementById("tab1").style.borderColor = brdr_cl;
    document.getElementById("tab2").style.borderColor = brdr_cl + " " + brdr_cl + " " + bg_cl + " " + brdr_cl;

    document.getElementById("tab_cont1").style.display = "none";
    document.getElementById("tab_cont2").style.display = "block";

    document.getElementsByName("eb_srch")[0].value = "frm";
  }
}

// -->
</script>
<!--
<p><input type="button" value="xls生成" onclick="post_lnk({ 'mode': 'download' })"></span>
<p><input type="button" value="データ追加" onclick="post_lnk({ 'mode': 'add' })"></span>
-->

<?php

}

//検索結果の表示
function result() {

global $fodb, $brsdb;

$p_comp = $_POST["comp"];
$p_title = $_POST["title"];


$brs = 0;
$fo = 0;

//　ライブラリ分け

if (($_POST["form"] == "F.O.") || ($_POST["form"] == "All")) { $fo = 1; }
if (($_POST["form"] == "Brass") || ($_POST["form"] == "All")) { $brs = 1; }


if ($fo) { // 検索・抽出・表示(管弦楽)


if (($p_comp != "") || ($p_title != "")) {




$d = split("\t", $l);

$f = file($fodb);

// $rslt のカウント
$rc = 0;

foreach ($f as $l) {

$f1 = 0;
  $d = split("\t", $l);

  if ($p_comp != "") {
    if ((eregi($p_comp, $d[1])) || (eregi($p_comp, $d[2]))) {
      $f1 += 2;
    }
  } else {
     $f1++;
  }

  if ($p_title != "") {
    if ((eregi($p_title, $d[3])) || (eregi($p_title, $d[4]))) {
      $f1 += 2;
    }
  } else {
    $f1++;
  }

  if ($f1 >= 3) {
    $rslt[$rc] = $l;
    $rc++;
  }

}

if ($rc != 0) {

print "<p style=\"font-size : 0.8em;\">検索結果：" . count($rslt) . "件";
print "<div class=\"rslt\">";
print "<table>\n";

print "  <tr>\n    <td style=\"padding-left : 40px; border-color : #252D39; width : 200px;\">作曲者</td>\n    <td style=\"border-color : #252D39; width : 400px;\">曲名</td>\n    <td style=\"border-color : #252D39; width : 120px;\">出版社</td>\n    <td style=\"border-color : #252D39; width : 80px;\">演奏形態</td>\n  </tr>\n";

foreach ($rslt as $l) {


  $d = split("\t", $l);

  print "  <tr onclick=\"post_lnk({ 'mode': 'view', 'form': 'F.O.', 'num': '" . $d[0] . "' });\" onMouseOver=\"hover(this, '#3333cc', 'pointer');\" onMouseOut=\"hover(this, '#000000', 'default');\">\n";
  print "    <td style=\"padding-left : 40px;\"><div style=\"width : 190px;\">". $d[1] . "<span class=\"rslt_eng\">" . $d[2] . "</span></span></div></td>\n";
  print "    <td><div style=\"width : 390px;\">". $d[3] . "<span class=\"rslt_eng\">" . $d[4] . "</span></span></div></td>\n";
  print "    <td><div style=\"width : 115px;\">" . $d[5] . "</div></td>\n";
  print "    <td><div style=\"width : 75px;\">" . $d[6] . "</div></td>\n";
  print "  </tr>\n";
}

} else {
  print "お探しの楽譜は見つかりませんでした。";
}

} else { // 未入力の場合
  print "作曲者又は曲名を入力してください";
}


} else if ($brs) { // 検索・抽出・表示(金管)

if ( ($_POST["eb_srch"] == "frm") || (($p_comp != "") || ($p_title != "")) ) {



$f = file("brass.tsv");

// $rslt のカウント
$rc = 0;


if ($_POST["eb_srch"] == "c_t") { // 作曲者/編曲者

foreach ($f as $l) {
  $d = split("\t", $l);


  $f1 = 0;
  if ($p_comp != "") {
    if ((eregi($p_comp, $d[5])) || (eregi($p_comp, $d[6]))) {
      $f1 += 2;
    }
  } else {
     $f1++;
  }

  if ($p_title != "") {
    if ((eregi($p_title, $d[3])) || (eregi($p_title, $d[4]))) {
      $f1 += 2;
    }
  } else {
    $f1++;
  }

  if ($f1 >= 3) {
    $rslt[$rc] = $l;
    $rc++;
  }
}




} else if ($_POST["eb_srch"] == "frm") { // 編成

$frm = $_POST["eb_inst"] . $_POST["eb_prts"];

foreach ($f as $l) {
  $d = split("\t", $l);

  if (eregi($frm, $d[1])) {
    $rslt[$rc] = $l;
    $rc++;
  }
}

}





if ($rc != 0) {

print "<p style=\"font-size : 0.8em;\">検索結果：" . count($rslt) . "件";
print "<div class=\"rslt\">";
print "<table>\n";


print "  <tr>\n    <td style=\"padding-left : 40px; border-color : #252D39; width : 160px;\">作曲者</td>\n    <td style=\"border-color : #252D39; width : 320px;\">曲名</td>\n    <td style=\"border-color : #252D39; width : 160px;\">編曲者</td>\n    <td style=\"border-color : #252D39; width : 80px;\">演奏形態</td>\n  <td style=\"border-color : #252D39; width : 80px;\">貸出中</td>\n  </tr>\n";

foreach ($rslt as $l) {


  $d = split("\t", $l);

  print "  <tr onclick=\"post_lnk({ 'mode': 'view', 'form': 'Brass', 'num': '" . $d[0] . "' });\" onMouseOver=\"hover(this, '#3333cc', 'pointer');\" onMouseOut=\"hover(this, '#000000', 'default');\">\n";
  print "    <td style=\"padding-left : 40px;\"><div style=\"width : 150px;\">". $d[5] . "<span class=\"rslt_eng\">" . $d[6] . "</span></span></div></td>\n";
  print "    <td><div style=\"width : 310px;\">". $d[3] . "<span class=\"rslt_eng\">" . $d[4] . "</span></span></div></td>\n";
  print "    <td><div style=\"width : 150px;\">" . $d[7] . "<span class=\"rslt_eng\">" . $d[8] . "</span></div></td>\n";
  print "    <td><div style=\"width : 75px;\">" . $d[2] . "</div></td>\n";
  print "    <td><div style=\"width : 75px;\">" . $d[15] . "</div></td>\n";
  print "  </tr>\n";
}

print "</table>\n</div>";

} else {
  print "お探しの楽譜は見つかりませんでした。";
}

} else { // 未入力の場合
  print "作曲者又は曲名を入力してください";
}

}




}



//データの書き込み
function tsv_write() {

  global $fodb, $brsdb;

  $md = $_POST["wmd"];

  if ($md == "n") { // 新規追加

//    $fp = fopen($fodb, "r");
//    $fdata = fread($fp, filesize($fodb));


    $f = file($fodb);

    $fdata = "";



//欠落番号へ挿入

    $num = 1;
    $nf = 0;
    foreach ($f as $l) {
      $d = split("\t", $l);

      if ($nf == 0) {

        if ($d[0] == $num) {
          $fdata .= $l;
          $num++;
        } else {
          $fdata .= $num . "\t" . $_POST["comp"] . "\t" . $_POST["comp_eng"] . "\t" . $_POST["title"] . "\t" . $_POST["title_eng"] . "\t" . $_POST["pub"] . "\t\t" . $_POST["complete"] . "\t" . $_POST["lack"] . "\t" . $_POST["rent"] . "\t" . $_POST["remark"] . "\n";
          $fdata .= $l;
          $nf = 1;
        }

      } else {
        $fdata .= $l;
      }
    }

    if ($nf == 0) {
      $fdata .= $num . "\t" . $_POST["comp"] . "\t" . $_POST["comp_eng"] . "\t" . $_POST["title"] . "\t" . $_POST["title_eng"] . "\t" . $_POST["pub"] . "\t\t" . $_POST["complete"] . "\t" . $_POST["lack"] . "\t" . $_POST["rent"] . "\t" . $_POST["remark"] . "\n";
    }


//通し番号振り直し
//    $num = 1;

//    foreach ($f as $l) {
//      $d = split("\t", $l);
//      $fdata .= $num . "\t" . $d[1] . "\t" . $d[2] . "\t" . $d[3] . "\t" . $d[4] . "\t" . $d[5] . "\t" . $d[6] . "\t" . $d[7] . "\t" . $d[8] . "\t" . $d[9] . "\t" . $d[10] . "\n";

//      $num++;
//    }

//    $fdata .= $num . "\t" . $_POST["comp"] . "\t" . $_POST["comp_eng"] . "\t" . $_POST["title"] . "\t" . $_POST["title_eng"] . "\t" . $_POST["pub"] . "\t\t" . $_POST["complete"] . "\t" . $_POST["lack"] . "\t" . $_POST["rent"] . "\t" . $_POST["remark"] . "\n";



//最大番号+1
//    $max = 0;
//    foreach ($f as $l) {
//      $fdata .= $l;

//      $d = split("\t", $l);
//      if ($max <= $d[0]) {
//        $max = $d[0];
//      }
//    }
//    $num = $max + 1;

//    $fdata .= $num . "\t" . $_POST["comp"] . "\t" . $_POST["comp_eng"] . "\t" . $_POST["title"] . "\t" . $_POST["title_eng"] . "\t" . $_POST["pub"] . "\t\t" . $_POST["complete"] . "\t" . $_POST["lack"] . "\t" . $_POST["rent"] . "\t" . $_POST["remark"] . "\n";



//    fclose($fp);

  } else if (($md == "m") || ($md == "d")) { // 変更・修正　削除

    $fdata = "";

    $f = file($fodb);

    $p_num = $_POST["num"];

    $i = 0;

    foreach ($f as $l) { // 変更・修正

      $d = split("\t", $l);

      if ($d[0] == $p_num) {

      if ($md == "m") {

        $d[1] = $_POST["comp"];
        $d[2] = $_POST["comp_eng"];
        $d[3] = $_POST["title"];
        $d[4] = $_POST["title_eng"];
        $d[5] = $_POST["pub"];
        $d[7] = $_POST["complete"];
        $d[8] = $_POST["lack"];
        $d[9] = $_POST["rent"];
        $d[10] = $_POST["remark"];

        $l = join("\t", $d);
        $l .= "\n";

      } else if ($md == "d") { // 削除
        $l = "";
      }

      }
      $fdata = $fdata . $l;
    }
  }


  $fdata = stripslashes($fdata);

  $fp = fopen($fodb, "w");

  fwrite($fp, $fdata);
  fclose($fp);

  print "test";
}


//楽譜の詳細の表示
function view() {

  global $fodb, $brsdb;

  if ($_POST["form"] == "F.O.") { // 管弦楽

  $f = file($fodb);

  foreach ($f as $l) {
    $d = split("\t", $l);

    if ($d[0] == $_POST["num"]) {

    print "<p class=\"view_comp\">" . $d[1] . "<span class=\"view_eng\">" . $d[2] . "</span></p>\n";
    print "<p class=\"view_title\">" . $d[3] . "<span class=\"view_eng\">" . $d[4] . "</span><img src=\"mod.png\" class=\"view_mod_img\" alt=\"編集\" onmouseover=\"hover(this, '#3333cc', 'pointer')\" onmouseout=\"hover(this, '#000000', 'default')\" onclick=\"admin_win({ 'mode': 'modify', 'form': 'F.O.', 'num': '" . $d[0] . "' });\"></p>\n";

    print "<div class=\"view\">\n";
    print "<table>\n";

    print "  <tr>\n    <td>出版社</td>\n    <td style=\"padding-left : 1em; width : 12em;\">" . $d[5] . "</td>\n  </tr>\n";
    print "  <tr>\n    <td>演奏形態</td>\n    <td style=\"padding-left : 1em; width : 12em;\">" . $d[6] . "</td>\n  </tr>\n";
    print "  <tr>\n    <td>Complete</td>\n    <td style=\"padding-left : 1em; width : 12em;\">" . $d[7] . "</td>\n  </tr>\n";
    print "  <tr>\n    <td>パートの欠損</td>\n    <td style=\"padding-left : 1em; width : 12em;\">" . $d[8] . "</td>\n  </tr>\n";
    print "  <tr>\n    <td>貸出</td>\n    <td style=\"padding-left : 1em; width : 12em;\">" . $d[9] . "</td>\n  </tr>\n";
    print "  <tr>\n    <td>備考</td>\n    <td style=\"padding-left : 1em; width : 12em;\">" . $d[10] . "</td>\n  </tr>\n";

    print "</table>\n</div>";


    }

  }

  } else if ($_POST["form"] == "Brass") { // 金管


  $f = file("brass.tsv");

  foreach ($f as $l) {
    $d = split("\t", $l);

    if ($d[0] == $_POST["num"]) {

    print "<p class=\"view_comp\">" . $d[5] . "<span class=\"view_eng\">" . $d[6] . "</span>\n";
    if (($d[7] != "") || ($d[8] != "")) { print "&nbsp;/&nbsp;" . $d[7] . "<span class=\"view_eng\">" . $d[8] . "</span>"; } print "</p>\n";
    print "<p class=\"view_title\">" . $d[3] . "<span class=\"view_eng\">" . $d[6] . "</span><img src=\"mod.png\" class=\"view_mod_img\" alt=\"編集\" onmouseover=\"hover(this, '#3333cc', 'pointer')\" onmouseout=\"hover(this, '#000000', 'default')\" onclick=\"admin_win({ 'mode': 'modify', 'form': 'Brass', 'num': '" . $d[0] . "' });\"></p>\n";
    print "<div class=\"view\">\n";
    print "<table>\n";

    print "  <tr>\n    <td>楽器編成</td>\n    <td style=\"padding-left : 1em; width : 12em;\">" . $d[9] . "</td>\n  </tr>\n";
    print "  <tr>\n    <td>スコア</td>\n    <td style=\"padding-left : 1em; width : 12em;\">" . $d[10] . "</td>\n  </tr>\n";
    print "  <tr>\n    <td>パート譜</td>\n    <td style=\"padding-left : 1em; width : 12em;\">" . $d[11] . "</td>\n  </tr>\n";
    print "  <tr>\n    <td>原譜</td>\n    <td style=\"padding-left : 1em; width : 12em;\">" . $d[12] . "</td>\n  </tr>\n";
    print "  <tr>\n    <td>演奏時間</td>\n    <td style=\"padding-left : 1em; width : 12em;\">" . $d[13] . "</td>\n  </tr>\n";
    print "  <tr>\n    <td>備考</td>\n    <td style=\"padding-left : 1em; width : 12em;\">" . $d[14] . "</td>\n  </tr>\n";
    print "  <tr>\n    <td>貸出中</td>\n    <td style=\"padding-left : 1em; width : 12em;\">" . $d[15] . "</td>\n  </tr>\n";

    print "</table>\n</div>";

    }

  }

  }

}

function download() {

global $fodb, $brsdb;

set_include_path(get_include_path() . PATH_SEPARATOR . './Classes/');

include 'PHPExcel.php';
include 'PHPExcel/IOFactory.php';

//PHPExcelオブジェクトの生成
$xl = new PHPExcel();

//シートの設定

$xl->setActiveSheetIndex(0);
$sheet = $xl->getActiveSheet();
$sheet->setTitle(mb_convert_encoding("楽譜一覧", "UTF-8", "EUC-JP") );

$sheet->mergeCells('A1:B1');
$sheet->setCellValue('A1', mb_convert_encoding("整理番号", "UTF-8", "EUC-JP") );
$sheet->setCellValue('C1', mb_convert_encoding("作曲者名", "UTF-8", "EUC-JP") );
$sheet->setCellValue('D1', mb_convert_encoding("作曲者名アルファベット", "UTF-8", "EUC-JP") );
$sheet->setCellValue('E1', mb_convert_encoding("曲名", "UTF-8", "EUC-JP") );
$sheet->setCellValue('F1', mb_convert_encoding("曲名アルファベット", "UTF-8", "EUC-JP") );
$sheet->setCellValue('G1', mb_convert_encoding("出版社", "UTF-8", "EUC-JP") );
$sheet->setCellValue('H1', mb_convert_encoding("演奏形態", "UTF-8", "EUC-JP") );
$sheet->setCellValue('I1', mb_convert_encoding("Complete", "UTF-8", "EUC-JP") );
$sheet->setCellValue('J1', mb_convert_encoding("パート", "UTF-8", "EUC-JP") );
$sheet->setCellValue('K1', mb_convert_encoding("貸出", "UTF-8", "EUC-JP") );
$sheet->setCellValue('L1', mb_convert_encoding("備考", "UTF-8", "EUC-JP") );


$sheet->setCellValue('M1', 'testテスト');


  $f = file($fodb);

  $i = 2;


//内容の書き込み
foreach ($f as $l) {
  $l = mb_convert_encoding($l, "UTF-8", "EUC-JP");

  $d = split("\t", $l);

  $sheet->setCellValue('A' . $i , $d[0]);
  $sheet->setCellValue('B' . $i , $d[1]);
  $sheet->setCellValue('C' . $i , $d[2]);
  $sheet->setCellValue('D' . $i , $d[3]);
  $sheet->setCellValue('E' . $i , $d[4]);
  $sheet->setCellValue('F' . $i , $d[5]);
  $sheet->setCellValue('G' . $i , $d[6]);
  $sheet->setCellValue('H' . $i , $d[7]);
  $sheet->setCellValue('I' . $i , $d[8]);
  $sheet->setCellValue('J' . $i , $d[9]);
  $sheet->setCellValue('K' . $i , $d[10]);
  $sheet->setCellValue('L' . $i , $d[11]);

  $i++;
}

//スタイルの設定
$sheet->getDefaultStyle()->getFont()->setName('ＭＳ Ｐゴシック');



$writer = PHPExcel_IOFactory::createWriter($xl, 'Excel5');
$writer->save(date("Ymd_His", time()) . ".xls");

?>
<script type="text/javascript">
<!--
<?php

print "location.href = '".date("Ymd_His", time()) . ".xls"."'";


?>
// -->
</script>
<p>ダウンロード完了</p>
<?php

}



function modify() {

  global $fodb, $brsdb;

  $num = $_POST["num"];

  $hash = hash(sha512, $_POST["pwd"]);

  if (($_POST["form"] == "F.O.") && ($hash == "ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff")) {
    $adf = 1;
  } else if (($_POST["form"] == "brass") && ($hash == "")) {
    $adf = 1;
  }

if ($adf) { // 認証

  $f = file($fodb);

  foreach ($f as $l) {

// HTML向けの特殊文字変換
    $l = str_replace('"', '&quot;', $l);
    $l = str_replace('<', '&lt;', $l);
    $l = str_replace('>', '&gt;', $l);


    $d = split("\t", $l);

    if ($d[0] == $num) {

?>
<form action"./" method="post" id="mod_form">
<input type="hidden" name="mode" value="write">
<input type="hidden" name="wmd" value="m">
<?php

  print "<input type=\"hidden\" name=\"num\" value=\"" . $num . "\">";

?>
<div class="srch_form">
<table>
<?php
  print "<tr>\n<td>作曲者</td>\n<td><input type=\"text\" name=\"comp\" value=\"" . $d[1] . "\"></td>\n</tr>\n";
  print "<tr>\n<td>作曲者(英語)</td>\n<td><input type=\"text\" name=\"comp_eng\" value=\"" . $d[2] . "\"></td>\n</tr>\n";
  print "<tr>\n<td>曲名</td>\n<td><input type=\"text\" name=\"title\" value=\"" . $d[3] . "\"></td>\n</tr>\n";
  print "<tr>\n<td>曲名(英語)</td>\n<td><input type=\"text\" name=\"title_eng\" value=\"" . $d[4] . "\"></td>\n</tr>\n";
  print "<tr>\n<td>出版社</td>\n<td><input type=\"text\" name=\"pub\" value=\"" . $d[5] . "\"></td>\n</tr>\n";
  print "<tr>\n<td>Complete</td>\n<td><input type=\"text\" name=\"complete\" value=\"" . $d[7] . "\"></td>\n</tr>\n";
  print "<tr>\n<td>パートの欠損</td>\n<td><input type=\"text\" name=\"lack\" value=\"" . $d[8] . "\"></td>\n</tr>\n";
  print "<tr>\n<td>貸出</td>\n<td><input type=\"text\" name=\"rent\" value=\"" . $d[9] . "\"></td>\n</tr>\n";
  print "<tr>\n<td>備考</td>\n<td><textarea name=\"remark\">" . $d[10] . "</textarea></td>\n</tr>\n";



  print "</select>\n</td>\n";

?>
</table>
<input type="submit" value="編集">
<input type="button" value="元に戻す" onclick="form_recov('mod_form');">
<?php

  print "<input type=\"button\" value=\"削除\" onclick=\"post_lnk({ 'mode': 'write', 'wmd': 'd', 'alp': '" . $alp . "', 'num': '" . $num . "' });\">";

?>
</div>
</form>
<script type="text/javascript">
<!--


var f_m = new Array();

window.onload = function () {
  form_mem("mod_form");
}

// -->
</script>

<?php
    }

  }


  } else { // 認証失敗
    print "パスワードが違います。";
  }
}


function add() {

?>
<form action"./" method="post">
<input type="hidden" name="mode" value="write">
<input type="hidden" name="wmd" value="n">
<div class="srch_form">
<table>
<?php

  print "<tr>\n<td>作曲者</td>\n<td><input type=\"text\" name=\"comp\"></td>\n</tr>\n";
  print "<tr>\n<td>作曲者(英語)</td>\n<td><input type=\"text\" name=\"comp_eng\"></td>\n</tr>\n";
  print "<tr>\n<td>曲名</td>\n<td><input type=\"text\" name=\"title\"></td>\n</tr>\n";
  print "<tr>\n<td>曲名</td>\n<td><input type=\"text\" name=\"title_eng\"></td>\n</tr>\n";
  print "<tr>\n<td>出版社</td>\n<td><input type=\"text\" name=\"pub\"></td>\n</tr>\n";
  print "<tr>\n<td>編成</td>\n<td>\n<select name=\"form\">\n";

  print "<option value=\"F.O.\">すべて</option>\n";
  print "<option value=\"F.O.\">管弦楽</option>\n";
  print "<option value=\"Qualtet\">弦楽四重奏</option>\n";
  print "<option value=\"Brass5\">金管五重奏</option>\n";

  print "<tr>\n<td>Complete</td>\n<td><input type=\"text\" name=\"complete\"></td>\n</tr>\n";
  print "<tr>\n<td>パートの欠損</td>\n<td><input type=\"text\" name=\"lack\"></td>\n</tr>\n";
  print "<tr>\n<td>貸出</td>\n<td><input type=\"text\" name=\"rent\"></td>\n</tr>\n";
  print "<tr>\n<td>備考</td>\n<td><textarea name=\"remark\"></textarea></td>\n</tr>\n";
  print "</table>\n";

  print "<input type=\"submit\" value=\"追加\">\n";
  print "</div>\n</form>";

}


function admin() {
  $hash = hash(sha512, $_POST["pwd"]);

  if ($hash == "ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff") {
?>

<p class="cont_title"><img src="sub.png">管理</p>

<div class="cont">
<ul class="tab_navi">
<li id="tab1" onclick="tab_cng(1);" onMouseOver="hover(this, 'inherit', 'pointer');" onMouseOut="hover(this, 'inherit', 'default');">データ追加</li>
<li id="tab2" onclick="tab_cng(2);" onMouseOver="hover(this, 'inherit', 'pointer');" onMouseOut="hover(this, 'inherit', 'default');">データのエクスポート(xls生成)</li>
<li id="tab3" onclick="tab_cng(3);" onMouseOver="hover(this, 'inherit', 'pointer');" onMouseOut="hover(this, 'inherit', 'default');">パスワード生成</li>
</ul>
<div id="tab_cont1" class="tab_cont">
<form action"./" method="post">
<input type="hidden" name="mode" value="write">
<input type="hidden" name="wmd" value="n">
<div class="srch_form">
<table>
<?php

  print "<tr>\n<td>作曲者</td>\n<td><input type=\"text\" name=\"comp\"></td>\n</tr>\n";
  print "<tr>\n<td>作曲者(英語)</td>\n<td><input type=\"text\" name=\"comp_eng\"></td>\n</tr>\n";
  print "<tr>\n<td>曲名</td>\n<td><input type=\"text\" name=\"title\"></td>\n</tr>\n";
  print "<tr>\n<td>曲名</td>\n<td><input type=\"text\" name=\"title_eng\"></td>\n</tr>\n";
  print "<tr>\n<td>出版社</td>\n<td><input type=\"text\" name=\"pub\"></td>\n</tr>\n";
  print "<tr>\n<td>編成</td>\n<td>\n<select name=\"form\">\n";

  print "<option value=\"F.O.\">すべて</option>\n";
  print "<option value=\"F.O.\">管弦楽</option>\n";
  print "<option value=\"Qualtet\">弦楽四重奏</option>\n";
  print "<option value=\"Brass5\">金管五重奏</option>\n";

  print "<tr>\n<td>Complete</td>\n<td><input type=\"text\" name=\"complete\"></td>\n</tr>\n";
  print "<tr>\n<td>パートの欠損</td>\n<td><input type=\"text\" name=\"lack\"></td>\n</tr>\n";
  print "<tr>\n<td>貸出</td>\n<td><input type=\"text\" name=\"rent\"></td>\n</tr>\n";
  print "<tr>\n<td>備考</td>\n<td><textarea name=\"remark\"></textarea></td>\n</tr>\n";
  print "</table>\n";

  print "<input type=\"submit\" value=\"追加\">\n";
  print "</div>\n</form>";
?>
</div>
<div id="tab_cont2" class="tab_cont">

<form action"./" method="post">
<input type="hidden" name="mode" value="download">
<input type="submit" value="データのエクスポート(xls生成)">
</form>
</div>
<div id="tab_cont3" class="tab_cont">
</div>
</div>

<script type="text/javascript">
<!--

brdr_cl = "#cccccc";
bg_cl = "#fdfdfd";

document.getElementById("tab1").style.borderColor = brdr_cl + " " + brdr_cl + " " + bg_cl + " " + brdr_cl;
document.getElementById("tab2").style.borderStyle = "solid solid solid none";
document.getElementById("tab3").style.borderStyle = "solid solid solid none";
document.getElementById("tab_cont2").style.display = "none";
document.getElementById("tab_cont3").style.display = "none";
//document.getElementsByName("admin_mode")[0].value = "add";

//タブの個数
tn = 3;

function tab_cng(no) {
  for (i = 1; i <= tn; i++) {
    if (i == no) {
      document.getElementById("tab" + i).style.borderColor = brdr_cl + " " + brdr_cl + " " + bg_cl + " " + brdr_cl;
      document.getElementById("tab_cont" + i).style.display = "block";
    } else {
      document.getElementById("tab" + i).style.borderColor = brdr_cl;
      document.getElementById("tab_cont" + i).style.display = "none";
    }
  }

  if (no == 1) {
//    document.getElementsByName("admin_mode")[0].value = "add";
  } else if (no == 2) {
//    document.getElementsByName("admin_mode")[0].value = "xls";
  } else if (no == 3) {
//    document.getElementsByName("admin_mode")[0].value = "pwd_mod";
  }
}



// -->
</script>

<?php

  } else {
    print "パスワードが違います";
  }

}

?>

</div>
</body>
</html>