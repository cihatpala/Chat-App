const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");
const searchBox = document.querySelector(".search-box input");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");
  searchBox.value = "";
  filterList("");
  if (optionsContainer.classList.contains("active")) {
    searchBox.focus();
  }
});

optionsList.forEach(o => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
  });
});

searchBox.addEventListener("keyup", function(e) {
  filterList(e.target.value);
});

const filterList = searchTerm => {
  searchTerm = searchTerm.toUpperCase();
  optionsList.forEach(option => {
    let label = option.firstElementChild.nextElementSibling.innerText.turkishToUpper();
    if (label.indexOf(searchTerm) != -1) {
      option.style.display = "block";
    } else {
      option.style.display = "none";
    }
  });
};

String.prototype.turkishToLower = function(){
  var string = this;
  var letters = { "İ": "i", "I": "ı", "Ş": "ş", "Ğ": "ğ", "Ü": "ü", "Ö": "ö", "Ç": "ç" };
  string = string.replace(/(([İIŞĞÜÇÖ]))/g, function(letter){ return letters[letter]; })
  return string.toLowerCase();
}

String.prototype.turkishToUpper = function(){
  var string = this;
  var letters = { "i": "İ", "ş": "Ş", "ğ": "Ğ", "ü": "Ü", "ö": "Ö", "ç": "Ç", "ı": "I" };
  string = string.replace(/(([iışğüçö]))/g, function(letter){ return letters[letter]; })
  return string.toUpperCase();
}