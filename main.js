var myVar = setInterval(LoadData, 2000);

http_request = new XMLHttpRequest();


function LoadData(){
    $.ajax({
    url: 'lounge.php',
    type: "POST",
    dataType: 'json',
    success: function(data) {
        $('#MyTable tbody').empty();
        for (var i=0; i<data.length; i++) {
            var commentId = data[i].id;
            if(data[i].id_balas == 0){
            var row = $('<tr><td><b><img src="avatar.jpg" width="30px" height="30px" />' + data[i].user + ' :<i> '+ data[i].date + ':</i></b></br><p style="padding-left:80px">' + data[i].pesan + '</br><a data-toggle="modal" data-id="' + commentId + '" title="Add this item" class="open-ReplyModal" href="#ReplyModal">Reply</a>'+'</p></td></tr>');
            $('#record').append(row);
            for (var r = 0; (r < data.length); r++)
                    {
                        if ( data[r].id_balas == commentId)
                        {
                            var comments = $('<tr><td style="padding-left:80px"><b><img src="avatar.jpg" width="30px" height="30px" />' + data[r].user + ' :<i> ' + data[r].date + ':</i></b></br><p style="padding-left:40px">'+ data[r].pesan +'</p></td></tr>');
                            $('#record').append(comments);
                        }
                    }
            }
        }
    },
    error: function(jqXHR, textStatus, errorThrown){
        alert('Error: ' + textStatus + ' - ' + errorThrown);
    }
    });
    }
    
    
    
    $(document).on("click", ".open-ReplyModal", function () {
         var commentid = $(this).data('id');
         $(".modal-body #commentid").val( commentid );
    });
    
    //Reply comment
$(document).ready(function() {
	$('#btnreply').on('click', function() {
		$("#btnreply").attr("disabled", "disabled");
		var id = document.forms["frm1"]["Rcommentid"].value;
		var name = document.forms["frm1"]["Rname"].value;
		var msg = document.forms["frm1"]["Rmsg"].value;
		if(name!="" && msg!=""){
			$.ajax({
				url: "lounge.php",
				type: "POST",
				data: {
					id: id,
					name: name,
					msg: msg,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#btnreply").removeAttr("disabled");
						document.forms["frm1"]["Rcommentid"].value = "";
						document.forms["frm1"]["Rname"].value = "";
						document.forms["frm1"]["Rmsg"].value = "";
						LoadData(); 
						$("#ReplyModal").modal("hide");
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});




    