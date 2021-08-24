function addComment(index) {
    let div = document.createElement("div");
    $(div).addClass("add-comment");
    $(div).html(
        '<p>Ваш комментарий</p>'+
        '<textarea id="comment" name="comment" cols="80" rows="2" placeholder="Введите комментарий"></textarea>'+
        '<input type="submit" name="send-comment" id="send-comment" onclick="sendComment('+index+')">'+
        '<input type="submit" value="Отменить" onclick="removeCommentMenu()">'
    );
    $(this).parent().append(div);
}

function removeCommentMenu() {
    $(".add-comment").remove();
}

function sendComment(index) {
    let data = {
        index: index
    };
    let message = $("#comment").val();
    data.comment = message;
    console.log(JSON.stringify(data));
    fetch('/myBlog/addComment', {
        method: 'POST',
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
    }).then(response => {
        if(response.status != 200) {
            return Promise.reject();
        }
        return response.text();
    }).then(function(text) {
        console.log(text);
        let comment = JSON.parse(text);
        let tr = document.createElement("tr");
        $(tr).html(
            '<td>'+comment.date+'</td><td>'+comment.author+'</td><td>'+comment.message+'</td>'
        );
        let id = '#'+index;
        $(id).append(tr);
        $(".add-comment").remove();
    }).catch(error => console.error(error));
}