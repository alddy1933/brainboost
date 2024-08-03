<?= $this->extend('\App\Views\template\base') ?>

<?= $this->section('css'); ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    Profile
                </h2>
            </div>
        </div>
    </div>
</div>

<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title d-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-scan">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 9a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                                <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                                <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                                <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                                <path d="M8 16a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2" />
                            </svg>
                            <span>Biodata</span>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column col-xs-6 justify-content-center align-items-center gap-2 mb-4">
                                    <span class="avatar avatar-xl">
                                        <img id="imgProfile" class="card-img-top" src="<?= base_url();  ?>img/avatar/<?= $biodata->img ?>" alt="Card image cap" style="object-filt: cover">
                                    </span>
                                    <input type="file" required class="form-control" id="image" name="files"/>
                                    <button class="btn btn-sm btn-primary" id="imgEdit">Change Picture Profile</button>
                                    <div id="imgInfo" class="pt-1" style="display: hidden"></div>
                                </div>

                                <hr>

                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" id="username-p" class="form-control" readonly name="example-text-input" value="<?= $biodata->username ?>" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" id="fullName-p" class="form-control" name="example-text-input" value="<?= $biodata->full_name ?>" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" id="email-p" value="<?= $biodata->birth ?>" class="form-control" name="example-text-input" value="<?= $biodata->email ?>" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Birthday</label>
                                    <input type="date" id="ttl-p" class="form-control" name="example-text-input" value="<?= $biodata->birth ?>" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Gender</label>
                                    <input type="radio" class="jk" name="jk" <?php echo ($biodata->gender == "Laki-laki")?  "checked" : ""; ?> value="Laki-laki" > Laki-Laki
						            <input type="radio" class="jk" name="jk" <?php echo ($biodata->gender == "Perempuan")?  "checked" : ""; ?> value="Perempuan"> Perempuan<br>
                                </div>
                                
                                <div id="editIdentity_info" class="mb-2"></div>
				                <button id="editIdentity" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title d-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-history">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 8l0 4l2 2" />
                                <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" />
                            </svg>
                            <span>History</span>
                        </h3>
                    </div>
                    <div class="card-table table-responsive" style="max-height: 250px;">
                        <table class="table table-vcenter">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Point</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <?php foreach ($history as $hs) { ?>
                                <tr>
                                    <td class="text-muted">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="text-white avatar" style="background-color: <?= $hs->icon_bg_colour ?>">
                                                    <?= $hs->icon ?>
                                                </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    <?= $hs->category_name ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-muted"><?= $hs->score ?></td>
                                    <td class="text-muted"><?= $hs->date_taken ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title d-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chart-dots">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 3v18h18" />
                                <path d="M9 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M19 7m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M14 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M10.16 10.62l2.34 2.88" />
                                <path d="M15.088 13.328l2.837 -4.586" />
                            </svg>
                            <span>My Statistic</span>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h2>#2</h2>
                                    <span>Current Rank</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h2>#1</h2>
                                    <span>Best Rank</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h3>99</h3>
                                    <small class="text-center">Quiz Finished</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h3>1.008</h3>
                                    <small class="text-center">Question Finished</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h3>78%</h3>
                                    <small class="text-center">Rate</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader">Most Category Taken</div>
                        </div>
                        <strong>
                            History
                        </strong>
                        <div class="mt-2">
                            809 Quiz
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#imgEdit").click(function(){
        var img_data = $('#image').prop('files')[0]
    
        var form_data = new FormData();
        form_data.append('img',img_data);

        $.ajax({
				url 		: '<?= base_url('profile/editImage') ?>',
				cache		: false,
				contentType	: false,
				processData	: false,
				data 		: form_data,
				type 		: 'POST',
				success 	: function(data){
					let jsonData = JSON.parse(data);

					let info = document.getElementById('imgInfo');
					let textInfo = "";

					if (!jsonData.err) {
						textInfo = "<badge class=' "+jsonData.typeInfo+" '>"+jsonData.info+"</badge>";
						let imgProfile = document.getElementById('imgProfile')
						let imgNavbar = document.getElementById('imgNavbar')
                        // console.log(jsonData)
						imgProfile.setAttribute('src',jsonData.imgData);
						imgNavbar.setAttribute('src',jsonData.imgData);
					}
					else{
						textInfo = "<badge class=' "+jsonData.typeInfo+" '>"+jsonData.err+"</badge>";
					}

					info.innerHTML = textInfo;
					$('#imgInfo').fadeIn().delay(3000).fadeOut();

					console.log(jsonData);
				}

			});
    });


//-------------------------------------------
$('#editIdentity').click(function(){
    $.post("<?= base_url('profile/editIdentity') ?>",{
        full_name: $("#fullName-p").val(),
        email: $("#email-p").val(),
        birth: $("#ttl-p").val(),
        gender : $('.jk:checked').val(),
    },function(data){
        jsonData = JSON.parse(data);
        if('err' in jsonData){
            $("#editIdentity_info").html(jsonData['etc']).hide()
            $("#editIdentity_info").fadeIn().delay(3000).fadeOut(300)
        } else{
            
            $("#editIdentity_info").html(jsonData['edit_success']).hide()
            $("#editIdentity_info").fadeIn().delay(3000).fadeOut(300)
        }
    });
});
</script>
<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<?= $this->endSection(); ?>