                            //Kiểm tra tên đăng nhập
                            function kiemTraTen() {
                                var mauKT = /^[a-z]{2,}[0-9]{2,}$/;
                                if ($("#Name").val() == "") {
                                    $("#tbName").html("Tên đăng nhập bắt buộc nhập !");
                                    return false;
                                }
                                if (!mauKT.test($("#Name").val())) {
                                    $("#tbName").html("Tên đăng nhập tối thiểu 4 ký tự 2 chữ cái và 2 số");
                                    return false;

                                }
                                $("#tbName").html("*");
                                return true;

                            }

                            //Kiểm tra EMAIL
                            function kiemtraemail() {
                                var mauKT = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)+(\.\w{2,3})+$/;
                                if ($("#email").val() == "") {
                                    $("#tbemail").html("Email bắt buộc nhập !");
                                    return false;
                                }
                                if (!mauKT.test($("#email").val())) {
                                    $("#tbemail").html("Vui lòng kiểm tra lại địa chỉ email");
                                    return false;

                                }
                                $("#tbemail").html("*");
                                return true;
                            }

                            //Kiểm tra số điện thoại
                            function kiemtrasdt() {
                                var mauKT = /^[0-9]{10}$/;
                                if ($("#sdt").val() == "") {
                                    $("#tbsdt").html("Số điện thoại bắt buộc nhập !");
                                    return false;
                                }
                                if (!mauKT.test($("#sdt").val())) {
                                    $("#tbsdt").html("Vui lòng kiểm tra lại số điện thoại");
                                    return false;

                                }
                                $("#tbsdt").html("*");
                                return true;

                            }

                            // Kiểm tra mật khẩu
                            function kiemtrapass() {
                                var mauKT = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$/;
                                if ($("#pass").val() == "") {
                                    $("#tbpass").html("Mật khẩu bắt buộc nhập !");
                                    return false;
                                }
                                if (!mauKT.test($("#pass").val())) {
                                    $("#tbpass").html("Mật khẩu của bạn tối thiểu 8 ký tự, ít nhất 1 chữ cái và 1 số");
                                    return false;

                                }
                                $("#tbpass").html("*");
                                return true;

                            }

                            function kiemtraxnmk() {
                                if (document.getElementById('txtxnmk').value.trim() == "") {
                                    xnmk.innerText = "Bắt buộc nhập !";
                                    return false;
                                }
                                if (document.getElementById('txtxnmk').value !=
                                    document.getElementById('pass').value) {
                                    xnmk.innerText = "Phải giống ô mật khẩu";
                                    return false;
                                } else {
                                    xnmk.innerText = "*";
                                    return true;
                                }
                            }
                            //Nút Đăng Kí  

                            $("#btnsave").click(function() {

                                if (!kiemTraTen() || !kiemtraemail() || !kiemtrasdt() || !kiemtrapass()) {
                                    $("#thongbao").html("Mời bạn nhập đúng và đầy đủ thông tin");
                                    return false;
                                }
                                var tt1 = document.getElementById("Name").value;
                                var tt2 = document.getElementById("email").value;
                                var tt3 = document.getElementById("sdt").value;
                                var tt4 = document.getElementById("pass").value;
                                var choice = confirm('Bạn đã đăng kí thành công\n' + 'Tên đăng nhập:' + ' ' + tt1 + "\n" + 'Email của bạn:' + ' ' + tt2 + "\n" + 'Số điện thoại:' +
                                    ' ' + tt3 + "\n" + 'Mật khẩu của bạn:' + ' ' + tt4 + "\n");
                                if (choice == 1) {
                                    open('Set.html');
                                }
                            });