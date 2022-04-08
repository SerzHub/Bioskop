function choosingGenre() {
    $("#genre").on("change", function () {
        $.ajax({
            method: "GET",
            url: "./movie_reservations?type=" + $("#genre").val(),
            success: function () {
                console.log('abc');
                window.location.href = "./movie_reservations?type=" + $("#genre").val();
            }
        });
    });
}

function SelectingMovie() {
    $(".item").click(function () {
        if (!$(this).is('.itemChange')) {
            $(this).toggleClass('itemChange')
            $(".button", this).show();
        } else {
            $(".item").removeClass('itemChange')
            $(".button", this).hide();
        }
    })
}

function validateInput() {
    $("#formName").submit(function () {
        const name = $('#customerName').val();
        const name_without_numbers = /^[A-Z][a-z]+$/;

        if (name_without_numbers.test(name)) {
            $(".button1").css('background-color', 'green');
        }
        else {
            $(".button1").css('background-color', 'red');
        }
    })
}

choosingGenre();

SelectingMovie();

validateInput();



