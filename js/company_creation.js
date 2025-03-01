$(document).ready(function () {

    $('#imgshow').attr('src', 'img/avatar.png');

    $(document).on('click', '#add_company, #back_btn', function () {
        $('#company_id').val('');
        swapTableAndCreation();
    });

    $('#submit_company_creation').click(function (event) {
        event.preventDefault();

        let companyDeatil = new FormData();[
            'company_name', 'cin_no', 'floor_no', 'street', 'place', 'state', 'country', 'phone_no', 'email', 'fax_no', 'website', 'company_logo_edit', 'gst_no', 'ie_code', 'login_shorter_name', 'year', 'company_id'
        ].forEach(id => {
            let value = $('#' + id).val();
            companyDeatil.append(id, value);
        });

        let pic = $('#company_logo')[0].files[0];
        companyDeatil.append('company_logo', pic);

        var data = ['company_name', 'cin_no', 'floor_no', 'street', 'place', 'state', 'country' ,'phone_no']

        var isValid = true;
        data.forEach(function (entry) {
            var fieldIsValid = validateField($('#' + entry).val(), entry);
            if (!fieldIsValid) {
                isValid = false;
            }
        });
        if (isValid) {
            $.ajax({
                url: ('api/company_creation_files/submit_company_creation.php'),
                type: 'POST',
                data: companyDeatil,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function (response) {
                    if (response == '1') {
                        swalSuccess('Success', 'Company Creation Info Updated Successfully!');
                    }
                    else if (response == '3') {
                        swalSuccess('Success', 'Company Creation Info Added Successfuly!');
                    } else {
                        swalError('Warning', 'Company Creation Name Already Created!');
                    }
                    $('#company_creation').trigger('reset');
                    swapTableAndCreation();
                }
            })

        } else {
            swalError('Warning', 'Please fill all the required fields!');
        }

    });

    $(document).on('click', '.companyActionBtn', function () {
        var id = $(this).attr('value'); // Get value attribute
        $.post('api/company_creation_files/get_company_creation_data.php', { id }, function (response) {
            $('#company_id').val(id);
            $('#company_name').val(response[0].company_name);
            $('#cin_no').val(response[0].cin_no);
            $('#floor_no').val(response[0].floor_no);
            $('#street').val(response[0].street);
            $('#place').val(response[0].place);
            $('#state').val(response[0].state);
            $('#country').val(response[0].country);
            $('#phone_no').val(response[0].phone_no);
            $('#email').val(response[0].email);
            $('#fax_no').val(response[0].fax_no);
            $('#website').val(response[0].website);
            $('#picture').val(response[0].picture);
            $('#gst_no').val(response[0].gst_no);
            $('#ie_code').val(response[0].ie_code);
            $('#login_shorter_name').val(response[0].login_shorter_name);
            $('#year').val(response[0].year);

            let paths = "uploads/company_creation/";
            if (response[0].picture) {
                $('#company_logo_edit').val(response[0].picture);
                $('#imgshow').attr('src', paths + response[0].picture);
            } else {
                $('#imgshow').attr('src', 'img/avatar.png');
            }

            swapTableAndCreation();

        }, 'json')
    })

    $('#company_logo').change(function () {
        let company_logo = $('#company_logo')[0];
        let img = $('#imgshow');
        img.attr('src', URL.createObjectURL(company_logo.files[0]));
        checkInputFileSize(this, 200, img)
    })

    $('#email').on('change', function () {
        validateEmail($(this).val(), $(this).attr('id'));
    });

    $('#website').on('change', function () {
        validateWebsite($(this).val(), $(this).attr('id'));
    });

});

$(function () {
    getCompanyTable();
    getStateList();
    // Call the function with the start year and the ID of the dropdown element
    populateYearDropdown(2023, "year");
})

function swapTableAndCreation() {
    if ($('.company_table_content').is(':visible')) {
        $('.company_table_content').hide();
        $('.addcompanyBtn').hide();
        $('#company_creation_content').show();
        $('.backBtn').show();
    } else {
        $('.company_table_content').show();
        $('#company_creation_content').hide();
        $('.backBtn').hide();
        callWhenBack();
        getCompanyTable();
    }
}

function getCompanyTable() {
    $.post('api/company_creation_files/company_creation_list.php', function (response) {
        var columnMapping = [
            'sno',
            'company_name',
            'floor_no',
            'street',
            'place',
            'state_name',
            'country',
            'phone_no',
            'email',
            'fax_no',
            'website',
            'gst_no',
            'ie_code',
            'action'
        ];
        appendDataToTable('#company_creation_table', response, columnMapping);
        setdtable('#company_creation_table');

        if (response.length > 0) {
            $('#add_company').hide();
        } else {
            $('#add_company').show();
        }

    }, 'json')
}

function getStateList() {
    $.post('api/common_files/get_state_list.php', function (response) {
        let appendStateOption = '';
        appendStateOption += "<option value=''>Select State</option>";
        $.each(response, function (index, val) {
            appendStateOption += "<option value='" + val.id + "'>" + val.state_name + "</option>";
        });
        $('#state').empty().append(appendStateOption);
    }, 'json');
}

function populateYearDropdown(startYear, yearDropdownId) {
    let currentYear = new Date().getFullYear();
    let endYear = currentYear; // Generates options up to the current year

    // Get the dropdown element by ID
    const yearDropdown = document.getElementById(yearDropdownId);

    // Populate the dropdown with academic years
    for (let year = startYear; year <= endYear; year++) {
        let nextYear = year + 1;
        let option = document.createElement("option");
        option.value = `${year}-${nextYear}`;
        option.textContent = `${year} - ${nextYear}`;
        yearDropdown.appendChild(option);
    }
}

function callWhenBack(){

    $('#company_creation')[0].reset();
    //Reset all  images within the form
    $('#imgshow').attr('src', 'img/avatar.png');
    $('#company_creation input').css('border', '1px solid #cecece');
    $('#company_creation select').css('border', '1px solid #cecece');
}

