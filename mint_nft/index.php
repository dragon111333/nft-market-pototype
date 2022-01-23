<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MINT MY NFT</title>
  </head>
  <body>
        <?php include(__DIR__."/menu.php"); ?>
        <div class="container">
            <br><br>
            <div class="row">
                <div class="col col-12" style="width:50%;margin:auto;">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-warning" id="connect_mt">เชื่อต่อ Metamask</button>
                                    <br><br>
                                <label id="ac_view"></label>
                                    <br><br>
                                <br>
                                <div class="row">
                                    <div class="col col-8">
                                        <label for="meta_data_url">url metadata : </label>
                                        <input id="meta_data_url" type="text" class="form-control" placeholder="enter your url nft metadata" disabled>
                                    </div>
                                    <div class="col col-4">
                                        <br>
                                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#createMetadata">
                                            สร้าง Metadata(ยังใช้ไม่ได้)
                                        </button>
                                    </div>
                                </div>
                                <?php include(__DIR__."/create_meta_data.php"); ?>
                                    <br><br>
                                <div id="nft_img"></div>
                                    <br><br>
                                    <div class="alert alert-primary" id="status_box" role="alert" hidden>
                                           สำเร็จ!! ตรวจสอบได้ที่ <a href="">etherscan.io</a>
                                    </div>  
                                <button id="nft_mint_btn" type="button" class="btn btn-success w-100" disabled>MINT</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="script.js"></script>
  </body>
</html>