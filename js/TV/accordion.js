let haveAccordion = document.querySelector('.slider-accordion');

if (haveAccordion) {
	let slider = tns({
		container: '.slider-accordion',
		preventScrollOnTouch: 'auto',
		items: 5,
        mouseDrag: true
	});
}




