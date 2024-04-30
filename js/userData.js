function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

const userData = {
    "id": getCookie("SSN"),
    "img": getCookie("image"),
    "name": getCookie("name"),
    "email": getCookie("email"),
    "phoneNumber": "+20 123-456-7890",
    "dateofbirth": getCookie("dateOfBirth"),
    "username": getCookie("username"),
    "password": getCookie("password"),
    "type": getCookie("type")
};
