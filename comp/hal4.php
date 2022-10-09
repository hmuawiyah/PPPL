<div id="contact"></div>
<div class="" style="margin-top: 8rem; margin-bottom: 8rem;">
    <div class="display-6 text-center">keep in touch with us</div>
    <br />
    <div class="text-center">
        <button type="button" class="btn btn-outline-dark"><i class="fa-brands fa-instagram"></i></button>
        <button type="button" class="btn btn-outline-dark"><i class="fa-brands fa-linkedin-in"></i></button>
        <button type="button" class="btn btn-outline-dark"><i class="fa-regular fa-map"></i></button>
    </div>
    
    <div class="row d-flex justify-content-center">
        <div class="card mt-4 col-4 col-md-3" style="width: 18rem;">
            <div class="card-body ">
                <form action="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Anda...">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="pesan" rows="4" placeholder="Halo admin, saya ingin bertanya..."></textarea>
                    </div>
                    <button type="submit" class="btn text-light" onclick="kirimwa()" style="display: flex;margin-left: auto; background-color: #253437"><span>submit <i class="fa-brands fa-whatsapp"> </i></span></button>
                </form>
            </div>
        </div> 
        
        <div class="display-5 mt-5 col-4 col-md-2" style="color: #253437">
            <div>Send</div>
            <div>Message</div>
            <div>to us</div>
            <div><i class="fa-solid fa-message"></i></div>
        </div>
    </div>
</div>

<!-- <hr style="height: 3px;border:none;color: #2d2d2d;background-color: #2d2d2d;"> -->

<script>
function kirimwa() {
    
    var isiNama = document.getElementById("nama").value;
    var isiPesan = document.getElementById("pesan").value;

    var url = "https://wa.me/628985734747?text=" 
    + "Name: " + isiNama + "%0a"
    + "Pesan: " + isiPesan; 

    window.open(url, '_blank').focus();
    
}
</script>