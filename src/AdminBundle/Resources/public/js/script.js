//pour selectioner la rubrique activer                                                                                                           
function setActive(el) {
    console.log($(el));


    if ($(el).hasClass("active")) {
        console.log("1");
        $(el).removeClass("active");
    }
    else {
        console.log("2");
        $(el).addClass("active");
    }



}
;


//pour suprimer une ligne 
function deleteAction(id)
{
    ClassyPopup.init({
        override: true,
        background: 'black',
        centerOnResize: true,
        fade: true
    });
    ClassyPopup.alert({
        width: '400px',
        title: 'Button Callbacks',
        rightButtons: ['NON', 'OUI'],
        onOpen: function () {
            $('<span />').html("voulez vous vraiment supprimer ce champ").appendTo('.pcontent');
        },
        onClick: function (button) {
            if (button === 'OUI') {
                ClassyPopup.clear();
                Loading(true);
                $.get($('#delete_action_' + id).attr('href'), function (data) {
                    $("#message").html('');
                    $("#message").hide();

                    setTimeout(function () {
                        Loading(false);
                        $("#delete_" + id).hide();
                        $("#message").html(data);
                        $("#message").fadeIn();
                    }, 2000);
                });
            }
            else
                ClassyPopup.clear();
        }
    });
    return false;
}
//pour les images 
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#previewHolder').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
$(".imagePreview").change(function () {

    readURL(this);
});



//pour la validation des champs
jQuery(document).ready(function () {
    // binds form submission and fields to the validation engine
    console.log(jQuery("#formID"));
    if ($("#formID").length > 0)
        jQuery("#formID").validationEngine();



});


//pour la gallerie   

jQuery(document).ready(function () {
    jQuery('#add-another-item').click(function () {
        var itemList = jQuery('#picture-fields-list');
        var newWidget = itemList.attr('data-prototype');
        newWidget = newWidget.replace(/__name__/g, pictureitems);
        pictureitems++;

        var newLi = jQuery('<td></td>').html(newWidget);
        newLi.appendTo(jQuery('#picture-fields-list'));

        return false;
    });
});



function editAction(id)
{
    ClassyPopup.init({
        override: true,
        background: 'black',
        centerOnResize: true,
        fade: true
    });


    ClassyPopup.alert({
        width: '400px',
        title: 'Button Callbacks',
        rightButtons: ['NON', 'OUI'],
        onOpen: function () {
            $('<span />').html("voulez vous vraiment modifer ce champ").appendTo('.pcontent');
        },
        onClick: function (button) {
            if (button === 'OUI') {
                ClassyPopup.clear();
                Loading(true);
                $.get($('#edit_action_' + id).attr('href'), function (data) {
                    $("#message").html('');
                    $("#message").hide();  
                    setTimeout(function () {
                        Loading(false);
                        location.reload();
                        $("#message").html(data);
                        $("#message").fadeIn();
                    }, 2000);
                });
            }
            else
                ClassyPopup.clear();
        }
    });
    return false;
}

function annulerAction(id)
{
    ClassyPopup.init({
        override: true,
        background: 'black',
        centerOnResize: true,
        fade: true
    });

    ClassyPopup.alert({
        width: '400px',
        title: 'Button Callbacks',
        rightButtons: ['NON', 'OUI'],
        onOpen: function () {
            $('<span />').html("voulez vous vraiment modifer ce champ").appendTo('.pcontent');
        },
        onClick: function (button) {
            if (button === 'OUI') {
                ClassyPopup.clear();
                Loading(true);
                $.get($('#annuler_action_' + id).attr('href'), function (data) {
                    $("#message2").html('');
                    $("#message2").hide();
                    
                    setTimeout(function () {
                        Loading(false);
                        location.reload();
                        $("#message2").html(data);
                        $("#message2").fadeIn();
                    }, 2000);
                });
            }
            else
                ClassyPopup.clear();
        }
    });

    return false;
}