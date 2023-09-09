document.addEventListener("DOMContentLoaded", function () {
    const codeForm = document.getElementById("codeForm");
    const message = document.getElementById("message");

    codeForm.addEventListener("submit", function (e) {
        e.preventDefault();
        
        const formData = new FormData(codeForm);

        fetch('/verify-code', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
        })
        .then(response => response.json())
        .then(data => {
            message.textContent = data.message;
            if (data.message === 'Puzzle unlocked! You can now access the next challenge.') {
                codeForm.reset();
            }
        })
        .catch(error => {
            console.error(error);
            message.textContent = 'An error occurred while verifying the code.';
        });
    });
});