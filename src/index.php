<!DOCTYPE html>
<html>
<head>
	<title>README gif</title>
	<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
	<style type="text/css">
		#particles-js {
    background-color: #0C0C0C;
    height: 860px;
    width: 100%;
}
#typewriter {
	color:white;
    position: absolute;
    font-size: 60px;
    font-family: 'B612', sans-serif;
    font-weight: 700;
    width: 800px;
    margin: 350px 250px;
}
	</style>
</head>
<body>
<div id="particles-js">
        <div id="typewriter"></div>
</div>


<script type="text/javascript">
	particlesJS.load('particles-js', 'particlesjs-config.php', function() {
  console.log('callback - particles.js config loaded');
});
	const instance = new Typewriter('#typewriter', {
    loop: true
});
	instance.typeString("Hello World!")
    .pauseFor(500)
    .deleteAll()
    .typeString('I am Sasha')
    .pauseFor(1000)
    .deleteChars(15)
    .typeString('CEO & Lead Dev.<br>New Vektor Group')
    .pauseFor(1000)
    .deleteChars(16)
    .typeString('DronesC')
    .pauseFor(1000)
    .deleteAll()
    .typeString('Currently learning<br>Neurobiology')
    .pauseFor(2000)
    .deleteAll()
    .typeString('Contact me<br>facebook.com/lonagi22')
    .pauseFor(2000)
    .deleteAll()
    .start();
</script>
</body>
</html>