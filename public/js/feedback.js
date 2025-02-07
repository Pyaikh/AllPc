const checkbox = document.querySelector('.order-form input[type="checkbox"]');
const btns = document.querySelectorAll(".order-form button");

checkbox.addEventListener("change", function() {
    const checked = this.checked;
    for (const btn of btns) {
        checked ? (btn.disabled = false) : (btn.disabled = true);
    }
});
