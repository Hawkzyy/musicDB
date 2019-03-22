$(document).ready(function()
        {
            function getQueryVariable(variable)
                    {
                           var query = window.location.search.substring(1);
                           var vars = query.split("&");
                           for (var i=0;i<vars.length;i++) {
                                   var pair = vars[i].split("=");
                                   if(pair[0] == variable){return pair[1];}
                           }
                           return(false);
                    };

              $('#removeSong').click(function() {
                var deleteNow = confirm('But are you sure though?');
                if (deleteNow == true) {
                  var songid= getQueryVariable("id");
                       $.ajax({
                           url: 'remove.php',
                           data: {songid},
                           type: 'GET',
                           success: function(data){
                               window.location.href = "musicDB.php";
                           }
                       });
                }

              });

            });
