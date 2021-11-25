<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Typecontent="text/html; charset=utf-8" />
<title>Sistem Fail</title>
<script type="text/javascript" src="calendarDateInput.js">

/***********************************************
* Jason's Date Input Calendar- By Jason Moon http://calendar.moonscript.com/dateinput.cfm
* Script featured on and available at http://www.dynamicdrive.com
* Keep this notice intact for use.
***********************************************/

</script>
<script language="javascript" src="../proses/check.js"></script>
<style type="text/css">
<!--
.text1 {	font-family: Tahoma;
	font-size: 18px;
	color: #FFF;
	font-weight: bold;
}
.text2 {	font-family: Tahoma;
	font-size: 12px;
	font-weight: bold;
}
.text21 {font-family: Tahoma;
	font-size: 12px;
	font-weight: bold;
}
.text21 {font-weight: bold;
}
.text3 {	font-family: Tahoma;
}
.text3 {	font-family: Tahoma;
	font-size: 9px;
	color: #FFFFFF;
}
.text31 {font-family: Tahoma;
}
.text31 {font-family: Tahoma;
	font-size: 12px;
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
<link href="styles/globalstyle.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #3C4144;
	background-image: url(../images/diagonal_pin_stripes_background_gray_on_white.gif);
}
.style31 {font-size: 10px}
.hit {	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: bold;
	color: #903;
	text-decoration: blink;
	display: inline;
	background-color: #CCF;
}
.style33 {
	font-size: 10px;
	color: #0000FF;
	font-style: italic;
	font-weight: bold;
}
</style>
<link href="../styles/globalstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<br />
<br />



<table width="1028" border="0" align="center" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td><img src="../images/banner2.jpg" alt="" width="1028" height="200" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFCC99"><table width="100%" border="0" cellspacing="0" cellpadding="5">
      <tr valign="top">

        <td align="left"><a href="default.php"><img src="../images/home2.png" alt="" width="20" height="20" /> LAMAN UTAMA</a></td>
        <td align="right"><a href="../proses/logout.php"> <img src="../images/logout.png" alt="" width="20" height="20" /> LOGOUT </a>|<span class="fontbold"> <img src="../images/user.png" alt="" width="20" height="20" /> <br />
          </span></td>
      </tr>
    </table>
      <br />
      <table width="90%" border="0" align="center" cellpadding="5">
      <tr bgcolor="#FFFFFF" class="fontxbold">
        <td width="100%" bgcolor="#FFCC99"><br />
          <br />          <img src="../images/surat_keluar.png" width="376" height="103" alt=""/></td>
      </tr>
      <tr bgcolor="#FFFFFF" class="fontxbold">
        <td bgcolor="#FFCC99" class="fontbold">&nbsp;</td>
      </tr>
      <tr bgcolor="#FFFFFF" class="fontxbold">
        <td bgcolor="#FFCC99" class="fontbold">



@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

            *Nota: Sila pastikan surat atau emel telah diimbas (scan) dalam format pdf sebelum muatnaik ke dalam sistem.</td>
      </tr>
      <tr bgcolor="#FFFFFF" class="fontxbold">
        <td bgcolor="#FFCC99">
            <form action="" method="post" enctype="multipart/form-data" name="masuk" id="masuk" onSubmit="return sah();">

                @csrf


          <table width="100%" border="0" align="left" cellpadding="5" cellspacing="0">
            <tr align="left">
              <td valign="top" class="fontbold">Jabatan Pemilik</td>
              <td valign="top" class="fontbold">:</td>
              <td valign="top" class="fontbold"></td>
            </tr>
            <tr align="left">
              <td width="21%" valign="top" class="fontbold">No. Rujukan Surat/<br />
                Emel Penghantar</td>
              <td width="2%" valign="top" class="fontbold">:</td>
              <td width="77%" valign="top"><label for="norujukan"></label>
                <input name="norujukan" type="text" id="norujukan" size="70" /></td>
            </tr>
            <tr align="left">
              <td valign="top" class="fontbold">Tajuk Surat/Emel</td>
              <td valign="top" class="fontbold">:</td>
              <td valign="top"><textarea name="tajuk" id="tajuk" cols="65" rows="3"></textarea></td>
            </tr>
            <tr align="left">
              <td valign="top" class="fontbold">Klasifikasi Surat</td>
              <td valign="top" class="fontbold">:</td>
              <td valign="top"><select name="kod" id="kod">
                <option value="-" selected="selected">- Sila Pilih -</option>
                <option value="Emel">Emel</option>
                <option value="100">100-Pentadbiran</option>
                <option value="200">200-Tanah, Bangunan &amp; Infrastruktur</option>
                <option value="300">300-Aset &amp; Stor</option>
                <option value="400">400-Kewangan</option>
                <option value="500">500-Sumber Manusia</option>
                <option value="600">600-Fungsian</option>
              </select></td>
            </tr>
            <tr align="left">
              <td valign="top" class="fontbold">Tarikh Surat/Emel</td>
              <td valign="top" class="fontbold">:</td>
              <td valign="top"><script>DateInput('trksurat', true, 'YYYY-MM-DD')</script>
				<input type="hidden" name="alert(this.form.trksurat.value)" id="hiddenField">
				</td>
            </tr>
            <tr align="left">
              <td valign="top" class="fontbold">Nama Fail</td>
              <td valign="top" class="fontbold">:</td>
              <td valign="top"><input name="filename" type="text" id="filename" size="70" /></td>
            </tr>
            <tr align="left">
              <td valign="top" class="fontbold">Salinan Surat/Emel</td>
              <td valign="top" class="fontbold">:</td>
              <td valign="top"><input type="file" name="lampiran" id="lampiran" /><br />
                <span class="fontbold">**Hanya fail format pdf sahaja dibenarkan.</span></td>
            </tr>
            <tr align="left">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr align="left">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><input type="submit" name="button" id="button" value="Simpan" /></td>
            </tr>
          </table>
        </form></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td bgcolor="#FFCC99">&nbsp;</td>
      </tr>
    </table>
      <p>
        <?php// } ?>
      </p>
      <p><br />
      </p>
      <hr />
    <div align="center"><span class="style31"><span style="font-size: 9px;"><span style="font-size: 12px;"><br />
      </span></span></span><span style="font-size: 9px;"><span class="fontbold" style="font-size: 12px;">Copyright © PKA IT Mei 2017</span></span><span class="style31"><span style="font-size: 9px;"><span style="font-size: 12px;"><br />
      <br />
      <br />
    </span></span></span></div></td>
  </tr>
</table>

<br />
<br />
</body>
</html>
