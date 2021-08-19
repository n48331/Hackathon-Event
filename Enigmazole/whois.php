<!DOCTYPE HTML>

<html>
	<head>
		<title>Who am I</title>
		<link rel="icon" href="images/logo.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
		<script type="text/javascript">

            $(document).ready(function(){
                
				// txt_ans
                // $("#txt_ans").keyup(function(){
					$("#but_submit").click(function(){
                    var ans = $("#txt_ans").val().trim();
            
                    if(ans != ''){
            
                       
            
                        $.ajax({
                            url: 'assets/php/ajaxfile.php',
                            type: 'post',
                            data: {ans: ans},
                            success: function(response){
                
                                $('#uname_response').html(response);
                
                             }
                        });
                    }else{
                        $("#uname_response").html("");
                    }

                });

            });
        </script>
	
	
	</head>
	<body>


			
	<!-- <div id="particles-js"></div> -->



		<!-- Header -->
			<header id="header">
				<div><img src="images/logo.png" class="logo" width="8%">
					
				</div>
				<!--    /'.    /|    .'\
           ,._   |+i\  /++\  / +|    ,,
           |*+'._/+++\/+ ++\/+++<_.-'+|
      :-.  \ ++++?++ +++++*++++++ +++ /  .-:
      |*+\_/++++ +++*++ ++++++ ++?++++\_/ +|
  ,    \*+++++ ++++ +++*+++ ++++ +++ +++++/   ,
  \'-._> +__+*++__*+++_+__*++ ++__++++__*<_.-'/
   `>*+++|  \++/  |+*/     `\ +|  |++/  |++++<'
_,-'+ * +*\  \/  /++|__.-.  |+ |  |+/  /+ +*+'-._
'-.*+++++++\    /+ ++++++/  / *|  |/  /+ ++++++.-'
    > *+++++\  /*++++ +/` /`+++|     < *++ +++< 
_,-'* +++ ++|  |++ +*/` /` +* +|  |\  \+ ++++++'-._
`-._+ +*++?+|  |+++*|  '-----.+|  |+\  \+* ++ +_.-'
   _`\++++++|__|+ *+|________|+|__|++\__|++++/`_
  /*++_+* + +++++ ++ + ++++ +++++ ++ ++++ ++_+*+\
  '--' `>*+++ +++++ +++++*++++  +++ ++++ ?<' '--'
       /++_++ ++ ++++++ ++?+ +++++*+++ ++++ \
       |_/ `\++ ++ +++*++++++++++ ++++*./`\_|
            /+*.-.*+ +_ ++*+ _+++ .-.* +\
            | /   | +/ `\?+/` \*+|    \ |
             '    \.'    |/    './     ' -->
			</header>


		<!-- Main -->
			<section id="main">
				<div class="inner">

				<!-- One -->
					<section id="one" class="wrapper style1">

						<!-- <div class="image fit flush">
							<img src="images/pic02.jpg" alt="" />
						</div> -->
						<header class="special">
							<h2>Nothing is more exciting than solving clues</h2>
							<h3>2-2x2÷2+2 names here</h3>
						</header>
						<div class="content">
							<img src="images/who.png" class="center" width="40%">
						</div>
						
						
					</section>
					

<!-- Two -->
<section id="two" class="wrapper style1">
	<header>
		<!-- assets/php/check.php -->
		<form name = 'myform' method="post" action="">
			<input type="text" class= "pixel-input" name="txt_ans" id="txt_ans" placeholder="check your answer here" >
			<button type="button" class="submitbutton" name="but_submit" id="but_submit" >Check</button>
			
		  </form>
		  <div id="uname_response" ></div>
		  <!-- <script type="text/javascript" src="assets/js/ans.js"></script> -->

	</header>	
</section>
			<script type="text/javascript" src="assets/js/particles.js"></script>
	
			<script type="text/javascript" src="assets/js/app.js"></script>

	</body>
</html>
