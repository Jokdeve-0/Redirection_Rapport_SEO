$(function(){
    // ouvre & ferme le menu
    $('.closer').click(function(){
        let id_btn= $(this).attr('id'), btn = id_btn+' img';
        $('#hide_'+id_btn.substr(4)).slideToggle("slow");
        $('#'+btn).hasClass('rot_stop')?$('#'+btn).removeClass('rot_stop').addClass('rot_action'):$('#'+btn).removeClass('rot_action').addClass('rot_stop');
    });
    // modifie l'image menu
    let img = $('#imgMenu'), url_fermer = "./assets/styles/img/icon_outils/fermer.png", url_menu = "./assets/styles/img/icon_outils/menu.png";
    $('#lab_menu').click(function(){
        img.attr("src")==url_menu?img.attr({src:url_fermer}):img.attr({src:url_menu});
        if($('#hide_4').attr("style")!="display: block;"){
            $('#hide_4').slideToggle("slow");
        }
    });

    $('#mob_menu a').click(function(){
        $('#cloMenu:checked').prop("checked",false);
        img.attr("src")==url_menu?img.attr({src:url_fermer}):img.attr({src:url_menu});
    });
});