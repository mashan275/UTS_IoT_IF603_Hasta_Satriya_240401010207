<!DOCTYPE html>
<html>
<head>
<title>Smart Home IoT Portal</title>

<style>

html{
scroll-behavior:smooth;
}

body{
margin:0;
font-family:Arial,sans-serif;
background:#0f172a;
color:white;
}

.header{
background:#1e3a8a;
padding:25px;
text-align:center;
}

.card{
background:#1e293b;
width:500px;
margin:40px auto;
padding:25px;
border-radius:10px;
box-shadow:0 0 15px rgba(0,0,0,.3);
}

input{
width:95%;
padding:10px;
margin-top:8px;
margin-bottom:15px;
border:none;
border-radius:5px;
}

button{
background:#2563eb;
color:white;
border:none;
padding:12px 20px;
border-radius:5px;
cursor:pointer;
}

button:hover{
background:#1d4ed8;
}

.link{
color:#38bdf8;
cursor:pointer;
display:block;
margin-top:10px;
}

#dashboard{
display:none;
}

.navbar{
background:#111827;
padding:15px;
text-align:center;
}

.navbar a{
text-decoration:none;
color:white;
padding:10px 15px;
background:#2563eb;
margin:5px;
display:inline-block;
border-radius:5px;
}

.section{
width:90%;
margin:auto;
margin-top:20px;
background:#1e293b;
padding:20px;
border-radius:10px;
}

table{
width:100%;
border-collapse:collapse;
margin-top:10px;
}

table,th,td{
border:1px solid #475569;
}

th{
background:#2563eb;
}

th,td{
padding:10px;
text-align:center;
}

.online{
color:#22c55e;
font-weight:bold;
}

.footer{
text-align:center;
padding:20px;
color:#94a3b8;
}

</style>
</head>

<body>

<div class="header">
<h1>🏠 Smart Home IoT Portal</h1>
<p>Hasta Satriya - 240401010207</p>
</div>

<!-- LOGIN -->

<div id="loginPage">

<div class="card">

<h2>Login</h2>

<input type="text" id="username" placeholder="Username">

<input type="password" id="password" placeholder="Password">

<button onclick="login()">Login</button>

<span class="link" onclick="showRegister()">
Register Account
</span>

<span class="link" onclick="showForgot()">
Forgot Password
</span>

</div>

</div>

<!-- REGISTER -->

<div id="registerPage" style="display:none;">

<div class="card">

<h2>Register Account</h2>

<input type="text" placeholder="Full Name">

<input type="text" placeholder="Username">

<input type="email" placeholder="Email">

<input type="password" placeholder="Password">

<input type="password" placeholder="Confirm Password">

<button onclick="registerSuccess()">
Register
</button>

<span class="link" onclick="backLogin()">
Back to Login
</span>

</div>

</div>

<!-- FORGOT -->

<div id="forgotPage" style="display:none;">

<div class="card">

<h2>Forgot Password</h2>

<input type="text" placeholder="Enter Username">

<button onclick="recoverPassword()">
Recover
</button>

<span class="link" onclick="backLogin()">
Back to Login
</span>

</div>

</div>

<!-- DASHBOARD -->

<div id="dashboard">

<div class="navbar">

<a href="#home">Dashboard</a>
<a href="#devices">Devices</a>
<a href="#control">Control</a>
<a href="#monitoring">Monitoring</a>
<a href="#settings">Settings</a>
<a href="#network">Network</a>
<a href="#about">About</a>

<a href="index.php" style="background:#dc2626;">
Logout
</a>

</div>

<div class="section" id="home">

<div class="section" id="control">

<h2>Device Control Panel</h2>

<table>

<tr>
<th>Device</th>
<th>Status</th>
<th>Action</th>
</tr>

<tr>

<td>Light</td>

<td id="lightStatus">OFF</td>

<td>

<button onclick="lightOn()">
ON
</button>

<button onclick="lightOff()">
OFF
</button>

</td>

</tr>

<tr>

<td>Ceiling Fan</td>

<td id="fanStatus">OFF</td>

<td>

<button onclick="fanOn()">
ON
</button>

<button onclick="fanOff()">
OFF
</button>

</td>

</tr>

<tr>

<td>Door</td>

<td id="doorStatus">CLOSED</td>

<td>

<button onclick="doorOpen()">
OPEN
</button>

<button onclick="doorClose()">
CLOSE
</button>

</td>

</tr>

</table>

</div>

<h2>Dashboard</h2>

