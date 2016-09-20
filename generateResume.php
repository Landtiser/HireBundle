<?php

//Establish Variables from Form 
$firstName = htmlspecialchars($_POST['first']);
$lastName  = htmlspecialchars($_POST['last']);
$title     = htmlspecialchars($_POST['title']);
$email 	   = htmlspecialchars($_POST['mail']);
$phone     = htmlspecialchars($_POST['phone']);
$website   = htmlspecialchars($_POST['web']);
$media     = htmlspecialchars($_POST['media']);

$personal  = htmlspecialchars($_POST['personal']);

$title1     = htmlspecialchars($_POST['title1']);
$company1   = htmlspecialchars($_POST['company1']);
$duty1one   = htmlspecialchars($_POST['duty1one']);
$duty1two   = htmlspecialchars($_POST['duty1two']);
$duty1three = htmlspecialchars($_POST['duty1three']);

$title2     = htmlspecialchars($_POST['title2']);
$company2   = htmlspecialchars($_POST['company2']);
$duty2one   = htmlspecialchars($_POST['duty2one']);
$duty2two   = htmlspecialchars($_POST['duty2two']);
$duty2three = htmlspecialchars($_POST['duty2three']);

$title3     = htmlspecialchars($_POST['title3']);
$company3   = htmlspecialchars($_POST['company3']);
$duty3one   = htmlspecialchars($_POST['duty3one']);
$duty3two   = htmlspecialchars($_POST['duty3two']);
$duty3three = htmlspecialchars($_POST['duty3three']);

$sub1Title = htmlspecialchars($_POST['sub1Title']);
$sub2Title = htmlspecialchars($_POST['sub2Title']);
$sub3Title = htmlspecialchars($_POST['sub3Title']);

$sub1One = htmlspecialchars($_POST['sub1One']);
$sub1Two = htmlspecialchars($_POST['sub1Two']);
$sub1Three = htmlspecialchars($_POST['sub1Three']);

$sub2One = htmlspecialchars($_POST['sub2One']);
$sub2Two = htmlspecialchars($_POST['sub2Two']);
$sub2Three = htmlspecialchars($_POST['sub2Three']);
$sub2Four = htmlspecialchars($_POST['sub2Four']);
$sub2Five = htmlspecialchars($_POST['sub2Five']);
$sub2Six = htmlspecialchars($_POST['sub2Six']);
    
$sub3Name1 = htmlspecialchars($_POST['sub3Name1']);
$sub3Contact1 = htmlspecialchars($_POST['sub3Contact1']);
$sub3Relation1 = htmlspecialchars($_POST['sub3Relation1']);
$sub3Name2 = htmlspecialchars($_POST['sub3Name2']);
$sub3Contact2 = htmlspecialchars($_POST['sub3Contact2']);
$sub3Relation2 = htmlspecialchars($_POST['sub3Relation2']);
$sub3Name3 = htmlspecialchars($_POST['sub3Name3']);
$sub3Contact3 = htmlspecialchars($_POST['sub3Contact3']);
$sub3Relation3 = htmlspecialchars($_POST['sub3Relation3']);

$closerTitle = htmlspecialchars($_POST['closerTitle']);
$closerText = htmlspecialchars($_POST['closerText']);


/* -------
PDF Output
------- */

//Include MPDF for PDF Output 
include('vendor/mpdf/mpdf/mpdf.php'); 

//CSS and HTML for Output
$cssPDF .= "
<!doctype html>

<html lang='en'>
<head>
  <meta charset='utf-8'>

  <title>Resume</title>
  <meta name='description' content='Resume'>
  <meta name='author' content='$firstName $lastName'>

</head>
<body>
    
