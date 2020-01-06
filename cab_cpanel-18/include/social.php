<style type="text/css">
	@media (min-width: 320px) and (max-width: 420px){
.r1{
  margin-top: 260px!important;
  font-size: 15px;
  padding: 0px;
  }
  .r2{
  margin-top: 365px!important;
  font-size: 15px;
  padding: 0px;
  }
}
#mySidenav a {
  position: absolute;
  left: -150px;
  transition: 0.3s;
  padding: 10px;
  width: 220px;
  text-decoration: none;
  font-size: 15px;
  color: white;
  border-radius: 0 5px 5px 0;
  z-index: 100;
}
.yoyo
 {
  position: absolute;
  left: -150px;
  transition: 0.3s;
  padding: 9px;
  width: 220px;
  text-decoration: none;
  font-size: 15px;
  color: white;
  border-radius: 0 5px 5px 0;
  z-index: 100;
}

#mySidenav a:hover {
  left: 0;
}

#about {
  top: 325px;
  background-color: #BB1B21;
}

#blog {
  top: 320px;
  background-color: #005476;
}

#rotate{
 
  transform:rotate(7deg);
  -ms-transform:rotate(90deg); /* IE 9 */
  -moz-transform:rotate(90deg); /* Firefox */
  -webkit-transform:rotate(90deg); /* Safari and Chrome */
  -o-transform:rotate(90deg); /* Opera */
}
input#rotate {
    margin-top: 332px;
    margin-left: -41px;
    z-index: 2;
    position: fixed;
}
    

button,
input{
  display: inline-flex;
  flex-direction: column;
  justify-content: center;
  background-color: orange;
  
  top: 0;
  cursor:pointer;
  height:50px;
  min-width: 100px;
  position:relative;
  
  border: 1px solid #333;
  border-radius: 5px;
  

  font-size: 20px;
}

input:hover{box-shadow:0px 0px 4px #fff;}
input:active{top:1px;}

#rotate1{
 
  transform:rotate(7deg);
  -ms-transform:rotate(90deg); /* IE 9 */
  -moz-transform:rotate(90deg); /* Firefox */
  -webkit-transform:rotate(90deg); /* Safari and Chrome */
  -o-transform:rotate(90deg); /* Opera */
}
input#rotate1 {
    margin-top: 458px;
    margin-left: -36px;
    z-index: 2;
    position: fixed;
    background-color: #005476;
}
    

button,
input{
  display: inline-flex;
  flex-direction: column;
  justify-content: center;
  color: white;
  background-color: #BA151B;
  
  top: 0;
  cursor:pointer;
  height:50px;
  min-width: 100px;
  position:relative;
  
  border: 1px solid #333;
  border-radius: 5px;
  

  font-size: 20px;
}

input:hover{box-shadow:0px 0px 4px #fff;}
input:active{top:1px;}

/* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  transition: top 0.3s;
}

/* Style the icon bar links */
.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}
.icon-bar {
    top: 63%;
    margin-left: 1300px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    z-index: 2;
}
#mySidenav a {
  position: absolute;
  left: -150px;
  transition:auto;
  padding: 10px;
  width: 220px;
  text-decoration: none;
  font-size: 15px;
  color: white;
  border-radius: 0 5px 5px 0;
  z-index: 100;
}
.yoyo
 {
  position: absolute;
  left: -150px;
  transition: auto;
  padding: 9px;
  width: 220px;
  text-decoration: none;
  font-size: 15px;
  color: white;
  border-radius: 0 5px 5px 0;
  z-index: 100;
}

#mySidenav a:hover {
  left: 0;
}

#about {
  top: 325px;
  background-color: #BB1B21;
}

#blog {
  top: 320px;
  background-color: #005476;
}
.navbar-nav li {
    margin-left: 1%;
}

</style>
<body>
 <a href="datatable.php"><input type="button" value="Find Dev Officer" class="r1" id="rotate"/></a>
  <a href="agentdata.php"><input type="button" value="Find LIC Agent" class="r2" id="rotate1"/></a>
<!-- <div id="mySidenav" class="sidenav">
  <a href="datatable.php" id="about" class="text-center yoyo">Find LIC Dev Officer <i class="fas fa-users ml-4"></i></a>
  <a href="agentdata.php" id="blog" class="text-center mt-5 pl-4">Find  LIC  Agent<i class="fas fa-users ml-5"></i></a>

</div> -->

<div class="icon-bar">
  <a href="https://www.facebook.com/Chalo-Agent-Bano-107278557438701/?modal=admin_todo_tour" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://twitter.com/BanoAgent" class="twitter"><i class="fa fa-twitter"></i></a> 
  <!-- <a href="#" class="google"><i class="fa fa-google"></i></a>  -->
  <a href="https://www.linkedin.com/company/chalo-agent-bano" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="https://www.youtube.com/channel/UCkUiy4OL2GphLD3pv_lUB9g?guided_help_flow=3&disable_polymer=true " class="youtube"><i class="fa fa-youtube"></i></a> 
</div>

</body>
