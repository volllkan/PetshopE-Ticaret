


function toggleDropdown() {
  var x = document.getElementById("dropdownMenu4");
  if (x.style.display === "none") {
      x.style.display = "block"; // Menüyü göster
      x.style.opacity = 1; // Menüyü yavaşça görünür yap
  } else {
      x.style.opacity = 0; // Menüyü yavaşça görünmez yap
      setTimeout(function() {
          x.style.display = "none"; // Menüyü tamamen gizle
      }, 500); // 500ms sonra gizleme (opacity animasyon süresi)
  }
}