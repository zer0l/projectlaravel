$(document).ready(() => {
    $("#brand").change(function() {
        var brand_id = $(this).val();
        $.ajax({
            url: "/addCar",
            type: "GET",
            data: {
                brand_id: brand_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                $('#model').html(data);
            }
        });
    })


});