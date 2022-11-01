(function () {
  const $main = document.getElementById('main');

  axios.get('./backend/data.php').then(function (response) {
    response.data.data.map(function (item) {
      $main.append(createCarElement(item));
    });
  });
})();

function createCarElement(item) {
  const $p = document.createElement('p');

  const $car = document.createElement('div');
  $car.className = 'car';

  const $img = document.createElement('img');
  $img.src = item.image;
  $car.append($img);

  const $title = document.createElement('h4');
  $title.className = 'title';
  $title.innerText = item.model + ' (' + item.year + ')';
  $car.append($title);

  const $detail = document.createElement('div');
  $detail.className = 'detail';
  $car.append($detail);

  const $mileage = $p.cloneNode();
  $mileage.innerHTML = "<span class='key'>mileage:" + item.mileage + '<span>';
  $detail.append($mileage);

  const $fuel_type = $p.cloneNode();
  $fuel_type.innerHTML =
    "<span class='key'>fuel_type:" + item.fuel_type + '<span>';
  $detail.append($fuel_type);

  const $seats = $p.cloneNode();
  $seats.innerHTML = "<span class='key'>seats:" + item.seats + '<span>';
  $detail.append($seats);

  const $price_per_day = $p.cloneNode();
  $price_per_day.innerHTML =
    "<span class='key'>price_per_day:" + item.price_per_day + '<span>';
  $detail.append($price_per_day);

  const $availability = $p.cloneNode();
  $availability.innerHTML =
    "<span class='key'>availability:" + item.availability + '<span>';
  $detail.append($availability);

  const $description = $p.cloneNode();
  $description.innerHTML =
    "<span class='key'>description:" + item.description + '<span>';
  $detail.append($description);

  //   Button
  const $button = document.createElement('button');
  $button.innerText = 'Add to cart';
  $button.onclick = handleOnButtonClick.bind(item);
  $car.append($button);

  return $car;
}

function handleOnButtonClick() {
  if (this.availability == 'true') {
    addSession(this);
    alert('Add to the cart successfully.');
  } else {
    alert('Sorry, the car is not available now. Please try other cars.');
  }
}
