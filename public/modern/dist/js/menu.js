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

    $("body").on("click", ".editMenu", function () {
        savemethod = "update";
        $("#menuform").trigger("reset");
        var id_menu = $(this).data("id");
        $.get(baseurl + "/" + id_menu + "/edit", function (data) {
            $("#modelHeading").html("Edit Menu");
            $("#saveBtn").val("edit-menu");
            $("#ajaxModel").modal("show");

            $("#id_menu").val(data.id);
            $("#menu").val(data.name);
            $("#username").val(data.username);
            $("#url").val(data.url);
            $("#order").val(data.ord);
            $("#icon").val(data.icon);
            var hasil = $("<option selected='selected'></option>")
                .val(data.parent_id)
                .text(data.parentmenu);
            $("#parent").append(hasil).trigger("change");
        });
    });

    $(".parent").select2({
        width: "100%",
        placeholder: "Pilih Parent Menu",
        dropdownParent: $("#ajaxModel"),
        ajax: {
            url: urlSelect2,
            dataType: "json",
            delay: 250,
            data: function (params) {
                return {
                    q: params.term,
                };
            },
            processResults: function (data) {
                var results = [];
                $.each(data, function (index, item) {
                    results.push({
                        id: item.id,
                        text: item.name,
                    });
                });
                return {
                    results: results,
                };
            },
        },
    });

    $("#createMenu").click(function () {
        savemethod = "add";
        $("#saveBtn").val("create-menu");
        $("#id_menu").val("");
        $("#menuform").trigger("reset");
        $("#parent").val(null).trigger("change");
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