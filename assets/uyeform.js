function degistirFormlar1() {
  var girisForm = document.getElementById('girisForm1');
  var kayitForm = document.getElementById('kayitForm1');

  if (girisForm.style.display === 'none') {
      girisForm.style.display = 'block';
      kayitForm.style.display = 'none';
  } else {
      girisForm.style.display = 'none';
      kayitForm.style.display = 'block';
  }
}
