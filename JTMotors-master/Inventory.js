const searchBar = document.getElementById('searchBar');
let carNames = [];
allCarNames = document.getElementsByClassName('carNames');
searchBar.addEventListener('keyup', (e) => {
  const searchString = e.target.value;
  console.log(e.target.value);
  const filteredCars = allCarNames.filter((carNames) => {
    return (carNames.includes(searchString));
  });
});