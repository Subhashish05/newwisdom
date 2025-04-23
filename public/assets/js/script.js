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
				if (entry.target.getAttribute("data-observe") == "fixed") {
					entry.target.classList.remove("fixed");
				}
			} else {
				if (entry.target.getAttribute("data-observe") == "fixed") {
					entry.target.classList.add("fixed");
				}
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
document.addEventListener("DOMContentLoaded", function () {
	var b;
	if ("IntersectionObserver" in window) {
		b = document.querySelectorAll(".lazy");
		var d = new IntersectionObserver(
			function (e, f) {
				e.forEach(function (g) {
					if (g.isIntersecting) {
						var h = g.target;
						h.src = h.dataset.src;
						h.classList.remove("lazy");
						d.unobserve(h);
					}
				});
			},
			{ rootMargin: "0px 100px 50% 0px" }
		);
		b.forEach(function (e) {
			d.observe(e);
		});
	} else {
		var c;
		b = document.querySelectorAll(".lazy");
		function a() {
			if (c) {
				clearTimeout(c);
			}
			c = setTimeout(function () {
				var e = window.scrollY;
				b.forEach(function (f) {
					if (f.offsetTop < window.innerHeight + e) {
						f.src = f.dataset.src;
						f.classList.remove("lazy");
					}
				});
				if (b.length == 0) {
					document.removeEventListener("scroll", a);
					window.removeEventListener("resize", a);
					window.removeEventListener("orientationChange", a);
				}
			}, 20);
		}
		document.addEventListener("scroll", a);
		window.addEventListener("resize", a);
		window.addEventListener("orientationChange", a);
	}
});