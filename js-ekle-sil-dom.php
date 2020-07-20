<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add and delete</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">

        <h1 class="text">mehmet tahir yıldırım</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos error commodi
            odit sequi harum, quis libero quos doloribus mollitia cupiditate
            dolorum fuga nulla in ab atque repudiandae necessitatibus soluta minima.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos error commodi
            odit sequi harum, quis libero quos doloribus mollitia cupiditate
            dolorum fuga nulla in ab atque repudiandae necessitatibus soluta minima.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos error commodi
            odit sequi harum, quis libero quos doloribus mollitia cupiditate
            dolorum fuga nulla in ab atque repudiandae necessitatibus soluta minima.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos error commodi
            odit sequi harum, quis libero quos doloribus mollitia cupiditate
            dolorum fuga nulla in ab atque repudiandae necessitatibus soluta minima.
        </p>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Alert content</label>
                    <input type="text" required class="form-control" minlength="1" maxlength="10" id="alert_text_content" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label>Alert class</label>
                    <input type="text" required class="form-control" minlength="1" maxlength="10" id="alert_class" aria-describedby="emailHelp">
                </div>

                <button type="submit" id="alert_add" class="btn btn-primary float-right">Ekle</button>

            </div>
            <div id="alert_koy" class="col-md-6">
                <!---alert ler gelecek--->

            </div>
        </div>
    </div>
</body>

</html>

<script>
    //elementlere ulaş
    const alert_class = document.querySelector('#alert_class');
    const alert_text_content = document.querySelector('#alert_text_content');
    const alert_add = document.querySelector('#alert_add');
    const alert_koy = document.querySelector('#alert_koy');

    // addlistevener ekleyelim click olayını add yap

    alert_add.addEventListener('click', function add_fonk(e) {

        e.preventDefault();

        if (alert_class.value.trim() == "" && alert_text_content.value.trim() == "" || alert_class.value.trim() == "" || alert_text_content.value.trim() == "") {
            alert("Form boş bırakılamaz");
        } else {

            let confirm_response = confirm("Eklemek istediğinizden emin misiniz ?");

            if (confirm_response == true) {



                //strong elementi oluştur
                let strong = document.createElement('strong');

                strong.setAttribute('id', "alert_text_content");
                strong.textContent = `${alert_text_content.value}`;

                //div elementi oluştur

                let div_add = document.createElement('div');

                div_add.className = (`alert alert-${alert_class.value} alert-dismissible fade show`);

                div_add.setAttribute('role', "alert");

                div_add.textContent = `${strong.textContent}`;

                console.log(div_add);

                //silme butonu dahil et
                //buton oluştur

                let sil_buton = document.createElement('button');

                sil_buton.className = "close";
                sil_buton.setAttribute('aria-label', "Close");

                //buton için yani x işareti için bir span oluştur
                //span oluşturma

                sil_buton.addEventListener('click', sil);

                //silme 

                function sil(e) {
                    let confirm_response = confirm("Silmek istediğinizden emin misiniz ?");

                    if (confirm_response == true) {
                        
                        //sil alertine evet dediyse burası gerçekleşecek


                        div_add.remove();

                    }
                }

                let span = document.createElement('span');

                span.setAttribute('aria-hidden', "true");
                span.textContent = "x";

                sil_buton.appendChild(span);


                div_add.appendChild(sil_buton);


                //koyacağımız yere ulaş

                alert_koy.appendChild(div_add);

            }
        }


    });
</script>