<p class="online">
● System Online
</p>

<p>Home Gateway : 192.168.25.1</p>
<p>Registration Server : 192.168.25.2</p>
<p>Administrator : admin</p>

</div>

<div class="section" id="devices">

<h2>Registered IoT Devices</h2>

<table>

<tr>
<th>Device</th>
<th>IP Address</th>
<th>Status</th>
</tr>

<tr>
<td>Light</td>
<td>192.168.25.102</td>
<td class="online">Online</td>
</tr>

<tr>
<td>Ceiling Fan</td>
<td>192.168.25.100</td>
<td class="online">Online</td>
</tr>

<tr>
<td>Door</td>
<td>192.168.25.104</td>
<td class="online">Online</td>
</tr>

<tr>
<td>Motion Detector</td>
<td>192.168.25.108</td>
<td class="online">Online</td>
</tr>

<tr>
<td>Smoke Detector</td>
<td>192.168.25.106</td>
<td class="online">Online</td>
</tr>

</table>

</div>

<div class="section" id="monitoring">

<h2>Monitoring</h2>

<p>All IoT devices are connected and operational.</p>

<ul>
<li>Light : Online</li>
<li>Ceiling Fan : Online</li>
<li>Door : Online</li>
<li>Motion Detector : Active</li>
<li>Smoke Detector : Standby</li>
</ul>

</div>

<div class="section" id="settings">

<h2>System Settings</h2>

<table>

<tr>
<th>Parameter</th>
<th>Value</th>
</tr>

<tr>
<td>Gateway</td>
<td>DLC100</td>
</tr>

<tr>
<td>IP Address</td>
<td>192.168.25.1</td>
</tr>

<tr>
<td>SSID</td>
<td>Smarthome</td>
</tr>

<tr>
<td>Security</td>
<td>WPA2-PSK</td>
</tr>

<tr>
<td>Username</td>
<td>admin</td>
</tr>

<tr>
<td>Password</td>
<td>admin</td>
</tr>

</table>

</div>

<div class="section" id="network">

<h2>Network Information</h2>

<table>

<tr>
<th>Device</th>
<th>IP</th>
</tr>

<tr>
<td>Home Gateway</td>
<td>192.168.25.1</td>
</tr>

<tr>
<td>Server0</td>
<td>192.168.25.2</td>
</tr>

<tr>
<td>Laptop0</td>
<td>192.168.25.103</td>
</tr>

<tr>
<td>Smartphone0</td>
<td>192.168.25.110</td>
</tr>

</table>

</div>

<div class="section" id="about">

<h2>About Project</h2>

<p><b>Project:</b> Smart Home IoT Simulation</p>

<p><b>Developer:</b> Hasta Satriya</p>

<p><b>NIM:</b> 240401010207</p>

<p><b>Course:</b> Internet of Things</p>

<p><b>University:</b> Universitas Siber Asia</p>

</div>

<div class="footer">

Smart Home IoT Project © 2026

</div>

</div>

<script>

function login(){

var u=document.getElementById("username").value;
var p=document.getElementById("password").value;

if(u=="admin" && p=="admin")
{
document.getElementById("loginPage").style.display="none";
document.getElementById("dashboard").style.display="block";
}
else
{
alert("Invalid Username or Password");
}
}

function showRegister(){
document.getElementById("loginPage").style.display="none";
document.getElementById("registerPage").style.display="block";
}

function showForgot(){
document.getElementById("loginPage").style.display="none";
document.getElementById("forgotPage").style.display="block";
}

function backLogin(){

document.getElementById("registerPage").style.display="none";

document.getElementById("forgotPage").style.display="none";

document.getElementById("loginPage").style.display="block";
}

function registerSuccess(){

alert("Registration Successful\\nUsername : admin\\nPassword : admin");

backLogin();
}

function recoverPassword(){

alert("Default Account\\nUsername : admin\\nPassword : admin");
}

function lightOn()
{
document.getElementById("lightStatus").innerHTML="ON";
}

function lightOff()
{
document.getElementById("lightStatus").innerHTML="OFF";
}

function fanOn()
{
document.getElementById("fanStatus").innerHTML="ON";
}

function fanOff()
{
document.getElementById("fanStatus").innerHTML="OFF";
}

function doorOpen()
{
document.getElementById("doorStatus").innerHTML="OPEN";
}

function doorClose()
{
document.getElementById("doorStatus").innerHTML="CLOSED";
}

</script>

</body>
</html>