

const urlSearch = new URLSearchParams(window.location.search);
var responseName = urlSearch.get('name');
var responseEmail = urlSearch.get('email');
var responseSubject = urlSearch.get('subject');
var responseMessage = urlSearch.get('message');

// console.log("name is " + responseName);

document.getElementById("responseName").textContent  = responseName;
document.getElementById("responseEmail").textContent  = responseEmail;
document.getElementById("responseSubject").textContent  = responseSubject;
document.getElementById("responseMessage").textContent  = responseMessage;
