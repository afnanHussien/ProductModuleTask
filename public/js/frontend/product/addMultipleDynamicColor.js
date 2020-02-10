var options, colors, html, id, name;
$(".add").click(function(){
    $.ajax({
        url: "/api/colors",
        type: "GET",
        dataType: 'json',
        data: {"_token":$('#csrf_token').val()},
        success: function(response) {
            colors = response;
            console.log(colors);
            html = '</div><br/><br/><div class="row form-group">';
            html += '<table style="float:left"><tr>';
            html += '<td><label for="color" class="col-sm-3 control-label">colors</label></td>';
            html += '<td><select required name="colorIds[]" class="form-control col-sm-2">';
            for (color of colors)
            {
                id = color['id'];
                name = color['value'];
                html += "<option value='"+id+"'>"+name+"</option>";
            }

            html += '</select></td>';
            html += '<td><label for="price" class="col-sm-2 control-label">price</label></td>';
            html += '<td><input type="text" required name="priceArray[]" class="form-control" /></td>';
            html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td>';
            html += '</tr></table></div>';
            $('#colorPriceDiv').append(html);
        },
        error:function (response) {
            alert("Try again later");
            var errors = response.responseJSON;
            console.log(errors.toSource());
        }
    });
});
$(document).on('click','.remove',function() {
     $(this).closest("div").remove();
});