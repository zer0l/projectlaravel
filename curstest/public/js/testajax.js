$(document).ready(() => {

    $("#model").hide();
    $("#model-label").hide();

    $("#brand").change(function() {

        if($('#brand').val() == 0){
            $("#model").hide("slow" );
            $("#model-label").hide("slow" );}
        else{
        $("#model-label").show("slow" );
        $("#model").show("slow" );
        }

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