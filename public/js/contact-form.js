document.addEventListener('DOMContentLoaded', function() {
    const dateButton = document.getElementById('dateButton');
    const dateInput = document.getElementById('dateInput');

    function triggerDateSelection() {
        if (dateInput.showPicker) {
            dateInput.showPicker(); // Chrome
        } else {
            dateInput.click(); // fallback Firefox/Safari
        }
    }

    function updateButtonText() {
        if (dateInput.value) {
            dateButton.textContent = dateInput.value;
            dateButton.classList.add('font-semibold');
        }
    }

    dateButton.addEventListener('click', triggerDateSelection);
    dateInput.addEventListener('change', updateButtonText);
});

