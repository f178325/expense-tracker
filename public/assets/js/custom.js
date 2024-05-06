function ajaxCall(h, formData, successCallBack = false, btn = false, method = 'POST') {
    if (btn !== false) {
        btn.prop("disabled", true);
    }
    let ajaxRequest;
    if (formData instanceof FormData) {
        ajaxRequest = {
            type: method,
            dataType: 'json',
            url: h,
            data: formData,
            contentType: false,
            processData: false,
        };
    } else {
        ajaxRequest = {
            type: method,
            dataType: 'json',
            url: h,
            data: formData,
        };
    }
    return $.ajax(ajaxRequest).done(function (data) {
        if (data.success) {
            if (!empty(data.message)) {
                alertMessage(data.message, true);
            }
        } else {
            if (!empty(data.message)) {
                alertMessage(data.message, false);
            }
        }
        if (typeof successCallBack == "function") successCallBack(data);
        return false;
    })
        .fail(ajaxError)
        .always(function () {
            if (btn !== false) {
                btn.prop("disabled", false);
            }
        });
}

function alertMessage(message, success) {
    const options = {
        closeButton: !0,
        newestOnTop: !0,
        positionClass: "toast-top-right demo_rtl_class",
        preventDuplicates: !0,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        tapToDismiss: !1,
        closeHtml: '<span class="progress-count"></span><i class="close-toast fi fi-rr-cross-small"></i>'
    };
    if (success === true) {
        toastr.success(message, 'Success', options);
    } else {
        toastr.error(message, 'Error', options);
    }
}

function ajaxError(jqXHR) {
    let M = '';
    if (jqXHR.status === 0) {
        M = 'Unable to connect to the server';
    } else if (jqXHR.status === 404) {
        M = 'Requested page not found. [404]';
    } else if (jqXHR.status === 500) {
        M = 'Internal Server Error [500].';
    } else if (jqXHR.status === 422) {
        M = jqXHR.responseJSON.message;
    } else if (textStatus === 'parsererror') {
        M = 'Requested JSON parse failed:<br>' + jqXHR.responseText;
    } else if (textStatus === 'timeout') {
        M = 'Request Time out.';
    } else if (textStatus === 'abort') {
        M = 'Ajax request aborted.';
    } else {
        M = 'Uncaught Error ' + jqXHR.textStatus;
    }
    alertMessage(M, false);
}

function empty(value) {
    let emptyValues = [undefined, null, ''];
    for (let i = 0; i < emptyValues.length; i++) {
        if (value === emptyValues[i]) {
            return true;
        }
    }
    return false;
}

function redirectTo(url, timer = 2000) {
    setTimeout(function () {
        location.href = url;
    }, timer);
}
