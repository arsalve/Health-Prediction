<?php include('server.php') ?>
<?php include('prin.php') ?>
<?php include('a.php') ; 
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}

?>


<html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashbord</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
   
</head>
<body>
   <div id="wrapper">
	 <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header"> 
            <a class="navbar-brand" href="dashbord.php" style="color: white; padding: 15px 50px 0px 50px; float: right; font-size: 25px;">Health Pridiction </a> 
            </div>
   <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
<a href="dashbord.php?logout='1'" class="btn btn-danger square-btn-adjust">Logout</a> </div>
      
           <!-- /. NAV TOP  -->
		    <?php  if (isset($_SESSION['username'])) : ?>
			<p style="color: white;">Welcome <strong><?php echo $_SESSION['username']; endif;?>&nbsp;</strong></p>	
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a   href="dashbord.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="createEHR.php"><i class="fa fa-desktop fa-3x"></i> Create a Record</a>
                    </li>
                    <li>
                        <a class="active-menu" href="minfo.php"><i class="fa fa-qrcode fa-3x"></i> More information</a>
                    </li>
						   <li>
                        <a   href="ModifyEhr.php"><i class="fa fa-bar-chart-o fa-3x"></i> Modify a Record</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
		
		<!-- notification message -->
		
	
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="wrap-contact100">
				
                    <div class="col-md-12">
                    
                        <h2> How the heart works</h2> 
                    </div>
                </div>              
                 <!-- /. ROW  -->
			
			
			
			
			
			
			
			
			


<p>Your heart is a pump. It's a muscular organ about the size of your fist, situated slightly left of center in your chest. Your heart is divided into the right and the left side. The division prevents oxygen-rich blood from mixing with oxygen-poor blood. Oxygen-poor blood returns to the heart after circulating through your body.</p>
<ul>
<li>The right side of the heart, comprising the right atrium and ventricle, collects and pumps blood to the lungs through the pulmonary arteries.</li>
<li>The lungs refresh the blood with a new supply of oxygen. The lungs also breathe out carbon dioxide, a waste product.</li>
<li>Oxygen-rich blood then enters the left side of the heart, comprising the left atrium and ventricle.</li>
<li>The left side of the heart pumps blood through the aorta to supply tissues throughout the body with oxygen and nutrients.</li>
</ul>

        
            
            <h4>Heart valves</h4><p>Four valves within your heart keep your blood moving the right way by opening only one way and only when they need to. To function properly, the valve must be formed properly, must open all the way and must close tightly so there's no leakage. The four valves are:</p>
<ul>
    <li>Tricuspid</li>
    <li>Mitral</li>
    <li>Pulmonary</li>
    <li>Aortic</li>
</ul>
            <h2>Risk factors</h2><p>Risk factors for developing heart disease include:</p>
<ul>
    <li><strong>Age.</strong> Aging increases your risk of damaged and narrowed arteries and weakened or thickened heart muscle.</li>
    <li><strong>Sex.</strong> Men are generally at greater risk of heart disease. However, women's risk increases after menopause.</li>
    <li><strong>Family history.</strong> A family history of heart disease increases your risk of coronary artery disease, especially if a parent developed it at an early age (before age 55 for a male relative, such as your brother or father, and 65 for a female relative, such as your mother or sister).</li>
    <li><strong>Smoking.</strong> Nicotine constricts your blood vessels, and carbon monoxide can damage their inner lining, making them more susceptible to atherosclerosis. Heart attacks are more common in smokers than in nonsmokers.</li>
    <li><strong>Certain chemotherapy drugs and radiation therapy for cancer.</strong> Some chemotherapy drugs and radiation therapies may increase the risk of cardiovascular disease.</li>
    <li><strong>Poor diet.</strong> A diet that's high in fat, salt, sugar and cholesterol can contribute to the development of heart disease.</li>
    <li><strong>High blood pressure.</strong> Uncontrolled high blood pressure can result in hardening and thickening of your arteries, narrowing the vessels through which blood flows.</li>
    <li><strong>High blood cholesterol levels.</strong> High levels of cholesterol in your blood can increase the risk of formation of plaques and atherosclerosis.</li>
    <li><strong>Diabetes.</strong> Diabetes increases your risk of heart disease. Both conditions share similar risk factors, such as obesity and high blood pressure.
    </li>
    <li><strong>Obesity.</strong> Excess weight typically worsens other risk factors.</li>
    <li><strong>Physical inactivity.</strong> Lack of exercise also is associated with many forms of heart disease and some of its other risk factors, as well.</li>
    <li><strong>Stress.</strong> Unrelieved stress may damage your arteries and worsen other risk factors for heart disease.</li>
    <li><strong>Poor hygiene.</strong> Not regularly washing your hands and not establishing other habits that can help prevent viral or bacterial infections can put you at risk of heart infections, especially if you already have an underlying heart condition. Poor dental health also may contribute to heart disease.</li>
</ul>
        
            
            <h2>Complications</h2><p>Complications of heart disease include:</p>

<ul>
<li><strong>Heart failure.</strong> One of the most common complications of heart disease, heart failure occurs when your heart can't pump enough blood to meet your body's needs. Heart failure can result from many forms of heart disease, including heart defects, cardiovascular disease, valvular heart disease, heart infections or cardiomyopathy.</li>
<li><strong>Heart attack.</strong>  A blood clot blocking the blood flow through a blood vessel that feeds the heart causes a heart attack, possibly damaging or destroying a part of the heart muscle. Atherosclerosis can cause a heart attack.</li>
<li><strong>Stroke.</strong>  The risk factors that lead to cardiovascular disease also can lead to an ischemic stroke, which happens when the arteries to your brain are narrowed or blocked so that too little blood reaches your brain. A stroke is a medical emergency &mdash; brain tissue begins to die within just a few minutes of a stroke.</li>
<li><strong>Aneurysm.</strong>  A serious complication that can occur anywhere in your body, an aneurysm is a bulge in the wall of your artery. If an aneurysm bursts, you may face life-threatening internal bleeding.</li>
<li><strong>Peripheral artery disease.</strong>  Atherosclerosis also can lead to peripheral artery disease. When you develop peripheral artery disease, your extremities &mdash; usually your legs &mdash; don't receive enough blood flow. This causes symptoms, most notably leg pain when walking (claudication).</li>
<li><strong>Sudden cardiac arrest.</strong>  Sudden cardiac arrest is the sudden, unexpected loss of heart function, breathing and consciousness, often caused by an arrhythmia. Sudden cardiac arrest is a medical emergency. If not treated immediately, it is fatal, resulting in sudden cardiac death.</li>
</ul> 

        
            
            <h2>Prevention</h2><p>Certain types of heart disease, such as heart defects, can't be prevented. However, you can help prevent many other types of heart disease by making the same lifestyle changes that can improve your heart disease, such as:</p>

<ul>
<li>Quit smoking</li>
<li>Control other health conditions, such as high blood pressure, high cholesterol and diabetes</li>
<li>Exercise at least 30 minutes a day on most days of the week</li>
<li>Eat a diet that's low in salt and saturated fat</li>
<li>Maintain a healthy weight</li>
<li>Reduce and manage stress</li>
<li>Practice good hygiene</li>
</ul>

			
			
			
			
			
			
            
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
