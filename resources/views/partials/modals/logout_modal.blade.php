<!-- Modal -->
<div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered position-relative">
        <div class="modal-content align-items-center">
            <div class="modal-header">
                <h5 class="modal-title " id="logoutModalLabel" style="color: #A2CDF4">Apa anda yakin ingin logout?</h5>
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button position-absolute end-3 top-5"
                    data-bs-dismiss="modal">
                    <i class="fa fa-close" aria-hidden="true"></i>
                </button>
            </div>
            <div class="modal-body">
                <a href="{{ route('logout') }}" class="btn bg-blue" style="color: #A2CDF4">Logout</a>
            </div>
        </div>
    </div>
</div>
