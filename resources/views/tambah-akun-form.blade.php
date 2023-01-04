<title>Tambah Akun/User</title>
@include('partials.navdashboard')

    @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger" role="alert">
                {{ $item }}
            </div>
        @endforeach

    @endif
    <div class="container">
        <h1>Tambah Akun</h1>
        <br>
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        </--------------------------------------------------------Nama-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="name" placeholder="Name.." value=""
                    oninvalid="this.setCustomValidity('Kode obat tidak boleh kosong')" oninput="setCustomValidity('')">
            </div>
        </div>
        </--------------------------------------------------------Email-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" name="email" placeholder="Email.." required="required"
                    value="" oninvalid="this.setCustomValidity('Nama tidak boleh kosong')"
                    oninput="setCustomValidity('')">
            </div>
        </div>

    </--------------------------------------------------------Password-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="password" placeholder="Password.." required="required"
                    value="" oninvalid="this.setCustomValidity('Nama tidak boleh kosong')"
                    oninput="setCustomValidity('')">
            </div>
        </div>

        </--------------------------------------------------------Is
            Admin-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-form-label col-sm-2 pt-0">Apakah admin?</label>
            <div class="col-sm-5">
                <select name="isadmin" class="form-control @error('Kelamin') is-invalid @enderror">
                    <option selected value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>
                @error('Kelamin')
                    <div class="invalid-feedback">
                        "pilih jenis obat
                    </div>
                @enderror
            </div>
        </div>
        </--------------------------------------------------------Is Super
            Admin-----------------------------------------------------------------------------------* />
        <div class="form-group row">
            <label class="col-form-label col-sm-2 pt-0">Apakah superadmin?</label>
            <div class="col-sm-5">
                <select name="issuperadmin" class="form-control @error('Kelamin') is-invalid @enderror">
                    <option selected value="0">Tidak</option>
                    <option value="1">Ya</option>
                </select>
                @error('Kelamin')
                    <div class="invalid-feedback">
                        "pilih jenis obat
                    </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="/user" class="btn btn-warning">Kembali</a>
            </div>
        </div>
        </form>
    </div>

    <script>
        function setInputFilter(textbox, inputFilter, errMsg) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(
                function(event) {
                    textbox.addEventListener(event, function(e) {
                        if (inputFilter(this.value)) {
                            // Accepted value
                            if (["keydown", "mousedown", "focusout"].indexOf(e.type) >= 0) {
                                this.classList.remove("input-error");
                                this.setCustomValidity("");
                            }
                            this.oldValue = this.value;
                            this.oldSelectionStart = this.selectionStart;
                            this.oldSelectionEnd = this.selectionEnd;
                        } else if (this.hasOwnProperty("oldValue")) {
                            // Rejected value - restore the previous one
                            this.classList.add("input-error");
                            this.setCustomValidity(errMsg);
                            this.reportValidity();
                            this.value = this.oldValue;
                            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                        } else {
                            // Rejected value - nothing to restore
                            this.value = "";
                        }
                    });
                });
        }

        setInputFilter(document.getElementById("nonik"), function(value) {
            return /^-?\d*$/.test(value);
        }, "Isi dengan Angka");
        setInputFilter(document.getElementById("notelp"), function(value) {
            return /^-?\d*$/.test(value);
        }, "Isi dengan Angka");
    </script>

</body>

</html>
