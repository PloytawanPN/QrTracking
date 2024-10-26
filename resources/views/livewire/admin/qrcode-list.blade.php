<div class="content">
    <div class="row" style="margin-top: 30px">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <!-- ปุ่มเพิ่ม QR Code และ Filter -->
                    <div class="d-flex justify-content-between mb-3">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#qrCodeModal">
                            Add QR Code
                        </button>

                        <button id='create-qrcode-bt' class="d-none" wire:click='add_qrcode'>add_qrcode</button>

                        <div class="modal fade" id="qrCodeModal" tabindex="-1" aria-labelledby="qrCodeModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="qrCodeModalLabel">Add QR Code</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="qrCodeQuantity">Number of QR Codes</label>
                                            <input type="number" id="qrCodeQuantity" class="form-control"
                                                wire:model="qrCodeQuantity" min="1" required>
                                        </div>
                                        <button type="button" class="btn btn-success"
                                            id="confirmCreate">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Filter และจำนวนรายการต่อหน้า -->
                        <div class="d-flex">
                            <!-- Filter Button -->
                            <button class="btn btn-secondary mr-2">
                                Filter
                            </button>

                            <!-- Dropdown สำหรับจำนวนรายการต่อหน้า -->
                            <select wire:model="perPage" class="form-control" style="width: auto;">
                                <option value="5">5 Record</option>
                                <option value="10">10 Record</option>
                                <option value="15">20 Record</option>
                                <option value="20">50 Record</option>
                            </select>
                        </div>
                    </div>

                    <!-- ตารางข้อมูล QR Code -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>QR Code Name</th>
                                <th>QR Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->file_name }}</td>
                                    <td>{{ $item->qr_code }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination Links -->
                    <div class="d-flex justify-content-center">
                        {{ $items->links() }}
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
