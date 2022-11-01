(function () {
  const $toPay = document.getElementById('toPay');
  const items = getSession();

  const toPayAmount = items.reduce(function (total, item) {
    total += item.price_per_day * item.rental_days;
    return total;
  }, 0);

  $toPay.innerText = toPayAmount;


  const $carts = document.getElementsByName('carts')[0];
  $carts.value = sessionStorage.getItem('cartItems')
  
})();
