$(function(){

    var ul = $('#upload ul');

    $('#drop a').click(function(){
        // Simulate a click on the file input button
        // to show the file browser dialog
        $(this).parent().find('input').click();
    });

    // Initialize the jQuery File Upload plugin
    $('#upload').fileupload({

        // This element will accept file drag/drop uploading
        dropZone: $('#drop'),

        // This function is called when a file is added to the queue;
        // either via the browse button, or via drag/drop:
        add: function (e, data) {

		if(data.files[0]['type'] != 'application/zip'){
			alert("Only .zip is allowed.");
			return;
		}




/* var jqXHR = data.submit().success(function(result, textStatus, jqXHR){
				var json = JSON.parse(result);
				var status = json['status'];

				if(status == 'error'){
					data.context.addClass('error');
				}

				setTimeout(function(){
					data.context.fadeOut('slow');
				},30000);
			});
 */


            var tpl = $('<li class="working"><da_2></da_2><p></p><span></span></li>');
			
            // Append the file name and file size
            tpl.find('p').text(data.files[0].name)
                         .append('<i>' + formatFileSize(data.files[0].size) + '</i>');
				 

            // Add the HTML to the UL element
            data.context = tpl.appendTo(ul);

            // Initialize the knob plugin
            tpl.find('input').knob();

            // Listen for clicks on the cancel icon
            tpl.find('span').click(function(){

                if(tpl.hasClass('working')){
                    jqXHR.abort();
                }

                tpl.fadeOut(function(){
                    tpl.remove();
                });

            });

            // Automatically upload the file once it is added to the queue
             var jqXHR = data.submit().success(function(result, textStatus, jqXHR){
				var json = JSON.parse(result);
				var status_t = json['status'];
				tpl.find('da_2-').text('<img src="' + status_t + '"></img>');		
			 
			});
        },

        progress: function(e, data){

            // Calculate the completion percentage of the upload
            var progress = parseInt(data.loaded / data.total * 100, 10);

            // Update the hidden input field and trigger a change
            // so that the jQuery knob plugin knows to update the dial
            data.context.find('input').val(progress).change();

            if(progress == 100){
                data.context.removeClass('working');
            }
        },

        fail:function(e, data){
            // Something has gone wrong!
            data.context.addClass('error');
        }

    });


    // Prevent the default action when a file is dropped on the window
    $(document).on('drop dragover', function (e) {
        e.preventDefault();
    });

    // Helper function that formats the file sizes
    function formatFileSize(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }

        if (bytes >= 1180591620717411303424) {
            return (bytes / 1180591620717411303424).toFixed(2) + ' ZB';
        }

        if (bytes >= 1152921504606846976) {
            return (bytes / 1152921504606846976).toFixed(2) + ' EB';
        }

        if (bytes >= 1125899906842624) {
            return (bytes / 1125899906842624).toFixed(2) + ' PB';
        }

        if (bytes >= 1099511627776) {
            return (bytes / 1099511627776).toFixed(2) + ' TB';
        }

        if (bytes >= 1073741824) {
            return (bytes / 1073741824).toFixed(2) + ' GB';
        }

        if (bytes >= 1048576) {
            return (bytes / 1048576).toFixed(2) + ' MB';
        }

        return (bytes / 1024).toFixed(2) + ' KB';
    }

});