<style type='text/css'>

    * { box-sizing: border-box; }
    html,body { margin: 0; padding: 0; }
    page { margin: 0; padding: 0; width:8.5in; }
    .light { color: #42badc; }
    .dark { color: #05718b; }
    header:after, section:after {content: ''; display: table; clear: both;}
    
    h1 {
        box-sizing: border-box;
        margin-bottom:0;
        margin-left: 0.1in;
        padding-top:0.25in;
        padding-bottom:0;
        float: right;
        color: #05718b;
        font-family: sans-serif;
        font-size: 0.7in;
        line-height: 0.7in;
        font-weight: 700;
    }
    
    h2 {
        margin: 0;
        padding: 0;
        line-height: 0.5in;
        color: #42badc;
        font-size: 0.6in;
        font-family: sans-serif;
        font-weight: 500;
    }
    
    h3 {
        color: #05718b;
        text-decoration: underline;
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        font-size: 1.2em;
    }
    
    h4 {
        color: #444;
        fnt-family: sans-serif;
    }
    
    p {
        font-family: sans-serif;
        color: #444;
    }
    
    ul {
        padding-left: .15in;
    }
    
    ul li {
        font-family: sans-serif;
        color: #444;
    }
    
    .divider {
        display: block;
        box-sizing: border-box;
        width: 100%;
        height: 2px;
        border-top: 1px solid #42badc;
        padding-left: 0.33in;
        margin: 0.05in 0;
    }
    
    #resume {
        position: relative;
        display: block;
        width: 100%;
        max-width: 8.5in;
        margin: 0 auto;
    }
    
    #name {
        width: 58.82%;
        max-width: 5in;
        margin: 0.33in;
        margin-right: 0;
        float: left;
        position: relative;
    }
    
    #logo {
        float: left;
        display: inline-block;
        margin-top: 0.33in;
        height: 1.55in;
        width: 1.25in;
        background-color: #05718b;
    }
    
    #logo p {
        color: #ffffff;
        font-size: 0.75in;
        margin: 0 auto 0;
        text-align: center;
        border-top: 0.4in solid #05718b;
    }
    
    #contact {
        width: 29.41%;
        max-width: 2.5in;
        display: block;
        position: relative;
        margin: 0.33in;
        margin-top: 0;
        box-sizing: border-box;
        padding-top: 0.33in;
        margin-left: 0;
        float: right;
    }
    
    .contact-item {
        position: relative;
        height: 0.45in;
        box-sizing: border-box;
        margin: 0.075in 0;
    }
    
    .contact-detail {
        display: inline-block;
        padding-top: .075in;
    }
    
    .contact-item span {
        display: inline-block;
        margin-top: 1in;
        color: #444444;
        font-family: sans-serif;
    }
    
    .icon {
        height: 0.4in;
        width: auto;
        float: left;
        margin-right: 10px;
    }
    
    #experience {
        width: 58.82%;
        max-width: 5in;
        margin-left: 0.33in;
        float: left;
    }
    
    #experience h3 {
        margin-top: 0.2in;
    }
    
    #experience h4 {
        font-size: 1.15em;
        margin-bottom: 0;
    }
    
    #experience h4.first-title {
        margin-top: 0;
    }
    
    #experience p {
        margin: 0;
        font-size: 1.05em;
    }
    
    #sub-content {
        width: 29.41%;
        max-width: 2.5in;
        margin-right: 0.33in;
        float: right;
    }
    
    .sub1, .sub2, .sub3 {
        background-color: #05718b;
        padding: .15in .33in 0;
        width: 100%;
        box-sizing: border-box;
    }
    
    .sub2 {
        margin: .15in 0;
    }
    
    #sub-content ul {
        padding-left: 0;
    }
    
    #sub-content ul li {
        color: #fff;
        font-family: sans-serif;
        list-style-type: none;
    }
    
    #sub-content h3, #closer h3 {
        color: #ffffff;
        margin: 0;
        padding: 0;
    }
    
    #closer {
        width: 7.44in;
        margin: 0.15in 0.33in 0;
        padding: 0.15in 0.2in 0;
        background-color: #05718b;
    }
    
    #closer p {
        color:#ffffff;
    }
    
</style>
";

$cssWEB .= "
<!doctype html>

<html lang='en'>
<head>
  <meta charset='utf-8'>

  <title>Resume</title>
  <meta name='description' content='Resume'>
  <meta name='author' content='Chris Landtiser'>

</head>
<body>
    
