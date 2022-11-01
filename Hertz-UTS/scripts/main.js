function addSession(item) {
  const items = JSON.parse(sessionStorage.getItem('cartItems')) || [];

  const exist = items.find(function (element) {
    return element.id == item.id;
  });

  if (!exist) {
    const newItems = [...items, item];
    sessionStorage.setItem('cartItems', JSON.stringify(newItems));
  }
}

function getSession() {
  return JSON.parse(sessionStorage.getItem('cartItems')) || [];
}

function removeSessionById(id) {
  const items = JSON.parse(sessionStorage.getItem('cartItems')) || [];
  const newItems = items.filter((item) => {
    return item.id != id;
  });

  sessionStorage.setItem('cartItems', JSON.stringify(newItems));
}

function isSessionExist() {
  return getSession().length > 0;
}

function updateSessionByFormData(formData) {
  const items = getSession();
  const newItems = items.map((item) => {
    item.rental_days = formData.get(item.id);
    return item;
  });
  sessionStorage.setItem('cartItems', JSON.stringify(newItems));
}
