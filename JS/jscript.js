
// Tao nut back to top
//Khi người dùng cuộn chuột thì gọi hàm scrollFunction
window.onscroll = function() {
    scrollFunction();
    slidedown();

};
        // khai báo hàm scrollFunction
        function scrollFunction() {
            // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
            if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                //nếu lớn hơn 500px thì hiện button
                document.getElementById("myBtn").style.display = "block";
            } else {
                 //nếu nhỏ hơn 20px thì ẩn button
                 document.getElementById("myBtn").style.display = "none";
             }
             
         }
        //gán sự kiện click cho button
        document.getElementById('myBtn').addEventListener("click", function(){
            //Nếu button được click thì nhảy về đầu trang
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });

        function slidedown() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
              document.getElementById("slidedown-menu").style.top = "0";
            } else {
              document.getElementById("slidedown-menu").style.top = "-50px";
            }
          }

        $('#myCarousel1, #myCarousel2').carousel(); //2 slide show


        $(document).ready(function() {
		    $(".fa-search").click(function() {
		       $(".search").toggle();
		       $("input[type='text']").focus();
		     });
 
 		});


