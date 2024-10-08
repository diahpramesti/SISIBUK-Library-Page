function asalKotaChange() {
  const negara = document.getElementById("asal_negara").value; // Get selected country
  const asalKotaDiv = document.getElementById("asal_kota_div"); // 'asal_kota' div
  const asalKotaSelect = document.getElementById("asal_kota"); // 'asal_kota' select dropdown

  const cityMapping = {
    "USA": ["Hoboken", "New_York_City", "California", "Danver", "Jersey", "Seattle", "Sebastopol", "Upper_Saddle_River", "Waltham"],
    "Indonesia": ["Depok", "Jakarta", "Yogyakarta"],
    "New_York": ["Avenue_of_The_Americas"],
    "Massachusetts": ["Boston", "Burlington"],
    "New_Jersey": ["Englewood_Cliffs"],
    "India": ["New_Delhi"],
    "Indiana": ["Indianapolis"],
    "UK": ["London"],
  };

  const noCityMapping = ["Asia", "Canada", "Singapore"];

  if (negara === "") {
    // If 'asal_negara' is blank, show 'asal_kota_div' and make all city options visible
    asalKotaDiv.style.display = "flex";
    asalKotaSelect.value = ""; // Reset the selected value
    Array.from(asalKotaSelect.options).forEach(option => {
      option.hidden = false; // Show all options
    });
  } else if (noCityMapping.includes(negara)) {
    // If 'asal_negara' is in 'noCityMapping', hide 'asal_kota_div'
    asalKotaDiv.style.display = "none";
    asalKotaSelect.value = ""; // Reset the selected value
  } else if (cityMapping[negara]) {
    // If 'asal_negara' has a valid city mapping
    asalKotaDiv.style.display = "flex"; // Show 'asal_kota_div'
    const relevantCities = cityMapping[negara];

    // Hide/show city options based on 'cityMapping'
    Array.from(asalKotaSelect.options).forEach(option => {
      option.hidden = !relevantCities.includes(option.value);
    });
  } 
}
