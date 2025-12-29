
<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png?v=1.2') }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg?v=1.2') }}" />
<link rel="shortcut icon" href="{{ asset('favicon/favicon.ico?v=1.2') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png?v=1.2') }}" />
<link rel="manifest" href="{{ asset('favicon/site.webmanifest?v=1.2') }}" />

		<title>{{ config('app.name') }} | Ball Gaming</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.18.0/matter.js"></script>
		<script src="https://code.createjs.com/1.0.0/soundjs.min.js"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Tomorrow:wght@600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">		
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	</head>	
	<style>
	/* Created by lolo */

body,button {
	margin:0;padding:0;
	overflow:hidden;
	background-color: black;
	color:white;
	user-select: none;
	-webkit-user-select : none;
	font-family: 'Tomorrow', sans-serif;
}
#container{
	position:absolute;
	width:100%;
	height:100%;
}
#canvas {
	position:absolute;
	top:0;
}
#rules{
	position:absolute;
	width:100%;
	height:100%;
	top:0;left:0;
	color:white;
	display:flex;
	justify-content:center;
	align-items:center;
	flex-direction:column;
	-webkit-backdrop-filter: blur(20px);
	backdrop-filter: blur(20px);
	text-align:center;
	font-size:2em;
	z-index:3;
}
.inforules{
	font-size:0.5em;
}
#play_pause{
	position: absolute;
	top:10px;
	right:30px;
	color:white;
	font-size: 1em;
	z-index:2;
}
#checkbowaudio{
	position: absolute;
	top:5px;
	left:20px;
	color:white;
	font-size: 1.5em;
	z-index:3;
}
#timegame{
	position:absolute;
	top:0;
	left:0;
	padding-top: 5px;
	padding-bottom: 5px;
	width:100%;
	color:white;
	font-size:1.5em;
	text-align:center;
	transition:0.2s
}
#info{
	position:absolute;
	bottom:5px;
	left:20px;
	color:white;
	font-size:1.5em;
	transition:0.1s;
}
#Fps {
	position: absolute;
	right: 5px;
	bottom: 5px;
	color: white;
	display:flex;
	flex-direction: inline;
	align-items:center;
	font-size: 0.6em;
}
#nbrfps{
	background-color:rgba(100,100,100,0.2);
	width:30px;
	height:30px;
	display:flex;
	align-items:center;
	justify-content:center;
	border-radius:50% ;
	margin-left:5px;
	font-size: 1.5em;
}
#endgame{
	position:absolute;
	width:100%;
	height:100%;
	color:white;
	display:none;
	justify-content:center;
	align-items:center;
	flex-direction:column;
	-webkit-backdrop-filter: blur(20px);
	backdrop-filter: blur(20px);
	text-align:center;
	font-size:2em;
}
#bestscore, #score{
	font-size:0.7em;margin:5px
}
.popup{
	position: fixed;
	top:0;
	left:0;
	bottom:0;
	right:0;
	background:rgba(0,0,0,0.5);
	display:none;
	flex-direction:column;
	align-items:center;
	justify-content:center;
	padding:20px;
	z-index:3000;

}
.popup .child{
	width:100%;
	max-width:500px;
	background:black;
	display:flex;
	flex-direction: column;
	align-items:center;
	gap:10px;
	padding:10px;
	border-radius:10px;
}
.popup.active{
	display:flex;
}
.popup.active .child{
	animation:scale-in 0.5s linear forwards;
}
@keyframes scale-in{
	0%{
		transform:scale(0.8);
		opacity:0;
	}
	100%{
		transform:scale(1);
		opacity:1;
	}
}
body.disabled{
	pointer-events:none;
}
	</style>
	<body>
		<div class="popup">
			
			<div class="child">
				<div style="background:rgba(255,255,255,0.05);height:100px;width:100px;border-radius:50%;display:flex;align-items:center;justify-content:center;">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="70" width="70"><path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216Z"></path></svg>
				
			</div>
				<span>Insufficient gaming balance <br>
					You are required to have a minimum of &#8358;{{ number_format(config('settings.game_cost'),2) }} to play a game session
					,please topup your gaming balance to continue gaming</span>
				<button onclick="this.closest('.popup').classList.remove('active')" style="border:none;height:50px;width:100%;border-radius:5px;clip-path:inset(0 round 5px);background:white;color:black;" class="btn">Understood</button>
			</div>
		</div>
		<div id="container">
			<canvas id="canvas"></canvas>
			<span id="checkbowaudio"><i class="fas fa-volume-up"></i></span>
			<div class="cover-game" id="rules">
				<div onclick="
				event.stopPropagation();
				window.location.href='{{ url('users/dashboard') }}';
				
				" style="border:1px solid;padding:10px 20px;font-size:1rem;margin-bottom:20px;border-radius:5px;clip-path:inset(0 round 5px);cursor:pointer">Go Back</div>
				Rules<br><br>
				
				<span class="inforules">Select at least three balls of<br> the same color<br> that are touching</span><br>
				<span  class="inforules">Big Bonus: 8 Balls minimun</span><br>
				<span  class="inforules">Each game session costs &#8358;{{ number_format(config('settings.game_cost'),2) }}</span><br>
				<span  class="inforules">Each session win rewards &#8358;{{ number_format(config('settings.game_win'),2) }}</span><br>
				<span  class="inforules deposit_balance" data-value="{{ Auth::guard('users')->user()->deposit_balance }}">Your Deposit Balance = &#8358;{{ number_format(Auth::guard('users')->user()->deposit_balance,2) }}</span><br>
				
				<span  class="inforules">Get a minimum  score of <span class="score-challenge" style="color:gold;font-size:1.2rem;">500</span> on this game session to get a win</span><br>
				<span  class="inforules">⭐️: Surprise time bonus</span><br>
				<span>Tap to Start</span>
			</div>
			<div id="timegame"></div>
			
			<div id="play_pause"><i class="fas fa-pause"></i></div>
			<div id="info">0</div>
			<span id="Fps"><i>fps</i><span id="nbrfps"></span></span>
			<div class="cover-game" id="endgame">Game Over <br><br>
				<div onclick="
				event.stopPropagation();
				window.location.href='{{ url('users/dashboard') }}';
				
				" style="border:1px solid;padding:10px 20px;font-size:1rem;margin-bottom:20px;border-radius:5px;clip-path:inset(0 round 5px);cursor:pointer">Go Back</div>
				<span id="result"></span>
				<span id="bestscore"></span>
				<span id="score"></span>
				<span id="nextScore"></span><br><br><br>
				<span>Tap to Restart</span>
			</div>
		</div>
