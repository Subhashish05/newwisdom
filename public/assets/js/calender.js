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

let Events = [];

async function loadEvents() {
	try {
		const res = await fetch('api/notices');
		const data = await res.json();
		Events = data;
		getMonth();
	} catch (err) {
		console.error(err);
	}
}

loadEvents();

function getMonth(num) {
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
		let date = new Date(year, newMonth);
		currentmonth = date.getMonth();
		currentDate = date.getDate();
		currentDay = date.getDay();
	}

	let prevMonthNumDays = new Date(year, newMonth, 0).getDate();
	let firstDate = prevMonthNumDays - (new Date(year, newMonth, 1).getDay() - 1);

	let counter = 0;
	let calender = '<tr>\n';
	document.querySelector('[data-events]').innerHTML = ``;
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
			const dateStr = e.date;
			const [y, m, d] = dateStr.split('-');
			if (d == j && m == newMonth + 1 && y == year) {
				calender += `<td class="event" 
						tabindex="0" 
						onmouseover="showEvent('${e.id}')" 
						onfocus="showEvent('${e.id}')">
					${j}
					</td>`;
				document.querySelector('[data-events]').innerHTML += `<li id="id${e.id}" class="d-none">
					<span>${e.title} (${d}/${m}/${y})</span>
					<p style="font-size: 12px">${e.context}</p>
					</li>\n`;
				event = true;
				if (counter % 7 == 0) calender += `</tr>\n<tr>\n`;
			}
		});

		if (event) continue;

		if (j == date.getDate() && newMonth == today.getMonth() && year == today.getFullYear()) {
			calender += `<td class="active">${j}</td>\n`;
		} else {
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
	calender += '</tr>\n';

	document.querySelector('[data-month]').textContent = months[currentmonth] + ' (' + year + ')';
	document.querySelector('[data-calender]').innerHTML = calender;
}
getMonth();

function showEvent(id) {
	[...document.querySelector('[data-events]').children].forEach((e) => e.classList.add('d-none'));
	document.querySelector(`#id${id}`).classList.remove('d-none');
}
