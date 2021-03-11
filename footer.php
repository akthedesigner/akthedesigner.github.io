    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.0.1/dist/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="mouse.js"></script>

    <script>
    $(document).ready(function(){
    $("button").click(function(){
        $("body").toggleClass("dark");
    });
    });

	var tl = gsap.timeline();
			tl.to(".loader", {
				duration: 1.5,
				height: 0,
				ease: "expo.inOut"
			}),
				tl.from(".brand-logo", {
				duration: .9,
				y: 50,
				opacity: 0,
				ease: "expo.inOut"
			}, "-=0.5"),
				tl.from(".nav li", {
				duration: .7,
				y: 20,
				opacity: 0,
				ease: "expo.inOut",
				stagger: .1
			}, "-=0.7")
    </script>


    </body>
</html>