<style type='text/css'>

    * { box-sizing: border-box; }
    html,body { margin: 0; padding: 0; }
    page { margin: 0; padding: 0; width:8.5in; }
    .light { color: #42badc; }
    .dark { color: #05718b; }
    header:after, section:after, #name:after {content: ''; display: table; clear: both;}
    
    h1 {
        box-sizing: border-box;
        margin-top: 0;
        margin-bottom:0;
        text-align: center;
        color: #05718b;
        font-family: sans-serif;
        font-size: 2.5em;
        line-height: 1em;
        font-weight: 700;
        width: 100%;
        padding: 10px 0;
    }
    
    h2 {
        margin: 0;
        padding: 0;
        color: #42badc;
        font-size: 2em;
        font-family: sans-serif;
        font-weight: 500;
        text-align: center;
    }
    
    h3 {
        color: #05718b;
        text-decoration: underline;
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        font-size: 1.2em;
    }
    
    h4 {
        color: #444;
        font-family: sans-serif;
    }
    
    p {
        font-family: sans-serif;
        color: #444;
    }
    
    ul {
        padding-left: .15in;
    }
    
    ul li {
        font-family: sans-serif;
        color: #444;
    }
    
    .divider {
        display: none;
        box-sizing: border-box;
        width: 100%;
        height: 2px;
        border-top: 1px solid #42badc;
        padding-left: 0.33in;
        margin: 0.05in 0;
    }
    
    #resume {
        position: relative;
        display: block;
        width: 100%;
        max-width: 8.5in;
        margin: 0 auto;
    }
    
    #name {
        width: 100%;
    }
    
    #logo {
        display: table-cell;
        margin: 20px auto 0;
        height: 1.25in;
        width: 1.25in;
        background-color: #05718b;
    }
    
    #logo p {
        color: #ffffff;
        font-size: 0.75in;
        margin: 0.2in auto 0;
        position: relative;
        text-align:center;
    }
    
    #contact {
        width: 200px;
        display: table;
        position: relative;
        box-sizing: border-box;
        padding-top: 0.33in;
        margin: 0 auto;
    }
    
    .contact-item {
        position: relative;
        display: table-row;
        height: 0.45in;
        box-sizing: border-box;
        margin: 0.075in 0;
    }
    
    .contact-detail {
        display: table-cell;
        vertical-align: middle;
    }
    
    .contact-item span {
        display: inline-block;
        color: #444444;
        font-family: sans-serif;
    }
    
    .icon {
        height: 0.4in;
        width: auto;
        float: left;
        margin-right: 10px;
        display: table-cell;
    }
    
    #experience {
        width: 90%;
        margin: 0 auto;
    }
    
    #experience h3 {
        margin-top: 0.2in;
    }
    
    #experience h4 {
        font-size: 1.15em;
        margin-bottom: 0;
    }
    
    #experience h4.first-title {
        margin-top: 0;
    }
    
    #experience p {
        margin: 0;
        font-size: 1.05em;
    }
    
    #sub-content {
        width: 90%;
        margin: 0 auto;
    }
    
    .sub1, .sub2, .sub3 {
        background-color: #05718b;
        padding: .15in .33in 0;
        width: 100%;
        box-sizing: border-box;
    }
    
    .sub2 {
        margin: .15in 0;
    }
    
    #sub-content ul {
        margin: 5px 0;
        padding-left: 0;
        padding-bottom: 20px;
    }
    
    #sub-content ul li {
        color: #fff;
        font-family: sans-serif;
        list-style-type: none;
    }
    
    #sub-content h3, #closer h3 {
        color: #ffffff;
        margin: 0;
        padding: 0;
    }
    
    #closer {
        box-sizing: border-box;
        width: 90%;
        margin: 0.15in auto 0.25in;
        padding: 0.15in 0.2in 0.1in;
        background-color: #05718b;
    }
    
    #closer p {
        color:#ffffff;
    }
    
    @media screen and (min-width: 650px) {
        
        h1 {
            font-size: 3.5em;
            text-align: left;
            float: left;
            width: auto;
            padding: 0;
        }
        
        h2 {   
            font-size: 3.25em;
            text-align: left;
            position: absolute;
            left: 0;
            bottom: -1.2em;
        }
        
        #name {  
            position: relative;
            width: 60%;
            margin: 0.33in 2.5%;
            margin-right: 0;
            float: left;
        }
        
        #logo {
            display: inline-block;
            float: left;
            margin-right: 10px;
            margin-top: 0;
        }
        
        #contact {
            width: 30%;
            max-width: 2.5in;
            display: block;
            margin: 0.33in 2.5%;
            margin-top: 0;
            box-sizing: border-box;
            padding-top: 0.33in;
            margin-left: 0;
            float: right;
        }
        
        .contact-item {
            display: inline-block;
        }
        
        .contact-detail {
            display: inline-block;
            padding-top: .075in;
        }
        
        #experience {
            width: 52.5%;
            margin: 0 2.5% 0 5%;
            float: left;
        }
        
        #sub-content {
            width: 30%;
            margin: 0 5%;
            float: right;
        }
        
    }
    
</style>
";

if(empty($phone)) {
    $phoneCheck .= ""; } else {
    $phoneCheck .= "
    <div class='contact-item'>
        <img src='img/phone.png' class='icon'>
        <div class='contact-detail'>
            <span>$phone</span>
        </div>
    </div>
    "; 
}

