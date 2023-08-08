var savemethod;
$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var table = $("#mytable").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: urldata,
            type: 'POST',
        },
        columns: [
            {
                data: "DT_RowIndex",
                name: "DT_RowIndex",
            },
            {
                data: "name",
                name: "name",
            },
            {
                data: "url",
                name: "url",
            },
            {
                data: "parentmenu",
                name: "parentmenu",
            },
            {
                data: "ord",
                name: "ord",
            },
            {
                data: "action",
                name: "action",
                orderable: false,
                searchable: false,
            },
        ],
        columnDefs: [
            {
                targets: 5,
                className: "text-center",
            },
        ],
        autoWidth: false
    });

    $("#createMenu").click(function () {
        savemethod = "add";
        $("#saveBtn").val("create-menu");
        $("#id_menu").val("");
        $("#menuform").trigger("reset");
        $("#modelHeading").html("Tambah Menu");
        $("#ajaxModel").modal("show");
    });

    $("#saveBtn").click(function (e) {
        var urlx;
        var tipe;
        var id = $("#id_menu").val();
        if (savemethod == "add") {
            urlx = urlStore;
            tipe = "POST";
        } else {
            urlx = "menu/" + id;
            tipe = "PUT";
        }
        e.preventDefault();
        $(this).html("Sending..");

        $.ajax({
            data: $("#menuform").serialize(),
            url: urlx,
            type: tipe,
            dataType: "json",
            success: function (data) {
                $("#menuform").trigger("reset");
                $("#ajaxModel").modal("hide");
                table.draw();
                Swal.fire("Data", data.success, "success");
            },
            error: function (data) {
                var errorMessages = "";
                var errors = data.responseJSON.errors;

                for (var key in errors) {
                    if (errors.hasOwnProperty(key)) {
                        errorMessages += errors[key][0] + "<br>";
                    }
                }

                Swal.fire("Error", errorMessages, "error");

                $("#saveBtn").html("Simpan");
            },
        });
        $("#saveBtn").html("Simpan");
    });
});