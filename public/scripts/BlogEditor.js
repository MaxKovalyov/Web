function editBlog(id,title,message) {
    let div = document.createElement("div");
    $(div).addClass("blur");
    $(div).html(
        '<div class="form-edit">'+
            '<h1>Редактор блога</h1>'+
            '<div class="form-row">'+
                '<label for="title">Заголовок</label>'+
                '<input class="row" type="text" id="title" name="title" value="'+title+'">'+
            '</div>'+
            '<div class="form-row">'+
                '<label for="message">Описание</label>'+
                '<textarea class="row" name="message" id="message" cols="25" rows="6">'+message+'</textarea>'+
            '</div>'+
            '<p>'+
                '<input class="button-edit" type="submit" value="Сохранить изменения" onclick="updateBlog('+id+')">'+
                '<input class="button-edit" type="submit" value="Отмена" onclick="closeEdit()">'+
            '</p>'+
        '</div>'
    );
    $(document.body).append(div);
}

function closeEdit() {
    $(".blur").remove();
    $("#script").remove();
}

function updateBlog(id) {
    let elScript = document.createElement("script");
    let title = $("#title").val();
    let message;
    if(!$("#message").val()) {
        message = $("#message").text();
    } else {
        message = $("#message").val();
    }
    let xmlString = "<profile>"+"<id>"+encodeURI(id)+"</id>"+
                    "<title>"+encodeURI(title)+"</title>"+
                    "<message>"+encodeURI(message)+"</message>"+"</profile>";
    elScript.src='/blogEditor/updateBlog?admin_area=1&xml='+xmlString;
    elScript.id = 'script';
    document.body.appendChild(elScript);
}

function makeLoadComplete() {
    console.log(js_Result);
    let parser = new DOMParser();
    let xml = parser.parseFromString(js_Result,'text/xml');
    let id = xml.getElementsByTagName("id")[0].childNodes[0].nodeValue;
    let title = xml.getElementsByTagName("title")[0].childNodes[0].nodeValue;
    let message = xml.getElementsByTagName("message")[0].childNodes[0].nodeValue;
    console.log(id);
    console.log(title);
    console.log(message);
    id = '#'+id;
    console.log(id);
    $(id).find("#td_title").html(title);
    $(id).find("#td_message").html(message);
    $(".blur").remove();
    $("#script").remove();
}