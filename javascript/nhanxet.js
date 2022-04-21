function kiemtragui() {
    if ($("#gui").val() == "") {
        $("#tbgui").html("Bạn cần nhập nội dung nhận xét !");
        return false;
    }
    $("#tbgui").html("*");
    return true;

}

function kiemtragui() {
    if ($("#gui").val() == "") {
        $("#tbgui").html("Bạn cần nhập nội dung nhận xét !");
        return false;
    }
    $("#tbgui").html("*");
    return true;

}

function gui() {
    if (kiemtragui() == false) {
        alert("Bạn chưa nhập nội dung nhận xét !");
    } else {
        alert("Cảm ơn bạn đã gửi phản hồi cho chúng tôi");
    }
}