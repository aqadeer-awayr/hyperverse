

$("#video_two").on('shown.bs.modal', function () {
    $(this).find(".modal-content video").get(0).play();
});
$("#video_two").on('hide.bs.modal', function () {
    $(this).find(".modal-content video").get(0).pause();
});
$("#video_one").on('shown.bs.modal', function () {
    $(this).find(".modal-content video").get(0).play();
});
$("#video_one").on('hide.bs.modal', function () {
    $(this).find(".modal-content video").get(0).pause();
});



// This example requires the Visualization library. Include the libraries=visualization
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=visualization">
let map, heatmap;

function initMap() {
    $.ajax({
        url: '/test',
        type: "GET",
        success: function (data) {
            var resData = []
            data = JSON.parse(data)
            console.log(data)
            $.each(data, function (key, value) {
                if (key === 0)
                    console.log(key)
                resData.push(new google.maps.LatLng(value['latitude'], value['longitude']))
            });
            var center = new google.maps.LatLng(31.9740218, 44.6737926);

            map = new google.maps.Map(document.getElementById('map'), {
                center: center,
                zoom: 3,
                mapTypeId: 'terrain'
            });

            var heatmap = new google.maps.visualization.HeatmapLayer({
                data: resData
            });
            heatmap.setMap(map);
        }
    });
    /* Data points defined as an array of LatLng objects */
    var points = [
        [
            36.2048, 138.2529, "Japanese",
        ],
        [
            35.9078, 127.7669, "Korean",
        ],
        [
            45.9432, 24.9668, "Romanian",
        ],
        [
            48.6690, 19.6990, "Slovak",
        ],
        [
            30.5595, 22.9375, "Setswana (S.Africa)",
        ],
        [
            30.5595, 22.9375, "Isizulu (S.Africa)",
        ],
        [
            26.2006, 92.9376, "Assamese (India)",
        ],
        [
            30.5595, 22.9375, "Sesotho (S.Africa)",
        ],
        [
            15.4878, 78.4858, "Telugu (India)",
        ],
        [
            31.6653, 93.0034, "Creole",
        ],
        [
            11.3494, 37.9785, "Amharic",
        ],
        [
            15.8700, 100.9925, "Thai",
        ],
        [
            30.5595, 22.9375, "Xhosa (S.Africa)",
        ],
        [
            42.7339, 25.4858, "Bulgarian",
        ],
        [
            0.7893, 113.9213, "Indonesian",
        ],
        [
            6.3690, 34.8888, "Kiswahili (Tanzania)",
        ],
        [
            6.3690, 35.8888, "Swahili (Tanzania)",
        ],
        [
            7.8731, 80.7718, "Sinhala",
        ],
        [
            43.4573, 144.1040, "Twi (Akan) (Ghanaian)",
        ],
        [
            22.2587, 71.1924, "Gujarati (India)",
        ],
        [
            32.4279, 53.6880, "Persian",
        ],
        [
            40.1431, 47.5769, "Azerbaijani",
        ],
        [
            19.7515, 75.7139, "Marathi (India)",
        ],
        [
            23.4241, 53.8478, "Urdu (UAE)",
        ],
        [
            30.5595, 22.9375, "Sepedi (S.Africa)",
        ],
        [
            30.5595, 22.9375, "Afrikaans (S.Africa)",
        ],
        [
            15.1794, 39.7823, "Tigrigna",
        ],
        [
            11.3494, 37.9785, "Amharic",
        ],
        [
            7.5460, 40.6347, "Ormofa",
        ],
        [
            29.6100, 28.2336, "Sesotho (Lesotho)",
        ],
    ];
    var data = []
    $.each(points, function (key, value) {
        data.push(new google.maps.LatLng(value[0], value[1]))
    });

}

