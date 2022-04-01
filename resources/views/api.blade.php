<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Hyperspace by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a href="index.html" class="title">Roberto Mejia</a>
				<nav>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="{{route('generic')}}" class="active">Generic</a></li>
						<li><a href="elements.html">Elements</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">
                <h1 class="major" id="id"></h1>
                <h1 class="major" id="actividad"></h1>
                <h1 class="major" id="Tipo"></h1>
                <h1 class="major" id="participantes"></h1>
                


			</div>
            <script>
                fetch('http://www.boredapi.com/api/activity/')
                .then(res => res.json())
                .then(data => {
                    document.getElementById('id').innerHTML = data.key;
                    document.getElementById('actividad').innerHTML = data.activity;
                    document.getElementById('Tipo').innerHTML = data.type;
                    document.getElementById('participantes').innerHTML = data.participants;
                });
            </script>

		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>