<?php

	session_start();


	


	
	if(isset ($_POST['add']))
	{
		//unset the pbtn value so that the data is only preserved if the button is pressed
			unset($_POST['add']);
		
		foreach($_POST as $key => $value)
		{
			$$key = $value;
		}
		
		
	}

    //unset the pbtn value so that the data is only preserved if the button is pressed
  
    //convert session key-value pair to local variables
    $ID= "";
    $Topic= "";
    $Theory= "";
     $Question = "";
     $Code=  "";
       $Answer= "";
     $trn="";
     $title ="";
     $Name=""; 
     $year="";
     $description="";
     $pdf_file1="";
     $pdf_file2="";
     
?>

<html>
		<head>
			<title>Watson</title>
			<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">

		</head>
		<style>
	
	table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

input[type=submit] {
    background-color: #0e034d;
  color: white;
  padding: 14px;
  margin: 8px 0;
  border: none;


}
	body{
			
		}

table {
  border-collapse: collapse;
    border-radius: 5px;
 margin-top:15%;
  padding: 30px;
margin-left:5%;
background-color: #f2f2f2;
  top: 50%;
  left: 50%;
  color:black;

  max-width: 1500px;
width: auto;
height: auto;
}

th, td {
  padding: 15px;
}
		  input[type=reset], button, input[type=button]
		 {
			 
			 border: none;
			 padding: 7px;
			 color: white;
			 font-weight: bolder;
		 }

		.container1 {
  border-radius: 5px;

  padding: 20px;

  top: 50%;
  left: 50%;
  /* bring your own prefixes */
 
width: 500px;
height: 450px;
}
.f{
    background-color: #0e034d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;

}
	</style>
		<body>
		    <br>
		    <br>
		   			   <header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
										<a href="#">Watson AI Tutor <span>+</span></a>	
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container" style="background-color: #0e034d; color:white;    border-bottom: solid 5px #ffd403;">

							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start" style="padding-top:30px;">
												  
													<li><a href="mainmain.php">Home</a></li>
														<li><a href="mainadmin.php">All Papers</a></li>
														<li><a href="index.php">Log Out</a></li>
												
												</ul>
											</nav>
											<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
											</div>
										</div>
							
								</div>
							</div>
						</div>
							</div>
					</div>
				</div>	
			</div>
		</header>

		<div id='container1'>




			
				<table >
					<tr>
						<td><h1 style = 'color: black;'>Create Tutorial</td>
					</tr>
			

		<form action = 'createtutorial2.php?id=<?php echo    
							$Name;?>' method = 'post' enctype="multipart/form-data">
       <?php echo"
  
		</tr>
							 	   <tr>
				<td><label> Name</label></td>
				    <td><label>Description</label></td>
               	<td><label>Add Tutorial PDF</label></td>   
               		<td><label>Add Lecture PDF</label></td>
            
          
            
            </tr>

  <tr>
                      <td><textarea  name = 'Name' placeholder ='Name'  value = '$Name' /></textarea></td>
                   <td><textarea  name = 'description' placeholder ='description'  value = '$description' /> </textarea></td>
                     <td><input type='file' name='pdf_file1' id='pdf_file1' accept='application/pdf'  value ='$pdf_file1'/></td>
                     	        <td><input type='file' name='pdf_file2' id='pdf_file2' accept='application/pdf'  value = '$pdf_file2'/></td>

                        </tr>

               
                     	";?>
						<td>	<input type = 'submit' value ='add' name ='add'/> </td>

						</form>


            </tr>

				 	
							  
				
						</td>
					
					</tr>

				</table>
						</div>

				
	</body>
	</html>