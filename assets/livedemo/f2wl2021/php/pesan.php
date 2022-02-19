<?php
$email = $_POST["email"];    
$name = $_POST["name"];
$message = $_POST["message"];
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!--[if !mso]><!-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--<![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="x-apple-disable-message-reformatting">
  <title></title>
  <style type="text/css">
    @media screen {
      @font-face {
        font-family: 'Fira Sans';
        font-style: normal;
        font-weight: 300;
        src: local(''),
        url('https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnPKruRA.woff2') format('woff2'),
        url('https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnPKruQg.woff') format('woff');
      }
      @font-face {
        font-family: 'Fira Sans';
        font-style: normal;
        font-weight: 400;
        src: local(''),
        url('https://fonts.gstatic.com/s/firasans/v10/va9E4kDNxMZdWfMOD5VflQ.woff2') format('woff2'),
        url('https://fonts.gstatic.com/s/firasans/v10/va9E4kDNxMZdWfMOD5Vfkw.woff') format('woff');
      }
      @font-face {
        font-family: 'Fira Sans';
        font-style: normal;
        font-weight: 500;
        src: local(''),
        url('https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnZKvuRA.woff2') format('woff2'),
        url('https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnZKvuQg.woff') format('woff');
      }
      @font-face {
        font-family: 'Fira Sans';
        font-style: normal;
        font-weight: 700;
        src: local(''),
        url('https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnLK3uRA.woff2') format('woff2'),
        url('https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnLK3uQg.woff') format('woff');
      }
      @font-face {
        font-family: 'Fira Sans';
        font-style: normal;
        font-weight: 800;
        src: local(''),
        url('https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnMK7uRA.woff2') format('woff2'),
        url('https://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnMK7uQg.woff') format('woff');
      }
    }
  </style>
  <style type="text/css">
    #outlook a {
      padding: 0;
    }

    .ReadMsgBody,
    .ExternalClass {
      width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass td,
    .ExternalClass div,
    .ExternalClass span,
    .ExternalClass font {
      line-height: 100%;
    }

    div[style*="margin: 14px 0"],
    div[style*="margin: 16px 0"] {
      margin: 0 !important;
    }

    table,
    td {
      mso-table-lspace: 0;
      mso-table-rspace: 0;
    }

    table,
    tr,
    td {
      border-collapse: collapse;
    }

    body,
    td,
    th,
    p,
    div,
    li,
    a,
    span {
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      mso-line-height-rule: exactly;
    }

    img {
      border: 0;
      outline: none;
      line-height: 100%;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
    }

    body {
      margin: 0;
      padding: 0;
      width: 100% !important;
      -webkit-font-smoothing: antialiased;
    }

    .pc-gmail-fix {
      display: none;
      display: none !important;
    }

    @media screen and (min-width: 621px) {
      .pc-email-container {
        width: 620px !important;
      }
    }
  </style>
  <style type="text/css">
    @media screen and (max-width:620px) {
      .pc-sm-p-20 {
        padding: 20px !important
      }
      .pc-sm-p-35-10-15 {
        padding: 35px 10px 15px !important
      }
      .pc-sm-mw-50pc {
        max-width: 50% !important
      }
      .pc-sm-p-35-30-40 {
        padding: 35px 30px 40px !important
      }
      .pc-sm-mw-100pc {
        max-width: 100% !important
      }
      .pc-sm-m-0-auto {
        float: none !important;
        margin: auto !important
      }
      .pc-sm-p-21-10-14 {
        padding: 21px 10px 14px !important
      }
      .pc-sm-h-20 {
        height: 20px !important
      }
    }
  </style>
  <style type="text/css">
    @media screen and (max-width:525px) {
      .pc-xs-p-10 {
        padding: 10px !important
      }
      .pc-xs-p-25-0-5 {
        padding: 25px 0 5px !important
      }
      .pc-xs-mw-100pc {
        max-width: 100% !important
      }
      .pc-xs-br-disabled br {
        display: none !important
      }
      .pc-xs-p-20-20-25 {
        padding: 20px 20px 25px !important
      }
      .pc-xs-p-5-0 {
        padding: 5px 0 !important
      }
    }
  </style>
  <!--[if mso]>
    <style type="text/css">
        .pc-fb-font {
            font-family: Helvetica, Arial, sans-serif !important;
        }
    </style>
    <![endif]-->
  <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
</head>
<body style="width: 100% !important; margin: 0; padding: 0; mso-line-height-rule: exactly; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background-color: #f4f4f4" class="">
  <div style="display: none !important; visibility: hidden; opacity: 0; overflow: hidden; mso-hide: all; height: 0; width: 0; max-height: 0; max-width: 0; font-size: 1px; line-height: 1px; color: #151515;"></div>
  <div style="display: none !important; visibility: hidden; opacity: 0; overflow: hidden; mso-hide: all; height: 0; width: 0; max-height: 0; max-width: 0;">
    ‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;
  </div>
  <table class="pc-email-body" width="100%" bgcolor="#f4f4f4" border="0" cellpadding="0" cellspacing="0" role="presentation" style="table-layout: fixed;">
    <tbody>
      <tr>
        <td class="pc-email-body-inner" align="center" valign="top">
          <!--[if gte mso 9]>
            <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                <v:fill type="tile" src="" color="#f4f4f4"/>
            </v:background>
            <![endif]-->
          <!--[if (gte mso 9)|(IE)]><table width="620" align="center" border="0" cellspacing="0" cellpadding="0" role="presentation"><tr><td width="620" align="center" valign="top"><![endif]-->
          <table class="pc-email-container" width="100%" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="margin: 0 auto; max-width: 620px;">
            <tbody>
              <tr>
                <td align="left" valign="top" style="padding: 0 10px;">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                    <tbody>
                      <tr>
                        <td height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- BEGIN MODULE: Menu 1 -->
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                    <tbody>
                      <tr>
                        <td class="" bgcolor="#521d1d" valign="top" style="padding: 0px; background-color: #521d1d; border-radius: 8px" pc-default-class="pc-sm-p-20 pc-xs-p-10" pc-default-padding="25px 30px">
                          <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" style="padding: 10px;">
                                  <a href="http://f2wl.com" style="text-decoration: none;"><img src="https://i.ibb.co/CK5jPDW/playing-soon-03-1.png" width="580" height="" alt="From 2 With Love 2021" style="height: auto; max-width: 100%; border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff; font-size: 14px;"></a>
                                </td>
                              </tr>
                              <tr>
                                <td align="center" valign="top">
                                  <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation">
                                    <tbody>
                                      <tr>
                                        <td valign="middle" style="padding: 10px;">
                                          <a href="https://www.youtube.com/channel/UC94ighocKI8KCei_pCqbX0g" style="text-decoration: none;"><img src="https://i.ibb.co/QFXbZpQ/You-Tube-Emblem1.png" width="20" height="20" alt="Youtube F2WL 2021" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff"></a>
                                        </td>
                                        <td valign="middle" style="padding: 10px;">
                                          <a href="https://www.instagram.com/f2wl2021_/" style="text-decoration: none;"><img src="https://i.ibb.co/C6YrcRJ/instagram1.png" width="18" height="18" alt="Instagram F2WL 2021" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff"></a>
                                        </td>
                                        <td valign="middle" style="padding: 10px;">
                                          <a href="http://f2wl.com" style="text-decoration: none;"><img src="https://i.ibb.co/NVZWNbV/kisspng-logo-web-design-augmented-reality-surface-icon-5b50a28a175192-76064791153201114609552.png" width="20" height="20" alt="Website F2WL 2021" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff"></a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- END MODULE: Menu 1 -->
                  <!-- BEGIN MODULE: Feature 1 -->
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
                    <tbody>
                      <tr>
                        <td height="8" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                    <tbody>
                      <tr>
                        <td class="pc-sm-p-35-10-15 pc-xs-p-25-0-5" style="padding: 40px 20px; background-color: #521d1d; border-radius: 8px" valign="top" bgcolor="#521d1d">
                          <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                            <tbody>
                              <tr>
                                <td class="pc-fb-font" style="font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 24px; font-weight: 700; line-height: 34px; letter-spacing: -0.4px; color: #151515; padding: 0 20px;" valign="top"></td>
                              </tr>
                              <tr>
                                <td height="10" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr>
                                <td class="pc-fb-font" style="font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 300; line-height: 28px; letter-spacing: -0.2px; color: #9B9B9B; padding: 0 20px;" valign="top">
                                  <div class="tg-wrap">
                                    <table class="tg" style="border-collapse: collapse; border-spacing: 0; margin: 0px auto;">
                                      <thead>
                                        <tr>
                                          <th style="background-color: #000000; color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; font-weight: normal; overflow: hidden; padding: 20px 20px; text-align: center; vertical-align: top; word-break: normal; border: 1px solid #333333;" colspan="2">Hai <?php echo $name?> , Terima kasih telah menghubungi kami</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td style="background-color: #ffffff; color: #000000; font-family: Arial, sans-serif; font-size: 14px; overflow: hidden; padding: 20px 20px; text-align: center; vertical-align: top; word-break: normal; border: 1px solid #333333;" colspan="2">DATA PENGIRIM PESAN</td>
                                        </tr>
                                        <tr>
                                          <td style="background-color: #ffffff; color: #333333; font-family: Arial, sans-serif; font-size: 14px; overflow: hidden; padding: 20px 20px; text-align: left; vertical-align: top; word-break: normal; border: 1px solid #000000;">Email </td>
                                          <td style="background-color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; overflow: hidden; padding: 20px 20px; text-align: left; vertical-align: top; word-break: normal; border: 1px solid #000000;"><?php echo $email?></td>
                                        </tr>
                                        <tr>
                                          <td style="background-color: #ffffff; color: #333333; font-family: Arial, sans-serif; font-size: 14px; overflow: hidden; padding: 20px 20px; text-align: left; vertical-align: top; word-break: normal; border: 1px solid #000000;">Nama </td>
                                          <td style="background-color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; overflow: hidden; padding: 20px 20px; text-align: left; vertical-align: top; word-break: normal; border: 1px solid #000000;"><?php echo $name?></td>
                                        </tr>
                                        <tr>
                                          <td style="background-color: #ffffff; color: #333333; font-family: Arial, sans-serif; font-size: 14px; overflow: hidden; padding: 20px 20px; text-align: left; vertical-align: top; word-break: normal; border: 1px solid #000000;">Pesan </td>
                                          <td style="background-color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; overflow: hidden; padding: 20px 20px; text-align: left; vertical-align: top; word-break: normal; border: 1px solid #000000;"><?php echo $message?></td>
                                        </tr>
                                        <tr>
                                          <td style="background-color: #000000; color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; overflow: hidden; padding: 20px 20px; text-align: center; vertical-align: top; word-break: normal; border: 1px solid black;" colspan="2">Jika ada pertanyaan, silahkan DM Instagram kami : @f2wl2021_</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                              </tr>
                            </tbody>
                            <tbody>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- END MODULE: Feature 1 -->
                  <!-- BEGIN MODULE: E-Commerce 1 -->
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
                    <tbody>
                      <tr>
                        <td height="8" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                    <tbody>
                      <tr>
                        <td class="pc-sm-p-35-30-40 pc-xs-p-20-20-25" valign="top" bgcolor="#521d1d" style="padding: 35px 40px 40px; background-color: #521d1d; border-radius: 8px" pc-default-class="pc-sm-p-35-30-40 pc-xs-p-20-20-25" pc-default-padding="35px 40px 40px">
                          <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                            <tbody>
                              <tr>
                                <td valign="top" align="center" style="padding: 5px 0; font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 24px; font-weight: 700; line-height: 34px; letter-spacing: -0.4px; color: #ffffff">Merchandise F2WL 2021</td>
                              </tr>
                              <tr>
                                <td valign="top" align="center" style="padding: 5px 0;">
                                  <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse: separate;">
                                    <tbody>
                                      <tr>
                                        <td valign="top" align="center" style="border-radius: 14px; border: 1px solid #CDCED2; padding: 6px 9px;">
                                          <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                            <tbody>
                                              <tr>
                                                <td valign="middle">
                                                  <a class="pc-fb-font" href="https://toko.ly/from2withlove/links" style="text-decoration: none; font-family: 'Fira Sans', Helvetica, Arial, sans-serif; display: block; font-size: 14px; font-weight: 500; color: #ffffff; line-height: 14px; white-space: nowrap"><span>See all</span></a>
                                                </td>
                                                <td valign="middle" style="padding-left: 3px;">
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <tr>
                                <td height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr>
                                <td valign="top" align="center">
                                  <img src="https://i.ibb.co/r791R0q/Stiker1.png" width="384" height="" alt="Stiker Charets" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; display: block; color: #151515; max-width: 100%; height: auto; Margin: 0 auto;">
                                </td>
                              </tr>
                              <tr>
                                <td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr>
                              </tr>
                              <tr>
                                <td height="8" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr>
                                <td class="pc-fb-font" style="font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 24px; font-weight: 700; line-height: 34px; letter-spacing: -0.4px; color: #ffffff" valign="top" align="center">Stiker Charets</td>
                              </tr>
                              <tr>
                                <td height="10" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr>
                                <td class="pc-fb-font" style="font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 300; line-height: 28px; letter-spacing: -0.2px; color: #9B9B9B;" valign="top" align="center">•Sticker cutting<br>•Tersedia 3 design, dengan ukuran yang berbeda<br>&nbsp;&nbsp;Design 1 : 12x2 cm<br>&nbsp;&nbsp;Design 2 : 13,5x2 cm<br>&nbsp;&nbsp;Design 3 : 8,5x8 cm</td>
                              </tr>
                              <tr>
                                <td height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr>
                                <td class="pc-fb-font" style="font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 24px; font-weight: 500; line-height: 28px; color: #9B9B9B;" valign="top" align="center">Rp 15,000 - Rp 18,000</td>
                              </tr>
                              <tr>
                                <td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr>
                                <td style="padding-top: 5px" valign="top" align="center">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                    <tbody>
                                      <tr>
                                        <td style="border-radius: 8px; padding: 13px 17px; background-color: #1595E7;" bgcolor="#1595E7" valign="top" align="center">
                                          <a href="https://merchandise.f2wl.com" style="line-height: 24px; text-decoration: none; word-break: break-word; font-weight: 500; display: block; font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff;">Shop now</a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- END MODULE: E-Commerce 1 -->
                  <!-- BEGIN MODULE: Footer 1 -->
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
                    <tbody>
                      <tr>
                        <td height="8" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                    <tbody>
                      <tr>
                        <td class="pc-sm-p-21-10-14 pc-xs-p-5-0" style="padding: 21px 20px 14px 20px; background-color: #521d1d; border-radius: 8px" valign="top" bgcolor="#521d1d" role="presentation">
                          <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                            <tbody>
                              <tr>
                                <td style="font-size: 0;" valign="top">
                                  <!--[if (gte mso 9)|(IE)]><table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"><tr><td width="280" valign="top"><![endif]-->
                                  <div class="pc-sm-mw-100pc" style="display: inline-block; width: 100%; max-width: 280px; vertical-align: top;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                      <tbody>
                                        <tr>
                                          <td style="padding: 20px;" valign="top">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                              <tbody>
                                                <tr>
                                                  <td class="pc-fb-font" style="font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 500; line-height: 24px; letter-spacing: -0.2px; color: #ffffff;" valign="top">
                                                    Follow Us.
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td height="11" style="line-height: 1px; font-size: 1px;">&nbsp;</td>
                                                </tr>
                                              </tbody>
                                              <tbody>
                                                <tr>
                                                  <td class="pc-fb-font" style="font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; letter-spacing: -0.2px; color: #D8D8D8;" valign="top"></td>
                                                </tr>
                                                <tr>
                                                  <td class="pc-sm-h-20" height="56" style="line-height: 1px; font-size: 1px;">&nbsp;</td>
                                                </tr>
                                              </tbody>
                                              <tbody>
                                                <tr>
                                                  <td style="font-family: Arial, sans-serif; font-size: 19px;" valign="top">
                                                    <a href="https://www.youtube.com/channel/UC94ighocKI8KCei_pCqbX0g" style="text-decoration: none;"><img src="https://i.ibb.co/QFXbZpQ/You-Tube-Emblem1.png" width="20" height="20" alt="Youtube F2WL 2021" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff;"></a>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <a href="https://www.instagram.com/f2wl2021_/" style="text-decoration: none;"><img src="https://i.ibb.co/C6YrcRJ/instagram1.png" width="20" height="20" alt="Instagram F2WL 2021 " style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff;"></a>
                                                    <span>&nbsp;&nbsp;</span>
                                                    <a href="http://f2wl.com" style="text-decoration: none;"><img src="https://i.ibb.co/NVZWNbV/kisspng-logo-web-design-augmented-reality-surface-icon-5b50a28a175192-76064791153201114609552.png" width="20" height="20" alt="Website F2WL 2021" style="border: 0; line-height: 100%; outline: 0; -ms-interpolation-mode: bicubic; color: #ffffff;"></a>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <!--[if (gte mso 9)|(IE)]></td><td width="280" valign="top"><![endif]-->
                                  <div class="pc-sm-mw-100pc" style="display: inline-block; width: 100%; max-width: 280px; vertical-align: top;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                      <tbody>
                                        <tr>
                                          <td style="padding: 20px;" valign="top">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" role="presentation">
                                              <tbody>
                                                <tr>
                                                  <td class="pc-fb-font" style="font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 500; line-height: 24px; letter-spacing: -0.2px; color: #ffffff;" valign="top">
                                                    Contact us.
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td height="11" style="line-height: 1px; font-size: 1px;">&nbsp;</td>
                                                </tr>
                                              </tbody>
                                              <tbody>
                                                <tr>
                                                  <td class="pc-fb-font" style="font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; letter-spacing: -0.2px; color: #D8D8D8;" valign="top">Jl. Cihampelas No.173, Cipaganti, Kecamatan Coblong, Kota Bandung, Jawa Barat 40131</td>
                                                </tr>
                                                <tr>
                                                  <td class="pc-sm-h-20" height="45" style="line-height: 1px; font-size: 1px;">&nbsp;</td>
                                                </tr>
                                              </tbody>
                                              <tbody>
                                                <tr>
                                                  <td class="pc-fb-font" style="font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 500; line-height: 24px; letter-spacing: -0.2px;" valign="top">
                                                    <a href="tel:+62 821-1717-8987" style="text-decoration: none; color: #ffffff;">+62 821-1717-8987</a>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td height="9" style="line-height: 1px; font-size: 1px;">&nbsp;</td>
                                                </tr>
                                              </tbody>
                                              <tbody>
                                                <tr>
                                                  <td class="pc-fb-font" style="font-family: 'Fira Sans', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 500; line-height: 24px;" valign="top">
                                                    <a href="mailto:from2withlove2021@gmail.com" style="text-decoration: none; color: #1595E7;">from2withlove2021@gmail.com</a>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- END MODULE: Footer 1 -->
                  <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                    <tbody>
                      <tr>
                        <td height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
          <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
        </td>
      </tr>
    </tbody>
  </table>
  <!-- Fix for Gmail on iOS -->
  <div class="pc-gmail-fix" style="white-space: nowrap; font: 15px courier; line-height: 0;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
</body>
</html>




<?php

header('Location: thank-you2.html');

?>