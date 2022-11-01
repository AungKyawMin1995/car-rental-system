(function () {
  const items = getSession();
  let noItem = items.length <= 0;

  const $tbody = document.getElementsByTagName('tbody')[0];
  items.map(function (item) {
    $tbody.append(createTRElement(item));
  });

  const $checkoutForm = document.getElementById('checkoutForm');
  $checkoutForm.onsubmit = handleCheckoutFormSubmit;
})();

function createTRElement(item) {
  const $tr = document.createElement('tr');
  const $td = document.createElement('td');

  const $img = document.createElement('img');
  $img.src = item.image;
  $td.append($img);
  $tr.append($td);

  const title = $td.cloneNode();
  title.innerText = item.model + ' (' + item.year + ')';
  $tr.append(title);

  const pricePerDay = $td.cloneNode();
  pricePerDay.innerText = item.price_per_day;
  $tr.append(pricePerDay);

  const $rentalDays = $td.cloneNode();
  const $numberInput = document.createElement('input');
  $numberInput.type = 'number';
  $numberInput.name = item.id;
  $numberInput.min = 0;
  $numberInput.required = true;
  $rentalDays.append($numberInput);
  $tr.append($rentalDays);

  const $action = $td.cloneNode();
  const $button = document.createElement('button');
  $button.innerText = 'Delete';
  $button.onclick = handleOnButtonClick.bind(item);
  $action.append($button);
  $tr.append($action);

  return $tr;
}

function handleOnButtonClick(e) {
  e.target.parentNode.parentNode.remove();
  const id = this.id;
  removeSessionById(id);
}

function handleCheckoutFormSubmit(e) {
  e.preventDefault();
  if (!isSessionExist()) {
    alert('No car has been reserved');
    return false;
  }
  const formData = new FormData(e.target);
  updateSessionByFormData(formData);
  window.location = 'checkout.php';
}
