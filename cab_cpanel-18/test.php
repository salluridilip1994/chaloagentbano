<!DOCTYPE html>
<html>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TGWMHSH');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async
src="https://www.googletagmanager.com/gtag/js?id=UA-154808888-1"></script>
<script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'UA-154808888-1');
</script>
	<title>sample</title>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.0/css/mdb.min.css" rel="stylesheet">
</head>
<style type="text/css">
#rotate{
vertical-align:top;
transform:rotate(360deg);
-ms-transform:rotate(180deg); / IE 9 /
-moz-transform:rotate(180deg); / Firefox /
-webkit-transform:rotate(180deg); / Safari and Chrome /
-o-transform:rotate(180deg); / Opera /}

#vert{
height: auto;
min-width: auto;
}

button,
input{
display: inline-flex;
flex-direction: column;
justify-content: center;
align-items: center;
align-self: center;

cursor:pointer;
height:50px;
min-width: 100px;
position:relative;
transform:rotate(180deg);
border: 1px solid #333;
border-radius: 5px;
padding: 0 10px;	

font-size: 20px;
}

input:hover{box-shadow:0px 0px 4px #fff;}
input:active{top:1px;}

body{background-color:#222;}

.button-container {
display: grid;
grid-gap: 40px;
grid-template-columns: repeat(3,1fr);
justify-items: center;
width: 400px;	
padding: 40px 0;
margin: 0 auto;
}
</style>
<?php include_once('include/header.php');?>
<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGWMHSH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="button-container">
<input type="button" value="Rotated text" id="rotate" />
	<button id="vert"></button>
<input type="button" value="Default" />        
</div>

<script type="text/javascript">
	var vert = 'vertical'.split("").join("<br/>")
$('#vert').html(vert)
</script>
</body>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.0/js/mdb.min.js"></script>
</html>