function markerMap() {
    $.ajax({
        url: '/get-capitals',
        type: "GET",
        success: function (data) {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 3.5,
                center: new google.maps.LatLng(31.9740218, 44.6737926),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();
            var marker;
            data = JSON.parse(data)
            console.log(data)
            $.each(data, function (key, value) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(value['latitude'], value['longitude']),
                    title: value['name'] + ' ' + value['capital_name'],
                    map: map,
                    animation: google.maps.Animation.DROP,
                });
                var contentString = '<h6 class="text-dark">' + marker.title + '</h6>'
                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(contentString);
                        infowindow.open(map, marker);
                    }
                })(marker));
            });
        }
    });

}

// calender

//global variables
var monthEl = $(".c-main");
var dataCel = $(".c-cal__cel");
var dateObj = new Date();
var month = dateObj.getUTCMonth() + 1;
var day = dateObj.getUTCDate();
var year = dateObj.getUTCFullYear();
var monthText = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
];
var indexMonth = month;
var todayBtn = $(".c-today__btn");
var addBtn = $(".js-event__add");
var saveBtn = $(".js-event__save");
var closeBtn = $(".js-event__close");
var winCreator = $(".js-event__creator");
var inputDate = $(this).data();
today = year + "-" + month + "-" + day;


// ------ set default events -------
function defaultEvents(dataDay, dataName, dataNotes, classTag) {
    var date = $('*[data-day=' + dataDay + ']');
    date.attr("data-name", dataName);
    date.attr("data-notes", dataNotes);
    date.addClass("event");
    date.addClass("event--" + classTag);
}

defaultEvents(today, 'YEAH!', 'Today is your day', 'important');
defaultEvents('2017-12-25', 'MERRY CHRISTMAS', 'A lot of gift!!!!', 'festivity');
defaultEvents('2017-05-04', "LUCA'S BIRTHDAY", 'Another gifts...?', 'birthday');
defaultEvents('2017-03-03', "MY LADY'S BIRTHDAY", 'A lot of money to spent!!!!', 'birthday');


// ------ functions control -------

//button of the current day
todayBtn.on("click", function () {
    if (month < indexMonth) {
        var step = indexMonth % month;
        movePrev(step, true);
    } else if (month > indexMonth) {
        var step = month - indexMonth;
        moveNext(step, true);
    }
});

//higlight the cel of current day
dataCel.each(function () {
    if ($(this).data("day") === today) {
        $(this).addClass("isToday");
        fillEventSidebar($(this));
    }
});

//window event creator
addBtn.on("click", function () {
    winCreator.addClass("isVisible");
    $("body").addClass("overlay");
    dataCel.each(function () {
        if ($(this).hasClass("isSelected")) {
            today = $(this).data("day");
            document.querySelector('input[type="date"]').value = today;
        } else {
            document.querySelector('input[type="date"]').value = today;
        }
    });
});
closeBtn.on("click", function () {
    winCreator.removeClass("isVisible");
    $("body").removeClass("overlay");
});
saveBtn.on("click", function () {
    var inputName = $("input[name=name]").val();
    var inputDate = $("input[name=date]").val();
    var inputNotes = $("textarea[name=notes]").val();
    var inputTag = $("select[name=tags]")
        .find(":selected")
        .text();

    dataCel.each(function () {
        if ($(this).data("day") === inputDate) {
            if (inputName != null) {
                $(this).attr("data-name", inputName);
            }
            if (inputNotes != null) {
                $(this).attr("data-notes", inputNotes);
            }
            $(this).addClass("event");
            if (inputTag != null) {
                $(this).addClass("event--" + inputTag);
            }
            fillEventSidebar($(this));
        }
    });

    winCreator.removeClass("isVisible");
    $("body").removeClass("overlay");
    $("#addEvent")[0].reset();
});

