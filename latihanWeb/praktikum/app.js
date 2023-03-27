const form = document.querySelector(`form`);

function getData() {
	const elemen = [];
	elemen.push(document.querySelector(`#nama`));
	elemen.push(document.querySelector(`#email`));
	elemen.push(document.querySelector(`#jmlSaudara`));
	elemen.push(document.querySelector(`#alamat`));

	return elemen;
}

function removeData() {
	let data = getData();
	data.map((data) => {
		if (data.tagName.toLowerCase() === `select`) {
			data.value = `1`;
		} else {
			data.value = ``;
		}
	});
}

form.addEventListener(`submit`, (e) => {
	try {
		e.preventDefault();

		const tbody = document.querySelector(`tbody`);

		let data = getData().map((data) => {
			return data.value;
		});

		let row = tbody.insertRow();
		for (let i = 0; i < tbody.rows.length + 1; i++) {
			let cell = row.insertCell();
			cell.append(data.shift());
		}
	} catch (error) {
		console.log(error);
	}
});

form.addEventListener(`reset`, (e) => {
	e.preventDefault();

	removeData();
});
