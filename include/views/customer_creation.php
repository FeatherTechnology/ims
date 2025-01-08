<div class="col-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Reference Info</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="form-group">
                        <label for="reference_type">How To Know</label>
                        <select type="text" class="form-control knowData" id="reference_type" name="reference_type">
                            <option value="">Select Reference Type</option>
                            <option value="1">Promotion</option>
                            <option value="2">Customer</option>
                            <option value="3">Well Known Person</option>
                            <option value="4">Additional customer</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 toRefresh" id="cus_name_container" style="display:none;">
                    <div class="form-group">
                        <label for="cus_name">Existing Customer</label>
                        <select type="text" class="form-control knowData" id="cus_name" name="cus_name">
                            <option value="">Select Existing Customer</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 toRefresh" id="name_container" style="display:none;">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="hidden" id="custom_name_edit" name="custom_name_edit">
                        <input type="text" class="form-control knowData" id="name" name="name" placeholder="Enter Name">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 toRefresh" id="mobile_container" style="display:none;">
                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input type="text" class="form-control knowData" id="mobile" name="mobile" placeholder="Enter Mobile Number">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 toRefresh" id="cus_id_container" style="display:none;">
                    <div class="form-group">
                        <label for="ref_cus_id"> Customer ID</label>
                        <input type="text" class="form-control knowData" id="ref_cus_id" name="ref_cus_id" disabled placeholder="Enter Customer ID" maxlength="14">
                        <input type="hidden" id="ref_cus_id_upd" name="ref_cus_id_upd">
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 toRefresh" id="declaration_container" style="display:none;">
                    <div class="form-group">
                        <label for="declaration">Declaration</label>
                        <textarea class="form-control knowData" name="declaration" id="declaration" placeholder="Enter Declaration"></textarea>
                    </div>
                </div>

                <div class="col-4" id="add_customer" style="display:none;">
                    <div class="form-group">
                        <label for="newcustomer">New Customer</label>
                        <input type="text" class="form-control" id="newcustomer" name="newcustomer" placeholder="Enter Customer name" maxlength="14">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 toRefresh" id="declaration_containers" style="display:none;">
                    <div class="form-group">
                        <label for="declaration">Declaration</label>
                        <textarea class="form-control knowData" name="declaration" id="declaration" placeholder="Enter Declaration"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-title">Customer Info</div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="cus_id"> Customer ID</label><span class="text-danger">*</span>
                            <input type="text" class="form-control " id="cus_id" name="cus_id" readonly tabindex="7">
                            <input type="hidden" id="cus_id_upd" name="cus_id_upd">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="aadhar_number">Aadhar Number</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" name="aadhar_number" id="aadhar_number" tabindex="8" maxlength="14" data-type="adhaar-number" placeholder="Enter Aadhar Number">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="first_name">First Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control " id="first_name" name="first_name" placeholder="Enter First name" tabindex="9">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="last_name">Last Name</label><span class="text-danger">*</span>
                            <input type="last_name" class="form-control" id="last_name" name="last_name" placeholder="Enter Last name" tabindex="10">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="dob"> DOB</label>
                            <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date Of Birth" tabindex="11">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="age"> Age</label>
                            <input type="number" class="form-control" id="age" name="age" readonly placeholder="Age" tabindex="12">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="mobile1">Mobile Number 1</label><span class="text-danger">*</span>
                            <input type="number" class="form-control" id="mobile1" name="mobile1" placeholder="Enter Mobile Number 1" onKeyPress="if(this.value.length==10) return false;" tabindex="15">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="mobile2">Mobile Number 2</label>
                            <input type="number" class="form-control" id="mobile2" name="mobile2" onKeyPress="if(this.value.length==10) return false;" placeholder="Enter Mobile Number 2" tabindex="16">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Choose Mobile Number for WhatsApp:</label><br>
                            <label>
                                <input type="radio" name="mobile_whatsapp" value="mobile1" id="mobile1_radio">
                                Mobile Number 1
                            </label><br>
                            <label>
                                <input type="radio" name="mobile_whatsapp" value="mobile2" id="mobile2_radio">
                                Mobile Number 2
                            </label>
                            <input type="hidden" id="selected_mobile_radio">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="whatsapp">WhatsApp</label>
                            <input type="number" class="form-control" id="whatsapp" name="whatsapp" onKeyPress="if(this.value.length==10) return false;" placeholder="Enter WhatsApp Number" tabindex="17">
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="address"> Address </label><span class="text-danger">*</span>
                            <textarea class="form-control" name="address" id="address" placeholder="Enter Address" tabindex="18"></textarea>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="native_address"> Native Address </label>
                            <textarea class="form-control" name="native_address" id="native_address" placeholder="Enter Native Address" tabindex="19"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>