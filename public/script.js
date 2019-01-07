window.onload = function () {

    var btn = document.getElementById('submitBtn');

    btn.addEventListener('click', function (e) {
        e.preventDefault();
        var form = document.getElementById('form');
        var formData = new FormData(form);

    })
};