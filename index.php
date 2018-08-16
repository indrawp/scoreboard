<!DOCTYPE html>
<html>
<head>
	<title>Scoreboard</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/uikit.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	
	<script type="text/javascript" src="js/uikit.min.js"></script>
	<script type="text/javascript" src="js/uikit-icons.min.js"></script>
	<script type="text/javascript" src="js/jquery.slim.min.js"></script>
	
</head>
<body style="background: #54a0ff; color: #ffffff;">
	<div class="uk-container-expand uk-height-viewport">
		<div class="uk-grid uk-grid-small">
			
			<div class="uk-width-expand"><center>
				<span id="title" style="font-size: 60pt;">
					Perolehan Nilai
					<hr class="uk-divider-icon" style="max-width: 50%">
				</span>

				<span id="timer" style="display: none; font-size: 80pt;">
					<span id="timeUp" style="display: none; font-size: 80pt;">Waktu Habis</span>
					<span id="minuteLeft">00</span>
					<span id="separator"> : </span>
					<span id="secondLeft">00</span>
				</span>
			</center></div>

		</div>

		<div class="uk-grid uk-grid-small uk-text-center">
			
			<div id = "team1" class="uk-width-expand uk-container-center">
				<center><h1 style="color: #ffffff" id="nameTeam1">Tim A</h1></center>
				<div class="uk-inline uk-dark">
		            <input id="file_input1" type="file" onchange="preview_image1(event)" style="display: none;" />
				<img src="img/A.png" id="output_image1" style="max-width: 100%">
		            <div class="uk-overlay-default uk-position-cover" id="button_input1">
		                <div class="uk-position-center">
		                    <span id="score1" style="color: #8395a7; font-size: 8vw;">0</span>
		                </div>
		            </div>
		        </div>
		        <br>
		        <br>
		        <div class="uk-button-group">
			        <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" id="substractScore1"><i class="fa fa-minus" style="color: #ffffff;"></i></button>
			        <input type="number" id="giveScore1" class="uk-width-1-3 uk-margin-small-left uk-margin-small-bottom uk-margin-small-right" style="font-size: medium; text-align: center;">
			        <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" id="addScore1"><i class="fa fa-plus" style="color: #ffffff;"></i></button>
		    	</div>
			</div>

			<div id = "team2" class="uk-width-expand uk-container-center">
				<center><h1 style="color: #ffffff" id="nameTeam2">Tim B</h1></center>
				<div class="uk-inline uk-dark">
		            <input id="file_input2" type="file" onchange="preview_image2(event)" style="display: none;" />
				<img src="img/B.png" id="output_image2" style="max-width: 100%">
		            <div class="uk-overlay-default uk-position-cover" id="button_input2">
		                <div class="uk-position-center">
		                    <span id="score2" style="color: #8395a7; font-size: 8vw;">0</span>
		                </div>
		            </div>
		        </div>
		        <br>
		        <br>
		        <div class="uk-button-group">
			        <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" id="substractScore2"><i class="fa fa-minus" style="color: #ffffff;"></i></button>
			        <input type="number" id="giveScore2" class="uk-width-1-3 uk-margin-small-left uk-margin-small-bottom uk-margin-small-right" style="font-size: medium; text-align: center;">
			        <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" id="addScore2"><i class="fa fa-plus" style="color: #ffffff;"></i></button>
		    	</div>
			</div>

			<div id = "team3" class="uk-width-expand uk-container-center">
				<center><h1 style="color: #ffffff" id="nameTeam3">Tim C</h1></center>
				<div class="uk-inline uk-dark">
		            <input id="file_input3" type="file" onchange="preview_image3(event)" style="display: none;" />
				<img src="img/C.png" id="output_image3" style="max-width: 100%">
		            <div class="uk-overlay-default uk-position-cover" id="button_input3">
		                <div class="uk-position-center">
		                    <span id="score3" style="color: #8395a7; font-size: 8vw;">0</span>
		                </div>
		            </div>
		        </div>
		        <br>
		        <br>
		        <div class="uk-button-group">
			        <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" id="substractScore3"><i class="fa fa-minus" style="color: #ffffff;"></i></button>
			        <input type="number" id="giveScore3" class="uk-width-1-3 uk-margin-small-left uk-margin-small-bottom uk-margin-small-right" style="font-size: medium; text-align: center;">
			        <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" id="addScore3"><i class="fa fa-plus" style="color: #ffffff;"></i></button>
		    	</div>
			</div>

			<div id = "team4" class="uk-width-expand uk-container-center">
				<center><h1 style="color: #ffffff" id="nameTeam4">Tim D</h1></center>
				<div class="uk-inline uk-dark">
		            <input id="file_input4" type="file" onchange="preview_image4(event)" style="display: none;" />
				<img src="img/D.png" id="output_image4" style="max-width: 100%">
		            <div class="uk-overlay-default uk-position-cover" id="button_input4">
		                <div class="uk-position-center">
		                    <span id="score4" style="color: #8395a7; font-size: 8vw;">0</span>
		                </div>
		            </div>
		        </div>
		        <br>
		        <br>
		        <div class="uk-button-group">
			        <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" id="substractScore4"><i class="fa fa-minus" style="color: #ffffff;"></i></button>
			        <input type="number" id="giveScore4" class="uk-width-1-3 uk-margin-small-left uk-margin-small-bottom uk-margin-small-right" style="font-size: medium; text-align: center;">
			        <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" id="addScore4"><i class="fa fa-plus" style="color: #ffffff;"></i></button>
		    	</div>
			</div>

			<div id = "team5" class="uk-width-expand uk-container-center">
				<center><h1 style="color: #ffffff" id="nameTeam5">Tim E</h1></center>
				<div class="uk-inline uk-dark">
		            <input id="file_input5" type="file" onchange="preview_image5(event)" style="display: none;" />
				<img src="img/E.png" id="output_image5" style="max-width: 100%">
		            <div class="uk-overlay-default uk-position-cover" id="button_input5">
		                <div class="uk-position-center">
		                    <span id="score5" style="color: #8395a7; font-size: 8vw;">0</span>
		                </div>
		            </div>
		        </div>
		        <br>
		        <br>
		        <div class="uk-button-group">
			        <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" id="substractScore5"><i class="fa fa-minus" style="color: #ffffff;"></i></button>
			        <input type="number" id="giveScore5" class="uk-width-1-3 uk-margin-small-left uk-margin-small-bottom uk-margin-small-right" style="font-size: medium; text-align: center;">
			        <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" id="addScore5"><i class="fa fa-plus" style="color: #ffffff;"></i></button>
		    	</div>
			</div>
		</div>

		<br>
		<center>
			<div id="timerControl" class="uk-button-group"  style="display: none;">
			        
			        <input type="number" id="giveMinute" class="uk-width-1-3 uk-margin-small-left uk-margin-small-bottom uk-margin-small-right" style="font-size: medium; text-align: center;">
					<span id="timerInfo"><h2 style="color: #ffffff;">:</h2></span>
					<input type="number" id="giveSecond" class="uk-width-1-3 uk-margin-small-left uk-margin-small-bottom uk-margin-small-right" style="font-size: medium; text-align: center;">
			        &nbsp;&nbsp;

			        <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" id="startTime"><i class="fa fa-play" style="color: #ffffff;"></i></button>
			        &nbsp;&nbsp;

			        <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" id="resetTime" style="display: none;"><i class="fa fa-repeat" style="color: #ffffff;"></i></span></button>
		    </div>
		    <br>
			<button class="uk-button uk-button-default uk-margin-small-bottom" id="showTimer" style="color: #ffffff;">Tampilkan Timer</button>
			<button class="uk-button uk-button-default uk-margin-small-bottom" id="hideTimer" style="color: #ffffff; display: none;">Sembunyikan Timer</button>
			<br>
			<button class="uk-button uk-button-default uk-margin-small-bottom" id="toggle1" style="color: #ffffff;">A</button>
			<button class="uk-button uk-button-default uk-margin-small-bottom" id="toggle2" style="color: #ffffff;">B</button>
			<button class="uk-button uk-button-default uk-margin-small-bottom" id="toggle3" style="color: #ffffff;">C</button>
			<button class="uk-button uk-button-default uk-margin-small-bottom" id="toggle4" style="color: #ffffff;">D</button>
			<button class="uk-button uk-button-default uk-margin-small-bottom" id="toggle5" style="color: #ffffff;">E</button>

		</center>

	</div>
	
	<script type="text/javascript">
		$('#nameTeam1').on('click', function() {
	    	var name = prompt("Masukkan Nama Tim 1");
	    	console.log(name);
	    	if (name !== null && name.trim() !== "") {
	    		$('#nameTeam1').html(name);
	    	}
		});

		$('#nameTeam2').on('click', function() {
	    	var name = prompt("Masukkan Nama Tim 2");
	    	console.log(name);
	    	if (name !== null && name.trim() !== "") {
	    		$('#nameTeam2').html(name);
	    	}
		});

		$('#nameTeam3').on('click', function() {
	    	var name = prompt("Masukkan Nama Tim 3");
	    	console.log(name);
	    	if (name !== null && name.trim() !== "") {
	    		$('#nameTeam3').html(name);
	    	}
		});

		$('#nameTeam4').on('click', function() {
	    	var name = prompt("Masukkan Nama Tim 4");
	    	console.log(name);
	    	if (name !== null && name.trim() !== "") {
	    		$('#nameTeam4').html(name);
	    	}
		});

		$('#nameTeam5').on('click', function() {
	    	var name = prompt("Masukkan Nama Tim 5");
	    	console.log(name);
			if (name !== null && name.trim() !== "") {
	    		$('#nameTeam5').html(name);
	    	}
		});

		$('#button_input1').on('click', function() {
	    $('#file_input1').trigger('click');
	    
		});

		$('#button_input2').on('click', function() {
	    $('#file_input2').trigger('click');
	    
		});

		$('#button_input3').on('click', function() {
	    $('#file_input3').trigger('click');
	    
		});

		$('#button_input4').on('click', function() {
	    $('#file_input4').trigger('click');
	    
		});

		$('#button_input5').on('click', function() {
	    $('#file_input5').trigger('click');
	    
		});

		function preview_image1(event) 
		{
		 var reader = new FileReader();
		 reader.onload = function()
		 {
		  var output = document.getElementById('output_image1');
		  output.src = reader.result;
		 }
		 reader.readAsDataURL(event.target.files[0]);
		}

		function preview_image2(event) 
		{
		 var reader = new FileReader();
		 reader.onload = function()
		 {
		  var output = document.getElementById('output_image2');
		  output.src = reader.result;
		 }
		 reader.readAsDataURL(event.target.files[0]);
		}

		function preview_image3(event) 
		{
		 var reader = new FileReader();
		 reader.onload = function()
		 {
		  var output = document.getElementById('output_image3');
		  output.src = reader.result;
		 }
		 reader.readAsDataURL(event.target.files[0]);
		}

		function preview_image4(event) 
		{
		 var reader = new FileReader();
		 reader.onload = function()
		 {
		  var output = document.getElementById('output_image4');
		  output.src = reader.result;
		 }
		 reader.readAsDataURL(event.target.files[0]);
		}

		function preview_image5(event) 
		{
		 var reader = new FileReader();
		 reader.onload = function()
		 {
		  var output = document.getElementById('output_image5');
		  output.src = reader.result;
		 }
		 reader.readAsDataURL(event.target.files[0]);
		}

		$('#addScore1').on('click', function() {
			if ($('#giveScore1').val() && $.isNumeric($("#giveScore1").val())) {
				$add = parseInt($("#score1").text()) + parseInt($("#giveScore1").val());
		    	$('#score1').html($add);
	    	}
		});

		$('#substractScore1').on('click', function() {
			if ($('#giveScore1').val() && $.isNumeric($("#giveScore1").val())) {
				$substract = parseInt($("#score1").text()) - parseInt($("#giveScore1").val());
		    	$('#score1').html($substract);
	    	}
		});

		$('#addScore2').on('click', function() {
			if ($('#giveScore2').val() && $.isNumeric($("#giveScore2").val())) {
				$add = parseInt($("#score2").text()) + parseInt($("#giveScore2").val());
		    	$('#score2').html($add);
	    	}
		});

		$('#substractScore2').on('click', function() {
			if ($('#giveScore2').val() && $.isNumeric($("#giveScore2").val())) {
				$substract = parseInt($("#score2").text()) - parseInt($("#giveScore2").val());
		    	$('#score2').html($substract);
	    	}
		});

		$('#addScore3').on('click', function() {
			if ($('#giveScore3').val() && $.isNumeric($("#giveScore3").val())) {
				$add = parseInt($("#score3").text()) + parseInt($("#giveScore3").val());
		    	$('#score3').html($add);
	    	}
		});

		$('#substractScore3').on('click', function() {
			if ($('#giveScore3').val() && $.isNumeric($("#giveScore3").val())) {
				$substract = parseInt($("#score3").text()) - parseInt($("#giveScore3").val());
		    	$('#score3').html($substract);
	    	}
		});

		$('#addScore4').on('click', function() {
			if ($('#giveScore4').val() && $.isNumeric($("#giveScore4").val())) {
				$add = parseInt($("#score4").text()) + parseInt($("#giveScore4").val());
		    	$('#score4').html($add);
	    	}
		});

		$('#substractScore4').on('click', function() {
			if ($('#giveScore4').val() && $.isNumeric($("#giveScore4").val())) {
				$substract = parseInt($("#score4").text()) - parseInt($("#giveScore4").val());
		    	$('#score4').html($substract);
	    	}
		});

		$('#addScore5').on('click', function() {
			if ($('#giveScore5').val() && $.isNumeric($("#giveScore5").val())) {
				$add = parseInt($("#score5").text()) + parseInt($("#giveScore5").val());
		    	$('#score5').html($add);
	    	}
		});

		$('#substractScore5').on('click', function() {
			if ($('#giveScore5').val() && $.isNumeric($("#giveScore5").val())) {
				$substract = parseInt($("#score5").text()) - parseInt($("#giveScore5").val());
		    	$('#score5').html($substract);
	    	}
		});

		var out;
		var x;

		function timerStart(){

			if ( ( ( $('#giveMinute').val() || $('#giveSecond').val() ) && ( $.isNumeric($("#giveMinute").val()) || $.isNumeric($("#giveSecond").val()) ) ) ) {

				$('#startTime').hide();
				$('#resetTime').show();

				if($('#giveMinute').val()){
					var minutes = $('#giveMinute').val() * 1000 * 60;
					console.log(minutes);
				}else{
					var minutes = 0;
				}

				if($('#giveSecond').val()){
					var seconds = $('#giveSecond').val() * 1000;
					console.log(seconds);
				}else{
					var seconds = 0;
				}

				out = setTimeout(function(){
					$('#timeUp').show();
					
					$('#minuteLeft').hide();
					$('#separator').hide();
					$('#secondLeft').hide();
					
					$('#resetTime').hide();
					$('#startTime').show();

					console.log("set");
				}, minutes+seconds);

				var countDown = new Date().getTime()+minutes+seconds;
				x = setInterval(function() {
					
					var left = countDown - new Date().getTime();

					var minutes_remaining = Math.floor((left % (1000 * 60 * 60)) / (1000 * 60));
    				var seconds_remaining = Math.floor((left % (1000 * 60)) / 1000);

    				if (minutes_remaining>=10 && minutes_remainin>0){
    					$('#minuteLeft').html(minutes_remaining);
    				}
    				else if(minutes_remaining>=0){
    					$('#minuteLeft').html("0"+minutes_remaining);
    				}

    				if (seconds_remaining>=10 && seconds_remaining>0){
    					$('#secondLeft').html(seconds_remaining);
    				}
    				else if(seconds_remaining>=0){
    					$('#secondLeft').html("0"+seconds_remaining);
    				}    				

					if (left < 0) {
			        	clearInterval(x);
			    	}
				}, 100);

			}
		}

		function timerStop(){
			clearTimeout(out);
			clearInterval(x);
			
			$('#timeUp').hide();
			$('#minuteLeft').show();
			$('#separator').show();
			$('#secondLeft').show();
			console.log("zero");

		}		

		$('#showTimer').on('click', function() {
			$('#showTimer').hide();

			if('#timeUp:visible'){
				timerStop();
			}

			$('#title').hide();
			$('#timer').show();
			$('#hideTimer').show();
			$('#timerControl').show();

		});

		$('#hideTimer').on('click', function() {
			$('#showTimer').show();

			$('#timer').hide();
			$('#title').show();
			$('#hideTimer').hide();
			$('#timerControl').hide();
		});

		$('#toggle1').on('click', function() {
			$('#team1').toggle();
		});

		$('#toggle2').on('click', function() {
			$('#team2').toggle();
		});

		$('#toggle3').on('click', function() {
			$('#team3').toggle();
		});

		$('#toggle4').on('click', function() {
			$('#team4').toggle();
		});

		$('#toggle5').on('click', function() {
			$('#team5').toggle();
		});

		$('#startTime').on('click', function() {
			timerStop();
			timerStart();
		});

		
		$('#resetTime').on('click', function() {
			$('#resetTime').hide();
			$('#startTime').show();
			timerStop();
		});



	</script>
</body>
</html>