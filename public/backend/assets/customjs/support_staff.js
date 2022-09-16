var Support_Staff = function(){
    var list = function(){
        var dataArr = {};
        var columnWidth = { "width": "5%", "targets": 0 };
        var arrList = {
            'tableID': '#support-staff-list',
            'ajaxURL': baseurl + "/support-staff-list-ajaxcall",
            'ajaxAction': 'getdatatable',
            'postData': dataArr,
            'hideColumnList': [],
            'noSortingApply': [0],
            'noSearchApply': [0],
            'defaultSortColumn': [0],
            'defaultSortOrder': 'DESC',
            'setColumnWidth': columnWidth
        };
        getDataTable(arrList);

        // $("body").on("click", ".delete-vessel", function() {
        //     var id = $(this).data('id');
        //     setTimeout(function() {
        //         $('.yes-sure:visible').attr('data-id', id);
        //     }, 500);
        // })

        // $('body').on('click', '.yes-sure', function() {
        //     var id = $(this).attr('data-id');
        //     var data = { id: id, _token: $('#_token').val() };
        //     $.ajax({
        //         type: "POST",
        //         headers: {
        //             'X-CSRF-TOKEN': $('input[name="_token"]').val(),
        //         },
        //         url: baseurl + "auth-users/vessel/vessel-list-ajaxcall",
        //         data: { 'action': 'delete-vessel', 'data': data },
        //         success: function(data) {
        //             $("#loader").show();
        //             handleAjaxResponse(data);
        //         }
        //     });
        // });

        // $("body").on("click", ".deactive-vessel", function() {
        //     var id = $(this).data('id');
        //     setTimeout(function() {
        //         $('.yes-sure-deactive:visible').attr('data-id', id);
        //     }, 500);
        // })

        // $('body').on('click', '.yes-sure-deactive', function() {
        //     var id = $(this).attr('data-id');
        //     var data = { id: id, _token: $('#_token').val() };
        //     $.ajax({
        //         type: "POST",
        //         headers: {
        //             'X-CSRF-TOKEN': $('input[name="_token"]').val(),
        //         },
        //         url: baseurl + "auth-users/vessel/vessel-list-ajaxcall",
        //         data: { 'action': 'deactive-vessel', 'data': data },
        //         success: function(data) {
        //             $("#loader").show();
        //             handleAjaxResponse(data);
        //         }
        //     });
        // });

        // $("body").on("click", ".active-vessel", function() {
        //     var id = $(this).data('id');

        //     setTimeout(function() {
        //         $('.yes-sure-active:visible').attr('data-id', id);
        //     }, 500);
        // })

        // $('body').on('click', '.yes-sure-active', function() {
        //     var id = $(this).attr('data-id');

        //     var data = { id: id, _token: $('#_token').val() };
        //     $.ajax({
        //         type: "POST",
        //         headers: {
        //             'X-CSRF-TOKEN': $('input[name="_token"]').val(),
        //         },
        //         url: baseurl + "auth-users/vessel/vessel-list-ajaxcall",
        //         data: { 'action': 'active-vessel', 'data': data },
        //         success: function(data) {
        //             $("#loader").show();
        //             handleAjaxResponse(data);
        //         }
        //     });
        // });


    }



    return{
        init: function(){
            list();
        },

    }
}();
