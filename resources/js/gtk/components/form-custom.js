/**
 * Append Label
 * Fitur untuk menambahkan teks pada .form-custom
 * 
 * @since 1.0.0
 * @author Dasa Kreativa Studio (2021-2022)
 * @author Programmer Ndeso (2021-2022)
 * @package garuda-kit
 */
function formCustomLabel()
{
    let form = document.querySelectorAll('.form-custom[data-label]');

    if(form.length > 0) {
        for(i = 0;i < form.length;i++) {
            form[i].querySelector('label.form-custom-label').append(`<span class="form-control-after">${label}</span>`);
        }
    }
}

/**
 * Form Label Mengambang
 * Fitur untuk mengubah input.form-control pada formulir mengambang (.form-lg atau .form.sm)
 * 
 * @since 1.0.0
 * @author Dasa Kreativa Studio (2021-2022)
 * @author Programmer Ndeso (2021-2022)
 * @package garuda-kit
 */
function floatingLabelForm($size = 'lg')
{
    let form = document.querySelectorAll(`.form-floating.form-${$size}`);

    if(form.length > 0) {
        for(i = 0;i < form.length;i++) {
            form[i].querySelector('.form-control').classList.add(`form-control-${$size}`)
        }
    }
}

/**
 * Password Button Toggler
 * Fitur untuk tombol show-hide password pada form
 * 
 * @since 1.0.0
 * @author Dasa Kreativa Studio (2021-2022)
 * @author Programmer Ndeso (2021-2022)
 * @package garuda-kit
 */
function buttonPassword()
{
    let button = document.querySelectorAll('.form-btn-password');
    
    if(button.length > 0) {
        for(i = 0;i < button.length;i++) {
            button[i].addEventListener('click', function(e) {
                let element = this;
                let input   = element.closest('.form-password') ? element.closest('.form-password').querySelector('.form-control') : (element.closest('.form-password-sm') ? element.closest('.form-password-sm').querySelector('.form-control') : element.closest('.form-password-lg').querySelector('.form-control'));
                let icon    = element.querySelector('i');
                
                if(input.getAttribute('type') == 'password') {
                    input.setAttribute('type', 'text');
                } else {
                    input.setAttribute('type', 'password');
                }
                
                if(icon.classList.contains('fa-eye')) {
                    icon.classList.toggle('fa-eye-slash');
                } else {
                    icon.classList.toggle('fa-eye');
                }
            });
        }
    }
}

/**
 * Initialisasi
 * Menginitialisasi dari beberapa fungsi diatas supaya bisa di aktifkan atau dinonaktifkan.
 * Seperti halnyya hirarki kode pada C++.
 * 
 * @since 1.0.0
 * @author Dasa Kreativa Studio (2021-2022)
 * @author Programmer Ndeso (2021-2022)
 * @package garuda-kit
 */
function init()
{
    buttonPassword();           // Password Button Toggler
    floatingLabelForm('lg');    // Floating form Large
    floatingLabelForm('sm');    // Floating form small
    formCustomLabel();          // Custom label text
}
init();