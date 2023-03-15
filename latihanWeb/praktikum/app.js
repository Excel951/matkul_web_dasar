const form = document.querySelector(`form`);

form.addEventListener(`submit`, (e) => {
	e.preventDefault();
	let nama = document.querySelector(`#nama`);
	let email = document.querySelector(`#email`);
	let saudara = document.querySelector(`#jmlSaudara`);
	let alamat = document.querySelector(`#alamat`);

	const tbody = document.querySelector(`tbody`);
	let tr = document.createElement(`tr`);
	console.log(tr);
	console.log(`ini`);
	// for (let index = 0; index < data.length; index++) {
	let td0 = document.createElement(`td`);
	let td1 = document.createElement(`td`);
	let td2 = document.createElement(`td`);
	let td3 = document.createElement(`td`);

	td0.innerText = nama.value;
	td1.innerText = email.value;
	td2.innerText = saudara.value;
	td3.innerText = alamat.value;

	tr.appendChild(td0);
	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);

	tr.insertAdjacentElement(`beforeend`, td0);
	tr.insertAdjacentElement(`beforeend`, td1);
	tr.insertAdjacentElement(`beforeend`, td2);
	tr.insertAdjacentElement(`beforeend`, td3);
	// }
	tbody.insertAdjacentElement(`beforeend`, tr);

	nama.value = ``;
	email.value = ``;
	alamat.value = ``;
	saudara.value = `1`;
});

form.addEventListener(`reset`, (e) => {
	e.preventDefault();

	let nama = document.querySelector(`#nama`);
	let email = document.querySelector(`#email`);
	let saudara = document.querySelector(`#jmlSaudara`);
	let alamat = document.querySelector(`#alamat`);

	nama.value = ``;
	email.value = ``;
	alamat.value = ``;
	saudara.value = `1`;
});
