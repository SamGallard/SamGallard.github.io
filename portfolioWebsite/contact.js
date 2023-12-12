"use strict";

document.addEventListener('DOMContentLoaded', function() {
    let enterName = document.getElementById('name');

    enterName.addEventListener('input', function() {
      if (!/^[a-zA-Z]+$/.test(this.value)) {
        this.setCustomValidity('Please only use alpha characters (letters).');
      } 
      else {
        this.setCustomValidity('');
      }
    });
});

function showAlert() {
    alert('Congrats! You submitted your message.');
}
