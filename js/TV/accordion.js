let haveAccordion = document.querySelector('.slider-accordion');

if (haveAccordion) {
	let slider = tns({
		container: '.slider-accordion',
		preventScrollOnTouch: 'auto',
		items: 3,
		mouseDrag: true,
		responsive: {
			590: {
				items: 5,
			},
            890: {
                items: 6,
            },
            
		},
	});
}
