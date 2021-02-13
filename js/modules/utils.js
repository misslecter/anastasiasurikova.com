const age = document.querySelector('[data-age]');
const year = document.querySelector('[data-year]');

if (age) {
  const birthday = new Date('10/24/1996');
  const ageDifMs = Date.now() - birthday.getTime();
  const ageDate = new Date(ageDifMs); // miliseconds from epoch
  age.innerHTML = Math.abs(ageDate.getUTCFullYear() - 1970);
}

if (year) {
  year.innerHTML = new Date().getFullYear();
}
