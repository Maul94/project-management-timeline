<?php include('header.php') ?>

<h1 class="h3 mb-3"><strong>Activity</strong> <span></span></h1>

<div class="row" id="feature" style="display: none;">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <div class="row">
                    <div class="col mt-0">
                        <!-- <h5 class="card-title mb-0">Feature</h5> -->
                    </div>
                    <div class="col-auto">
                        <input type="hidden" name="projectid" id="projectid">
                        <button class="btn btn-primary" onclick="addfeature()"><i class="align-middle" data-feather="file-plus"></i> add feature</button>
                    </div>
                </div>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>date start</th>
                        <th>%</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="tabel-feature">
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal" id="ModalFeature" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="formfeature">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Feature Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="featurename" id="featurename" class="form-control mb-2" placeholder="Feature Name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" name="date" id="date" class="form-control mb-2" placeholder="Date">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Progress</label>
                        <div class="col-sm-10">
                            <input type="text" name="progress" id="progress" class="form-control mb-2" placeholder="Progress">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Color</label>
                        <div class="col-sm-10">
                            <select class="form-select mb-3" name="color" id="color">
                                <option selected value="">Primary</option>
                                <option value="bg-success">success</option>
                                <option value="bg-info">info</option>
                                <option value="bg-warning">warning</option>
                                <option value="bg-danger">danger</option>
                                <option value="progress-bar-striped">Primary Striped</option>
                                <option value="progress-bar-striped bg-success">success Striped</option>
                                <option value="progress-bar-striped bg-info">info Striped</option>
                                <option value="progress-bar-striped bg-warning">warning Striped</option>
                                <option value="progress-bar-striped bg-danger">danger Striped</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <input type="text" name="desc" id="desc" class="form-control mb-2" placeholder="Description">
                        </div>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="status" name="status" checked>
                        <label class="form-check-label" for="status">Active or Not</label>
                    </div>
                    <input type="hidden" name="idfeature" id="idfeature">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="btnfeatureadd" class="btn btn-primary" onclick="saveaddfeature()">Save</button>
                <button type="button" id="btnfeatureedit" class="btn btn-warning" onclick="saveeditfeature()" style='display:none;'>Save Change</button>
            </div>
        </div>
    </div>
</div>

<script>
    function addfeature(e) {
        $('#ModalFeature .modal-title').html('Add Feature')
        $('#formfeature').trigger("reset")
        $('#btnfeatureadd').show()
        $('#btnfeatureedit').hide()

        $('#ModalFeature').modal('show')
    }

    function saveaddfeature() {
        $.ajax({
            url: 'insert.php',
            data: {
                projectid: $('#projectid').val(),
                featurename: $('#featurename').val(),
                progress: $('#progress').val(),
                date: $('#date').val(),
                color: $('#color').val(),
                desc: $('#desc').val(),
                status: $('#status').is(':checked')
            },
            type: "POST",
            dataType: "json",
            success: function(data) {
                console.log(data)
                if (data == true) {
                    $('#ModalFeature').modal('hide')
                    getlistfeature($('#projectid').val())
                }
            },
            error: function(e) {
                alert('Error: ' + e)
            }
        })
    }

    function editfeature(e) {

        // console.log($(e).find('.progress').children().attr('class').split(' ')[1]+" "+$(e).find('.progress').children().attr('class').split(' ')[2])
        $('#ModalFeature .modal-title').html('Edit Feature')
        $('#btnfeatureadd').hide()
        $('#btnfeatureedit').show()
        $('#formfeature').trigger("reset")

        var pg = $(e).find('td:nth-child(3)').html();
        class1 = $(e).find('.progress').children().attr('class').split(' ')[1]
        class2 = $(e).find('.progress').children().attr('class').split(' ')[2]
        var color
        if (typeof class1 !== 'undefined') {
            // color = ""
            color = class1
        } else {}

        if (typeof class2 !== 'undefined') {
            // color += ""
            color += " " + class2
        } else {}

        // console.log(color)

        $('#featurename').val($(e).find('td:nth-child(1)').html())
        $('#date').val($(e).find('td:nth-child(2)').html())
        $('#progress').val(parseInt(pg))
        $("#color").val(color).change();
        $('#desc').val($(e).find('td:nth-child(5)').html())
        $('#idfeature').val($(e).find('td:nth-child(6)').html())

        $('#ModalFeature').modal('show')
    }

    function saveeditfeature() {
        // console.log($('#status').is(':checked'))
        status = 1
        if ($('#status').is(':checked') == false){
            status = 0
        }
        
        $.ajax({
            url: 'update.php',
            data: {
                idfeature: $('#idfeature').val(),
                featurename: $('#featurename').val(),
                progress: $('#progress').val(),
                date: $('#date').val(),
                color: $('#color').val(),
                desc: $('#desc').val(),
                status: status
            },
            type: "POST",
            dataType: "json",
            success: function(data) {
                console.log(data)
                if (data == true) {
                    $('#ModalProject').modal('hide')
                    getlistfeature($('#projectid').val())
                }
            },
            error: function(e) {
                alert('Error: ' + e)
            }
        })
    }
</script>
<?php include('footer.php') ?>