//fill sidebar event info
function fillEventSidebar(self) {
    $(".c-aside__event").remove();
    var thisName = self.attr("data-name");
    var thisNotes = self.attr("data-notes");
    var thisImportant = self.hasClass("event--important");
    var thisBirthday = self.hasClass("event--birthday");
    var thisFestivity = self.hasClass("event--festivity");
    var thisEvent = self.hasClass("event");

    switch (true) {
        case thisImportant:
            $(".c-aside__eventList").append(
                "<p class='c-aside__event c-aside__event--important'>" +
                thisName +
                " <span> • " +
                thisNotes +
                "</span></p>"
            );
            break;
        case thisBirthday:
            $(".c-aside__eventList").append(
                "<p class='c-aside__event c-aside__event--birthday'>" +
                thisName +
                " <span> • " +
                thisNotes +
                "</span></p>"
            );
            break;
        case thisFestivity:
            $(".c-aside__eventList").append(
                "<p class='c-aside__event c-aside__event--festivity'>" +
                thisName +
                " <span> • " +
                thisNotes +
                "</span></p>"
            );
            break;
        case thisEvent:
            $(".c-aside__eventList").append(
                "<p class='c-aside__event'>" +
                thisName +
                " <span> • " +
                thisNotes +
                "</span></p>"
            );
            break;
    }
};
dataCel.on("click", function () {
    var thisEl = $(this);
    var thisDay = $(this)
        .attr("data-day")
        .slice(8);
    var thisMonth = $(this)
        .attr("data-day")
        .slice(5, 7);

    fillEventSidebar($(this));

    $(".c-aside__num").text(thisDay);
    $(".c-aside__month").text(monthText[thisMonth - 1]);

    dataCel.removeClass("isSelected");
    thisEl.addClass("isSelected");

});

//function for move the months
function moveNext(fakeClick, indexNext) {
    for (var i = 0; i < fakeClick; i++) {
        $(".c-main").css({
            left: "-=100%"
        });
        $(".c-paginator__month").css({
            left: "-=100%"
        });
        switch (true) {
            case indexNext:
                indexMonth += 1;
                break;
        }
    }
}

function movePrev(fakeClick, indexPrev) {
    for (var i = 0; i < fakeClick; i++) {
        $(".c-main").css({
            left: "+=100%"
        });
        $(".c-paginator__month").css({
            left: "+=100%"
        });
        switch (true) {
            case indexPrev:
                indexMonth -= 1;
                break;
        }
    }
}

//months paginator
function buttonsPaginator(buttonId, mainClass, monthClass, next, prev) {
    switch (true) {
        case next:
            $(buttonId).on("click", function () {
                if (indexMonth >= 2) {
                    $(mainClass).css({
                        left: "+=100%"
                    });
                    $(monthClass).css({
                        left: "+=100%"
                    });
                    indexMonth -= 1;
                }
                return indexMonth;
            });
            break;
        case prev:
            $(buttonId).on("click", function () {
                if (indexMonth <= 11) {
                    $(mainClass).css({
                        left: "-=100%"
                    });
                    $(monthClass).css({
                        left: "-=100%"
                    });
                    indexMonth += 1;
                }
                return indexMonth;
            });
            break;
    }
}

buttonsPaginator("#next", monthEl, ".c-paginator__month", false, true);
buttonsPaginator("#prev", monthEl, ".c-paginator__month", true, false);

//launch function to set the current month
moveNext(indexMonth - 1, false);

//fill the sidebar with current day
$(".c-aside__num").text(day);
$(".c-aside__month").text(monthText[month - 1]);

function copyText() {
    /* Get the text field */
    var copyText = document.getElementById("hypercommunity-link");

    /* Select the text field */
    copyText.select();

    // Copy the highlighted text
    document.execCommand("copy");
    /* Alert the copied text */
    $('[data-toggle="tooltip"]').tooltip({ trigger: 'click' })
}

function updateThcLink() {
    $("#affiliate_link").focus();
    $("#affiliate_link").attr("readonly", false);
    $('#hide-edit-affiliate-button').addClass("d-none");
    $('#show-affiliate-update-button').removeClass("d-none");


}
$('body').on('click', '#show-announcement', function (event) {
    event.preventDefault();
    var id = $(this).data('id');
    $.get('get-announcemet/' + id, function (data) {
        $('#announcement_modal').modal('show');
        $('#annc-title').text(data.data.title);
        $('#annc-description').text(data.data.description);
    })
    // $('#announcement_modal').modal('show');
});



