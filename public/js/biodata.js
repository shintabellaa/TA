$(document).on("change",".kabupaten_kota", function(){
    var kabupaten_kota = $(this).val();
    $(".kecamatan").empty();
    $(".kecamatan").append($('<option>--Kecamatan--</option>'));
    $.ajax({
        url: "/biodatapribadi/get_kecamatan",
        method: "GET",
        data: {kabupaten_kota: kabupaten_kota},
        success: function(data){
            console.log(data);
            $.each(data.kecamatan, function(index, kecamatan){
                $(".kecamatan").append($('<option>', {
                    value: kecamatan.district_id,
                    text: kecamatan.district_name,
                }));
            });
        }
    })
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#btnuploadfile").change(function(){
    readURL(this);
});
