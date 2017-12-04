<?php
function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LenYykUAAAAAHEkloeUQ2sM_5kVKHcrht3NzGne',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked - Fallback validation
        // echo '<p style="color: red; padding: 10px; border: 1px solid red; background-color: white; float: left;"><b>Submission Unsuccessful</b><br />Please refresh and make sure you check the security CAPTCHA box.</p><br>';

        // All error checking is handled on the front end. No need for this.

    } else {

    error_reporting(E_ALL ^ E_NOTICE);

    // set a variable to hold g-recaptcha-response so you can 
    // leave it out of the email body when message is composed
    if (isset($_POST['g-recaptcha-response'])) { 
        $captcha = $_POST['g-recaptcha-response'];
    }

    $my_email = "swnuccio@yahoo.com";
	// for testing...
	// $my_email = "robert@robertmeans.com";

    // to let visitor fill in the "from" field leave string below empty 
    $from_email = "";

    $errors = array();

    if (count($_COOKIE)) {
        foreach(array_keys($_COOKIE) as $value) {
            unset($_REQUEST[$value]);
        }
    }

    if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) {
        $_REQUEST['email'] = trim($_REQUEST['email']);
        if (substr_count($_REQUEST['email'],"@") != 1 || stristr($_REQUEST['email']," ") || stristr($_REQUEST['email'],"\\") || stristr($_REQUEST['email'],":")) {
            $errors[] = "Email address is invalid";
        } else {
            $exploded_email = explode("@",$_REQUEST['email']);
            if (empty($exploded_email[0]) || strlen($exploded_email[0]) > 64 || empty($exploded_email[1])) {
                $errors[] = "Email address is invalid";
            } else {
                if (substr_count($exploded_email[1],".") == 0) {
                    $errors[] = "Email address is invalid";
                } else {
                    $exploded_domain = explode(".",$exploded_email[1]);
                    if (in_array("",$exploded_domain)) {
                        $errors[] = "Email address is invalid";
                    } else {
                        foreach ($exploded_domain as $value) {
                            if (strlen($value) > 63 || !preg_match('/^[a-z0-9-]+$/i',$value)) {
                                $errors[] = "Email address is invalid"; 
                                break;
                            }
                        }
                    }
                }
            }
        }

    }

    if (!(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))) {
        $errors[] = "There are many other scripts out there that are much easier to hijack. Please leave this one alone.";
    }

    function recursive_array_check_blank($element_value) {
        global $set;

        if (!is_array($element_value)) { 
            if (!empty($element_value)) {
                $set = 1;
            }
        } else {
            foreach($element_value as $value) {
                if($set) {
                    break;
                } recursive_array_check_blank($value);
            }
        }
    }

    recursive_array_check_blank($_REQUEST);

    if (!$set) {
        $errors[] = "<script>alert('\\n\\nYou cannot submit a blank form.');window.location.replace('index.php');</script>";
    }

    unset($set);

    if (count($errors)){
        foreach($errors as $value){
            print "$value<br>";
        } exit;
    }

    if (!defined("PHP_EOL")){
        define("PHP_EOL", strtoupper(substr(PHP_OS,0,3) == "WIN") ? "\r\n" : "\n");
    }

    function build_message($request_input){
        if (!isset($message_output)) {
            $message_output ="";
        } if (!is_array($request_input)) {
            $message_output = $request_input;
        } else {
            foreach($request_input as $key => $value) {
                // check that the key of the $_POST variable is not the
                // g-recaptcha-response before adding it to the message
                if ($key != 'g-recaptcha-response') {

                    if(!empty($value)) {
                        if (!is_numeric($key)) {
                            $message_output .= str_replace("_"," ",ucfirst($key)).": ".build_message($value).PHP_EOL.PHP_EOL;
                        } else {
                            $message_output .= build_message($value).", ";
                        }
                    }
                }
            }   
        } return rtrim($message_output,", ");
    }

    $message = build_message($_REQUEST);
    $message = $message . PHP_EOL.PHP_EOL."".PHP_EOL."";
    $message = stripslashes($message);
    $subject = "Message from Rookies.com Website";
    $subject = stripslashes($subject);

    if ($from_email) {
        $headers = "From: " . $from_email;
        $headers .= PHP_EOL;
        $headers .= "Reply-To: " . $_REQUEST['email'];
        } else {
            $from_name = "";
            if (isset($_REQUEST['name']) && !empty($_REQUEST['name'])) {
                $from_name = stripslashes($_REQUEST['name']);
            }

        $headers = "From: {$from_name} <{$_REQUEST['email']}>"."\r\n";
        /* BCC if needed */
        // $headers .= "BCC: your@email.com\r\n";

        }

        mail($my_email,$subject,$message,$headers);

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	
	<title>Rookies - Batting Cages in Evergreen, Colorado</title>
	<link rel="icon" type="image/ico" href="_images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		html, body {
		    height: 100%;
		}
		body {
			font-family: Tahoma, sans-serif;
			background: #313131;
		    margin: 0;
		    color: #fff;
		    background: url(_images/rookies-logo-bkg-03.png) fixed repeat;
		}
		.flex-container {
		    height: 100%;
		    padding: 0;
		    margin: 0;
		    display: -webkit-box;
		    display: -moz-box;
		    display: -ms-flexbox;
		    display: -webkit-flex;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		}
		.row {
		    width: auto;
		}
		.flex-item {
		    width: 90%;
		    max-width: 350px;
		    line-height: 1.4em;
		    padding: 20px 40px;
		    border: 1px solid #fff;
		    border-radius: 8px;
		    background: rgba(0,0,0,0.2);
		    box-sizing: border-box;
		}
		a {
			display: block;
			margin-top: 1.5em;
			color: inherit;
			text-decoration: none;
		}
		a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
<div class="flex-container">
<!--     <div class="row">  -->
        <div class="flex-item">
        	<p>Your message was sent successfully!</p>
        	<p>We will see it soon.</p>
        	<p><a href="http://www.rookiesevergreen.com">Back</a></p>
        </div>
<!--     </div> -->
</div>
	<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>