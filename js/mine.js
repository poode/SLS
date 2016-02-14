/////////ajax




function phpAjax() {

    $(document).ready(function() {

            $("#add0").on('click', function() {

if ($('#tkt').val() =="" || $('#follow').val()=="" || $('#escal').val()=="" || $('#tktType').val()=="" || $('#probstat').val()=="" || $('#pop').val()=="" || $('#tktstat').val()=="" || $('#calledcst').val()=="" || $('#smscst').val()==""){
                // $( "#add0" ).unbind( "click");
                alert("One Or More Place Are Empty!");
                return false;
                // $( "#add0" ).unbind( "click");
              } else {

                $("#done").show('slow')
                    .delay(2000);
                $("#done").hide('slow')
                    .delay(1000);

                var val = $('#tkt').val();
                var val2 = $('#follow').val();
                var val3 = $('#escal').val();
                var val4 = $('#tktType').val();
                var val5 = $('#probstat').val();
                var val6 = $('#pop').val();
                var val7 = $('#tktstat').val();
                var val8 = $('#calledcst').val();
                var val9 = $('#smscst').val();
                var val10 = $('#comm').val();
                var val11 = $('#timeo').val();
                $.ajax({
                    url: "/Notepad/variable/handl.php",
                    data: {
                        tkt: val,
                        follow: val2,
                        escal: val3,
                        tktType: val4,
                        probstat: val5,
                        pop: val6,
                        tktstat: val7,
                        calledcst: val8,
                        smscst: val9,
                        comm: val10,
                        timeo: val11

                    },
                    success: function(result) {


                        var re_loading = function() {
                            location.reload();
                        };
                        setTimeout(re_loading, 1000);


                    },

                    async: false

                });
}





            });

    });


}


////////////

$(document).ready(function() {



    var myVar = setInterval(function() {
        myTimer();
    }, 1000);

    function myTimer() {
        currentdate = new Date();
        datetime = ("0" + currentdate.getDate()).slice(-2) + "/" + ("0" + (currentdate.getMonth() + 1)).slice(-2) + "/" + currentdate.getFullYear() + " at-> " + ("0" + currentdate.getHours()).slice(-2) + ":" + ("0" + currentdate.getMinutes()).slice(-2) + ":" + ("0" + currentdate.getSeconds()).slice(-2);
        $('#timeo').val(datetime);
    }




    $("#add0").click(function() {
        $("#timeo").val("");
        $('#timeo').val(datetime);

    });


});


$(document).ready(function() {




    $("#tableshow0").dialog({
        height: 400,
        width: 1200,
        title: "The Saved Tickets",
        stack: true,
        sticky: true,
        //modal: true,
        autoOpen: false,

        create: function() {
            $(this).closest('div.ui-dialog')
                .find('.ui-dialog-titlebar-close')
                .click(function(e) {
                    $("#btn").val("Show Me Tickets");
                    location.reload();
                    e.preventDefault();
                });
        }


    });




    $("#btn").click(function() {

        $("div#tableshow0").toggle(function() {
            $("#tableshow0").parents(".ui-dialog.ui-widget.ui-widget-content.ui-corner-all.ui-front.ui-draggable.ui-resizable").css({
                position: "static",
                top: "253px",
                left: "60px",
                display: "block"
            }).end().dialog('open');
            if ($("#btn").val() == "Show Me Tickets") {
                $("#btn").val("Hide Tickets' Table");
            } else {
                $("#btn").val("Show Me Tickets");
                $("#tableshow0").dialog("close");
                var reloading = function() {
                    location.reload();
                };
                setTimeout(reloading, 400);

            }


        });



    });



});


$(document).ready(function() {

    $('#myscript').click(function() {

        alert("Very Soon just wait if you are intersted");




    });



});


function findtkt() {

    $(document).ready(function() {


        var tktn = $('#tktn').val();

        if (tktn != '' && !isNaN(tktn)) {


            $('#search').hide();
            $('#sbtn').hide();
            $('#cls').show();
            $('#addEdit').show();
            $('#' + tktn + '').show();
            $('#' + tktn + '').addClass('active');
        } else {

            if (isNaN(tktn)) alert('Please enter a number only!');
            if (tktn == '') alert('It\'s Empaty please enter ticket number');

        }

    });

}

$(document).ready(function() {

    $('#cls').on('click', function() {


        $('#search').show();
        $('#sbtn').show();
        $('#cls').hide();
        $('#addEdit').hide();
        $('.active').hide();
        $('.active').removeClass('active');
        $('#tktn').val('');
        location.reload();


    });




});


$(document).ready(function() {

    $('#cls').on('click', function() {


        $('#search').show();
        $('#sbtn').show();
        $('#cls').hide();
        $('.active').hide();
        $('.active').removeClass('active');
        $('#tktn').val('');


    });




});
