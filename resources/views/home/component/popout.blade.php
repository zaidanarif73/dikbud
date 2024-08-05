<!-- Custom template | don't include it in your project! -->
<div class="custom-template" >
    <div class="title">Pesan</div>
    <div class="custom-content">
        <form action="{{ route('home.kontak.store') }}" method="post" autocomplete="off" onsubmit="confirm('Apakah anda yakin ingin mengirim pesan ini?')" enctype="multipart/form-data">
            @csrf
                <div class="row p-3">
                    <div class="form-group col-md-6">
                        <label for="username">Nama</label>
                        <input type="text" class="form-control border border-dark" id="username" placeholder="Masukan Nama Anda" name="name"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email2">Email</label>
                        <input type="email" class="form-control border border-dark" id="email" placeholder="Masukan Email Anda" name="email"/>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="username">Gambar</label>
                        <input type="file" class="form-control border border-dark" accept="image/*" id="image" name="image"/>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="username">Subject</label>
                        <input type="text" class="form-control border border-dark" id="subject" placeholder="Masukan Judul" name="subject"/>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="comment">Pesan Anda</label>
                        <textarea class="form-control border border-dark" id="comment" rows="5" name="message">
                        </textarea>
                    </div>
                    <div class="card-action">
                        <button class="btn" type="submit" style="background: #2a2f5b; color:white">Submit</button>
                    </div>
                </div>
        </form>
        
    </div>
    <div class="custom-toggle">
        <i class="icon-settings"></i>
    </div>
</div>
<!-- End Custom template -->