$('#reference_type').change(function () {
    var referenceType = $(this).val();
    // Hide all fields initially
    $('#cus_name_container').hide();
    $('#name_container').hide();
    $('#mobile_container').hide();
    $('#declaration_container').hide();
    $('#cus_id_container').hide();
    $('add_customer').hide();

    if (referenceType == '1') {
        // Promotion selected
        $('#declaration_container').show();
    } else if (referenceType == '2') {
        // Customer selected
        $('#cus_name_container').show();
        $('#cus_id_container').show();
        $('#declaration_container').show();
        // getCustomerName(cusId);
    } else if (referenceType == '3') {
        // Well Known Person selected
        $('#name_container').show();
        $('#mobile_container').show();
        $('#declaration_container').show();
    }
    else if (referenceType == '4') {
        $('#add_customer').show();
        $('#declaration_containers').show();
    }
});
$('#dob').on('change', function () {
    var dob = new Date($(this).val());
    var today = new Date();
    var age = today.getFullYear() - dob.getFullYear();
    var m = today.getMonth() - dob.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
        age--;
    }
    $('#age').val(age);
});