if(empty($email)) {
    $emailCheck .= ""; } else {
    $emailCheck .= "
    <div class='contact-item'>
        <img src='img/email.png' class='icon'>
        <div class='contact-detail'>
            <span>$email</span>
        </div>
    </div>";
}

if(empty($website)) {
    $websiteCheck .= ""; } else {
    $websiteCheck .= "
    <div class='contact-item'>
        <img src='img/web.png' class='icon'>
        <div class='contact-detail'>
            <span>$website</span>
        </div>
    </div>";
}
    
if(empty($media)) {
    $mediaCheck .= ""; 
    } else if($media === 'LinkedIn, Twitter, Etc.'){
        $mediaCheck .= ""; 
    } else {
    $mediaCheck .= "
        <div class='contact-item'>
            <img src='img/media.png' class='icon'>
            <div class='contact-detail'>
                <span>$media</span>
            </div>
        </div>";
}

if (empty($title1)) {
    $resp1Check .= ""; } else {
        if (empty($duty1two)) {
            $resp1Check .= "
            <h4 class='first-title'>$title1</h4>
            <p>$company1</p>
            <ul>
                <li>$duty1one</li>
            </ul>";
        } else if (empty($duty1three)) {
            $resp1Check .= "
            <h4 class='first-title'>$title1</h4>
            <p>$company1</p>
            <ul>
                <li>$duty1one</li>
                <li>$duty1two</li>
            </ul>";
        } else {
            $resp1Check .= "
            <h4 class='first-title'>$title1</h4>
            <p>$company1</p>
            <ul>
                <li>$duty1one</li>
                <li>$duty1two</li>
                <li>$duty1three</li>
            </ul>";
        }
}

if (empty($title2)) {
    $resp2Check .= ""; } else {
        if (empty($duty2two)) {
            $resp2Check .= "
            <h4>$title2</h4>
            <p>$company2</p>
            <ul>
                <li>$duty2one</li>
            </ul>";
        } else if (empty($duty2three)) {
            $resp2Check .= "
            <h4>$title2</h4>
            <p>$company2</p>
            <ul>
                <li>$duty2one</li>
                <li>$duty2two</li>
            </ul>";
        } else {
            $resp2Check .= "
            <h4>$title2</h4>
            <p>$company2</p>
            <ul>
                <li>$duty2one</li>
                <li>$duty2two</li>
                <li>$duty2three</li>
            </ul>";
        }
}

if (empty($title3)) {
    $resp3Check .= ""; } else {
        if (empty($duty3two)) {
            $resp3Check .= "
            <h4>$title3</h4>
            <p>$company3</p>
            <ul>
                <li>$duty3one</li>
            </ul>";
        } else if (empty($duty3three)) {
            $resp3Check .= "
            <h4>$title3</h4>
            <p>$company3</p>
            <ul>
                <li>$duty3one</li>
                <li>$duty3two</li>
            </ul>";
        } else {
            $resp3Check .= "
            <h4>$title3</h4>
            <p>$company3</p>
            <ul>
                <li>$duty3one</li>
                <li>$duty3two</li>
                <li>$duty3three</li>
            </ul>";
        }
}

$html .="

    <div id='resume'>

        <header>

            <div id='name'>
                <div id='logo'>
                    <p>CV</p>
                </div>
                <h1>$firstName<br />$lastName</h1>
                <div class='divider'></div>
                <h2>$title</h2>
            </div>

            <div id='contact'>
                $phoneCheck
                $emailCheck
                $websiteCheck
                $mediaCheck
            </div>

        </header>
        
        <section>
        
            <div id='experience'>
            
                <h3>Personal Statement</h3>
                
                <p>$personal</p>

                <h3 class='work-experience'>Work Experience</h3>
                
                $resp1Check
                $resp2Check
                $resp3Check
            
            </div>
            
            <div id='sub-content'>
            
                <div class='sub1'>
                    <h3>$sub1Title</h3>
                    <ul>
                        <li>$sub1One</li>
                        <li>$sub1Two</li>
                        <li>$sub1Three</li>
                    </ul>
                </div>
                
                <div class='sub2'>
                    <h3>$sub2Title</h3>
                    <ul>
                        <li>$sub2One</li>
                        <li>$sub2Two</li>
                        <li>$sub2Three</li>
                        <li>$sub2Four</li>
                        <li>$sub2Five</li>
                        <li>$sub2Six</li>
                    </ul>
                </div>
                
                <div class='sub3'>
                    <h3>$sub3Title</h3>
                    <ul>
                        <li>$sub3Name1</li>
                        <li>$sub3Contact1</li>
                        <li>$sub3Relation1</li>
                    </ul>
                    <ul>
                        <li>$sub3Name2</li>
                        <li>$sub3Contact2</li>
                        <li>$sub3Relation2</li>
                    </ul>
                    <ul>
                        <li>$sub3Name3</li>
                        <li>$sub3Contact3</li>
                        <li>$sub3Relation3</li>
                    </ul>
                </div>
            
            </div>
        
        </section>
        
        <footer>
        
            <div id='closer'>
                <h3>$closerTitle</h3>
                <p>$closerText</p>
            </div>
        
        </footer>
        
    </div>

