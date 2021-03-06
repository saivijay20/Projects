<!DOCTYPE html>
<html>
	<head>
			<title>Prodigy'15</title>
			<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes,height=device-height" />
			<meta name="description" content="Production department Symposium" />
			<meta name="keywords" content="Production Engg,NIT Trichy" />
			<meta charset="UTF-8" />
			<link rel="stylesheet" type="text/css" href="css/home.css" />
			<link rel="stylesheet" type="text/css" href="css/smoke.css" />

			<link rel="stylesheet" type="text/css" href="css/hotspot.css" />
			<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <!--guest lectures-->
<!--        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

        <!--guest lectures-->

			<link rel="stylesheet" type="text/css" href="contacts/css/style_common_c.css" />
			<link rel="stylesheet" type="text/css" href="contacts/css/style9_c.css" />

			<link rel="stylesheet" href="guestlectures/css/style_gl.css" type="text/css" media="screen"/>
			<link rel="stylesheet" href="guestlectures/css/style1_gl.css" type="text/css" media="screen"/>
			<link rel="stylesheet" href="guestlectures/css/style_common_gl.css" type="text/css" media="screen"/>

			<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


			<link rel="stylesheet" type="text/css" href="css/navigation.css" />

			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>


			<script src="css/jquery.min.js" ></script>
			<script src="css/bootstrap.min.js" ></script>

			<script type="text/javascript" src="css/jquery.fullPage.js"></script>

			<script type="text/javascript">



				$(document).ready(function() {
					$('#fullpage').fullpage({
						sectionsColor: ['#E1CA79', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
						anchors: ['home', 'about','gl','event', 'contact'],
						menu: '#menu',
						scrollingSpeed: 1000
					});
				});


			</script>

			
			<script src="css/typed.js" type="text/javascript"></script>
			<script>
			$(function(){
				$("#typed").typed({
					strings: ["Welcome To Prodigy'15 Official website", "Login to register for events and workshops", "Have fun!"],
					typeSpeed: 30,
					backDelay: 500,
					loop: false,
					contentType: 'html', // or text
					loopCount: false,
					showCursor: true,
					cursorChar: "|"
				});

			});
			</script>

			<style>

			.typed-cursor{
				opacity: 1;
				font-weight: 100;
				-webkit-animation: blink 0.7s infinite;
				-moz-animation: blink 0.7s infinite;
				-ms-animation: blink 0.7s infinite;
				-o-animation: blink 0.7s infinite;
				animation: blink 0.7s infinite;
			}
			@-keyframes blink{
				0% { opacity:1; }
				50% { opacity:0; }
				100% { opacity:1; }
			}
			@-webkit-keyframes blink{
				0% { opacity:1; }
				50% { opacity:0; }
				100% { opacity:1; }
			}
			@-moz-keyframes blink{
				0% { opacity:1; }
				50% { opacity:0; }
				100% { opacity:1; }
			}
			@-ms-keyframes blink{
				0% { opacity:1; }
				50% { opacity:0; }
				100% { opacity:1; }
			}
			@-o-keyframes blink{
				0% { opacity:1; }
				50% { opacity:0; }
				100% { opacity:1; }

				.section{
					height:100%;
					width:100%;
					background-color:skyblue;
				}
				.slide{
					height:30%;
					width:100%;
				}
				.error{
						color:red;
						font-weight: lighter;
						height: auto;
						width: 10px;

				}
				.fa{
					cursor:pointer;
				}


				input{
					width:80%;
					text-align:center;
					color:white;
				}




			</style>

	</head>
	<body style="cursor:url('css/images/cursor.png');" >



		<div id="fullpage"  >
			<!-- isolate the mess -->

			<div id="backg" class="section" data-anchor="home" style="background:#E1CA79;">


				<div id="canvasesdiv" style="position:relative; left:18%;  width:300px; height:300px; ">
					<canvas id="canvas" style="z-index: 7; position:absolute; left:0px;top:0px"></canvas>
					<canvas id="gear1canvas" style="z-index: 2; position:absolute;left:0px;top:0px;"></canvas>

					<canvas id="gear2canvas" style="z-index: 3; position:absolute;left:0px;top:0px;"></canvas>
					<canvas id="gear3canvas" style="z-index: 4; position:absolute;left:0px;top:0px;"></canvas>
					<canvas id="gear4canvas" style="z-index: 6; position:absolute;left:0px;top:0px;"></canvas>
					<canvas id="gear5canvas" style="z-index: 5; position:absolute;left:0px;top:0px;"></canvas>
					<canvas id="gear6canvas" style="z-index: 1; position:absolute;left:0px;top:0px;"></canvas>
				</div>
				<div class="container" style="z-index: 34;
				position: fixed;
				top: 86%;
				background: none repeat scroll 0% 0% black;
				width: 100%;
				height: 14.2%;">
				</div>

			</div>


	<!-- canvas shit -->






			<div class="section" data-anchor="about" style="background:url('css/images/bg3.jpg');background-size:100% 100%;" >

				<p style="width:60%;text-align:center;margin:20%;font-size:17px;">
					ALCHEMY ... the infant stage of chemistry. Its chief aim being to transmute metals into gold and to discover the elixir of life.
					In this revolutionary world of Chemical Engineering, the significance of this word is unparalleled.
					In todays competitive world, where new technologies are developed daily, new vistas are explored, new domains are established. Only the BEST survive!
					Welcome, my dear friends to ALCHEMY. A two day technical extravaganza where you shall face challenges that will push you to the limits.
					Test your forte against the representatives from the leading institutions across the nation. Since only the best survive, do you have it in you?
				</p>

			</div>


			<div class="section" data-anchor="gl" style="background:url('css/images/bg1.jpg');">
				<div class="slide">

					<div class="media">
						<a class="pull-left" href="#">
							<img class="img img-rounded" style="width:30%;height:30%;"  src="guestlectures/images/gl1.jpg"
							alt="Media Object">
						</a>
						<div class="media-body" style="position:relative;left:-15%;text-align:center;">
							<h1 class="media-heading glCustom">Supply Chain Managemment</h1>
							<p>
								<span style="font-weight:800;" >T.Chinnadurai</span>
								<br>Has worked in R&D department of prestigious engineering and automotive industries like Murugappa group,Sundaram fasteners and presently Vice president at Tube Investments of India,TI cycles
							</p>

						</div>
					</div>

				</div>
				<div class="slide">

					<div class="media">
						<a class="pull-left" href="#">
							<img class="img img-rounded" style="width:30%;height:30%;position:relative"  src="guestlectures/images/gl2.jpg"
							alt="Media Object">
						</a>
						<div class="media-body" style="position:relative;left:-15%;text-align:center;">
							<h1 class="media-heading glCustom">Advancements in Industrial Engineering</h1>
							<p>
								<span style="font-weight:800;" >V.Balasubramanian</span>
								<br>CEO,Kalyani Carpenters,joint venture between Kalyani Group and Carpenter Technology Corporation, USA recognised as a leading manufacturer of speciality and alloy steel
								Has more than three decades of experience in steel industry, Has worked in SAIL,ISMT
							</p>

						</div>
					</div>

				</div>
				<div class="slide">

					<div class="media">
						<a class="pull-left" href="#">
							<img class="img img-rounded" style="width:30%;height:30%;position:relative;left:-10%;"  src="guestlectures/images/gl3.jpg"
							alt="Media Object">
						</a>
						<div class="media-body" style="position:relative;left:-25%;text-align:center;">
							<h1 class="media-heading glCustom">Rich Product development and tooling</h1>
							<p>
								<span style="font-weight:800;" >Shanmugham.M</span>
								<br>Expert knowlege in Constumer durables,Automotive industry,Suppy Chain Services,Eight years of experience in logistics field.. Has worked former board of directors at TVS logistics,President PAN india, worked at St.Johns,TI cycles,Muragappa Group,presently working as Vice President, marketing at ISMT-Indian Seamless Metal Tubes,Pune
							</p>

						</div>
					</div>

				</div>




			</div>

			<div class="section" data-anchor="event" style="background:url('css/images/bg2.jpg');" >

				<div class="slide" >
					<div class="media" style="line-height:-20px;overflow-y:scroll;height:70%;" >
						<a class="pull-left" href="#">
							<img class="img img-rounded" style="width:75%;height:75%;position:relative;left:324%;"  src="events/images/pp.jpg"
							alt="Media Object">
						</a>
						<div class="media-body" style="position:relative;left:-15%;text-align:center;">
							<h1 class="media-heading glCustom" style="font-family:monospace;" >Paper Presentation</h3>
							<div class="content1" >
								<h3>Event Description:</h3>



								<p>Prodigy invites papers from students on topics from the following streams:</p>
									<p>At Prodigy, we are looking for freshness in ideas. Ingenuity, imagination and originality are the factors by which your papers will be judged - not by technicality or jargon. Present your work before renowned professors in the field and walk away with prizes!<br><br>
									Shortlisted participants will be called to give an oral presentation of their paper at NIT Trichy during Prodigy 2015
									</p>
								<h3>Format:</h3>
								<p>
									The event consists of 2 rounds.</p>
											<p><b>Round 1<b/>: The abstract of your papers has to be sent to mail id: prodigy15.nitt@gmail.com before 10th March, 2015. Those who have been selected will receive a mail and are expected to come to NIT, Trichy for the Round 2. <br><br>
											<b>Round 2</b>: Paper should be presented in terms of a presentation (ppt) in front of leading professionals in the respective field in our college.
											</p>
									<h1>Rules: </h1>
								<p>
										1.Event manager&#39;s decisions are final<br/>
										2.Round 1: Abstracts mailed after the deadline won&#39;t be taken into consideration.<br/>
										3.Round 2: The participants have to be in NIT, Trichy in formals.<br/>
										4.Bring three printouts of the paper.<br/>
								 		5.The participants have 10 mins for presenting their paper and the presentation should<br/>
									 	be in form of points and not in terms of sentences.

								</p>

							</div>

						</div>
					</div>
				</div>

				<div class="slide">
					<div class="media" style="line-height:-20px;overflow-y:scroll;height:70%;" >
						<a class="pull-left" href="#">
							<img class="img img-rounded" style="width:75%;height:75%;position:relative;left:324%;" src="events/images/cad.jpg"
							alt="Media Object">
						</a>
						<div class="media-body" style="position:relative;left:-15%;text-align:center;">
							<h1 class="media-heading glCustom" style="font-family:monospace;" >Da Vinci</h3>
								<div class="content1" >
									<h3>Event Description:</h1>
										<h1>Event Desciption : </h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
										<p>
											Da Vinci puts your fabrication skills to test. Participate in this fabrication contest and fetch your reward.

										</p><br><br>

										<h1>Format:</h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
										<p>
											The event consist of 2 rounds. <br><br>
											<ol class="c">
												<li>Round 1: A written round which will consist of questions testing your basics of manufacturing, manufacturing steps, and your design skills.</li>

												<p>Those who have cleared the Round 1 are eligible for Round 2 </p><br>

												<li>Round 2: You get into workshop and given a design. You have to complete the fabrication within the stipulated time. You will be have access to all available machines and tools( lathe, single point tool, drilling tool, boring bar, milling machine,etc. ) needed.</li>
											</ol>

											<br><br>

										</p>
										<h1>Rules: </h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
										<p>
											<li>Event manager's decisions are final  </li><br>
											<li>Round 1 would be a 1 hour test</li><br>
											<li>Round 2 would be a 3 hour event </li><br>
											<li>Any late submission will not be evaluated</li><br>


										</p>
										<h1>Judging Criteria:</h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
										<p>
											<li>Round 1 is purely marks based </li><br>
											<li>Round 2 has a lot of parameters </li><br>
											<ol class="d">
												<li>Time of completion </li><br><br>
												<li>Dimensional accuracy</li><br><br>
												<li>Surface roughness</li><br><br>
												<li>Nature of the chips, swarf produced </li><br><br>
												<li>Steps used to manufacture </li><br><br>
											</ol>
											<li>Top three places are awarded cash prizes. </li><br>



										</p>
										<h1>Prize Money: </h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
										<p>

											1)&#8377;2500 <br><br>
											2)&#8377;1500 <br><br>
											3)&#8377;1000 <br><br>


										</p>

								</div>

									</div>
								</div>
				</div>


				<div class="slide">
					<div class="media" style="line-height:-20px;overflow-y:scroll;height:70%;" >
						<a class="pull-left" href="#">
							<img class="img img-rounded" style="width:75%;height:75%;position:relative;left:324%;"  src="events/images/ip1.jpg"
							alt="Media Object">
						</a>
						<div class="media-body" style="position:relative;left:-15%;text-align:center;">
							<h1 class="media-heading glCustom" style="font-family:monospace;" >Tech Quiz</h3>
								<div class="content1" >
									<h1>Event Desciption : </h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>
										A technical quiz involving concepts of science and engineering funda concepts and general knowledge. Brain memory and Common sense, walk away with the prizes

									</p><br><br>

									<h1>Format:</h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>
										A preliminary written round from which the to participants will be selected for the finals which may involve multiple rounds which will be revealed on the spot

										<br><br>

									</p>
									<h1>Rules: </h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>
										<li>Maximum of 2 people per team.</li><br>
										<li>Decisions of the quiz master are final.</li><br>


									</p>
									<h1>REGISTRATIONS</h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>
										On the spot before the start of the event.


									</p>
									<h1>Prize Money: </h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>

										1)&#8377;2500 <br><br>
										2)&#8377;1500 <br><br>
										3)&#8377;1000 <br><br>


									</p>
									<h1>CONTACTS </h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>

										Arun: 9786155123


									</p>

								</div>

									</div>
								</div>
				</div>
				<div class="slide">
					<div class="media" style="line-height:-20px;overflow-y:scroll;height:70%;" >
						<a class="pull-left" href="#">
							<img class="img img-rounded" style="width:75%;height:75%;position:relative;left:324%;"  src="events/images/ip.jpg"
							alt="Media Object">
						</a>
						<div class="media-body" style="position:relative;left:-15%;text-align:center;">
							<h1 class="media-heading glCustom" style="font-family:monospace;" >Industrial Problem Solving</h3>
								<div class="content1" >
									<h1>Event Desciption : </h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>
										This event is specifically designed to combine engineering and management concepts. It is an event which challenges your logical, analytical, managerial abilities and kindles your creativity and innovation. The participants will be tested on their ability to solve a real time industrial case study or problem in the given time.

									</p><br><br>

									<h1>Format:</h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>
										All the rounds of this event will be held during Prodigy’15 at NIT-Trichy.
										<li>	Round 1: Written round (will test general aptitude, logic, problem solving and response to situations)</li><br>
										<li>	Round 2: Case study/Problem statement </li><br>
										<li>	Round 3: Presentation and marketing of solution</li><br>

										<br><br>

									</p>
									<h1>Rules: </h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>
										<li>	A team of maximum 3 participants can participate</li><br>
										<li>	All rounds are eliminative</li><br>
										<li>	Event manager’s decision is always final</li><br>



									</p>
									<h1>Judging Criteria:</h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>
										The main judging criteria for the case study and presentation rounds are creativity, innovation and the thought process.


									</p>
									<h1>Prize Money: </h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>

										1)&#8377;2500 <br><br>
										2)&#8377;1500 <br><br>
										3)&#8377;1000 <br><br>


									</p>

								</div>

							</div>
						</div>
				</div>
				<div class="slide">
					<div class="media" style="line-height:-20px;overflow-y:scroll;height:70%;" >
						<a class="pull-left" href="#">
							<img class="img img-rounded" style="width:75%;height:75%;position:relative;left:324%;"  src="events/images/cad1.png"
							alt="Media Object">
						</a>
						<div class="media-body" style="position:relative;left:-15%;text-align:center;">
							<h1 class="media-heading glCustom" style="font-family:monospace;" >CAD Modeling</h3>
								<div class="content1" >
									<h1>Event Desciption : </h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>
										The event tests your knowledge and creativity in the areas of design and modeling.
										<li>The event will consist of 2 stages- a prelims and a final round.</li><br>
										<li>Prelims will be a written round to test your theoretical approach towards designing</li><br>
										<li>Final round will consist of developing the model for a given problem statement using one of the following modeling software only:</li><br>
										<ol class="d">
											<li>Auto CAD</li><br><br>
											<li>Pro/Engineer</li><br><br>
											<li>CATIA</li><br><br>
										</ol>

									</p><br><br>


									<h1>Rules: </h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>
										<li>Two members per team are allowed to participate in the event.</li><br>
										<li>Personal laptops are not allowed. Systems will be allocated to each team. </li><br>
										<li>The problem statement and time limit will be provided at the time of the event.</li><br>
										<li>No extra time will be provided, in any case.</li><br>
										<li>Use of any malpractices such as use of USB, mobile phones etc. will lead to immediate disqualification from the event </li><br>
										<li>Damage in any sense caused to the machines would be dealt with severe action leading to penalty and disqualification. </li><br>


									</p>
									<h1>Judging Criteria:</h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>
										Candidates will be judged based on:
										<li>Adherence to the time limit </li><br>
										<li>	Accuracy </li><br>

										<li>	Creativity </li><br>



									</p>
									<p>
										Participation certificate will be given for all participants of the event.

									</p>
									<h1>Prize Money: </h1><br><hr style=" width: 40%; color: red; background-color: #fc0; height: 1px; border-width: 0;">
									<p>

										1)&#8377;2500 <br><br>
										2)&#8377;1500 <br><br>
										3)&#8377;1000 <br><br>


									</p>

								</div>

							</div>
						</div>
				</div>




			</div>







			<div class="section" data-anchor="contact"  >

				<!-- contacts goes here -->

				<div class="main_c" style="width:90%;margin:15%;position:relative;top:-14%;" >

					<div class="view_c view-ninth_c">
						<img src="contacts/images/chairman.png" />
						<div class="mask_c mask-1_c"></div>
						<div class="mask_c mask-2_c"></div>
						<div class="content_c">
							<h2>Chairman</h2>
							<p>Subramaniam<br/>
							<span><i style="color:aqua;" class="fa fa-2x  fa-mobile"></i>&nbsp;9677052097</span>
						</p>
						</div>
					</div>
					<div class="view_c view-ninth_c">
						<img src="contacts/images/Over-all-Co-Ordinator.png" />
						<div class="mask_c mask-1_c"></div>
						<div class="mask_c mask-2_c"></div>
						<div class="content_c">
							<h2>Overall-Co Ordinator</h2>
							<p>Sakthi Sanghvi<br/>
							<span><i style="color:aqua;" class="fa fa-2x  fa-mobile"></i>&nbsp;9629463046</span>
						</p>
						</div>
					</div>
					<div class="view_c view-ninth_c">
						<img src="contacts/images/Treasurer.png" />
						<div class="mask_c mask-1_c"></div>
						<div class="mask_c mask-2_c"></div>
						<div class="content_c">
							<h2>Treasurer</h2>
							<p>Venkatesh<br/>
							<span><i style="color:aqua;" class="fa  fa-2x fa-mobile"></i>&nbsp;9444707475</span>
						</p>
						</div>
					</div>
					<div class="view_c view-ninth_c">
						<img src="contacts/images/pr&hospi.png" />
						<div class="mask_c mask-1_c"></div>
						<div class="mask_c mask-2_c"></div>
						<div class="content_c">
							<h2>Head-PR and Hospitality</h2>
							<p>Parthasarathy<br/>
							<span><i style="color:aqua;" class="fa fa-2x  fa-mobile"></i>&nbsp;9445483394</span>
						</p>
						</div>
					</div>
                    <div class="view_c view-ninth_c">
						<img src="contacts/images/events.png" />
						<div class="mask_c mask-1_c"></div>
						<div class="mask_c mask-2_c"></div>
						<div class="content_c">
							<h2>Head-Events</h2>
							<p>Adhi<br/>
							<span><i style="color:aqua;" class="fa fa-2x  fa-mobile"></i>&nbsp;9952443448</span>
						</p>
						</div>
					</div>
					<div class="view_c view-ninth_c">
						<img src="contacts/images/workshops.png" />
						<div class="mask_c mask-1_c"></div>
						<div class="mask_c mask-2_c"></div>
						<div class="content_c">
							<h2>Head-Workshops</h2>
							<p>Balajee<br/>
							<span><i style="color:aqua;" class="fa fa-2x  fa-mobile"></i>&nbsp;9176690504</span>
						</p>
						</div>
					</div>
				</div>


			</div>
		</div>




		<span id="typed" style="white-space:pre;font-size:20px;position:absolute;top:10px;left:40%; color:black;font-family:myfont2;"></span>
		<header style="position:absolute; top:5%;right:10%;">

			<img data-toggle="modal"
			data-target="#options" id="login" title="Login/Register" src="css/images/worker.png">
		</header>
		<footer class="container" style="z-index: 99;
		position: fixed;
		top: 87%;
		background: transparent;
		width: 100%;
		height: 13%;">



		<section class="color-1 " >
			<nav  class="cl-effect-1" style="align:center;">
				<span data-menuanchor="home" ><a href="#home"><span data-hover="Home">Home</span></a></span>
				<span data-menuanchor="about"><a href="#about"><span data-hover="About">About</span></a></span>
				<span data-menuanchor="gl"><a href="#gl"><span data-hover="Guestlectures">Guestlectures</span></a></span>
				<span data-menuanchor="event"><a href="#event"><span data-hover="Events">Events</span></a></span>
				<span ><a href="workshops/index.php"><span data-hover="Workshops">Workshops</span></a></span>
				<span data-menuanchor="contact"><a href="#contact"><span data-hover="Contacts">Contacts</span></a></span>
			</nav>
		</section>

	</footer>



	<div style="background:black; opacity:0.9;" class="modal fade" id="options" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="background:black; opacity:1;" >
		<div class="modal-content" style="background:black; opacity:1;">
			<div class="modal-header" style="background:black; opacity:1;">
				<button type="button" class="close"
				data-dismiss="modal" aria-hidden="true">
				&times;
			</button>
			<h3 style="color:white;">Login</h3>

		</div>
	<div class="modal-body" style="background:black; opacity:1;color:black;">

		<form   action="login.php" method="post" onsubmit="return validlogin()" role="form" />
			<div class="form-group">
				<input name="email" required id="email" type="email" placeholder="Email"></input>
			</br><span class="error" id="s1" style="display: none;"></span><br>
		</div>

		<div class="form-group">
			<input name="passwd" required id="pwd" type="password" placeholder="Password"></input><br />
			<span class="error" id="s2" style="display: none;"></span><br>
		</div>

		<input id="signupbtn" class="btn btn-success" style="width:50%;" type="submit" value="Sign In"></input>

	</form><br/>
	<a href="register.php"><input type="button" class="btn btn-primary" style="width:50%;" value="Register" ></input></a>


	</div>

<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>


<!-- login ends -->
			<script>

			var backg=document.getElementById("backg");
			backg.style.backgroundSize= window.innerWidth+"px"+" "+ window.innerHeight+"px";

			function validlogin()
			{
				if(!(document.getElementById("email").value&&document.getElementById("password").value))
				{
					if(!document.getElementById("email").value)
					{  document.getElementById("s1").style.display="block";
					document.getElementById("s1").innerHTML="Email required";
					document.getElementById("email").style.borderColor="red";
				}

				if(!document.getElementById("password").value)
				{
					document.getElementById("s2").style.display="block";
					document.getElementById("s2").innerHTML="Fill password";
					document.getElementById("password").style.borderColor="red";
				}


				return false;
			}
			else
			{
				document.getElementById("s1").style.display="none";
				document.getElementById("s2").style.display="none";
				document.getElementById("s1").innerHTML="";
				document.getElementById("s2").innerHTML="";
				document.getElementById("password").style.borderColor="hidden";
				document.getElementById("email").style.borderStyle="hidden";
				return true;
			}
			}

			</script>


			<script src="css/home.js" type="text/javascript" ></script>

	</body>

</html>
