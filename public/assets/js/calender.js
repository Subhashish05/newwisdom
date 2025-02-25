const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
const today = new Date();
let month = today.getMonth();
let year = today.getFullYear();
let date = new Date();
let currentmonth = date.getMonth();
let currentDate = date.getDate();
let currentDay = date.getDay();
let newMonth = month;

const Events = [
	{
		d: 25,
		m: 8,
		y: 2024,
		descritpion: "IMPORTANT NOTICE UPDATED PAYMENT METHODS FOR SCHOOL FEES",
	},
	{
		d: 9,
		m: 5,
		y: 2024,
		descritpion: "CBSE Results User Guide 2024",
	},
	{
		d: 29,
		m: 4,
		y: 2024,
		descritpion: "School suspended for Pre-Nur to VIII",
	},
	{
		d: 25,
		m: 4,
		y: 2024,
		descritpion: "Class XI Scholarship 2024-25",
	},
	{
		d: 10,
		m: 1,
		y: 2024,
		descritpion: "Admission Guidelines 2024-25",
	},
	{
		d: 22,
		m: 12,
		y: 2023,
		descritpion: "Admission Notice 2024-2025",
	},
	{
		d: 22,
		m: 7,
		y: 2023,
		descritpion: "ROAD SAFETY",
	},
	{
		d: 8,
		m: 4,
		y: 2022,
		descritpion: "Student Safety Notice",
	},
];
function getMonth(num) {
	if (num == "next" || num == "prev") {
		newMonth = num == "next" ? newMonth + 1 : newMonth - 1;
		if (newMonth > 11) {
			newMonth = 0;
			year++;
		}
		if (newMonth < 0) {
			newMonth = 11;
			year--;
		}
		let date = new Date(year, newMonth);
		currentmonth = date.getMonth();
		currentDate = date.getDate();
		currentDay = date.getDay();
	}

	let prevMonthNumDays = new Date(year, newMonth, 0).getDate();
	let firstDate = prevMonthNumDays - (new Date(year, newMonth, 1).getDay() - 1);

	let counter = 0;
	let calender = "<tr>\n";
	document.querySelector("[data-events]").innerHTML = ``;
	// pre month
	for (let i = firstDate; i <= prevMonthNumDays; i++) {
		counter++;
        calender += `<td class="not_active">${i}</td>\n`;
	}
	// current month
	for (let j = 1; j <= new Date(year, newMonth + 1, 0).getDate(); j++) {
		counter++;
		let event = false;

		Events.forEach((e) => {
			if (e.d == j && e.m == newMonth + 1 && e.y == year) {
				calender += `<td class="event">${j}</td>\n`;
				document.querySelector("[data-events]").innerHTML += `<li class="fw-bold">${e.descritpion} (${e.d}/${e.m})</li>\n`;
				event = true;
				if (counter % 7 == 0) calender += `</tr>\n<tr>\n`;
			}
		});
		if (event) continue;

		if (j == date.getDate() && newMonth == today.getMonth() && year == today.getFullYear()) {
			calender += `<td class="active">${j}</td>\n`;
		}else{
			calender += `<td>${j}</td>\n`;
		}
		
		
		if (counter % 7 == 0) calender += `</tr>\n<tr>\n`;


	}
	// next month
	const remainDay = 42 - counter;
	for (let k = 1; k <= remainDay; k++) {
		counter++;
		calender += `<td class="not_active">${k}</td>\n`;
		if (counter % 7 == 0 && counter < 42) calender += `</tr>\n<tr>\n`;
	}
	calender += "</tr>\n";

	document.querySelector("[data-month]").textContent = months[currentmonth] + " (" + year + ")";
	document.querySelector("[data-calender]").innerHTML = calender;
}
getMonth();
