<div id="add-bank" class="content-body" style="display:none">
    <div class="verification section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Link a bank account</h4>
                        </div>
                        <div class="card-body">
                            <form id="addBankForm" autocomplete="off">
                                @csrf
                                <input type="hidden" name="type" value="bank">
                                <div class="form-row">
                                    <div class="mb-3 col-xl-12">
                                        <label class="mr-sm-2">Bank name</label>
                                        <input name="bank_name" type="text" class="form-control"
                                               placeholder="City Bank" required>
                                    </div>
                                    <div class="mb-3 col-xl-12">
                                        <label class="mr-sm-2">Account number</label>
                                        <input name="account_number" type="text" class="form-control"
                                               placeholder="36475" required>
                                    </div>
                                    <div class="mb-3 col-xl-12">
                                        <label class="mr-sm-2">Full name</label>
                                        <input name="full_name" type="text" class="form-control" placeholder="John Doe"
                                               required>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="javascript:void(0)" class="btn btn-primary w-100 btn-tab"
                                                   data-target="add-new-account">Back</a>
                                            </div>
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-success w-100">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
