const dropdown1 = document.getElementById('dropdown1');
const dropdown2 = document.getElementById('dropdown2');
const dropdown3 = document.getElementById('dropdown3');

dropdown1.addEventListener('change', function() {
  const selectedValue = this.value;
  if (selectedValue === '') {
    dropdown2.disabled = true;
    dropdown3.disabled = true;
  } else {
    dropdown2.disabled = false;
    // Aktifkan dropdown3 berdasarkan nilai selectedValue
    if (selectedValue === '1') {
      dropdown3.disabled = false;
    } else {
      dropdown3.disabled = true;
    }
  }
});



// document.addEventListener('DOMContentLoaded', function () {
//   const select = document.getElementById('mySelect');
//   const selectStyle = document.querySelector('.select-style');
//   const options = Array.from(select.options);

//   // Function to create custom dropdown options
//   function createCustomDropdownOptions() {
//     const ul = document.createElement('ul');
//     options.forEach((option, index) => {
//       const li = document.createElement('li');
//       li.textContent = option.textContent;
//       li.dataset.value = option.value;
//       ul.appendChild(li);
//     });
//     return ul;
//   }

//   // Initial creation of custom dropdown options
//   const ul = createCustomDropdownOptions();
//   selectStyle.appendChild(ul);

//   // Function to update custom dropdown options
//   function updateCustomDropdownOptions() {
//     const ul = createCustomDropdownOptions();
//     const existingUl = selectStyle.querySelector('ul');
//     selectStyle.replaceChild(ul, existingUl);
//   }

//   // Show/hide custom dropdown on click
//   selectStyle.addEventListener('click', function () {
//     const ul = selectStyle.querySelector('ul');
//     ul.style.display = ul.style.display === 'block' ? 'none' : 'block';
//   });

//   // Set selected option on click
//   selectStyle.addEventListener('click', function (event) {
//     if (event.target.tagName === 'LI') {
//       const value = event.target.dataset.value;
//       select.value = value;
//       selectStyle.textContent = event.target.textContent;
//       const ul = selectStyle.querySelector('ul');
//       ul.style.display = 'none';
//     }
//   });

//   // Close dropdown on click outside
//   document.addEventListener('click', function (event) {
//     if (!selectStyle.contains(event.target)) {
//       const ul = selectStyle.querySelector('ul');
//       ul.style.display = 'none';
//     }
//   });

//   // Update custom dropdown options if select options change
//   select.addEventListener('change', function () {
//     updateCustomDropdownOptions();
//   });
// });