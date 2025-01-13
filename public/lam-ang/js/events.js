Livewire.on('notify', notification => {
    var toast = '<div class="toast-container position-fixed bottom-0 end-0 p-3">\n' +
        '<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">\n' +
        '<div class="toast-header fw-bold"><strong class="me-auto"\n' +
        'id="notification-title">Notification</strong>\n' +
        '<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>\n' +
        '</div>\n' +
        '<div class="toast-body text-black " id="notification-message"></div>\n' +
        '</div>\n' +
        '</div>\n'
    $('#toast-container').append(toast);
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance($('#liveToast'));
    const notificationMessage = document.getElementById('notification-message');
    notificationMessage.innerHTML = notification['message'];
    toastBootstrap.show();
})

Livewire.on('showModal', modalName => {
    $('#' + modalName).modal('show');
})
Livewire.on('hideModal', modalName => {
    $('#' + modalName).modal('hide');
})

Livewire.on('changeState', newState => {
    window.history.pushState("max", "Title", newState['url']);
    // $('#' + modalName).modal('hide');
})

Livewire.on('focus', element =>{
    $("#" + element['element']).focus();
});

