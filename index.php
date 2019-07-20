<?php

$name = $email = $date = $subject = $class = $question ="";
$nameErr = $emailErr = $dateErr = $subjectErr = $classErr = $questionErr ="";

if(isset($_POST['submit'])){
	
    if(empty($_POST['name'])){
	    $nameErr = "<br/>*Name is required";
	    }else{
	        $name = input($_POST['name']);
    
	    if(preg_match("/[^\w]/", $name)){
		    $nameErr= "Only letters and whitespace allowed";
	}
	}
	///////////////////////////////////////////////////
	if(empty($_POST['email'])){
	    $emailErr= "<br/>*Email is required";
		
	}else{
		$email = input($_POST['email']);
        
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailErr = "<br/>Invalid email address";
	    }
	}
		
	if(empty($_POST['date'])){
		$dateErr= "<br/>Enter date";
	    }else{
			$date = input($_POST['date']);
	}
	
	if(empty($_POST['subject'])){
		$subjectErr= "<br/>include subject";
	    }else{
			$subject = input($_POST['subject']);
    }
	    if(preg_match("/[^\w]/", $subject)){
			$subjectErr = "Only letters , numbers and white space allowed";
		}
		
	if(empty($_POST['class'])){
		$classErr = "<br/>include class";
	    }else{
			$class = input($_POST['class']);
    }
	    if(preg_match("/[^\w]/", $class)){
			$classErr= "Only letters , number and white space allowed";
	}

    if(empty($_POST['question'])){
		$questionErr = "";
	    
		}else{
			$question = input($_POST['question']);
	    }
	
	
	    $to = 'DADESUNLORO@YAHOO.COM';
		    $mail_subject = 'Homework website';
		    $body = ($name.$subject.$date.$class.$question).("\r\n");
		    $headers = $email;
	    
		if(mail($to , $mail_subject , $body , $headers) && !($nameErr) && !($emailErr)&& !($subjectErr)&& !($classErr)&& !($dateErr)){
			
			$success = '<div class="alert alert-success"><strong>"Your question has been sent. we will get back to you as soon as possible"</strong></div>';
		   
		}else{
		    
			if($result  = ($nameErr && $emailErr && $dateErr && $nameErr && $subjectErr)){	
			$error = '<div class=" alert alert-danger"><strong>Sorry, there was a errors submitting your questions. kindly fix it and try again.</strong></div>';
		    }
		
		}
    }
    
		
	function input($data){
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  $data = htmlentities($data);
	  return $data;
	}

?>

<?
////////////////////////////////////////////////////////////////

If($_SERVER["REQUEST_METHOD"]=="POST"){

	if(empty($_POST["email"])){
		
		$contributeErr = "Emial is required";
	
	    }else{
		
		$contribute = inputTwo($_POST['contribute']);
			
	    if(!filter_var($contribute, FILTER_VALIDATE_EMAIL)){
			
			$contributeErr = "Enter a valid email address";
	    }

	}
 
    $to = 'dadesunloro@yahoo.com';
    $subject = 'CONTRIBUTOR AT HOME WORK WEBSITE';
    $body = "willing to contribute to answer questions on the home work page or website";
    $headers = "FROM".$contribute;
    if(mail($to,$subject,$body,$headers) && !($contributeErr)){
	
	$success_two =  '<div class="alert alert-success"><strong>"Thanks for volunteering. we will be in touch"</strong></div>';
	
}else{
	
	if($result = $contributeErr){
	$error_two = '<div class=" alert alert-danger"><strong>Sorry,there was an error try again.</strong></div>';
    }    
}

}

