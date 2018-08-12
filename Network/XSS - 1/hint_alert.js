var nativeAlert = window.alert;
window.alert = function(msg) {
  nativeAlert("Woah, you did it!");
  document.cookie="successful=xss_success";
};