<script>

let Engine = Matter.Engine, 
	World = Matter.World, 
	Bodies = Matter.Bodies, 
	engine, world;

let W, H, c, ctx, mouse, touch, lastTimeCalled
let ground, left, right, marginBorder = 20, rad;
let move = false, lastSelected = null, gamePlay = true, checkBoxAudio = true, effetBigBoom = false, pause = false;
let circles = [], booms = [], arrBonus = [], same = []
let nbrTime = 90,countPoints = 0, bestScore = 0,  progress = 0, ChallengeScore=200
document.querySelector('.score-challenge').innerHTML=ChallengeScore;
const colors = ['#FF1818', '#F4E104', '#029DFF','#E018FF']
const srcSoundSelect = "{{ asset('audio/selected.mp3') }}"
const srcSoundBoom = "{{ asset('audio/sbomb.mp3') }}"
const srcSoundBonus = "{{ asset('audio/bonus.mp3') }}"
const srcSoundEnd = "{{ asset('audio/end.mp3') }}"
const srcSoundBigBoom = "{{ asset('audio/bigBoom.mp3') }}"

const random = (max=1, min=0) => Math.random() * (max - min) + min;

const calcFPS = () => {
	let dt = performance.now() - lastTimeCalled;
	lastTimeCalled = performance.now()
	nbrfps.innerText =  Math.round(1000 / dt);
}

