
function duplicatorOne(){
    // var el = $(".appendOne").first().clone();
    // el.appendTo( ".duplicatorOne" );
    var e = $(".appendOne .duplicatorTwo .childTwo").first().html();
    var e1 = $(".find-text").last().html();
    var count = null;
    e = "<div class=\"fixedd\"> " +$('.fixedd').html() + "</div><div class=\"appendTwo\"><div class=\"childTwo\">" + e + "</div></div><button class=\"addtitle fa fa-plus\" type=\"button\" onclick=\"duplicatorTwo(this)\"></button>";
    // alert(e)
    e1 = e1.match(/item\[.*?\]/)[0];
    e1 = e1.substring(0, e1.length - 1);
    e1 = e1.substring(5, e1.length);
    count = parseInt(e1) + 1;

    e = e.replace(/(item\[1\])/g, 'item[' + count + ']');
    $('.appendOne').append("<div class='child'>" + e + "<button class='delete-group fa fa-trash' type='button' onclick='removeOne(this)'></button></div>");
}
function removeOne(e) {
    $(e).parent().remove();
}



function duplicatorTwo(el){
    var e = $(".appendTwo .childTwo").first().html();
    var getCount = $(el).parent().html();
    var e1 = $(".find-text").html();
    var count = null;

    setTimeout(function(){
        e1 = getCount.match(/item\[.*?\]/)[0];
        e1 = e1.substring(0, e1.length - 1);
        e1 = e1.substring(5, e1.length);
        count = parseInt(e1);
        e = e.replace(/(item\[1\])/g,'item['+count+']');
        $(el).before("<div class='childTwo'>" + e + "<button style='background: #ff9292; color: #fff; padding: 0; border: none; border-radius: 100px; float: left; width: 20px; height: 20px;margin: 5px; font-size: 12px; display: inline-block;' class='fa fa-trash' type='button' onclick='removeTwo(this)'></button><div style='display: inline-block;height: 0px;width: 100%;'></div></div>");
    },10);
}
function removeTwo(e) {
    $(e).parent().remove();
}