</body>
</html>
";

$emailContact .= "";

if (empty($website)) {
    $emailContact .= "
    <tr>
        <td class='two-column' style='padding-right:0;padding-left:0;text-align:center;font-size:0;padding-top:10px;padding-bottom:10px;' >
            <!--[if (gte mso 9)|(IE)]>
            <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#333333;' >
            <tr>
            <td width='200' valign='top' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
            <![endif]-->
            <div class='column' style='width:100%;max-width:200px;display:inline-block;vertical-align:top;' >
                <p style='margin:0;font-size:14px;margin-bottom:10px;'><b>Email:</b> $email</p>
            </div>
        </td>
        <td class='two-column' style='padding-right:0;padding-left:0;text-align:center;font-size:0;padding-top:10px;padding-bottom:10px;' >
            <!--[if (gte mso 9)|(IE)]>
            <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#333333;' >
            <tr>
            <td width='200' valign='top' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
            <![endif]-->
            <div class='column' style='width:100%;max-width:200px;display:inline-block;vertical-align:top;' >
                <p style='margin:0;font-size:14px;margin-bottom:10px;'><b>Phone:</b> $phone</p>
            </div>
        </td>
    </tr>
    ";
} else {
    $emailContact .= "
    <tr>
        <td class='three-column' style='padding-right:0;padding-left:0;text-align:center;font-size:0;padding-top:10px;padding-bottom:10px;' >
            <!--[if (gte mso 9)|(IE)]>
            <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#333333;' >
            <tr>
            <td width='200' valign='top' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
            <![endif]-->
            <div class='column' style='width:100%;max-width:200px;display:inline-block;vertical-align:top;' >
                <p style='margin:0;font-size:14px;margin-bottom:10px;'><b>Email:</b> $email</p>
            </div>
        </td>
        <td class='three-column' style='padding-right:0;padding-left:0;text-align:center;font-size:0;padding-top:10px;padding-bottom:10px;' >
            <!--[if (gte mso 9)|(IE)]>
            <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#333333;' >
            <tr>
            <td width='200' valign='top' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
            <![endif]-->
            <div class='column' style='width:100%;max-width:200px;display:inline-block;vertical-align:top;' >
                <p style='margin:0;font-size:14px;margin-bottom:10px;'><b>Phone:</b> $phone</p>
            </div>
        </td>
        <td class='three-column' style='padding-right:0;padding-left:0;text-align:center;font-size:0;padding-top:10px;padding-bottom:10px;' >
            <!--[if (gte mso 9)|(IE)]>
            <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#333333;' >
            <tr>
            <td width='200' valign='top' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
            <![endif]-->
            <div class='column' style='width:100%;max-width:200px;display:inline-block;vertical-align:top;' >
                <p style='margin:0;font-size:14px;margin-bottom:10px;'><b>Website:</b> $website</p>
            </div>
        </td>
    </tr>
    ";
};

$htmlEMAIL .= "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <!--[if !mso]><!-->
        <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <!--<![endif]-->
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title></title>
    <style type='text/css'>
	
		.button:hover p, .button:active p {
			background-color: #0c728b!important;
		}
				
		@media screen and (min-width: 1px) {
			button:hover, button:active {
				background-color: #0c728b!important;
			}
		}
		
		@media screen and (max-width: 400px) {
		.two-column .column,
			.three-column .column {
				max-width: 100% !important;
			}
			.two-column img {
				max-width: 100% !important;
			}
			.three-column img {
				max-width: 50% !important;
			}
		}

		@media screen and (min-width: 401px) and (max-width: 620px) {
		.three-column .column {
				max-width: 33% !important;
			}
			.two-column .column {
				max-width: 50% !important;
			}
		}

	</style>
    <!--[if (gte mso 9)|(IE)]>
    <style type='text/css'>
        table {border-collapse: collapse !important;}
    </style>
    <![endif]-->
