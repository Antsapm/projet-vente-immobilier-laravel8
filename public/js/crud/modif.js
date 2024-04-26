$(document).ready(function(){

    // Updating article
    var edit = $('.edit');
    $(edit).on('click',function(){
        $('#editLogement').modal('show');
        $tr = $(this).closest('tr');
        var data =  $tr.children("td").map(function(){
            return $(this).text();
        }).get();
        console.log(data);
        $('#prix_logement').val(data[4]);
        $('#brille_logement').val(data[5]);

        var lunch = $('#modalModifLogement');
        $(lunch).on('submit', function(evt){
            evt.preventDefault();
            var garbage = $(this).serialize();
            url = $(this).attr('action');
            var id = data[0];
            swal({
                title: "Voullez-vous enregistrer?",
                icon: 'warning',
                buttons:{
                    confirm: {
                        text : 'Oui',
                        className : 'btn btn-success'
                    },
                    cancel: {
                        visible: true,
                        text:'Annuler',
                        className: 'btn btn-danger'
                    }
                }
            }).then((Delete) => {
                if (Delete) {
                    $.ajax({
                        url: url,
                        type:'POST',
                        data: {id:id, garbage},
                        dataType:'json',
                        success:function(reponse,status){
                            console.log(reponse.update);
                            if(reponse.error){
                                swal("Echéc", reponse.error, {
                                    icon : "error",
                                    buttons: {
                                        confirm: {
                                            className : 'btn btn-danger'
                                        }
                                    },
                                });
                                console.log(reponse.error);
                            }
                            if(reponse.success){
                                swal("Succés", reponse.update, {
                                    icon : "success",
                                    buttons: {
                                        confirm: {
                                            className : 'btn btn-success',

                                        }
                                    },
                                }).then((Delete) => {
                                    if (Delete) {
                                        window.location.reload();
                                    }

                                });

                            }
                        }
                    })
                } else {
                    swal.close();
                }
            });
        })


    });
});