class Ball{
	constructor(x, y, rad, bonus){
		this.x = x;
		this.y = y;
		this.rad = rad;
		this.bonus = bonus || null
		this.mq = ~~random(colors.length)
		this.c = colors[this.mq]
		this.select = false
		this.options = {isStatic:false, friction:0, restitution:0};
		this.body = Bodies.circle(this.x, this.y, this.rad,this.options)
		World.add(world, this.body);
	}
	draw(){
		if(this.select){
			ctx.beginPath();
			ctx.fillStyle = this.c
			ctx.arc(this.x, this.y, this.rad, 0, 2 * Math.PI);
			ctx.fill();
		}
		ctx.beginPath();
		ctx.fillStyle = this.color
		ctx.arc(this.x, this.y, this.rad-2, 0, 2 * Math.PI);
		ctx.fill();
		if(this.bonus!=null){
			ctx.beginPath();
			ctx.fillStyle = 'white'
			ctx.font = this.rad/1.2 + "px Arial";
			let bonus = '⭐️'
			let w = ctx.measureText(bonus).width
			ctx.fillText(bonus, this.x- w/2  , this.y+this.rad/4 );
		}		
	}
	update(){
		this.x = this.body.position.x
		this.y = this.body.position.y
		this.color = radColor(this.x, this.y, 0, this.x, this.y, this.rad*2, this.c)
		this.draw()
	}
}

class Boom {
	constructor(x,y,rad,color) {
		this.x = x
		this.y = y
		this.rad = rad
		this.color = color
		this.a = random(2*Math.PI)
	}
	draw() {
		ctx.beginPath()
		ctx.fillStyle =  this.color
		ctx.arc(this.x, this.y, this.rad, 0, 2 * Math.PI)
		ctx.fill()
		ctx.closePath()
	}	 
	update() {
		this.x += 2*Math.cos(this.a)
		this.y += 2*Math.sin(this.a)
		this.draw()
	}
}

class Bonus {
	constructor(x,y,sizeFont,bonus) {
		this.x = x
		this.y = y
		this.sizeFont = sizeFont
		this.color = 'white'
		this.bonus = "+ " + bonus + "s"		
	}
	draw() {
		ctx.beginPath()  
		ctx.font = this.sizeFont + "px Arial";
		ctx.fillStyle = 'white'
		let w = ctx.measureText(this.bonus).width
		ctx.fillText(this.bonus, this.x-w/2  ,this.y );
	}
	update() {		
		this.draw()
	}
}

const radColor = (x0, y0, r0, x1, y1, r1, c) => {
	let NG = ctx.createRadialGradient(x0, y0-rad/2, r0, x1, y1, r1);
		NG.addColorStop(0, c);
		NG.addColorStop(1, 'black');
	return NG;
};

const createMatter = () =>{
	engine = Engine.create();
	world = engine.world;
	Matter.Runner.run(engine);	
	ground = Bodies.rectangle(W/2, H-20, W,40, {isStatic: true});
	left = Bodies.rectangle(0, H/2, marginBorder,H*4, {isStatic: true});
	right = Bodies.rectangle(W, H/2, marginBorder, H*4, {isStatic: true});
	World.add(world, [ground, left, right]);
}

const createCircles = () => {
	rad = W /12
	for(let x=marginBorder+rad;x<W-rad-marginBorder;x+=rad*2){
		for(y=rad;y<H-rad;y+=rad*2){
			circles.push(new Ball(x, y,rad))
		}
	}   
}

