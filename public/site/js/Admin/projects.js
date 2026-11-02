document.addEventListener('DOMContentLoaded', function () {

    // Tom Select
    document.querySelectorAll('.feature-multiselect').forEach(function (element) {
        if (element.tomselect) return;

        new TomSelect(element, {
            plugins: ['remove_button'],
            create: false,
            persist: false,
            closeAfterSelect: false,
            hideSelected: true,
            maxOptions: 200,
            placeholder: 'جست‌وجو و انتخاب ویژگی...',
            render: {
                no_results: function () {
                    return '<div class="no-results">موردی پیدا نشد</div>';
                }
            }
        });
    });

    // نمایش نام تصویر اصلی
    const primaryInput = document.getElementById('primary-image');
    const primaryName = document.getElementById('primary-image-name');

    if (primaryInput && primaryName) {
        primaryInput.addEventListener('change', function () {
            primaryName.textContent = this.files.length
                ? this.files[0].name
                : 'هنوز تصویری انتخاب نشده است.';
        });
    }

    // نمایش نام تصاویر گالری
    const galleryInput = document.getElementById('gallery-images');
    const galleryNames = document.getElementById('gallery-images-names');

    if (galleryInput && galleryNames) {
        galleryInput.addEventListener('change', function () {
            galleryNames.textContent = this.files.length
                ? Array.from(this.files).map(file => file.name).join('، ')
                : 'هنوز تصویری انتخاب نشده است.';
        });
    }

    // رفتن به اولین فیلدی که خطای اعتبارسنجی دارد
const firstError = document.querySelector(
    '.admin-project-create-field-error'
);

if (firstError) {
    const errorContainer = firstError.closest(
        '.admin-project-create-field, .admin-project-create-image-card'
    );

    if (errorContainer) {
        errorContainer.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });

        const input = errorContainer.querySelector(
            'input:not([type="file"]), input[type="file"], textarea, select'
        );

        if (input) {
            input.focus({ preventScroll: true });
        }
    }
}

});