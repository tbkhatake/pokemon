const boxes = document.querySelectorAll('.box');
boxes.forEach((box, index) => {
	box.addEventListener('click', () => {
		
        
        const boxOn = document.querySelector(".box.active");
        if (boxOn) {
            boxOn.classList.remove("active");
        }
        box.classList.toggle('active');
        
	});
    
});