const checkSelect = () => {	
	for(let i = 0; i<circles.length; i++){
		let d = Math.hypot(mouse.x - circles[i].x, mouse.y - circles[i].y)
		if(d<circles[i].rad && !circles[i].select){		  
			if(same.length>0){
				let d1 = Math.hypot(circles[lastSelected].x - circles[i].x, circles[lastSelected].y - circles[i].y)
				if(d1<circles[i].rad*2.2 && circles[i].mq == circles[lastSelected].mq){
					if(checkBoxAudio){
						createjs.Sound.play('soundball')
				
					}  
					lastSelected=i
					same.push(i)
					circles[i].select = true
					let r = circles[i].rad
					circles[i].rad *=1.2	
					setTimeout(()=>{
						circles[i].rad = r												  
					},100)
				}
			}
			else{	
				if(checkBoxAudio){
					createjs.Sound.play('soundball')			
				}			  						 
				lastSelected=i
				same.push(i)
				circles[i].select = true
				let r = circles[i].rad
				circles[i].rad *=1.2			   
				setTimeout(()=>{
					circles[i].rad = r													  
				},100)
			}
		}		
	}	
}

const drawBorder = () =>{	
	ctx.beginPath();
	ctx.fillStyle = 'rgb(40,40,40)'
	ctx.rect(0, H-40, W, 40);
	ctx.rect(0, 0, 10, H);
	ctx.rect(W-10, 0, 10, H);
	ctx.fill();
}

const updateBalls = () => {
	for(let i=0; i< circles.length;i++){
		circles[i].update()
	}
}

const newBall = (n) => {
	let l, luck = ~~random(2)
	if(luck%2==0) l = ~~random(n)
	for(let i=0; i< n;i++){
		if(l==i)circles.push(new Ball( W/2,random(-20,-100), rad, ~~random(7,1) ))
		else circles.push(new Ball( W/2,random(-20,-100), rad ))
	}
}

const checkBoom = () => {
	let sameLength = same.length
	let getBonus = false
	if(sameLength>2){
		for(let i=circles.length-1;i>=0;i--){
			if(circles[i].select==true){
				if(circles[i].bonus!=null){
					getBonus = true
					nbrTime += circles[i].bonus
					arrBonus.push(new Bonus(circles[i].x,circles[i].y,circles[i].rad,circles[i].bonus))
				}
				for(let n=0;n<10;n++){
					booms.push(new Boom(circles[i].x, circles[i].y, circles[i].rad/2, colors[circles[i].mq]))
				}			 
				Matter.World.remove(world, circles[i].body);
				circles.splice(i, 1);
			}
		}
		if(sameLength>7){
			nbrTime += 10
			arrBonus.push(new Bonus(W/2,H/2,rad*2,10))
			effetBigBoom = true
			setTimeout(()=>{
				effetBigBoom = false	
				progress = 0									  
			},2000)
		}
		if(getBonus){
			timegame.style.color = "#37DE00"
			timegame.style.fontSize = "2em"
			setTimeout(()=>{
				timegame.style.color = "white"	
				timegame.style.fontSize = "1.5em"											  
			},300)
		}
		newBall(sameLength)
		countPoints+=sameLength
		info.innerText = countPoints
		if(checkBoxAudio){
			if(sameLength>7){
				createjs.Sound.play('soundbigboom')			
			}
			else{
				createjs.Sound.play('soundboom')			 
			}
			if(getBonus){
				createjs.Sound.play('soundbonus')			
			}
		}
	}
	reInitVar()
}

const animBooms = () => {
	for(let i = booms.length-1; i>=0; i--){
		booms[i].update()
		booms[i].rad-=0.5
		if(booms[i].rad <=0.6)booms.splice(i, 1); 								   
	} 
}

const animBonus = () => {
	for(let i = arrBonus.length-1; i>=0; i--){
		arrBonus[i].update()
		arrBonus[i].sizeFont-=0.5
		arrBonus[i].y-=1
		if(arrBonus[i].sizeFont <=10)arrBonus.splice(i, 1); 								   
	} 
}

