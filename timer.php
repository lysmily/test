<!DOCTYPE html>
<!-- saved from url=(0033)http://love.jinxiaoguang.cn/gift/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>现在还不能打开~</title>
<style>
@import url("https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:900");
html {
  display: grid;
  min-height: 100%;
}

body {
  display: grid;
  background: #183059;
}

.container {
  position: relative;
  margin: auto;
  overflow: hidden;
  width: 650px;
  height: 180px;
}

h1 {
  font-family: "Lato", sans-serif;
  text-align: center;
  margin-top: 2em;
  font-size: 1em;
  text-transform: uppercase;
  letter-spacing: 5px;
  color: #F6F4F3;
}

#timer {
  color: #F6F4F3;
  text-align: center;
  text-transform: uppercase;
  font-family: "Lato", sans-serif;
  font-size: .7em;
  letter-spacing: 5px;
}

.days, .hours, .minutes, .seconds {
  display: inline-block;
  padding: 20px;
  width: 100px;
  border-radius: 5px;
}

.days {
  background: #EF2F3C;
}

.hours {
  background: #F6F4F3;
  color: #183059;
}

.minutes {
  background: #276FBF;
}

.seconds {
  background: #F0A202;
}

.numbers {
  font-family: "Montserrat", sans-serif;
  color: #183059;
  font-size: 5em;
}

footer {
  position: absolute;
  bottom: 0;
  right: 0;
  text-transform: uppercase;
  padding: 10px;
  font-family: "Lato", sans-serif;
  font-size: 0.7em;
}
footer p {
  letter-spacing: 3px;
  color: #EF2F3C;
}
footer a {
  color: #F6F4F3;
  text-decoration: none;
}
footer a:hover {
  color: #276FBF;
}
</style>
</head>
<body>

<div class="container">
  <div id="timer"><div class="days">   <div class="numbers">?</div>days</div> <div class="hours">   <div class="numbers">?</div>hours</div> <div class="minutes">   <div class="numbers">?</div>minutes</div> <div class="seconds">   <div class="numbers">?</div>seconds</div> </div>
  <h1>礼物当然不能提前看啦~</h1>
</div>


<script>
const birthday = new Date("July 12, 2018 00:00:00").getTime();
var lastest =<?php 
function getMillisecond() {
    list($t1, $t2) = explode(' ', microtime());
    return (float)sprintf('%.0f',(floatval($t1)+floatval($t2))*1000);
}
echo getMillisecond();?>;
// countdown
const jiange=1000;
function flush() 
{
  // get today's date
  lastest+=jiange;
  const today =lastest;
  // get the difference
  const diff = birthday - today;
  if(diff<=0 && diff>-86400000)
	setTimeout("window.location.href='index.php'",jiange);
var flag=1;
if(diff<0)
{
diff=-diff;
flag=-1;
}
  // math
  let days = Math.floor(diff / (1000 * 60 * 60 * 24))*flag;
  let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((diff % (1000 * 60)) / 1000);
  // display
  document.getElementById("timer").innerHTML =
    "<div class=\"days\"> \
  <div class=\"numbers\">" + days + "</div>days</div> \
<div class=\"hours\"> \
  <div class=\"numbers\">" + hours + "</div>hours</div> \
<div class=\"minutes\"> \
  <div class=\"numbers\">" + minutes + "</div>minutes</div> \
<div class=\"seconds\"> \
  <div class=\"numbers\">" + seconds + "</div>seconds</div> \
</div>";
setTimeout("flush()",jiange);
}
setTimeout("flush()", jiange);
</script>
</body></html>
