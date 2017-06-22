

            function sendEmail()
            {
                var first = $("#first").val();
                var last = $("#last").val();
                var email = $("#email").val();
                var subject = $("#subject").val();
                var message = $("#message").val();




                $.post(
                    $( "#form" ).prop( 'action' ),
                    {
                        "_token": $( "#form" ).find( 'input[name=_token]' ).val(),
                        "firstname": first,
                        "surname": last,
                        "email": email,
                        "subject": subject,
                        "message": message
                    },
                    function( data ) 
                    {
                        //do something with data/response returned by server
                        
                        try 
                        {
                          if(data.ok) 
                          {
                            $('.modal-body').html(data.ok);
                            $('#getCodeModal').modal('show');

                            $('input').val("");
                            $('textarea').val("");
                          }
                        } 
                        catch(e) 
                        {

                        }
                        
                        try 
                        {
                            if(data.errors.firstname)   
                            {
                                $('.modal-body').html(data.errors.firstname);
                                $('#getCodeModal').modal('show');
                            }  
                        }
                         catch(e) {}

                        

                        try {
                            if(data.errors.surname)   
                            {
                                $('.modal-body').html(data.errors.surname);
                                $('#getCodeModal').modal('show');
                            }  
                        
                        } catch(e) {}
                    


                        try {
                            if(data.errors.email)   
                            {
                                $('.modal-body').html(data.errors.email);
                                $('#getCodeModal').modal('show');
                            }  
                        
                        } catch(e) {}


                        try {
                            if(data.errors.subject)   
                            {
                                $('.modal-body').html(data.errors.subject);
                                $('#getCodeModal').modal('show');
                            }  
                        
                        } catch(e) {}
                        
                        try {
                            if(data.errors.message)   
                            {
                                $('.modal-body').html(data.errors.message);
                                $('#getCodeModal').modal('show');
                            }  
                        
                        } catch(e) {}
                        

                    },
                    'json'
                );

    

             
            }

            $(".confirm").confirm({
                text: "Send Email?",
                title: "Email Confirmation",
                confirm: function(button) 
                {
                    //send email
                    sendEmail();
                },
                cancel: function(button) {
                    // nothing to do
                },
                confirmButton: "Yes",
                cancelButton: "No",
                post: true,
                confirmButtonClass: "btn-danger",
                cancelButtonClass: "btn-default",
                dialogClass: "modal-dialog modal-lg" // Bootstrap classes for large modal
            });