function inputTwo($asset){
	$asset = stripslashes($asset);
	$asset = htmlentities($asset);
	$asset = trim($asset);
	$asset = htmlspecialchars($asset);
	
	return $asset;
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Latest compiled and minified CSS -->
	<title>Home work</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="http://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Alegreya:700" rel="stylesheet" type="text/css" />

 </head>
 <style>
    
	body{
		
		height : 100%;
	}
    .box{
		border : 1px solid black;
		border-radius : 10px;
		margin-top : 20px;
		background-color : #F7F7F7;
	}
	
	form{
		padding-bottom : 30px;
		padding-top: 30px;	
	}
	
	.head{
		background-color : #F7F7F7;
	}
	
	
	.centerH{
	    background-color : ;
	    text-align : center;
	    font-family: 'Alegreya', serif;
        font-weight: 700;
        line-height: 46px;
        font-size: 53px;
        margin:;
	}
	
	.summary{
		background-color :;
		margin-top : 20px;
		text-align : center;
		color : #070000;
		
	}
	
	p{
	    font-family: 'Alice', serif;
	    font-size: 20px;
	    line-height: 23px;
	    margin: 0 0 23px 0;
	    background-color : #F7F7F7;

	}
	
	 .form-group{
		text-align : center;
		margin-top : ;
		background-color : #F7F7F7;
		color : #020204;
		font-family: 'Alice', serif;
	}
	
	.contribute, h4{
		text-align : center;
		font-family: 'Alice', serif;
		color : #070000;
	}
	
	.form-inline{
		padding-top : 15px;
		font-size : 20px;
	}
	
	.panel-footer{
		text-align : center;
		font-weight : bold;
		font-family: 'Alice', serif;
		background-color : black;
		color : #FFFFFF;
	}
	
	.error{
		color : red;
	}
	
	textarea {
    resize: vertical;
	max-height : 250px;
    }
	
	.alert{
		text-align : center;
	}

 </style>
 <body>
    <div class = "container">
	    <div class = "container head">
	    <div class = 'row'>
		   <div class = "col-md-4">
		        <div class = "imgleft">
				    <img src="homework02.jpg" class="img-rounded center-block" alt="clip art" width="320" height="200">
		        </div> 
		    </div>
		   
		   <div class = "col-md-4">
		        <div class = "centerH">
				    <H1> NEED HELP WITH SCHOOL HOME WORK? </H1>
		        </div>    
			</div>
		   
		   <div class = "col-md-4">
		        <div class = "imgright">
			        <img src="homework01.jpg" class="img-rounded center-block" alt="clip art" width="320" height="200">
		        </div> 
			</div>
		</div>
<!-------------------------------------------------ABOUT SECTION-------------------------------------->		
		<div class = 'row'>
		   <div class = "col-md-8 col-md-offset-2">
		        <div class = "summary">
				    <p>
					My goal is to help you with your school home work or assignment. As of present I can only help  Middle school, junior & High school students 
					with mathematics,research paper and computer related topics.  That been said , I am also looking
                    for contributors from all level of educations who can answer questions that I do not have the answer to so, its a work in progress.
					
				    </p>
			    </div>	
		    </div> 
		</div>
		</div>
<!--------------------------------------------------- REQUEST SECTION----------------------------------------------------->		 
	    <div class = "row">
		    <div class = "col-md-12 box">
			<?php echo $success;?> <?php echo $error;?>
				<form action = "index.php" method = "POST" class = "form-horizontal">
				<div class = "row">
				<div class = "col-md-6">
				    <div class = "form-group">
					    <label for = "name"> NAME </label>
						<input type = "text" placeholder = "Your Name " class = "form-control" name = "name" value = "<?php echo $name; ?>"/>
						<span class = "error"><?php echo $nameErr;?></span>
				    </div>
				</div>	
				
				<div class = "col-md-6">
					<div class = "form-group">
					    <label for = "email"> EMAIL </label>
						<input type = "email" placeholder = "youremail@something.com"value = "<?php echo $email;?>" class = "form-control" name = "email"/>
						<span class = "error"><?php echo $emailErr;?></span>
				    </div>
				</div>
				</div>
				
				
					
				<div class = "col-md-4">	
					<div class = "form-group">
					    <label for = "subject"> SUBJECT </label>
						<input type = "text" placeholder = "Mathematics" class = "form-control" name = "subject" value = "<?php echo $subject; ?>"/>
						<span class = "error"><?php echo $subjectErr;?></span>
				    </div> 
				</div>	
				
				<div class = "col-md-4">	
					<div class = "form-group">
					    <label for = "subject"> DATE ASSIGNMENT DUE</label>
						<input type = "date" value = "<?php echo $date; ?>" class = "form-control" name = "date"/>
						<span class = "error"><?php echo $dateErr;?></span>
				    </div>
				</div>
				
                <div class = "col-md-4">     
					<div class = "form-group">
					    <label for = "class"> CLASS</label>
						<input type = "text" class = "form-control" placeholder =" Freshmen Or Grade 10 Or Grade 11 Or Grade 12"name = "class" value = "<?php echo $class; ?>"/>
						<span class = "error"><?php echo $classErr;?></span>
				    </div> 
				</div>	
				
				<div class = "col-md-8 col-md-offset-2">
	                <div class = "form-group">
					    <label for = "question"> YOUR QUESTION BELOW </label>
						<textarea type = "text" class = "form-control" placeholder = "For example : (2x + 3y)(x - 9y) = 4" rows = "10px" cols = "20px" name = "question" value = "<?php echo $question; ?>"/></textarea>
				    </div> 
                </div>					
				
				<div class = "col-md-6 col-md-offset-3">
					<div class = "form-group">
						<input type = "submit" value = "submit" class = "btn btn-success btn-lg btn-block btn-primary" name = "submit"/>
						
				    </div> 
				</div>
					
				</form>
		    </div>
	    </div>
<!----------------------------------------------------------------CONTRIBUTE SECTION----------------->        
		<div class = 'row'>
		   <div class = "col-md-8 col-md-offset-2 contribute">
		        <span class = "error"><?php echo $success_two;?><?php echo $error_two?></span>
				    <h3>
					Looking for contributors in all areas of educational level.
					If you have the time to contribute and answer questions asked , enter your email and I will be in touch with you.
				    </h3>
					
		            <form action = "index.php" method ="POST" class="form-inline" >
		                <input type = "email" placeholder = "Youremail@something.com" class = "form-control" name = "contribute">
                        <input type = "submit" value = "send" class = "btn btn-success  btn-md btn-primary" name = "send"/><br><?php echo $contributeErr;?>
                    </form>
			

		    </div> 
		</div>
<!------------------------------------------------------------------------------------------------------------------>
 </div>
<!-------------------------------------------------------FOOTRER--------------------------------------------------------------------->
  <div class="panel-footer">&copy2017 Dapzzy</div>


   
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>