$("#close-modal-annc").click(function () {
    $('#announcement_modal').modal('hide');

})
$(document).ready(function () {
    $("#video_one").modal('show');
    // gallery js
    $('.video-gallery').magnificPopup({
        delegate: 'a',
        type: 'iframe',
        gallery: {
            enabled: true
        }
    });
    $(".edit-name-btn").on("click", function (e) {
        e.preventDefault();
        $("#user-name-field").removeAttr("readonly");
        $("#user-name-field").removeAttr("readonly").focus();
        $('.edit-name-btn').addClass("d-none");
        $('.update-name-btn').removeClass("d-none");
    });
    $(".update-name-btn").on("click", function (e) {
        // e.preventDefault();
        $('.update-name-btn').addClass("d-none");
        $('.edit-name-btn').removeClass("d-none");
        $("#user-name-field").prop("readonly", true);

    });

    setTimeout(function () {
        $(".zee-community").trigger("click");
    }, 10);


    $(".zee-community").on("click", function () {
        markerMap();
    });

    // const href = window.location.href;
    // const params = href.split('?');
    // console.log()
    // if (params.length == 2) {
    //     $.ajax({
    //         url: '/get-signup/' + params[1],
    //         type: "GET",
    //         dataType: "json",
    //         success: function (data) {
    //             console.log(data)
    //             if (data.success) {
    //                 location.reload();
    //             }
    //         }, error: function (data) {
    //             console.log(data)
    //         }
    //     });
    // }
    $('.country').on('change', function () {
        var countryID = $(this).val();
        if (countryID) {
            $.ajax({
                url: '/myform/ajax/' + countryID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    console.log(data)
                    $('select[name="state_id"]').empty();
                    $.each(data, function (key, value) {
                        $('select[name="state_id"]').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });


                }
            });
        } else {
            $('select[name="state_id"]').empty();
        }
    });
});

$('#login_video_popup').click(function () {
    if (this.checked) {
        let url = APP_URL + '/test'
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: url,
            success: function (resData) {
                $('#video_one').modal('hide')
                console.log(resData)
            },
            error: function () {
                console.log('Error Occure')
            },
            complete: function () {
                console.log('complete')
            }
        });

    }
});
$(document).ready(function () {


    $(".startup-popup-close").on("click", function () {
        $("#video_one").modal("hide");
    })

    // calendar js

    $(".alert-success").fadeTo(2000, 500).slideUp(500, function () {
        $(".alert-success").slideUp(500);
    });

    $('.js-example-basic-single').select2();
    let scrollPage = function () {
        return $('html, body').animate({ scrollTop: $("#video-play-section").offset().top }, 100);
    }
    $("#play-intr-video-btn").on("click", function () {
        // $.when(scrollPage()).done(function () {
        //     setTimeout(function () {
        //         $("#home-tab").click()
        //     }, 500);
        //     setTimeout(function () {
        //         $('#video_one').modal('show');
        //         // $("#video_one_box").get(0).play();

        //     }, 800);

        // });
    })
    $('.related-course').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        centerPadding: '150px',
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },

        ]
    });
    $('#video_one_box').bind('contextmenu', function () {
        return false;
    });
    $('#video_two_box').bind('contextmenu', function () {
        return false;
    });

    $("#tile-1 .nav-tabs a").click(function () {
        var position = $(this).parent().position();
        // console.log($(this).parent().position());
        var width = $(this).parent().width();

        $("#tile-1 .slider").css({
            "left": +position.left,
            "width": width
        });
    });
    var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
    var actPosition = $("#tile-1 .nav-tabs .active").position();
    $("#tile-1 .slider").css({
        "left": +actPosition.left,
        "width": actWidth
    });


    if ($(window).width() > 991) {
        $('.navbar-light .d-menu').hover(function () {
            $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
        });
    }

    $('.your-class').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        centerPadding: '150px',
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },

        ]
    });
    $('.comments-slider').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },

        ]
    });
});
