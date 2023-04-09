// $.fn.ambilWaktu = function () {
let dates = new Date();
let year = dates.getFullYear();
let month = dates.getMonth() + 1;
let date = dates.getDate();
let hour = dates.getHours();
let minute = dates.getMinutes();
let seconds = dates.getSeconds();

const setKode = `${year}${month}${date}${hour}${minute}${seconds}`;
const setTgl = dates.toLocaleDateString();
// };

export { setKode, setTgl };
