$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");


                  Swal.fire({
                    title: 'คุณแน่ใจใช่ไหม',
                    text: "ลบข้อมูลนี่?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'ยกเลิก',
                    confirmButtonText: 'ใช่ ลบข้อมูล!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'ลบข้อมูล!',
                        'ข้อมูลของคุณลบเรียบร้อย',
                        'success'
                      )
                    }
                  })



    });

  });
