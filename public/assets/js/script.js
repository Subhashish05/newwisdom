const Observer = new IntersectionObserver(
	(entries) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				if (entry.target.getAttribute("data-observe") == "zoomIn") {
					entry.target.classList.add("zoomIn");
					Observer.unobserve(entry.target);
				}
				if (entry.target.getAttribute("data-observe") == "fadeIn") {
					entry.target.classList.add("fadeIn");
					Observer.unobserve(entry.target);
				}
				if (entry.target.getAttribute("data-observe") == "leftIn") {
					entry.target.classList.add("leftIn");
					Observer.unobserve(entry.target);
				}
			}else{
			}
		});
	},
	{
		rootMargin: "0px",
	}
);
const elem = document.querySelectorAll("[data-observe]");
elem.forEach((e) => {
	Observer.observe(e);
});
