<!-- start Simple Custom CSS and JS -->
(function()){
 let check_if_gsap_loaded = setInterval(function){
	const eleBuilder = document.querySelector('body').classList.contains("elementor-editor-active");
	const screenSize = window.screen.width >= 1025; 
		if(mindow.gsap && window.ScrollTrigger && !eleBuilder) && screenSize{
			gsap.registerPlugin(ScrollTriger);
			image_mask();
			clearInterval(chck_if_gsap_loaded);
		}
	}, 500);
 

function image_mask(){
	const imageMask = document.querySelector('.elementor-elementor .circle-mask.elementor-widget-image .elementor-widget-container img');
	gsap.to (imageMask, {
		scrollTrigger:{
			trigger: '.start-gsap-mask',
			start: '15% 25%',
			end: '25% 25%',
			scrub: 1,
			markers: true
		}
			webkitMaskSize: 70 + '%',
			duration: 1
	});
}
			 })();

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script><!-- end Simple Custom CSS and JS -->
