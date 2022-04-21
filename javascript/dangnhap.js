                            //Kiểm tra tên đăng nhập
                            function kiemtraten() {
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
                            //Nút Đăng Nhập

                            function dn() {
                                if (kiemTraTen() == false ||
                                    kiemtrapass() == false) {
                                    alert("Bạn chưa nhập đầy đủ và đúng thông tin!");
                                    open("dnhap.html");
                                }
                                var choice = confirm('Bạn đã đăng nhập vào tài khoản\n' + 'Có tên đăng nhập:' + " " + $("#Name").val() + "\n")
                                if (choice == 1) {
                                    alert('Đăng nhập thành công');
                                    open('A Chủ.html');
                                }
                            }