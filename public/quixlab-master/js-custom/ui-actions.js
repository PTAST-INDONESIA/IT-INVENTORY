// ui-actions.js
$(document).ready(function () {

    $(document).on('click', '[data-action]:not(.disabled)', function () {
    const action = $(this).data('action');

    switch (action) {
        case 'new':
            $("#link_detail2").addClass("active");
            $("#link_data2").removeClass("active");
            $("#tab_data").removeClass("active show");
            $("#tab_detail").addClass("active show");
            $('#link_detail2').removeClass('disabled');
            $("#txt_code").prop("readonly", false);
            $('#btnSave').val("create");
            $('#btnSave').html('<i class="fa fa-save"></i> <b>Save</b>');
            $("#btnSave").prop("disabled", false);
            $("#btnDelete").prop("disabled", true);
            $('.select2').val(null).trigger('change');
            $("#frm_system").trigger("reset");
            $("#txt_mode").val("new-data");
            if (window.pageConfig &&
                    window.pageConfig.focusOnNew &&
                    $(window.pageConfig.focusOnNew).length) {

                    // timeout kecil untuk tab/popup
                    setTimeout(function () {
                        $(window.pageConfig.focusOnNew).focus();
                    }, 100);
                }
            break;

        case 'edit':
            $("#link_detail2").addClass("active");
            $("#link_data2").removeClass("active");
            $("#tab_data").removeClass("active show");
            $("#tab_detail").addClass("active show");
            $('#link_detail2').removeClass('disabled');
            $("#txt_code").prop("readonly", true);
            $('#txt_mode').val("update-data");
            $('#btnSave').val("edit");
            $('#btnSave').html('<i class="fa fa-save"></i> <b>Update</b>');
            $("#btnSave").prop("disabled", false);
            $("#btnDelete").prop("disabled", false);
            if (window.pageConfig &&
                    window.pageConfig.focusOnNew &&
                    $(window.pageConfig.focusOnNew).length) {

                    // timeout kecil untuk tab/popup
                    setTimeout(function () {
                        $(window.pageConfig.focusOnNew).focus();
                    }, 100);
                }
            break;

        case 'view':
            $("#link_detail2").addClass("active");
            $("#link_data2").removeClass("active");
            $("#tab_data").removeClass("active show");
            $("#tab_detail").addClass("active show");
            $('#link_detail2').removeClass('disabled');
            $("#txt_code").prop("readonly", true);
            $('#txt_mode').val("view-data");
            $('#btnSave').val("edit");
            $('#btnSave').html('<i class="fa fa-save"></i> <b>Update</b>');
            $("#btnSave").prop("disabled", true);
            $("#btnDelete").prop("disabled", true);
            if (window.pageConfig &&
                    window.pageConfig.focusOnNew &&
                    $(window.pageConfig.focusOnNew).length) {

                    // timeout kecil untuk tab/popup
                    setTimeout(function () {
                        $(window.pageConfig.focusOnNew).focus();
                    }, 100);
                }
            break;

        case 'back':
            $("#link_detail2").removeClass("active");
            $("#link_data2").addClass("active");
            $("#tab_data").addClass("active show");
            $("#tab_detail").removeClass("active show");
            $('#link_detail2').addClass('disabled');
            break;
    }
});

});
