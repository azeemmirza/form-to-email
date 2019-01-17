window.onload = function () {

    var btn = document.getElementById('submitBtn');

    btn.addEventListener('click', function (e) {
        e.preventDefault();
        var form = document.getElementById('form');
        var formData = new FormData(form);
        var xhr = new XMLHttpRequest();

        xhr.open('POST', '/server', true);
        xhr.onload = function (e) {
            console.log(e);
        };
        xhr.onerror = function (e) {
            console.log(e);
        };
        xhr.send(formData);
    });
};