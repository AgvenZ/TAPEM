/**
 * Settings page JavaScript functionality
 */

document.addEventListener('DOMContentLoaded', function() {
    // Color picker functionality
    const colorPicker = document.getElementById('theme_color');
    const colorText = document.getElementById('theme_color_text');

    if (colorPicker && colorText) {
        // Update text input when color picker changes
        colorPicker.addEventListener('input', function() {
            colorText.value = this.value;
        });

        // Update color picker when text input changes (if valid hex color)
        colorText.addEventListener('input', function() {
            const value = this.value;
            if (/^#[0-9A-F]{6}$/i.test(value)) {
                colorPicker.value = value;
            }
        });
    }

    // Display mode toggle functionality
    const displayModeToggle = document.getElementById('display_mode');
    const displayModeHidden = document.querySelector('input[name="display_mode_hidden"]');

    if (displayModeToggle) {
        displayModeToggle.addEventListener('change', function() {
            if (this.checked) {
                this.value = 'dark';
                if (displayModeHidden) displayModeHidden.disabled = true;
            } else {
                this.value = 'bright';
                if (displayModeHidden) displayModeHidden.disabled = false;
            }
        });

        // Initialize on page load
        if (displayModeToggle.checked) {
            displayModeToggle.value = 'dark';
            if (displayModeHidden) displayModeHidden.disabled = true;
        }
    }

    // Logo preview functionality
    const logoInput = document.getElementById('agency_logo');

    if (logoInput) {
        logoInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Create preview container if it doesn't exist
                    let previewContainer = document.getElementById('logo-preview');
                    if (!previewContainer) {
                        previewContainer = document.createElement('div');
                        previewContainer.id = 'logo-preview';
                        previewContainer.className = 'mt-2';
                        logoInput.parentNode.appendChild(previewContainer);
                    }

                    // Update preview
                    previewContainer.innerHTML = `
                        <p>Preview:</p>
                        <img src="${e.target.result}" alt="Logo Preview" class="img-thumbnail" style="max-width: 150px;">
                    `;
                };
                reader.readAsDataURL(file);
            }
        });
    }
});
