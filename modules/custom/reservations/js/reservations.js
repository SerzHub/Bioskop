function choosingGenre() {
    $("#genre").on("change", function () {
        $.ajax({
            method: "GET", url: "./movie_reservations?type=" + $("#genre").val(),
            succes: function () {
                window.location.href = "./movie_reservations?type=" + $("#genre").val();
            }
        })
    })
}

choosingGenre();



