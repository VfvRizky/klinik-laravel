<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Peringatan!!!</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda yakin ingin logout?</h5>
                </div>
                
                <div class="modal-footer">
                    <button class="btn btn-warning" type="button" data-dismiss="modal">Tidak</button>
                    <button class="btn btn-danger" type="submit">Ya</button>
                </div>
            </div>
        </div>
    </form>
</div>