const blastRings = (x, y, radius, lw, color) => {
	if(radius < 0) radius = 0;
	ctx.beginPath();
	ctx.lineWidth = lw;
	ctx.strokeStyle = color;
	ctx.arc(x, y, radius + 30, 0, Math.PI * 2, false);
	ctx.stroke();
}

const blastStar = (x, y, sizeFont, a) => {
	this.x = x + progress/2 *Math.cos(a)
	this.y = y + progress/2 *Math.sin(a)
	ctx.beginPath();
	ctx.font = sizeFont + "px Arial";
	ctx.fillStyle = 'white'
	ctx.fillText('⭐️', this.x  ,this.y );
}

const createEffet = () => {
	progress+=15;
	blastRings(W/2, H/2, progress, 10, "white");
	blastRings(W/2, H/2, progress - 30, 15, "yellow");
	blastRings(W/2, H/2, progress - 50, 20, "orange");
	blastRings(W/2, H/2, progress - 100, 30, "red");
	for(let i=0;i<Math.PI*2;i+=Math.PI/8){
		blastStar(W/2, H/2, rad, i)
	}
}

const reInitVar = () => {
	firstSelected = null 
	lastSelected = null
	same = []
	circles.map(x=>x.select = false)
}

const timePass = () =>{
	if(!pause)nbrTime--
	if(nbrTime<1){
		if(gamePlay){
			endGame()
			gamePlay = false
		}		
	}
	else{
		let m = Math.floor(nbrTime/60)
		let s = nbrTime%60
		if(s<10)s = "0" + s
		if(m>0)timegame.innerText = m +" : " + s
		else timegame.innerText = s
	}  
}

const newGame = () => {  
	
	reInitVar()
	nbrTime = 90
	countPoints = 0
	info.innerText = countPoints
	World.clear(world);
	Engine.clear(engine);
	circles = []
	createMatter()
	createCircles()
	createBonus()
	gamePlay = true
}

// GAME ENDING
const endGame = async function(){  
	//alert(10)
	if(checkBoxAudio){
		createjs.Sound.play('soundend')
	}
		
	endgame.style.display =  "flex" 
	bestScore = countPoints > bestScore ? countPoints : bestScore
	score.innerText = "Your score : " + countPoints
	bestscore.innerText =  "Best score : " + bestScore
	let NextScore=bestScore > ChallengeScore ? bestScore : ChallengeScore;

	document.querySelector('#nextScore').innerHTML='Next score challenge : ' + NextScore;
	
	document.querySelector('.score-challenge').innerHTML=NextScore;
	let game_result=countPoints > ChallengeScore ? '🎉 Congrats you won and &#8358;{{ number_format(config('settings.game_win'),2) }} have been creditted to your affiliate wallet' : '😥 Oops you lost this time,please try again';
	document.querySelector('#result').innerHTML=game_result;

		if(countPoints > ChallengeScore){
		ChallengeScore=countPoints;
		
		let response=await fetch('{{ asset('users/get/credit/user/ball/game') }}');
	
	}
		
}

async function restart(){
	document.querySelector('body').classList.add('disabled');
	let response=await fetch('{{ asset('users/get/debit/user/for/ball/game') }}');
		if(response.ok){
			
			let data=await response.json();
			document.querySelector('body').classList.remove('disabled');
			if(data.status == 'error'){
				document.querySelector('.popup').classList.add('active');
			return;
			}else{


				endgame.style.display =  "none"
				newGame()


			}
		}else{
			document.querySelector('body').classList.remove('disabled')
		}
	
		
	
}

const createBonus = () => {
	let n = ~~(circles.length/10)
	for(let i=0;i<n;i++){
	   circles[~~random(circles.length)].bonus = ~~random(7, 1)
	}   
}

