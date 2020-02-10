<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{$contact->subject}}</title>
    <style type="text/css">

        #outlook a {padding:0;}
        body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
        .ExternalClass {width:100%;}
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
        #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
        img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
        a img {border:none;display:inline-block;}
        .image_fix {display:block;}

        h1, h2, h3, h4, h5, h6 {color: black !important;}

        h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: blue !important;}

        h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {
            color: red !important;
        }

        h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {
            color: purple !important;
        }

        table td {border-collapse: collapse;}

        table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

        a {color: #000;}

        @media only screen and (max-device-width: 480px) {

            a[href^="tel"], a[href^="sms"] {
                text-decoration: none;
                color: black; /* or whatever your want */
                pointer-events: none;
                cursor: default;
            }

            .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                text-decoration: default;
                color: orange !important; /* or whatever your want */
                pointer-events: auto;
                cursor: default;
            }
        }


        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
            a[href^="tel"], a[href^="sms"] {
                text-decoration: none;
                color: blue; /* or whatever your want */
                pointer-events: none;
                cursor: default;
            }

            .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                text-decoration: default;
                color: orange !important;
                pointer-events: auto;
                cursor: default;
            }
        }

        p {
            margin:0;
            color:#555;
            font-family:Helvetica, Arial, sans-serif;
            font-size:16px;
            line-height:160%;
        }
        a.link2{
            text-decoration:none;
            font-family:Helvetica, Arial, sans-serif;
            font-size:16px;
            color:#fff;
            border-radius:4px;
        }
        h2{
            color:#181818;
            font-family:Helvetica, Arial, sans-serif;
            font-size:22px;
            font-weight: normal;
        }

        .bgItem{
            background:#F4A81C;
        }
        .bgBody{
            background:#ffffff;
        }

    </style>

    <script type="colorScheme" class="swatch active">
  {
    "name":"Default",
    "bgBody":"ffffff",
    "link":"f2f2f2",
    "color":"555555",
    "bgItem":"F4A81C",
    "title":"181818"
  }
</script>

