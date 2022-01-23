<!-- Modal -->
<div class="modal fade" id="createMetadata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">สร้างMetadata</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <label for="nft_url">urlผลงานของคุณ : </label>
            <input id="nft_url" type="text" class="form-control" placeholder="enter your nft url">
            <br>
                <label for="nft_name">ชื่อผลงาน : </label>
            <input id="nft_name" type="text" class="form-control" placeholder="ชื่อผลงาน">
            <br>    
                <label for="nft_desc">คำอธิบาย : </label>
            <input id="nft_desc" type="text" class="form-control" placeholder="คำอธิบาย">
            <br><br> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary" id="create_metadata_btn">ตกลง</button>
      </div>
    </div>
  </div>
</div>