const loadAudio = () => {
	createjs.Sound.registerSound(srcSoundSelect, 'soundball');
	createjs.Sound.registerSound(srcSoundBoom, 'soundboom');
	createjs.Sound.registerSound(srcSoundBonus, 'soundbonus');
	createjs.Sound.registerSound(srcSoundEnd, 'soundend');
	createjs.Sound.registerSound(srcSoundBigBoom, 'soundbigboom');
}

const initWidthHeight = () => {
	c.width = W = innerWidth 
	c.height = H = innerHeight
	if(innerWidth > innerHeight){
			c.width = W = innerHeight*0.6
			container.style.width = W + "px"
		}
}

const init = () => {
	c = document.getElementById("canvas");
	initWidthHeight()
	ctx = canvas.getContext("2d")
	loadAudio()
	createMatter()
	createCircles()	
	createBonus()
	eventsListener()
	requestAnimationFrame(animate)
}

const animate = () => {
	ctx.clearRect(0,0,W,H)
	if(!pause)calcFPS()
	updateBalls()  
	if(move&&!pause)checkSelect()
	animBooms()
	animBonus()
	if(effetBigBoom)createEffet()
	drawBorder()
	requestAnimationFrame(animate) 
}	

onload = init

const eventsListener = () => {
	mouse = {
		x: null,
		y: null
	};
	 touch = {
		x: null,
		y: null
	};
	c.addEventListener("mousemove", function(event){
		event.preventDefault();
		if(move){
			mouse.x = event.clientX;
			mouse.y = event.clientY;
		}
		else{
			mouse.x = null;
			mouse.y = null;
		}	
	});
	c.addEventListener("mousedown", function(event){
		move=true;
		mouse.x = event.clientX;
		mouse.y = event.clientY;
	});
	c.addEventListener("mouseup", function(){	  	
		move=false;
		mouse.x = null;
		mouse.y = null;
		checkBoom()
	});
	c.addEventListener("touchstart", function(event){
		let touch = event.changedTouches[0];
		let touchX = parseInt(touch.clientX);
		let touchY = parseInt(touch.clientY);
		mouse.x = touchX-c.offsetLeft;
		mouse.y = touchY-c.offsetTop;
		move=true;	   
	});
	c.addEventListener("touchmove", function(event){
		if(move){
			let touch = event.changedTouches[0];
			let touchX = parseInt(touch.clientX);
			let touchY = parseInt(touch.clientY);
			mouse.x = touchX-c.offsetLeft;
			mouse.y = touchY-c.offsetTop;		
		}		
	});
	c.addEventListener("touchend", function(){
		mouse.x = null;
		mouse.y = null;
		move=false;
		checkBoom()	   
	});
	rules.addEventListener("click",async function(){
		document.querySelector('body').classList.add('disabled');
	let response=await fetch('{{ asset('users/get/debit/user/for/ball/game') }}');
		if(response.ok){
			let data=await response.json();
			document.querySelector('body').classList.remove('disabled')
			if(data.status == 'error'){
				document.querySelector('.popup').classList.add('active');
			return;
			}
		}else{
			document.querySelector('body').classList.remove('disabled')
		}

		
		
		rules.style.display = 'none'
		timePass()
		setInterval(timePass, 1000)
	});
	endgame.addEventListener("click", function(){
		restart()
	});
	checkbowaudio.addEventListener("click", function(){
		checkBoxAudio = checkBoxAudio ? false: true
		if(!checkBoxAudio){
			checkbowaudio.innerHTML = `<i class="fas fa-volume-mute"></i>`
		}
		else{
			checkbowaudio.innerHTML = `<i class="fas fa-volume-up"></i>`
		}
	});
	play_pause.addEventListener("click", function(){
		pause = pause ? false: true
		if(pause){
			play_pause.innerHTML = `<i class="fas fa-play"></i>`
			c.style.webkitFilter = "blur(30px)";
		}
		else{
			play_pause.innerHTML = `<i class="fas fa-pause"></i>`
			c.style.webkitFilter = "blur(0px)";
		}
	});

};


</script>

	</body>
</html>