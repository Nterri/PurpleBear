$("#send").submit(function (e) {
    e.preventDefault();
    let name = $('input[name="name"]')[0].value;
    $('input[name="name"]')[0].value = '';
    let message = $('textarea[name="message"]')[0].value;
    $('textarea[name="message"]')[0].value = '';
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            action: 'send',
            name: name,
            message: message,
        },
        success: function (msg) {
            ($('div[style*="display: none"]')).first().css("display", "block")
            let tr = document.createElement('tr');
            tr.innerHTML = msg.row;
            ($(".table").find("tbody")).first().prepend(tr);
        }
    })
});
