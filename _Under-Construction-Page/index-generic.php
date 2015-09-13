<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link rel="icon" type="image/ico" href="http://www.this_new_site.com/_images/favicon.ico"> uncomment once favicon is in place -->
<title>ABC Company, Inc.</title>
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<link href="_css/under_construction_styles.css" rel="stylesheet" type="text/css" />

<script language="Javascript">
<!--
function rUSure() {
	if (confirm("Are you sure you want to delete all of the information you have entered?")) {
		document.forms[0].reset();
		document.forms[0].name.focus();
}	else	{

			}
}
//-->
</script>
</head>

<body onload="document.forms[0].name.focus();">
<div id="page">

    <div id="header"><img src="drafts/_images/header_01.jpg" /></div>
    
  	<div id="leftContent">
        <h2>Tag line attention grabber slogan jingle</h2>
        <ul>
        <li>Add some basic information about your company here.</li>
        <li>Services, Grand Opening date, etc.</li>
        <li>Use this area for whatever information you want to display while your site is being built.</li>
        <li>You don't have to use bullet points.</li>
        <li>They do convey information quickly and concisely though.</li>
        </ul>
      
  	</div>
    
  	<div id="rightContent">While our Website is under construction please feel free to contact us for more information.<br /><br />

    <form action="formmail.php" method="post" id="contactForm" onSubmit="return validateEmail(document.forms[0].email.value);">
        
    <ul>
        <li>
          <label class="text" for="name">Name</label>
          <input name="name" type="text" id="name" tabindex="10" />
        </li>
        <li>
          <label class="text" for="email">Email</label>
          <input name="email" type="email" id="email" tabindex="20" />
        </li>
        <li>
          <label class="text" for="comments">Comments</label>
          <textarea name="comments" id="comments" tabindex="30"></textarea>
        </li>
        <li>
            <input id="send" type="submit" value="Send" tabindex="40" /><input id="clear" type="button" value="Clear" onClick="rUSure()" tabindex="50" />
        </li>
        
    </ul> 
    
    </form>

    </div>
    
<?php include 'footer.php'; ?>

</div><!-- #page -->

</body>
</html>