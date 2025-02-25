const Slider = document.querySelector("[data-slider]");
const pagination = document.querySelector("[data-pagination]");
const Slides = Slider.children.length;
let LeftLimit = 0;
let slideLeftValue = 0;
let cardWidth = 0;
let mouseMove = new Array();
let paginationDots = 0;

function slider({ numberofsliders, margin, auto = false, speed = 0 }) {
	const NumberOfSliders = numberofsliders;
	const Margin = margin;
	for (let index = 0; index < Slides; index++) {
		const element = Slider.children[index];
		element.style.width = document.querySelector('.slide_container').clientWidth / NumberOfSliders - (Margin / NumberOfSliders) * (NumberOfSliders) + "px";
		element.style.margin = `${Margin / 2}px`;
	}
	//creating pagination dots
	paginationDots = Slides - (NumberOfSliders - 1);
	for (let index = 0; index < paginationDots; index++) {
		pagination.appendChild(document.createElement("span"));
		pagination.childNodes[index + 1].addEventListener("click", (e) => {
			removeDots();
			e.target.classList.add("active");
			slideLeftValue = -(cardWidth * (index));
			Slider.style.left = `${slideLeftValue < 0 ? slideLeftValue : 0}px`;
		});
	}
	pagination.children[0].classList.add("active");

	//Value evaluation
	cardWidth = Slider.children[0].scrollWidth + Margin; //getting width of cards
	LeftLimit = -(cardWidth * (Slides - NumberOfSliders)); // estimating left value
	Slider.style.width = `${Slider.scrollWidth}px`; //getting width of slider

	Slider.onmousedown = () => {
		Slider.classList.add("click");
		Slider.addEventListener("mousemove", handleMouseMove);
	};
	Slider.onmouseup = handleMouseEnd;
	Slider.onmouseout = handleMouseOut;
	// Slider.ontouchmove = handleMouseMove;
	// Slider.ontouchend = handleMouseEnd;

	// if (auto) autoplay(speed);
	return;
}
function removeDots() {
	for (let index = 0; index < paginationDots; index++) {
		pagination.children[index].classList.remove("active");
	}
	return;
}
function handleMouseMove(e) {
	if (mouseMove.length < 3) {
		mouseMove.push(e.clientX);
	} else {
		mouseMove[0] = mouseMove[1];
		mouseMove[1] = e.clientX;
	}
	if (mouseMove.length > 1) {
		slideLeftValue += mouseMove[1] - mouseMove[0]; // update left value
		Slider.style.left = `${slideLeftValue}px`;
	}
	return;
}
function handleMouseEnd(event) {
	handleMouseOut(event);
	snap();
	return;
}
function handleMouseOut(event) {
	snap();
	event.stopImmediatePropagation();
	Slider.classList.remove("click");
	Slider.removeEventListener("mousemove", handleMouseMove);
	mouseMove = [];
}
function snap() {
	if (slideLeftValue > 0) slideLeftValue = 0; //checking left value higher limit
	if (LeftLimit > slideLeftValue) {
		slideLeftValue = LeftLimit; //checking left value lower limit
	}
	if (LeftLimit < slideLeftValue && mouseMove[1] - mouseMove[0] <= 0) {
		slideLeftValue = -(Math.abs(slideLeftValue) + (cardWidth - (Math.abs(slideLeftValue) % cardWidth)));
	}
	if (LeftLimit < slideLeftValue && mouseMove[1] - mouseMove[0] > 0) {
		slideLeftValue = -(Math.abs(slideLeftValue) - (Math.abs(slideLeftValue) % cardWidth));
	}
	Slider.style.left = `${slideLeftValue < 0 ? slideLeftValue : 0}px`; //assigning left value of the Slider
	removeDots();
	pagination.children[Math.round(Math.abs(slideLeftValue) / cardWidth)].classList.add("active");
	return;
}
function slider_prev(){
	Slider.style.left = `${slideLeftValue += cardWidth}px`;
	snap();
	return;
}
function slider_next(){
	Slider.style.left = `${slideLeftValue -= cardWidth}px`;
	snap();
	return;
}
function autoplay(speed) {
	setInterval(() => {
		Slider.style.left = `${slideLeftValue <= LeftLimit ? 0 : (slideLeftValue -= cardWidth)}px`;
	}, speed);
	return;
}
