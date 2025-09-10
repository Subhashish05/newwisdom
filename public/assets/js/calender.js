const months = [
	'January',
	'February',
	'March',
	'April',
	'May',
	'June',
	'July',
	'August',
	'September',
	'October',
	'November',
	'December',
];
const today = new Date();
let month = today.getMonth();
let year = today.getFullYear();
let date = new Date();
let currentmonth = date.getMonth();
let currentDate = date.getDate();
let currentDay = date.getDay();
let newMonth = month;
let Dates = [];
let Events = [];
let Holidays = [];
let HolidaysOffset = 0;

function getCalender(num) {
	if (num == 'next' || num == 'prev') {
		newMonth = num == 'next' ? newMonth + 1 : newMonth - 1;
		if (newMonth > 11) {
			newMonth = 0;
			year++;
		}
		if (newMonth < 0) {
			newMonth = 11;
			year--;
		}
		let date2 = new Date(year, newMonth);
		currentmonth = date2.getMonth();
		currentDate = date2.getDate();
		currentDay = date2.getDay();
	}
	let prevMonthNumDays = new Date(year, newMonth, 0).getDate();
	let firstDate = prevMonthNumDays - (new Date(year, newMonth, 1).getDay() - 1);

	let counter = 0;
	let calender = '<tr>\n';
	// pre month
	for (let i = firstDate; i <= prevMonthNumDays; i++) {
		counter++;
		calender += `<td class="not_active"><div>${i}</div></td>\n`;
	}
	// current month
	for (let j = 1; j <= new Date(year, newMonth + 1, 0).getDate(); j++) {
		counter++;
		let event = false;

		Events.forEach((e) => {
			const dateStr = e.date;
			const [y, m, d] = dateStr.split('-');
			if (d == j && m == newMonth + 1 && y == year) {
				calender += `<td class="event"><div>${j}</div></td>\n`;
				// document.querySelector('[data-events]').innerHTML += `<div class="p-2 shadow rounded-1 bg-light mb-2">
				// <h3 class="fs-7 mb-0">${e.title} (${d}/${m}/${y})</h3>
				// <pp class="text-muted mb-0" style="font-size: 8px">${e.context}</pp>
				// </div>\n`;
				event = true;
				if (counter % 7 == 0) calender += `</tr>\n<tr>\n`;
			}
		});

		for (let index = HolidaysOffset; index < Holidays.length; index++) {
			const holiday = Holidays[index];
			if (
				holiday.date.datetime.day == j &&
				holiday.date.datetime.month == newMonth + 1 &&
				holiday.date.datetime.year == year
			) {
				Dates.push(j);

				HolidaysOffset = index;
				// document.querySelector('[data-events]').innerHTML += `<div class="p-2 shadow rounded-1 bg-light mb-2">
				// 	<h3 class="fs-7 mb-0 d-flex justify-content-between"><span>${holiday.name}</span> <span class="fs-8 text-muted">(${j}/${holiday.date.datetime.month}/${holiday.date.datetime.year})</span></h3>
				// 	<p class="text-muted mb-0" style="font-size: 8px">${holiday.description}</p>
				// 	</div>\n`;
				if (Dates.at(-2) !== j && !event) calender += `<td class="holiday">
					<div>${j}</div>
					<div class='event_details'>${holiday.name}</div>
				</td>\n`;
				event = true;
				if (counter % 7 == 0) calender += `</tr>\n<tr>\n`;
			}
		}
		if (event) continue;

		if (j == date.getDate() && newMonth == today.getMonth() && year == today.getFullYear()) {
			calender += `<td class="active"><div>${j}</div></td>\n`;
		} else {
			calender += `<td><div>${j}</div></td>\n`;
		}

		if (counter % 7 == 0) calender += `</tr>\n<tr>\n`;
	}
	HolidaysOffset = 0;
	Dates = [];
	// next month
	const remainDay = 42 - counter;
	for (let k = 1; k <= remainDay; k++) {
		counter++;
		calender += `<td class="not_active"><div>${k}</div></td>\n`;
		if (counter % 7 == 0 && counter < 42) calender += `</tr>\n<tr>\n`;
	}
	calender += '</tr>\n';

	document.querySelector('[data-month]').textContent = months[currentmonth] + ' (' + year + ')';
	document.querySelector('[data-calender]').innerHTML = calender;
}

async function loadEvents() {
	try {
		const res = await fetch('api/notices');
		const data = await res.json();
		Events = data;
		getCalender();
	} catch (err) {
		console.error(err);
	}
}

async function loadHoliday() {
	try {
		const res = await fetch('/assets/js/holiday.json');
		const data = await res.json();
		Holidays = data;
		loadEvents();
	} catch (err) {
		console.error(err);
	}
}
getCalender();
if (Holidays.length == 0) loadHoliday();