</head>
<body>
<!-- Wrapper/Container Table: Use a wrapper table to control the width and the background color consistently of your email. Use this approach instead of setting attributes on the body tag. -->
<table cellpadding="0" width="100%" cellspacing="0" border="0" id="backgroundTable" class='bgBody'>
    <tr>
        <td>

            <!-- Tables are the most common way to format your email consistently. Set your table widths inside cells and in most cases reset cellpadding, cellspacing, and border to zero. Use nested tables as a way to space effectively in your message. -->

            <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border-collapse:collapse;">
                <tr>
                    <td class='movableContentContainer'>

                        <div class='movableContent'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr height="40">
                                    <td width="200">&nbsp;</td>
                                    <td width="200">&nbsp;</td>
                                    <td width="200">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="200" valign="top">&nbsp;</td>
                                    <td width="200" valign="top" align="center">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <img src="{{asset('email/images/logo.png')}}" width="155" height='155' alt='Logo'  data-default="placeholder" />
                                            </div>
                                        </div>
                                    </td>
                                    <td width="200" valign="top">&nbsp;</td>
                                </tr>
                                <tr height="25">
                                    <td width="200">&nbsp;</td>
                                    <td width="200">&nbsp;</td>
                                    <td width="200">&nbsp;</td>
                                </tr>
                            </table>
                        </div>

                        <div class='movableContent'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr>
                                    <td width="100%" colspan="3" align="center" style="padding-bottom:10px;padding-top:25px;">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <h2 >Welcome aboard!</h2>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="100">&nbsp;</td>
                                    <td width="400" align="center" style="padding-bottom:5px;">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <p >Thanks for signing up to our newsletter - you're all set and will be receiving the first email soon.</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td width="100">&nbsp;</td>
                                </tr>
                            </table>
                        </div>

                        <div class='movableContent'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr>
                                    <td width="100">&nbsp;</td>
                                    <td width="400" align="center" style="padding-top:25px;padding-bottom:115px;">
                                        <table cellpadding="0" cellspacing="0" border="0" align="center" width="200" height="50">
                                            <tr>
                                                <td bgcolor="#ED006F" align="center" style="border-radius:4px;" width="200" height="50">
                                                    <div class="contentEditableContainer contentTextEditable">
                                                        <div class="contentEditable" >
                                                            <a target='_blank' href="[CLIENTS.WEBSITE]" class='link2'>Visit our Website</a>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="100">&nbsp;</td>
                                </tr>
                            </table>
                        </div>


                        <div class='movableContent'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border-collapse:collapse;">
                                <tr>
                                    <td style="color:#fff;" class='bgItem'>
                                        <table cellpadding="0" style="border-collapse:collapse;" cellspacing="0" border="0" align="center" width="600">
                                            <tr>
                                                <td width="200" style="vertical-align:bottom;">
                                                    <div class="contentEditableContainer contentImageEditable">
                                                        <div class="contentEditable" >
                                                            <div style="padding-top:20px;text-align:center;">
                                                                <img src="{{asset('email/images/6@2x.png')}}" width="148" data-default="placeholder" data-max-width="200" style="margin-bottom:-3px;" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                                <td width="400" valign="top" style="padding-top:40px;padding-bottom:20px;">
                                                    <br/>
                                                    <div class="contentEditableContainer contentTextEditable">
                                                        <div class="contentEditable" >
                                                            <div style="font-size:23px;font-family:Heveltica, Arial, sans-serif;color:#fff;">A little bit about us</div>
                                                        </div>
                                                    </div>

                                                    <div class="contentEditableContainer contentTextEditable">
                                                        <div class="contentEditable"  style="padding:20px 10px 0 0;margin:0;font-family:Helvetica, Arial, sans-serif;font-size:15px;line-height:150%;">
                                                            <p style='color:#FFEECE;'>Describe who you are, what you do and why you do it. You can also use this space as social proof (a tweet or post from a fan)</strong></p>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class='movableContent' align='center' style='text-align:center;'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr>
                                    <td width="100%" colspan="3" align="center" style="padding-bottom:40px;padding-top:100px;">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable"  >
                                                <h2 >Our Core Values</h2>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">&nbsp;</td>
                                    <td width="500" align="left">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <div style="font-family:Helvetica, Arial, sans-serif;font-size:16px;line-height:160%;color:#181818;font-weight:bold;">Things you believe in are important to your business</div>
                                            </div>
                                        </div>
                                        <div style="height:20px;">&nbsp;</div>
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <p >Why you do what you do can be just as important as what you do. You could also use this area to list benefits of using your product.</p>
                                            </div>
                                        </div>
                                        <div style="height:20px;">&nbsp;</div>
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <div style="font-family:Helvetica, Arial, sans-serif;font-size:16px;line-height:160%;color:#181818;font-weight:bold;">Things you believe in are important to your business</div>
                                            </div>
                                        </div>
                                        <div style="height:20px;">&nbsp;</div>
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <p >Why you do what you do can be just as important as what you do. You could also use this area to list benefits of using your product.</p>
                                            </div>
                                        </div>
                                        <div style="height:20px;">&nbsp;</div>
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <div style="font-family:Helvetica, Arial, sans-serif;font-size:16px;line-height:160%;color:#181818;font-weight:bold;">Things you believe in are important to your business</div>
                                            </div>
                                        </div>
                                        <div style="height:20px;">&nbsp;</div>
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <p >Why you do what you do can be just as important as what you do. You could also use this area to list benefits of using your product.</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td width="50">&nbsp;</td>
                                </tr>
                            </table>
                        </div>

                        <div class='movableContent' align='center' style='text-align:center;'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr>
                                    <td width="100%" align="center" style="padding-bottom:10px;padding-top:100px;">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <h2>The People that Make the Company</h2>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="100%" align="center">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <p >Add pictures of your company's employees or pictures taken at a special event.</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class='movableContent' align='center' style='text-align:center;'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
                                <tr>
                                    <td style="color:#fff;">
                                        <!-- Hey! Nice to see you there. Did you know? You can actually have the image extend as a tiled background image; just replace the above td's style to: style="background-color:#181818;background-image:url(location/YourImageName.filetype);background-repeat:repeat-x;background-size:600px 400px;background-position:center center;color:#fff;" -->
                                        <table cellpadding="0" style="border-collapse:collapse;" cellspacing="0" border="0" align="center" width="600">
                                            <tr>
                                                <td width="600" valign="top">
                                                    <div style="text-align:center;margin-bottom:-3px;">
                                                        <div class="contentEditableContainer contentImageEditable">
                                                            <div class="contentEditable" >
                                                                <img src="{{asset('email/images/pics.png')}}" width="600" alt='design images'  data-default="placeholder" data-max-width="600" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class='movableContent' align='center' style='text-align:center;'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr>
                                    <td width="100%" align="center" style="padding-bottom:10px;padding-top:100px;">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <h2>Liked this email?</h2>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="100%" align="center">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <p >Get people to click on the thumbs up and the thumbs down to show their appreciation for this email, a question you can ask or what they think about a topic. Create landing pages for each response.
                                                    <!-- For example, you can ask them if they're Star Wars fans, if they Love chocolate or if they would recommend your product to a friend or family member. -->
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class='movableContent' align='center' style='text-align:center;'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr>
                                    <td width="100%" align="center">
                                        <div class="contentEditableContainer contentImageEditable" style="display:inline;">
                                            <div class="contentEditable" style="display:inline;">
                                                <img src="{{asset('email/images/yes.gif')}}" width="200"  alt='yes'  data-default="placeholder" data-max-width="200" style='padding-right:10px;'/>
                                            </div>
                                        </div>
                                        <div class="contentEditableContainer contentImageEditable" style="display:inline;">
                                            <div class="contentEditable" style="display:inline;">
                                                <img src="{{asset('email/images/no.gif')}}" width="200"  alt='no'  data-default="placeholder" data-max-width="200" style='padding-left:10px;'/>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class='movableContent'>
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
                                <tr>
                                    <td width="100%" colspan="2" style="padding-top:65px;">
                                        <hr style="height:1px;border:none;color:#333;background-color:#ddd;" />
                                    </td>
                                </tr>
                                <tr>
                                    <td width="60%" height="70" valign="middle" style="padding-bottom:20px;">
                                        <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" >
                                                <span style="font-size:13px;color:#181818;font-family:Helvetica, Arial, sans-serif;line-height:200%;">Sent to [email] by [CLIENTS.COMPANY_NAME]</span>
                                                <br/>
                                                <span style="font-size:11px;color:#555;font-family:Helvetica, Arial, sans-serif;line-height:200%;">[CLIENTS.ADDRESS] | [CLIENTS.PHONE]</span>
                                                <br/>
                                                <span style="font-size:13px;color:#181818;font-family:Helvetica, Arial, sans-serif;line-height:200%;">
														<a target='_blank' href="[FORWARD]" style='text-decoration:none;line-height: 20px;color:#555; font-size:13px;'>Forward to a friend</a></span>
                                                <br/>
                                                <span style="font-size:13px;color:#181818;font-family:Helvetica, Arial, sans-serif;line-height:200%;">
														<a target='_blank' href="[UNSUBSCRIBE]" style="text-decoration:none;color:#555">Click here to unsubscribe</a></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td width="40%" height="70" align="right" valign="top" align='right' style="padding-bottom:20px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align='right'>
                                            <tr>
                                                <td width='57%'></td>
                                                <td valign="top" width='34'>
                                                    <div class="contentEditableContainer contentFacebookEditable" style='display:inline;'>
                                                        <div class="contentEditable" >
                                                            <img src="{{asset('email/images/facebook.png')}}" data-default="placeholder" data-max-width="30" width='30' height='30' alt='facebook' style='margin-right:40x;' data-customIcon="true" >
                                                        </div>
                                                    </div>
                                                </td>
                                                <td valign="top" width='34'>
                                                    <div class="contentEditableContainer contentTwitterEditable" style='display:inline;'>
                                                        <div class="contentEditable" >
                                                            <img src="{{asset('email/images/twitter.png')}}" data-default="placeholder" data-max-width="30" width='30' height='30' alt='twitter' style='margin-right:40x;' data-customIcon="true" >
                                                        </div>
                                                    </div>
                                                </td>
                                                <td valign="top" width='34'>
                                                    <div class="contentEditableContainer contentImageEditable" style='display:inline;'>
                                                        <div class="contentEditable" >
                                                            <a target='_blank' href="#" data-default="placeholder"  style="text-decoration:none;">
                                                                <img src="{{asset('email/images/pinterest.png')}}" width="30" height="30" data-max-width="30" alt='pinterest' style='margin-right:40x;' />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </td>
                </tr>
            </table>
            <!-- END BODY -->

        </td>
    </tr>
</table>
<!-- End of wrapper table -->
</body>
</html>
