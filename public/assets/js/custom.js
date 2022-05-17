$(document).ready(function () {
    $('.dropify').dropify();
    $('.js-example-basic-single').select2();
});
$('#multi-languages').on('select2:unselect', function (e) {
    var data = e.params.data;
    const basePath = '{{ url(' / ') }}';
    console.log(basePath)
    console.log(data.id)
    $("#language_" + data.id).remove();
});

$('#multi-languages').on("select2:select", function (evt) {
    var element = evt.params.data;
    // console.log(element)
    // console.log($("#multi-languages :selected").text();
    var clone = '';

    clone += '<div id=language_' + element.id + ' >'
    clone += '<input type="hidden" name="language_id[' + element.id + ']" value=' + element.id + '>'
    clone += '<strong class="d-inline-block mb-2">Course in Course in ' + element.text + '</strong>'
    clone += '<div class="form-group">'
    clone += '<label for="name">Course Name in ' + element.text + '</label>'
    clone += '<input required type="text" name="name[' + element.id + ']" class="form-control">'
    // add validation error for name

    // clone += '<span class="help-block">'
    // clone += '<strong class="text-danger">{{ $errors->first('name.2') }}</strong>'
    // clone += '</span>'
    // clone += '</div>'

    clone += '<div class="form-group">'
    clone += '<label for="description">Course Description in ' + element.text + '</label>'
    clone += '<textarea required name="description[' + element.id +
        ']" class="form-control" rows="4" maxlength="1500"></textarea>'
    // add validation error for description
    clone += '</div>'
    // image code
    clone += '<div class="row">'
    clone += '<div class="col">'
    clone += '<strong class="d-inline-block mb-2">Upload Course Image</strong>'
    clone += '<input type="file" class="dropify" name="image[' + element.id +
        ']" data-allowed-file-extensions="jpg png">'
    clone += '</div>'
    clone += '<div class="col">'
    clone += '<strong class="d-inline-block mb-2">Upload Course Logo</strong>'
    clone += '<input type="file" class="dropify" name="logo[' + element.id +
        ']" data-allowed-file-extensions="png jpg">'
    clone += '</div>'
    clone += '</div>'
    clone += '</div>'

    $('.cloning').append(clone)
    $('.dropify').dropify();
})

$('#get_slug_attributes').on('select2:select', function (e) {
    var data = e.params.data;
    let url = basePath + '/section-response/' + data.id
    $.ajax({
        type: 'GET',
        url: url,
        success: function (response) {
            $('.clone').empty();

            $.each(response, function (key, value) {
                var html = '';
                html += '<input type="hidden" name="slug" value=' + data.id + '>'
                html += '<input type="hidden" name="for_page" value="home">'
                html += '<div class="form-group">'
                html += '<label class="uppercase" for="name">' + key + '</label>'
                html += '<input required type="text" id="home" name="data[' + key + '_' + data.id + ']" class="form-control">'
                html += '</div>'
                console.log(html)
                $('.clone').append(html)
            });
        }
    })
});
$('#faqSelect').on('select2:select', function (e) {
    var data = e.params.data;
    console.log(data.id)
    let url = basePath + '/faq-response/' + data.id
    $.ajax({
        type: 'GET',
        url: url,
        success: function (response) {
            console.log(response)
            $('.clone').empty();
            $.each(response, function (key, value) {
                var html = '';
                html += '<input type="hidden" name="slug" value=' + data.id + '>'
                html += '<div class="form-group">'
                html += '<label class="uppercase" for="name">' + key + '</label>'
                html += '<input required type="text" id="home" name="data[' + key + '_' + data.id + ']" class="form-control">'
                html += '</div>'
                $('.clone').append(html)
            });
        }
    })
});
$('#timelineSelect').on('select2:select', function (e) {
    var data = e.params.data;
    console.log(data.id)
    let url = basePath + '/timeline-response/' + data.id
    $.ajax({
        type: 'GET',
        url: url,
        success: function (response) {
            console.log(response)
            $('.clone').empty();
            $.each(response, function (key, value) {
                var html = '';
                html += '<input type="hidden" name="slug" value=' + data.id + '>'
                html += '<div class="form-group">'
                html += '<label class="uppercase" for="name">' + key + '</label>'
                html += '<input required type="text" id="home" name="data[' + key + '_' + data.id + ']" class="form-control">'
                html += '</div>'
                $('.clone').append(html)
            });
        }
    })
});

$('#profileSelect').on('select2:select', function (e) {
    var data = e.params.data;
    let url = basePath + '/profile-response/' + data.id
    $.ajax({
        type: 'GET',
        url: url,
        success: function (response) {
            console.log(response)
            $('.clone').empty();
            $.each(response, function (key, value) {
                var html = '';
                html += '<div class="form-group">'
                html += '<label class="uppercase" for="name">' + key + '</label>'
                html += '<input required type="text" id="home" name="data[' + key + '_' + data.id + ']" class="form-control">'
                html += '</div>'
                $('.clone').append(html)
            });
        }
    })
});

// $(function () {
//     $("#datepicker-started-at").datepicker({
//         dateFormat: "yy-mm-dd",
//         duration: "fast",
//         changeMonth: true,
//         changeYear: true
//     });
// });
// $(function () {
//     $("#datepicker-finished-at").datepicker({
//         dateFormat: "yy-mm-dd",
//         duration: "fast",
//         changeMonth: true,
//         changeYear: true
//     });
// });
$(document).on('click', '.del-course', function () {
    var id = $(this).data("id");
    var url = "courses/" + id
    destroy(url, id)
})
$(document).on('click', '.del-language', function () {
    var id = $(this).data("id");
    var url = "languages/" + id
    destroy(url, id)
})
$(document).on('click', '.del-announcement', function () {
    var id = $(this).data("id");
    var url = "announcements/" + id
    destroy(url, id)
})

$(document).on('click', '.del-question', function () {
    var id = $(this).data("id");
    var url = APP_URL + "/admin/questions/" + id
    destroy(url, id)
})

function destroy(url, id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'DELETE',
                url: url,
                success: function (response) {
                    console.log('ddd')
                    $('#' + id).remove();
                }
            })
        }
    })
}

$('#add_option').click(function () {
    //Add row
    var rowCount = $('#options').children().length + 1;
    console.log("first", rowCount);
    var rowCount = $('#options').children().length + 1;
    console.log("first", rowCount);
    row = '';
    row += '<div class="form-group">'
    row += '<div class="position-relative radio-button-inline-css">'
    row += '<input class="form-check-input" type="radio" name="answer">'
    row += '<input value=' + rowCount + ' class="form-check-input" type="radio" name="answer">'
    row +=
        '<input placeholder="Enter Option Here." type="text" name="options[]" class="form-control">'
    row +=
        '<a class="btn btn-danger question-options delete_row delete-cross-icon">x</a>';
    row += '</div></div>';
    $("#options").append(row)
    console.log("second", rowCount);
    console.log("second", rowCount);
    if (rowCount == 5 || rowCount >= 5) {
        $(this).addClass("disabled");
    }
})

$("body").on('click', '.delete-cross-icon', function () {

    $(this).closest('div.form-group').remove();
    let rowCount = $('#options').children().length;
    console.log(rowCount);
    if (rowCount < 5) {
        $("#add_option").removeClass("disabled");
    }
});
