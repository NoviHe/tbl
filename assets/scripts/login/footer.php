	<!-- Bootsrap Validation -->
	<script src="../assets/js/validate.js"></script>
	<!-- Validation -->	
	<script>
		(function () {
		  'use strict'
		  var forms = document.querySelectorAll('.form_validation')

		  Array.prototype.slice.call(forms)
			.forEach(function (form) {
			  form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
				  event.preventDefault()
				  event.stopPropagation()
				}

				form.classList.add('was-validated')
			  }, false)
			})
		})()																
	</script>
	
	<!-- Profing -->	
	<script>
		$(document).ready( function() {
			$("input[type='text'], textarea").attr('spellcheck',false);
		});
	</script>
	
	<!-- Time Out -->
	<script>
		window.setTimeout(function() {
			$(".notifikasi").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove(); 
			});
		}, 3000);
	</script>
	
	<!-- Loading -->
	<script defer="" type="module">
		import PageLoad from "../assets/js/pageload.min.js";
		PageLoad.start({ fakeMode: false,fadeIn: false,color: "#ad1e40",spinBarColor: "#ad1e40",enableProgress: true });
		document.querySelector(".goto").onclick = () => PageLoad.go(1000);
		document.querySelector(".end").onclick = () => PageLoad.done();
	</script>
</body>
</html>