</head>
<body style='margin-top:0 !important;margin-bottom:0 !important;margin-right:0 !important;margin-left:0 !important;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;background-color:#0c728b;' >
    <center class='wrapper' style='width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;' >
        <div class='webkit' style='max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;' >
			
            <!--[if (gte mso 9)|(IE)]>
			<table width='600' align='center' style='border-spacing:0;font-family:sans-serif;color:#333333;' >
			<tr>
			<td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
			<![endif]-->
			<table align='center' style='border-spacing:0;font-family:sans-serif;color:#333333;margin-top:10px;margin-bottom:0;margin-right:auto;margin-left:auto;width:100%;max-width:600px;' >
				<tr>
					<td class='full-width-image' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;' >
						<img src='http://landtiser.com/email/images/email-icon.png' width='100' alt='' style='position: relative;display: block;margin: 10px auto 20px;border-width:0;width:95%;max-width:100px;height:auto;' />
					</td>
				</tr>
			</table>
			<table class='outer' align='center' style='border-spacing:0;font-family:sans-serif;color:#333333;margin-top:0px;margin-bottom:20px;margin-right:auto;margin-left:auto;width:100%;max-width:600px;background-color:#ffffff;' >
				<tr>
					<td class='full-width-image' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
						  <div style='height: 1.25in; width: 1.25in; background-color: #05718b; position: relative; display: block; margin-top: 30px; margin-left: auto; margin-right: auto;'>
                            <p style='margin:0;font-weight:bold;font-size:70px;padding-top:20px;margin-bottom:10px;color:#ffffff;text-align:center;'>CV</p>
                        </div>
					</td>
				</tr>
				<tr>
					<td class='one-column' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
						<table width='100%' style='border-spacing:0;font-family:sans-serif;color:#333333;' >
							<tr>
								<td class='inner contents' style='padding-top:10px;padding-bottom:10px;padding-right:30px;padding-left:30px;width:100%;text-align:left;' >
									<hr style='width: 30%; border-bottom: 0; border-left: 0; border-right: 0; border-top: 2px solid #44b9da;'>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class='one-column' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
						<table width='100%' style='border-spacing:0;font-family:sans-serif;color:#333333;' >
							<tr>
								<td class='inner contents' style='padding-top:10px;padding-bottom:10px;padding-right:30px;padding-left:30px;width:100%;text-align:left;' >
									<p class='h1' style='margin:0;font-weight:bold;font-size:14px;margin-bottom:10px;' >Hello, my name is $firstName $lastName!</p>
									<p style='margin:0;font-size:14px;margin-bottom:10px;'>I'm a $title. I've attached my resume, and I wanted to tell you a little about myself. You can reach me at:</p>
                                    <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#333333;' >
                                        $emailContact
                                    </table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class='one-column' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
						<table width='100%' style='border-spacing:0;font-family:sans-serif;color:#333333;' >
							<tr>
								<td class='inner contents' style='padding-top:10px;padding-bottom:10px;padding-right:30px;padding-left:30px;width:100%;text-align:left;' >
									<p style='margin:0;font-size:14px;margin-bottom:10px;' >$personal</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class='one-column' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
						<table width='100%' style='border-spacing:0;font-family:sans-serif;color:#333333;' >
							<tr>
								<td class='inner contents' style='padding-top:10px;padding-bottom:10px;padding-right:30px;padding-left:30px;width:100%;text-align:left;' >
                                    <p class='h1' style='margin:0;font-weight:bold;font-size:14px;margin-bottom:10px;' >$closerTitle!</p>
									<p style='margin:0;font-size:14px;margin-bottom:10px;' >$closerText</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class='one-column' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
						<table width='100%' style='border-spacing:0;font-family:sans-serif;color:#333333;' >
							<tr>
								<td class='inner contents' style='padding-top:0px;padding-bottom:0px;padding-right:30px;padding-left:30px;width:100%;text-align:left;' >
                                    <p style='margin:0;font-size:14px;margin-bottom:10px;' >Thank you for your time!</p>
									<p class='h1' style='margin-bottom:20px;font-weight:bold;font-size:20px;margin-bottom:30px;text-align:right;width:100%;'>$firstName $lastName</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<!--[if (gte mso 9)|(IE)]>
			</td>
			</tr>
			</table>
			<![endif]-->
        </div>
    </center>
	<style type='text-css'>.unsubscribe a {display:none;color:#ffffff;text-decoration:none;}</style>
	<div style='display:none;'><p style='text-align:center;color:#ffffff;display:none;' class='unsubscribe'><unsubscribe>Get This By Mistake?</unsubscribe></p></div>
</body>
</html>
";

// Combine HTML and CSS for Relevant Outputs

$htmlPDF = $cssPDF . $html;
$htmlWEB = $cssWEB . $html;

// Word-Specific Conditionals

if (!empty($email) && (!empty($phone) || !empty($website) || !empty(media))) {
    $emailWord .= "$email | ";
} else {
    $emailWord .= $email;
}
if (!empty($phone) && (!empty($website) || !empty(media))) {
    $phoneWord .= "$phone | ";
} else {
    $phoneWord .= $phone;
}
if (!empty($website) && $media == 'LinkedIn, Twitter, Etc.') {
    $websiteWord .= $website;
} else if (!empty($website) && !empty(media)) {
    $websiteWord .= "$website | ";
} else {
    $websiteWord .= $website;
}
if ($media == 'LinkedIn, Twitter, Etc.') {
    $mediaWord .= "";
} else {
    $mediaWord .= $media;
}

// Output Bundle

if($_POST['publish'] == 'Download Bundle')
{
 
    $mpdf=new mPDF('','letter','0','',0,0,0,0,0,0,'P');
    $mpdf->WriteHTML($htmlPDF);
    $mpdf->SetDisplayMode('fullpage');


    $mpdf->Output('resume.pdf', 'F');

    /* -------------
    HTML Page Output
    ------------- */

    // saving captured output to file
    file_put_contents('portfolio.html', $htmlWEB);

    /* -------------
    Email Output
    ------------- */

    // saving captured output to file
    file_put_contents('email.html', $htmlEMAIL);


    /* -----------------
    Word Document Output
    ----------------- */

    require_once __DIR__ . '/vendor/autoload.php';
    \PhpOffice\PhpWord\Settings::setZipClass(\PhpOffice\PhpWord\Settings::PCLZIP);

    // Create New Document
    $phpWord = new \PhpOffice\PhpWord\PhpWord();

    // Universal Variables
    $paragraphOptions = array('space' => array('line' => 100, 'color' => '444444', 'spaceAfter' =>0));

    // Adding Empty Section
    $section = $phpWord->addSection();


    // Font Declarations
    $fontName = new \PhpOffice\PhpWord\Style\Font();
    $fontName->setBold(true);
    $fontName->setName('Tahoma');
    $fontName->setSize(15);

    $fontRole = new \PhpOffice\PhpWord\Style\Font();
    $fontRole->setName('Tahoma');
    $fontRole->setSize(13);
    $fontRole->setItalic(true);
    $fontRole->setColor(444444);

    $fontSub = new \PhpOffice\PhpWord\Style\Font();
    $fontSub->setName('Tahoma');
    $fontSub->setSize(11);
    $fontSub->setColor(999999);
    
    $fontSection = 'fontSection';
    $phpWord->addFontStyle(
        $fontSection,
        array('name' => 'Tahoma', 'size' => 13, 'bold' => true)
    );

    $fontExpTitle = 'fontExpTitle';
    $phpWord->addFontStyle(
        $fontExpTitle,
        array('name' => 'Tahoma', 'size' => 13, 'bold' => true, 'spaceBefore' => 0, 'spaceAfter' => 0, 'color' => '05718b')
    );

    $fontExpCompany = 'fontExpCompany';
    $phpWord->addFontStyle(
        $fontExpCompany,
        array('name' => 'Tahoma', 'size' => 10, 'color' => '666666', 'italic' => true, 'spaceBefore' => 0, 'spaceAfter' => 0)
    );

    $fontReference = 'fontReference';
    $phpWord->addFontStyle(
        $fontReference,
        array('name' => 'Tahoma', 'size' => 11, 'color' => '444444')
    );

    $noSpace = array('spaceAfter' => 0);
    $extraSpace = array('spaceBefore' => 400);

    // Adding Text Element

    $wordName = $section->addText( $firstName . ' ' . $lastName);
    $wordName->setFontStyle($fontName);

    $wordRole = $section->addText( $title );
    $wordRole->setFontStyle($fontRole);

    $wordContact = $section->addText( $emailWord . $phoneWord . $websiteWord . $mediaWord );
    $wordContact->setFontStyle($fontSub);

    $wordPersonalTitle = $section->addText( 'Personal Statement', $fontSection );

    $wordPersonal = $section->addText( $personal );

    $wordExperience = $section->addText( 'Work Experience', $fontSection, $extraSpace );

    $wordExpTitle1 = $section->addText( $title1, $fontExpTitle, $noSpace );
    $wordExpCompany1 = $section->addText( $company1, $fontExpCompany );
    if (!empty($duty1one)) {
    $phpWord->addParagraphStyle('P-listStyle', array('spaceAfter'=>0,'lineHeight'=>1.0));
    $listItemRun = $section->addListItemRun(0,null, 'P-listStyle');
    $listItemRun->addText( $duty1one );
    }
    if (!empty($duty1two)) {
    $listItemRun = $section->addListItemRun(0,null, 'P-listStyle');
    $listItemRun->addText( $duty1two );
    }
    if (!empty($duty1three)) {
    $listItemRun = $section->addListItemRun();
    $listItemRun->addText( $duty1three );
    }

    $wordExpTitle2 = $section->addText( $title2, $fontExpTitle, $noSpace );
    $wordExpCompany2 = $section->addText( $company2, $fontExpCompany );
    if (!empty($duty2one)) {
    $phpWord->addParagraphStyle('P-listStyle', array('spaceAfter'=>0,'lineHeight'=>1.0));
    $listItemRun = $section->addListItemRun(0,null, 'P-listStyle');
    $listItemRun->addText( $duty2one );
    }
    if (!empty($duty2two)) {
    $listItemRun = $section->addListItemRun(0,null, 'P-listStyle');
    $listItemRun->addText( $duty2two );
    }
    if (!empty($duty2three)) {
    $listItemRun = $section->addListItemRun();
    $listItemRun->addText( $duty2three );
    }

    $wordExpTitle3 = $section->addText( $title3, $fontExpTitle, $noSpace );
    $wordExpCompany3 = $section->addText( $company3, $fontExpCompany );
    if (!empty($duty3one)) {
    $phpWord->addParagraphStyle('P-listStyle', array('spaceAfter'=>0,'spaceBefore'=>0,'lineHeight'=>1.0));
    $listItemRun = $section->addListItemRun(0,null, 'P-listStyle');
    $listItemRun->addText( $duty3one );
    }
    if (!empty($duty3two)) {
    $listItemRun = $section->addListItemRun(0,null, 'P-listStyle');
    $listItemRun->addText( $duty3two );
    }
    if (!empty($duty3three)) {
    $listItemRun = $section->addListItemRun();
    $listItemRun->addText( $duty3three );
    }

    $wordReferences = $section->addText( $sub3Title, $fontSection, $extraSpace );

    $table = $section->addTable();

    $table->addRow();
    $table->addCell(4000)->addText($sub3Name1, $fontReference, $noSpace);
    $table->addCell(4000)->addText($sub3Name2, $fontReference, $noSpace);
    $table->addCell(4000)->addText($sub3Name3, $fontReference, $noSpace);
    $table->addRow();
    $table->addCell(4000)->addText($sub3Contact1, $fontReference, $noSpace);
    $table->addCell(4000)->addText($sub3Contact2, $fontReference, $noSpace);
    $table->addCell(4000)->addText($sub3Contact3, $fontReference, $noSpace);
    $table->addRow();
    $table->addCell(4000)->addText($sub3Relation1, $fontReference, $noSpace);
    $table->addCell(4000)->addText($sub3Relation2, $fontReference, $noSpace);
    $table->addCell(4000)->addText($sub3Relation3, $fontReference, $noSpace);

    $wordCloser = $section->addText( $closerTitle, $fontSection, $extraSpace );

    $wordCloserContent = $section->addText( $closerText );

    // Save as Word File
    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save('resume.docx');


    // Save ZIP

    header('Content-Type: application/octet-stream');
    header('Content-disposition: attachment; filename="resume.zip"');

    $fp = popen('zip -r - resume.pdf portfolio.html email.html resume.docx read-me.txt img/email.png img/logo.png img/media.png img/phone.png img/web.png', 'r');

    $bufsize = 8192;
    $buff = '';
    while( !feof($fp) ) {
       $buff = fread($fp, $bufsize);
       echo $buff;
    }
    pclose($fp);
    
}

// Output PDF

elseif($_POST['publish'] == 'Download PDF') {
    
    $mpdf=new mPDF('','letter','0','',0,0,0,0,0,0,'P');
    $mpdf->WriteHTML($htmlPDF);
    $mpdf->SetDisplayMode('fullpage');


    $mpdf->Output();
    
}

?>